var express = require('express');
var router = express.Router();
var graphs = require('../graphs');

/* GET users listing. */
console.log("graphs");
router.get('/graphs', function(req, res, next) {
  console.log("here");
  res.send('respond with a resource');
});

module.exports = router;