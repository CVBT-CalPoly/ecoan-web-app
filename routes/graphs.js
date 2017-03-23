var express = require('express');
var router = express.Router();

var db = require('../models/db');
var helper = require('./tablehelper');
//var graphs = require('../graphs/breakeven');
console.log("graphs");
router.get('/:graphs', function(req, res, next) {
  var tableName = req.params.graphs;
  console.log(tableName);
  if( tableName == "breakeven") {
     res.sendFile("../graphs/breakeven.html");
  }
  if( tableName == "payback") {
     res.sendFile("../graphs/payback.html");
  }
  if( tableName == "productCostBreakdown") {
     res.sendFile("../graphs/productCostBreakdown.html");
  }
});

module.exports = router;
