var express = require('express');
var router = express.Router();
var db = require('../../models/db');
var helper = require('../../routes/tablehelper');

router.post('/:locale', function(req, res) {
  const locale = req.params.locale;

  db.User.update({
    locale: locale
  }, {
    where: {
      username: req.user.username
    }
  }).then(() => {
    res.send("Success");
  });
});

module.exports = router;