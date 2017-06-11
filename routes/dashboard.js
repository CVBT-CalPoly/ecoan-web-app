var express = require('express');
var passport = require('passport');
var localizer = require('./localizer');
var parser = require('accept-language-parser');
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
  localizer.setLocale(req.user.locale);
  res.render('dashboard', localizer.getMenuObject({
    backups_button: localizer.getText("View Backups")
  }));
});

module.exports = router;
