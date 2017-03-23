var express = require('express');
var router = express.Router();
var db = require('../../models/db');
var helper = require('../../routes/tablehelper');
var drawCounter = 1;

/* GET home page. */
router.post('/', function(req, res) {
  var tableColumns = helper.getTableHeaders(req.body.table);

  helper.getDbObject(req.body.table).findAndCount({
    attributes: tableColumns,
    limit: parseInt(req.body.length),
    offset: parseInt(req.body.start),
    raw: true,
  }).then(function(results) {
    var response = {
      "draw": drawCounter++,
      "recordsTotal": results.count,
      "recordsFiltered": results.count
    };
    var dataArray = [];
    var rows = results.rows;

    // format data response for DataTables into array of array objects [[], []]
    rows.forEach(function(data) {
      var keys = Object.keys(data);
      var rowData = [];
      keys.forEach(function(key) {
        rowData.push(data[key]);
      });
      dataArray.push(rowData);
    });
    response["data"] = dataArray;
    res.send(JSON.stringify(response));
  });

});

module.exports = router;
