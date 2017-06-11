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
  localizer.setLocale(req.user.locale, function(menu) {
    console.log("here2");
    const values = {backups_button: localizer.getText("View Backups")};
    res.render('dashboard', Object.assign(menu, values));
  });
});

module.exports = router;
