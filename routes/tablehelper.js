var db = require('../models/db'); // database access object for sequelize
var headersDict; // singleton used for table headers
var dbDict; // singleton  used for database objects

function initHeadersDict() {
  if (!headersDict) {
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
    console.log("initialized headersDict");
  }
}

function initDbObjectDict() {
  if (!dbDict) {
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
    console.log("initialized dbDict");
  }
}

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
    initHeadersDict();
    return headersDict[table];
  },
  getDbObject: function(table) {
    initDbObjectDict();
    return dbDict[table];
  }
}
