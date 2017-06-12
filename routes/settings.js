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
      sharing.push(results.rows[index].dataValues.share);
    }
    const settings = {
      settings: {
        userlangtitle: "User Language",
        currlang: localizer.getLanguageForLocale(req.user.locale),
        accountsettings: "Account Settings",
        tablessharedwith: "Data shared with:",
        sharetables: "Share your tables with other users",
        username: "Username",
        add: "Add",
        change: "Change",
        defaultselect: "-- " + "Select a new preferred language" + " --",
        english: "English",
        spanish: "Spanish",
        french: "French",
        german: "German",
        thai: "Thai",
        indonesian: "Indonesian",
        burmese: "Burmese",
        vietnamese: "Vietnamese",
        hindi: "Hindi",
        nepalese: "Nepalese",
        arabic: "Aravic",
      }
    };
    const otherValues = { shared: sharing };

    localizer.setLocale(req.user.locale);
    localizer.translatePage(settings, {
      values: otherValues,
      next: function(values) {
        res.render('settings', values);
      }
    });
  });
});

module.exports = router;
