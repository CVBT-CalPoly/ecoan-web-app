var dict // singleton used for table headers
var db // database access object for sequelize

function initDict() {
  // console.log("calling initDict")
  if (!dict) {
    dict = {}
    db = require('../models/db')
    dict["Bucket"] = extractTableHeaders(db.Buckets.attributes)
    dict["CompType"] = extractTableHeaders(db.CompType.attributes)
    dict["Component History"] = extractTableHeaders(db.ComponentHistory.attributes)
    dict["Components"] = extractTableHeaders(db.Components.attributes)
    dict["Component Usage"] = extractTableHeaders(db.ComponentUsage.attributes)
    dict["EmpSalary"] = extractTableHeaders(db.EmpSalary.attributes)
    dict["FixedAssyUse"] = extractTableHeaders(db.FixedAssyUse.attributes)
    dict["Mix"] = extractTableHeaders(db.Mix.attributes)
    dict["MixRegistry"] = extractTableHeaders(db.MixRegistry.attributes)
    dict["ModelCostData"] = extractTableHeaders(db.ModelCostData.attributes)
    dict["Personnel"] = extractTableHeaders(db.Personnel.attributes)
    dict["ProdGrp"] = extractTableHeaders(db.ProdGrp.attributes)
    dict["ProductsColorCostJg"] = extractTableHeaders(db.ProductColorCostJg.attributes)
    dict["Product History"] = extractTableHeaders(db.ProductHistory.attributes)
    dict["Products"] = extractTableHeaders(db.Products.attributes)
    dict["Status"] = extractTableHeaders(db.Status.attributes)
    dict["UnitType"] = extractTableHeaders(db.UnitType.attributes)
    dict["Units"] = extractTableHeaders(db.Units.attributes)
    console.log("initialized dict")
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
    initDict()
    console.log("table name" + table)
    console.log(dict[table])
    return dict[table]
  }
}
