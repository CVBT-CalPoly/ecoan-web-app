var db // database access object for sequelize
var headersDict // singleton used for table headers
var dbDict

function initHeadersDict() {
  if (!headersDict) {
    headersDict = {}
    db = require('../models/db')
    headersDict["Bucket"] = extractTableHeaders(db.Buckets.attributes)
    headersDict["CompType"] = extractTableHeaders(db.CompType.attributes)
    headersDict["Component History"] = extractTableHeaders(db.ComponentHistory.attributes)
    headersDict["Components"] = extractTableHeaders(db.Components.attributes)
    headersDict["Component Usage"] = extractTableHeaders(db.ComponentUsage.attributes)
    headersDict["EmpSalary"] = extractTableHeaders(db.EmpSalary.attributes)
    headersDict["FixedAssyUse"] = extractTableHeaders(db.FixedAssyUse.attributes)
    headersDict["Mix"] = extractTableHeaders(db.Mix.attributes)
    headersDict["MixRegistry"] = extractTableHeaders(db.MixRegistry.attributes)
    headersDict["ModelCostData"] = extractTableHeaders(db.ModelCostData.attributes)
    headersDict["Personnel"] = extractTableHeaders(db.Personnel.attributes)
    headersDict["ProdGrp"] = extractTableHeaders(db.ProdGrp.attributes)
    headersDict["ProductsColorCostJg"] = extractTableHeaders(db.ProductColorCostJg.attributes)
    headersDict["Product History"] = extractTableHeaders(db.ProductHistory.attributes)
    headersDict["Products"] = extractTableHeaders(db.Products.attributes)
    headersDict["Status"] = extractTableHeaders(db.Status.attributes)
    headersDict["UnitType"] = extractTableHeaders(db.UnitType.attributes)
    headersDict["Units"] = extractTableHeaders(db.Units.attributes)
    console.log("initialized headersDict")
  }
}

function initDbObjectDict() {
  if (!dbDict) {
    dbDict = {}
    db = require('../models/db')
    dbDict["Bucket"] = db.Buckets
    dbDict["CompType"] = db.CompType
    dbDict["Component History"] = db.ComponentHistory
    dbDict["Components"] = db.Components
    dbDict["Component Usage"] = db.ComponentUsage
    dbDict["EmpSalary"] = db.EmpSalary
    dbDict["FixedAssyUse"] = db.FixedAssyUse
    dbDict["Mix"] = db.Mix
    dbDict["MixRegistry"] = db.MixRegistry
    dbDict["ModelCostData"] = db.ModelCostData
    dbDict["Personnel"] = db.Personnel
    dbDict["ProdGrp"] = db.ProdGrp
    dbDict["ProductsColorCostJg"] = db.ProductColorCostJg
    dbDict["Product History"] = db.ProductHistory
    dbDict["Products"] = db.Products
    dbDict["Status"] = db.Status
    dbDict["UnitType"] = db.UnitType
    dbDict["Units"] = db.Units
    console.log("initialized dbDict")
  }
}

function extractTableHeaders(attributes) {
  var array = Object.keys(attributes).map(function (key) { return attributes[key]; })
  var length = array.length
  var headers = []
  for (var ndx = 0; ndx < length; ndx++) {
    var col = array[ndx]
    var colName = col.fieldName
    if (colName != 'id' && colName != 'createdAt' && colName != 'updatedAt') {
      // faster than headers.push(colName) since small array
      headers[headers.length] = colName
    }
  }
  return headers
}

module.exports = {
  getTableHeaders: function(table) {
    initHeadersDict()
    return headersDict[table]
  },
  getDbObject: function(table) {
    initDbObjectDict()
    return dbDict[table]
  }
}
