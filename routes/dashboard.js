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
  const dashboard = {
    dashboard: {
      backups_button: "View Backups"
    }
  };
  localizer.setLocale(req.user.locale);
  localizer.translatePage(dashboard, {
    next: function(values) {
      res.render('dashboard', values);
    }}
  );
});

module.exports = router;
