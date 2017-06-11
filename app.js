var express = require('express');
var path = require('path');
var favicon = require('serve-favicon');
var logger = require('morgan');
var cookieParser = require('cookie-parser');
var bodyParser = require('body-parser');

var login = require('./routes/login');
var signup = require('./routes/signup');
var dash = require('./routes/dashboard');
var settings = require('./routes/settings');
var table = require('./routes/table');
var signup = require('./routes/signup');
var graphs = require('./routes/graphs');
var logout = require('./routes/logout');

var table_api = require('./api/tables/crud');
var graph_api = require('./api/graph/graph');
var settings_api = require('./api/settings/share');
var table_processing = require('./api/tables/processing');
var table_filtering = require('./api/tables/filtering');

var session = require('express-session');
var setupPassport = require('./app/setupPassport');

// Create the application
var app = express();

app.use(cookieParser());
app.use(session({ secret: '4564f6s4fdsfdfd', resave: false, saveUninitialized: false}));
setupPassport(app);

// view engine setup
app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'pug');

app.use(favicon(path.join(__dirname, 'public', 'favicon.ico')));
app.use(logger('dev'));
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: false }));
app.use(cookieParser());
app.use(express.static(path.join(__dirname, 'public')));

// Listen for URLs
app.use('/', login);
app.use('/login', login);
app.use('/logout', logout);
app.use('/signup', signup);
app.use('/table', table);
app.use('/dashboard', dash);
app.use('/settings', settings);
app.use('/graphs', graphs);
// APIs
app.use('/api/tables/crud', table_api);
app.use('/api/graph/graph', graph_api);
app.use('/api/tables/processing', table_processing);
app.use('/api/tables/filtering', table_filtering);
app.use('/api/settings/share', settings_api);
// Returns user data
app.get('/api/user_data', function(req, res) {
  if (req.user === undefined) {
    res.redirect('/');
  } else {
    res.json({username: req.user});
  }
});

app.disable('etag');

// catch 404 and forward to error handler
app.use(function(req, res, next) {
  var err = new Error('Not Found');
  err.status = 404;
  next(err);
});

// error handler
app.use(function(err, req, res, next) {
  // set locals, only providing error in development
  res.locals.message = err.message;
  res.locals.error = req.app.get('env') === 'development' ? err : {};

  // render the error page
  res.status(err.status || 500);
  res.render('error');
});

module.exports = app;
