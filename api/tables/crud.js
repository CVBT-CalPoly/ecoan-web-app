var express = require('express');
var router = express.Router();
var db = require('../../models/db');
var helper = require('../../routes/tablehelper');

/* GET home page. */
router.post('/delete/:table', function(req, res) {
  helper.getDbObject(req.params.table).destroy({
    where: req.body
  }).then(function(instance){
    res.send("Deleted: " + parseInt(instance));
  });
});

router.post('/edit/:table', function(req, res) {
  var updateArray = [];
  for(var key in req.body) {
    updateArray.push(JSON.parse(req.body[key]));
  }

  delete updateArray[0].ChangeDate;
  delete updateArray[0].ChangeTime;
  delete updateArray[0].updatedAt;

  helper.getDbObject(req.params.table).update(
    updateArray[1],
    {
      where: updateArray[0]
    }
  );
  
  res.send("Success");
});

module.exports = router;
