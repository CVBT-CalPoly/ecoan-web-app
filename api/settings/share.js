var express = require('express');
var router = express.Router();
var db = require('../../models/db');
var helper = require('../../routes/tablehelper');

/* GET home page. */
router.post('/add', function(req, res) {
  // console.log(req.body);
  var addition = JSON.parse(Object.keys(req.body)[0]).add;
  console.log(addition);
  // console.log(helper.getDbObject('SharedWith'));
  helper.getDbObject('sharedWith').create({
    host: addition[0],
    share: addition[1]
  }).then(() => {
    res.send(addition[1]);
  }).catch(error => {
    console.log(error);
    res.status(500).send("Input an existing new user.");
  });
});

module.exports = router;
