var express = require('express');
var router = express.Router();
var db = require('../../models/db');
var helper = require('../../routes/tablehelper');
var drawCounter = 1;

/* GET home page. */
router.post('/', function(req, res) {
  const tableColumns = helper.getTableHeaders(req.body.table);

  helper.getDbObject(req.body.table).findAndCount({
    attributes: tableColumns,
    limit: parseInt(req.body.length),
    offset: parseInt(req.body.start),
    raw: true,
  }).then(function(results) {
    let response = {
      "draw": drawCounter++,
      "recordsTotal": results.count,
      "recordsFiltered": results.count
    };
    let dataArray = [];
    let rows = results.rows;

    // format data response for DataTables into array of array objects [[], []]
    rows.forEach(function(data) {
      const keys = Object.keys(data);
      let rowData = [];
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
