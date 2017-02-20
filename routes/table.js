var express = require('express');
var router = express.Router();
var db = require('../models/db');

var tableColumns = [
  "ProdNo",
  "ProdGrpCode",
  "ProdThaiName",
  "ProdEngName",
  "Picture",
  "ThaiModel",
  "EngModel",
  "MixNo",
  "ProdWt",
  "ColorMixNo",
  "FaceWt",
  "Mold",
  "PiecesPerMould",
  "ProductCost",
  "PriceRetail",
  "PriceWholeSale",
  "ProdStockGoal",
  "ThaiCom",
  "EngCom",
  "Status",
  "ChangeType",
  "ChangeDate",
  "ChangeTime"
];

var data = [];
db.ProductHistory.findAll({
  attributes: tableColumns,
  raw: true
}).then(function(results) {
   data = results;
});

router.get('/', function(req, res, next) {
  res.render('table', {
    table_name: 'Product History',
    table_header: tableColumns,
    table_data: data,
  });
});

module.exports = router;
