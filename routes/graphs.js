var express = require('express');
var router = express.Router();
var db = require('../models/db');
var helper = require('./tablehelper');
var passport = require('passport');

function isAuthenticated(req, res, next) {
  console.log("authing");
  if (req.isAuthenticated()) {
    return next();
  } else {
    res.redirect('/login');
  }
}
router.get('/:graphs', isAuthenticated, function(req, res) {
  var tableName = req.params.graphs;
  if( tableName == "breakeven") {
    //  res.sendFile("../graphs/breakeven.html");
    res.render('breakeven');
  }
  else if( tableName == "payback") {
    res.render('payback');
  }
  else if( tableName == "productCostBreakdown") {
    console.log("productCostBreakdown");
    res.render('productcostbreakdown');
  }
});

module.exports = router;
