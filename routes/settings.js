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
  console.log(req.user.username);
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
    console.log(sharing);
    res.render('settings', localizer.getMenuObject({
      shared: sharing,
      accountsettings_text: localizer.getText("Account Settings"),
      tablessharedwith_text: localizer.getText("Tables Shared With"),
      sharetables_text: localizer.getText("Share your tables with other users"),
      username_text: localizer.getText("Username"),
      add_text: localizer.getText("Add")
    }));
  });
});

module.exports = router;
