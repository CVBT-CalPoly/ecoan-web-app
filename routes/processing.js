var express = require('express');
var router = express.Router();
var db = require('../models/db');
var helper = require('../routes/tablehelper');

console.log("here outside")
/* GET home page. */
router.post('/', function(req, res) {
  console.log("here inside")
  console.log(req.body) // get params
  var start = parseInt(req.body.start)
  var length = parseInt(req.body.length)
  //console.log(req.params.table);
  console.log("offset: " + parseInt(start));
  console.log("limit: " + parseInt(length));
  var tableColumns = helper.getTableHeaders("Product History");

  db.ProductHistory.findAndCount({
    attributes: tableColumns,
    limit: length,
    offset: start,
    raw: true,
    order: 'ProdNo'
  }).then(function(results) {
    var newData = {"recordsTotal": 1393};
    var arr = [];
    var rows = results.rows;

    rows.forEach(function(data) {
      var keys = Object.keys(data);
      var rowData = [];
      keys.forEach(function(key) {
        rowData.push(data[key]);
      });
      arr.push(rowData);
    });
    newData["data"] = arr;
    res.send(JSON.stringify(newData));
  });

});

module.exports = router;
