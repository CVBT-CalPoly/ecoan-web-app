var express = require('express');
var router = express.Router();
var db = require('../models/db');
var helper = require('./tablehelper');

router.get('/:table', function(req, res, next) {
  var tableName = req.params.table;
  if(tableName === "prodhistory") {
    var tableColumns = helper.getTableHeaders("Product History");

    db.ProductHistory.findAndCount({
      attributes: tableColumns,
      raw: true,
      limit: 1,
      order: 'ProdNo'
    }).then(function(results) {  
      res.render('table', {
        table_name: 'Product History',
        table_header: tableColumns,
        table_data: results.rows
      });
    });

  } else if(tableName === "comphistory") {
    var cHistoryColumns = helper.getTableHeaders("Component History");

    db.ComponentHistory.findAndCount({
      attributes: cHistoryColumns,
      raw: true,
      limit: 1
    }).then(function(results) {
      res.render('table', {
        table_name: 'Component History',
        table_header: cHistoryColumns,
        table_data: results.rows,
      });
    });
  } else {
    req.stuts(404).send();
    res.render('error');
  }
});



module.exports = router;
