var express = require('express');
var router = express.Router();
var bcrypt = require('bcrypt');
var db = require('../models/db');

router.get('/', function(req, res, next) {
  res.render('signup');
});

router.post('/', function(req, res) {
  var username = req.body.username;
  var password = req.body.password;
  var password2 = req.body.password2;
  var email = req.body.email;
  var first = req.body.first;
  var last = req.body.last;
  // todo: server side validation

  var salt = bcrypt.genSaltSync(10);
  var hashedPassword = bcrypt.hashSync(password, salt);

  var newUser = {
    username: username,
    firstName: first,
    lastName: last,
    email: email,
    salt: salt,
    password: hashedPassword
  };

  db.User.create(newUser).then(function() {
    res.redirect('/');
  }).catch(function(error) {
    res.render('signup', {error: "Username already taken"})
  });
});

module.exports = router;
