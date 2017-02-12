"use strict";

var fs        = require("fs");
var path      = require("path");
var Sequelize = require("sequelize");

// Database information
// Gets the database information from environment variables
var dbHost = process.env.DB_HOST;
var dbName = process.env.DB_NAME;
var dbPort = process.env.DB_PORT;
var dbUser = process.env.DB_USER;
var dbPass = process.env.DB_PASS;

var dbLoginCred = 'mysql://' + dbUser + ':' + dbPass + '@' + dbHost + ':' + dbPort + '/' + dbName;
console.log("Your database login credential is: " + dbLoginCred )
var sequelize = new Sequelize(dbLoginCred);

sequelize
  .authenticate()
  .then(function(err) {
    console.log('Connection has been established successfully.');
  })
  .catch(function (err) {
    console.log('Unable to connect to the database:', err);
  });

// var env       = process.env.NODE_ENV || "development";
// var config    = require(path.join(__dirname, '..', 'config', 'config.json'))[env];
// var sequelize = new Sequelize(config.database, config.username, config.password, config);
var db        = {};

fs
  .readdirSync(__dirname)
  .filter(function(file) {
    return (file.indexOf(".") !== 0) && (file !== "db.js");
  })
  .forEach(function(file) {
    var model = sequelize.import(path.join(__dirname, file));
    db[model.name] = model;
  });

Object.keys(db).forEach(function(modelName) {
  if ("associate" in db[modelName]) {
    db[modelName].associate(db);
  }
});

db.sequelize = sequelize;
db.Sequelize = Sequelize;

module.exports = db;
