var express = require('express');
var router = express.Router();
var bcrypt = require('bcrypt');
var db = require('../models/db');
var request = require('request');

// TODO: send back filled in data so users do not need to restart on error
// TODO: more server side verification
// TODO: add signup successful

router.get('/', function(req, res, next) {
  res.render('signup');
});

router.post('/', function(req, res) {
  // Received signup parameters from the form
  var username = req.body.username;
  var password = req.body.password;
  var password2 = req.body.password2;
  var email = req.body.email;
  var first = req.body.first;
  var last = req.body.last;
  // Contains the reCAPTCHA response in g-recaptcha-response sent by reCAPTCHA API
  var captcha =req.body['g-recaptcha-response'];
  // Basic server-side verification
  if(password !== password2) {
    res.render('signup', {error: "Paswords do not match"})
  }
  // reCAPTCHA API registered under alexzye1@gmail.com
  // Verifies that reCAPTCHA was properly submitted to Google's verification service
  request.post(
    {
      url: 'https://www.google.com/recaptcha/api/siteverify',
      form: { secret: "6LdeyyIUAAAAAG3pZSfGBvAPkcI3PllEkMwJ-Uyu", response: captcha }
    },
    function(error, response, body){
      if (!error && response.statusCode == 200) {
        // reCAPTCHA was successfully verified
        console.log(body);
        // create new password credentials
        var salt = bcrypt.genSaltSync(10);
        var hashedPassword = bcrypt.hashSync(password, salt);
        // create new user object
        var newUser = {
          username: username,
          firstName: first,
          lastName: last,
          email: email,
          salt: salt,
          password: hashedPassword
        };
        // create new user in database
        db.User.create(newUser).then(function() {
          res.redirect('/');
        }).catch(function(error) {
          console.log(error);
          res.render('signup', {error: "Username already taken"});
        });
      } else {
        // reCAPTCHA was unsuccessfully verified
        res.render('signup', {error: "Please verify with reCAPTCHA"});
      }
    }
  );
});

module.exports = router;
