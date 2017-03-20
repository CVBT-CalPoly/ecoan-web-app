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

  var tableColumns = helper.getTableHeaders("Product History");

  db.ProductHistory.findAndCount({
    attributes: tableColumns,
    limit: length,
    offset: start,
    raw: true,
    order: 'ProdNo'
  }).then(function(results) {
    console.log('sending success')
    //res.send("Success");
    res.send({"data":results.rows});
  });

  //res.send("Success");
});

module.exports = router;