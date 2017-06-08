var express = require('express');
var router = express.Router();
var db = require('../../models/db');
var helper = require('../../routes/tablehelper');

/* GET home page. */
router.post('/delete/:table', function(req, res) {
  var dbObject = helper.getDbObject(req.params.table);
  var parsed = JSON.parse(Object.keys(req.body)[0]);

  delete parsed.ChangeDate;
  delete parsed.ChangeTime;
  delete parsed.ChangeType;
  delete parsed.updatedAt;
  delete parsed.Picture;

  // console.log(parsed);
  if(Object.keys(parsed).length === 0 && parsed.constructor === Object) {
    res.send("Unable to delete");
  } else {
    dbObject.destroy({
      where: parsed
    }).then(function(instance) {
      res.send("Deleted: " + parseInt(instance));
    });
  }
});

router.post('/edit/:table', function(req, res) {
  var updateArray = [];
  for(var key in req.body) {
    updateArray.push(JSON.parse(req.body[key]));
  }

  delete updateArray[0].ChangeDate;
  delete updateArray[0].ChangeTime;
  delete updateArray[0].updatedAt;
  delete updateArray[0].Picture;

  console.log(updateArray[0]);
  // If there are changes
  if(Object.keys(updateArray[1]).length !== 0) {
    helper.getDbObject(req.params.table).update(
      updateArray[1],
      {
        where: updateArray[0]
      }
    );
    res.send("Success");
  } else {
    res.send("No changes");
  }

  router.post('/add/:table', function(req, res) {

    res.send("Success");
});

module.exports = router;
