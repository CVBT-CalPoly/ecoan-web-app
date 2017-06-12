var express = require('express');
var router = express.Router();
var db = require('../../models/db');
var helper = require('../../routes/tablehelper');

/* GET home page. */
router.post('/', function(req, res) {
  res.send("Success");
});

module.exports = router;
