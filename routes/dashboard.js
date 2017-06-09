var express = require('express');
var passport = require('passport');
var localizer = require('./localizer');
var router = express.Router();

function isAuthenticated(req, res, next) {
  console.log("authing");
  if (req.isAuthenticated()) {
    return next();
  } else {
    res.redirect('/login');
  }
}

router.get('/', isAuthenticated, function(req, res) {
  console.log("Accept-Language: " + req.get("Accept-Language"));
  res.render('dashboard', {
    backups_button: "View Backups"
  });
});

module.exports = router;
