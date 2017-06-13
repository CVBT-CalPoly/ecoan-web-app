var express = require('express');
var router = express.Router();
var db = require('../models/db');
var helper = require('./tablehelper');
var passport = require('passport');
var localizer = require('./localizer');

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

  localizer.setLocale(req.user.locale);
  if( tableName == "breakeven") {
    const breakeven = {
      breakeven: {
        chart: "BreakEven Chart"
      }
    };
    localizer.translatePage(breakeven, {
      next: function(values) {
        res.render('breakeven', values);
      }}
    );
  }
  else if( tableName == "payback") {
    const payback = {
      payback: {
        chart: "Payback Chart"
      }
    };
    localizer.translatePage(payback, {
      next: function(values) {
        res.render('payback', values);
      }}
    );
  }
  else if( tableName == "productCostBreakdown") {
    const breakdown = {
      breakdown: {
        chart: "Product Cost Breakdown Chart"
      }
    };
    localizer.translatePage(breakdown, {
      next: function(values) {
        res.render('productcostbreakdown', values);
      }}
    );
  }
});

module.exports = router;
