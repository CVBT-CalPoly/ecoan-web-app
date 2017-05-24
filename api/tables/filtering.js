var express = require('express');
var router = express.Router();
var db = require('../../models/db');
var helper = require('../../routes/tablehelper');
var fs = require('fs');
var drawCounter = 1;
const filterSymbols = {
  "Contains": {"operator": "$contains", "not": false, "array": true},
  "Equals": {"operator": "$eq", "not": false},
  "Starts with": {"operator": "$like", "not": false, "suffix": "%"}, // where COLUMN like "c%";
  "More than": {"operator": "$gt", "not": false},
  "Less than": {"operator": "$lt", "not": false},
  "Between": {"operator": "$between", "not": false},
  "Empty": {"operator": "$eq", "not": false, "value": null},
  "Doesn't contain": {"operator": "$contains", "not": true}, 
  "Doesn't equal": {"operator": "$eq", "not": true},
  "Doesn't start with": {"operator": "$notLike", "not": false, "suffix": "%"},
  "Is not more than": {"operator": "$gt", "not": true},
  "Is not between": {"operator": "$between", "not": true},
  "Is not empty": {"operator": "$eq", "not": true, "value": null},
};

router.post('/:table', function(req, res) {
  const dbObject = helper.getDbObject(req.params.table);
  const tableColumns = helper.getTableHeaders(req.params.table);
  // var parsed = JSON.parse(Object.keys(req.body)[0]);
  const filter = getFilterOptions(req.body, tableColumns);
  console.log(req.body);

  dbObject.findAndCount({
    attributes: tableColumns,
    limit: 50,
    offset: 0,
    raw: true,
    // where: {
    //   Rel_to_Base: { $contains: ["3"] } 
    // }
    where: filter
    //   Rel_to_Base: {
    //     $eq: null
    //   }
    // }
  }).then(function(results) {
    let response = {
      "draw": drawCounter++,
      "recordsTotal": results.count,
      "recordsFiltered": results.count
    };
    let dataArray = [];
    let rows = results.rows;
    var rowNum = 0;

    // format data response for DataTables into array of array objects [[], []]
    rows.forEach(function(data) {
      const keys = Object.keys(data);
      let rowData = [];
      var rowObject = {};
      var ndx = 0;

      keys.forEach(function(key) {
        const value = data[key];

        // check if image blob stored in database (which is retrieved as a buffer)
        if (Buffer.isBuffer(value)) {
          var fileName = "image" + rowNum++ + ".jpeg"; // increment counter so each row refers to a different image

          fs.writeFile('public/images/'+fileName, value, 'utf8', function(err) {
            if (err) {
              console.log(err);
            }
          });
          var seconds = new Date().getTime(); // appending seconds will advise browser not to use cached image
          rowData.push("<img src=\"../../images/"+fileName+"?"+ seconds +"\" />"); // cell will display image
        }
        else {
          rowData.push(value);
          // rowObject[tableColumns[ndx++]] = value;
        }
      });
      dataArray.push(rowData);
      // dataArray.push(rowObject);
    });
    
    response["data"] = dataArray;
    res.send(JSON.stringify(response));
  });

  // res.send("Success");
});

// { 'inputs[0][rowName]': 'ParameterNo',
//   'inputs[0][input]': '',
//   'inputs[0][select]': 'Contains',
//   'inputs[1][rowName]': 'EngParameter',
//   'inputs[1][input]': '',
//   'inputs[1][select]': 'Contains',
//   'inputs[2][rowName]': 'ThaiParameter',
//   'inputs[2][input]': '',
//   'inputs[2][select]': 'Contains',
//   'inputs[3][rowName]': 'Value',
//   'inputs[3][input]': '',
//   'inputs[3][select]': 'Contains' }

// {
//   MixNo: {
//     $gte: 45
//   }
// }
function getFilterOptions(inputs, columns) {
  console.log("here");
  var filter = {};

  for (var ndx = 0; ndx < columns.length; ndx++) {
    var column = {};
    const rowName = inputs["inputs["+ndx+"][rowName]"];
    const value = inputs["inputs["+ndx+"][input]"];
    const filterOption = filterSymbols[inputs["inputs["+ndx+"][select]"]];

    console.log("ndx: " + ndx);
    console.log("rowName: " + rowName);
    console.log("value: " + value);
    console.log("option: " + inputs["inputs["+ndx+"][select]"]);

    // check if there is input (excludes empty and blank strings)
    if (/\S/.test(value)) {
      console.log("typeof(filterOption[value]): " + filterOption["value"]);
      console.log("typeof(filterOption[suffix]): " + filterOption["suffix"]);

      // check for value modification
      if (typeof(filterOption["value"]) !== "undefined") {
        column[filterOption["operator"]] = filterOption["value"];
      }
      else if (typeof(filterOption["suffix"]) !== "undefined") {
        column[filterOption["operator"]] = value + filterOption["suffix"];
      }
      else {
        // check if value is a number
        if (!isNaN(value)) {
          column[filterOption["operator"]] = [Number(value)];
        }
        else {
          column[filterOption["operator"]] = value;
        }
      }

      // check for not property
      if (filterOption["not"]) {
        column["$not"] = true;
      }

      filter[rowName] = column;
    }
  }

  console.log("filter options:\n" + JSON.stringify(filter));
  return filter;
}

module.exports = router;