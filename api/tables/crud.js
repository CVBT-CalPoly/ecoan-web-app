var express = require('express');
var router = express.Router();
var db = require('../../models/db');

/* GET home page. */
router.post('/delete/:table', function(req, res) {
  console.log(req.body)
  console.log(req.params.table);
  res.send("Success");
});

module.exports = router;
