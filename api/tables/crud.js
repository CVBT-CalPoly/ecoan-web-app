var express = require('express');
var router = express.Router();
var db = require('../../models/db');
var helper = require('../../routes/tablehelper');

/* GET home page. */
router.post('/delete/:table', function(req, res) {
  helper.getDbObject(req.params.table).destroy({
    where: req.body
  }).then(function(instance){
    // console.log();
    res.send("Deleted: " + parseInt(instance));
  });
});

router.post('/edit/:table', function(req, res) {
  console.log(req.body)
  console.log(req.params.table);
  res.send("Success");
});

module.exports = router;
