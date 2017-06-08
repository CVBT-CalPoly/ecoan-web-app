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
router.get('/', isAuthenticated, function(req, res) {
  $.ajax({
    "url": "http://localhost:3000/api/user_data",
    "type": "GET",
    success: function(result) {
      // only admins can see backup tables
      if (result.username.IsAdmin) {
        const tableColumns = helper.getTableHeaders("backup");
        console.log(tableColumns);
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

          sharing.push(req.user.username);


          if (tableColumns) {
            helper.getDbObject("backup").findAndCount({
              attributes: tableColumns,
              raw: true,
              limit: 10,
              where: {
                Owner: {
                  $or: {
                    $in: sharing,
                    $eq: null
                  }

                }
              }
            }).then(function(results) {
              res.render('backups', {
                table_name: "Backups",
                table_abrv: "backup",
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
      }
      else {
        req.status(404).send();
        res.render('error');
      }
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
