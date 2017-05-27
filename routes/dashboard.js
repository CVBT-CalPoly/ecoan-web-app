var express = require('express');
var passport = require('passport');
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
  res.render('dashboard');
});

module.exports = router;
