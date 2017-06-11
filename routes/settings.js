var express = require('express');
var passport = require('passport');
var db = require('../models/db');
var helper = require('../routes/tablehelper');
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
  var sharing = [];
  helper.getDbObject("sharedWith").findAndCount({
    where: {
      host: req.user.username
    }
  }).then(function(results) {
    for (var index = 0; index < results.rows.length; ++index) {
      console.log(results.rows[index].dataValues.share);
      sharing.push(results.rows[index].dataValues.share);
    }
    localizer.setLocale(req.user.locale, function(menu) {
      const translatedValues = {
        userlangtitle: "User Language",
        currlang: localizer.getLanguageForLocale(req.user.locale),
        accountsettings: "Account Settings",
        tablessharedwith: "Tables Shared With",
        sharetables: "Share your tables with other users",
        username: "Username",
        add: "Add",
        change: "Change",
        defaultselect: "-- " + "Select a new preferred language" + " --",
        english: "English",
        spanish: "Spanish"
      };
      localizer.translateObject(translatedValues, function(translations) {
        const values = { shared: sharing };
        const settings = {
          settings: Object.assign(translations, values)
        };
        res.render('settings', Object.assign(menu, settings));
      });
    });
  });
});

module.exports = router;
