var express = require('express');
var router = express.Router();
var db = require('../models/db');
var helper = require('./tablehelper');

router.get('/:table', function(req, res, next) {
  if (getTableName(req.params.table)) {
    const tableName = getTableName(req.params.table);
    const tableColumns = helper.getTableHeaders(tableName);

    helper.getDbObject(tableName).findAndCount({
      attributes: tableColumns,
      raw: true,
      limit: 10,
    }).then(function(results) {
      res.render('table', {
        table_name: tableName,
        table_header: tableColumns,
        table_data: results.rows
      });
    });
  }
  else {
    req.stuts(404).send();
    res.render('error');
  }
});

function getTableName(table) {
  let tableName;
  switch (table) {
    case 'prodhistory':
      tableName = 'Product History'
      break;
    case 'comphistory':
      tableName = 'Component History'
      break;
    default:
      tableName = ''
  }
  return tableName;
}


module.exports = router;
