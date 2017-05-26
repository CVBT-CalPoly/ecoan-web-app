var express = require('express');
var router = express.Router();
var db = require('../../models/db');
var helper = require('../../routes/tablehelper');
var fs = require('fs');
var drawCounter = 1;
const filterSymbols = {
  "Contains": {"operator": "$like", "not": false, "prefix": "%", "suffix": "%"},
  "Equals": {"operator": "$eq", "not": false},
  "Starts with": {"operator": "$like", "not": false, "suffix": "%"}, // where COLUMN like "c%";
  "More than": {"operator": "$gt", "not": false},
  "Less than": {"operator": "$lt", "not": false},
  "Between": {"operator": "$between", "not": false},
  "Empty": {"operator": "$eq", "not": false, "value": null},
  "Doesn't contain": {"operator": "$notLike", "not": false, "prefix": "%", "suffix": "%"}, 
  "Doesn't equal": {"operator": "$eq", "not": true},
  "Doesn't start with": {"operator": "$notLike", "not": false, "suffix": "%"},
  "Is not more than": {"operator": "$gt", "not": true},
  "Is not between": {"operator": "$between", "not": true},
  "Is not empty": {"operator": "$eq", "not": true, "value": null},
};

router.post('/:table', function(req, res) {
  const dbObject = helper.getDbObject(req.params.table);
  const tableColumns = helper.getTableHeaders(req.params.table);
  var filter = getFilterOptions(req.body, tableColumns);

  if (typeof(req.body['search[value]']) !== "undefined") {
    console.log("search value found");
    filter["$or"] = helper.getSearchObject(req.params.table, req.body['search[value]'], req.body);
  }
  else {
    filter["$or"] = [];
  }
  console.log(req.body);
  console.log("$or:\n" + filter["$or"]);

  dbObject.findAndCount({
    attributes: tableColumns,
    limit: parseInt(req.body.length),
    offset: parseInt(req.body.start),
    // order: [
    //   [helper.getColumnNameForTable(req.body.table, parseInt(req.body["order[0][column]"])), req.body["order[0][dir]"]] // e.g. ["ProdNo", "desc"]
    // ],
    raw: true,
    // where: {
    //   Rel_to_Base: { $between: [0, 3.9] } 
    // }
    where: filter
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

// Builds the filter object according to this http://docs.sequelizejs.com/manual/tutorial/querying.html
// example:
// {
//   MixNo: {
//     $gte: 45
//   }
// }
function getFilterOptions(inputs, columns) {
  var filter = {};

  for (var ndx = 0; ndx < columns.length; ndx++) {
    var column = {};
    const rowName = inputs["inputs["+ndx+"][rowName]"];
    const value = inputs["inputs["+ndx+"][input]"];
    const value2 = inputs["inputs["+ndx+"][input2]"];
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
      else if (typeof(filterOption["suffix"]) !== "undefined" && typeof(filterOption["prefix"]) !== "undefined") {
        column[filterOption["operator"]] = filterOption["prefix"] + value + filterOption["suffix"];
      }
      else if (typeof(filterOption["prefix"]) !== "undefined") {
        column[filterOption["operator"]] = filterOption["prefix"] + value;
      }
      else if (typeof(filterOption["suffix"]) !== "undefined") {
        column[filterOption["operator"]] = value + filterOption["suffix"];
      }
      // check if value is a number
      else if (!isNaN(value)) {
        var values = [Number(value)];

        // between values can only be numbers
        if (value2 != "" && !isNaN(value2)) {
          values.push(Number(value2));
        }
        column[filterOption["operator"]] = values;
      }
      else {
        column[filterOption["operator"]] = value;
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