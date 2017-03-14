var express = require('express');
var router = express.Router();
var db = require('../models/db');
var helper = require('./tablehelper');

router.get('/:table', function(req, res, next) {
  var tableName = req.params.table;
  if(tableName === "prodhistory") {
    var tableColumns = helper.getTableHeaders("Product History");
    
    db.ProductHistory.findAll({
      attributes: tableColumns,
      raw: true
    }).then(function(results) {
      res.render('table', {
        table_name: 'Product History',
        table_header: tableColumns,
        table_data: results
      });
    });

  } else if(tableName === "comphistory") {
    var cHistoryColumns = helper.getTableHeaders("Component History");

    db.ComponentHistory.findAll({
      attributes: cHistoryColumns,
      raw: true
    }).then(function(results) {
      res.render('table', {
        table_name: 'Component History',
        table_header: cHistoryColumns,
        table_data: results
      });
    });
  } else {
    req.stuts(404).send();
    res.render('error');
  }
});



module.exports = router;
