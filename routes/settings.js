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
    localizer.setLocale(req.user.locale);
    res.render('settings', localizer.getMenuObject({
      shared: sharing,
      userlangtitle_text: localizer.getText("User Language"),
      currlang_text: localizer.getText(localizer.getLanguageForLocale(req.user.locale)),
      accountsettings_text: localizer.getText("Account Settings"),
      tablessharedwith_text: localizer.getText("Tables Shared With"),
      sharetables_text: localizer.getText("Share your tables with other users"),
      username_text: localizer.getText("Username"),
      add_text: localizer.getText("Add"),
      change_text: localizer.getText("Change"),
      defaultselect_text: "-- " + localizer.getText("Select a new preferred language") + " --",
      english_text: localizer.getText("English"),
      spanish_text: localizer.getText("Spanish")
    }));
  });
});

module.exports = router;
