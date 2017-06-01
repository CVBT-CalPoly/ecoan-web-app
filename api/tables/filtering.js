const express = require('express');
const router = express.Router();
const helper = require('../../routes/tablehelper');
const processingHelper = require("../../api/tables/processinghelper");
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

// POST
router.post('/:table', function(req, res) {
  const tableColumns = helper.getTableHeaders(req.params.table);
  var filter = getFilterOptions(req.body, tableColumns);

  processingHelper.processFilterTable(req, res, req.params.table, filter);
});

// Builds the filter object according to this http://docs.sequelizejs.com/manual/tutorial/querying.html
// Example:
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

  return filter;
}

module.exports = router;