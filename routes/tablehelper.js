var db = require('../models/db'); // database access object for sequelize
var headersDict; // singleton used for table headers
var dbDict; // singleton  used for database objects

// dictionary of [String (table name) : [String] (columns of that table)]
(function initHeadersDict() {
  headersDict = {};
  headersDict["buckets"] = extractTableHeaders(db.Buckets.attributes);
  headersDict["compType"] = extractTableHeaders(db.CompType.attributes);
  headersDict["comphistory"] = extractTableHeaders(db.ComponentHistory.attributes);
  headersDict["components"] = extractTableHeaders(db.Components.attributes);
  headersDict["componentUsage"] = extractTableHeaders(db.ComponentUsage.attributes);
  headersDict["empSalary"] = extractTableHeaders(db.EmpSalary.attributes);
  headersDict["fixedAssyUse"] = extractTableHeaders(db.FixedAssyUse.attributes);
  headersDict["mix"] = extractTableHeaders(db.Mix.attributes);
  headersDict["mixRegistry"] = extractTableHeaders(db.MixRegistry.attributes);
  headersDict["modelCostData"] = extractTableHeaders(db.ModelCostData.attributes);
  headersDict["personnel"] = extractTableHeaders(db.Personnel.attributes);
  headersDict["prodGrp"] = extractTableHeaders(db.ProdGrp.attributes);
  headersDict["productsColorCostJg"] = extractTableHeaders(db.ProductColorCostJg.attributes);
  headersDict["prodhistory"] = extractTableHeaders(db.ProductHistory.attributes);
  headersDict["products"] = extractTableHeaders(db.Products.attributes);
  headersDict["status"] = extractTableHeaders(db.Status.attributes);
  headersDict["unitType"] = extractTableHeaders(db.UnitType.attributes);
  headersDict["units"] = extractTableHeaders(db.Units.attributes);
  headersDict["sharedWith"] = extractTableHeaders(db.SharedWith.attributes);
  console.log("initialized headersDict");
})(); // self-invoking function

// dictionary of [String (table name) : Object (sequelize table object)]
(function initDbObjectDict() {
  dbDict = {};
  dbDict["buckets"] = db.Buckets;
  dbDict["compType"] = db.CompType;
  dbDict["comphistory"] = db.ComponentHistory;
  dbDict["components"] = db.Components;
  dbDict["componentUsage"] = db.ComponentUsage;
  dbDict["empSalary"] = db.EmpSalary;
  dbDict["fixedAssyUse"] = db.FixedAssyUse;
  dbDict["mix"] = db.Mix;
  dbDict["mixRegistry"] = db.MixRegistry;
  dbDict["modelCostData"] = db.ModelCostData;
  dbDict["personnel"] = db.Personnel;
  dbDict["prodGrp"] = db.ProdGrp;
  dbDict["productsColorCostJg"] = db.ProductColorCostJg;
  dbDict["prodhistory"] = db.ProductHistory;
  dbDict["products"] = db.Products;
  dbDict["status"] = db.Status;
  dbDict["unitType"] = db.UnitType;
  dbDict["units"] = db.Units;
  dbDict["sharedWith"] = db.SharedWith;
  console.log("initialized dbDict");
})(); // self-invoking function

function extractTableHeaders(attributes) {
  let array = Object.keys(attributes).map(function (key) { return attributes[key]; });
  const length = array.length;
  let headers = [];
  for (var ndx = 0; ndx < length; ndx++) {
    const colName = array[ndx].fieldName;
    if (colName != 'id' && colName != 'createdAt' && colName != 'updatedAt') {
      // faster than headers.push(colName) since small array
      headers[headers.length] = colName
    }
  }
  return headers;
}

module.exports = {
  getTableHeaders: function(table) {
    return headersDict[table];
  },
  getDbObject: function(table) {
    return dbDict[table];
  },
  getColumnNameForTable: function(table, colNdx) {
    return headersDict[table][colNdx];
  },
  getSearchObject: function(table, search, requestBody) {
    var searchedColumns = [];
    var defaultSearchedColumns = [];

    for (var ndx = 0; ndx < headersDict[table].length; ndx++) {
      const element = headersDict[table][ndx];
      var column = {};
      var defaultColumn = {};

      column[element] = {};
      defaultColumn[element] = {};

      // search all columns takes priority over individually searched columns
      if (search == "") {
        const singleColumnSearchValue = requestBody["columns["+ndx+"][search][value]"];

        if (singleColumnSearchValue != "") {
          column[element]["like"] = "%" + singleColumnSearchValue + "%";
          searchedColumns.push(column);
        }
      }
      else {
        column[element]["like"] = "%" + search + "%"; // deprecation warning because of the '%' but its no problem since it will be part of the sql query
        searchedColumns.push(column);
      }
      defaultColumn[element]["like"] = "%" + search + "%";
      defaultSearchedColumns.push(defaultColumn);
    }

    // return all rows if no search options found
    if (searchedColumns.length == 0) {
      return defaultSearchedColumns;
    }
    return searchedColumns;
  }
}
