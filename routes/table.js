var express = require('express');
var router = express.Router();
var db = require('../models/db');
var helper = require('./tablehelper');
const tableNames = initTableNames();
var passport = require('passport');

function isAuthenticated(req, res, next) {
  console.log("authing");
  if (req.isAuthenticated()) {
    return next();
  } else {
    res.redirect('/login');
  }
}

router.get('/:table', isAuthenticated, function(req, res) {
  const tableColumns = helper.getTableHeaders(req.params.table);
  console.log(tableColumns);
  var sharing = [];
  helper.getDbObject("sharedWith").findAll({
    where: {
      share: req.user.username
    }
  }).then(function(results) {

    var users = results.map(function(item) {
      return item.host;
    });
    console.log("users");

    users.push(req.user.username);

    console.log(users);

    if (tableColumns) {
      console.log(tableNames[req.params.table])
      helper.getDbObject(req.params.table).findAndCount({
        attributes: tableColumns,
        raw: true,
        limit: 10,
        where: {
          Owner: {
            $or: {
              $in: users,
              $eq: null
            }

          }
        }
      }).then(function(results) {
        res.render('table', {
          table_name: tableNames[req.params.table],
          table_abrv: req.params.table,
          table_header: tableColumns,
          table_data: results.rows
        });
      });
    }
    else {
      req.status(404).send();
      res.render('error');
    }
  });
});

function initTableNames() {
  let names = {};
  names["buckets"] = "Buckets";
  names["compType"] = "Comp Type";
  names["comphistory"] = "Component History";
  names["components"] = "Components"
  names["componentUsage"] = "Component Usage";
  names["empSalary"] = "Emp Salary";
  names["fixedAssyUse"] = "Fixed Assy Use";
  names["mix"] = "Mix";
  names["mixRegistry"] = "Mix Registry";
  names["modelCostData"] = "Model Cost Data";
  names["personnel"] = "Personnel";
  names["prodGrp"] = "Prod Grp";
  names["productsColorCostJg"] = "Products Color Cost Jg";
  names["prodhistory"] = "Product History";
  names["products"] = "Products";
  names["status"] = "Status";
  names["unitType"] = "Unit Type";
  names["units"] = "Units";
  return names;
}

module.exports = router;
