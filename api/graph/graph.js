var express = require('express');
var router = express.Router();
var db = require('../../models/db');


router.get('/prodCosts', function(req, res) {
	console.log(req.url);
	var id = req.url.substring(req.url.search(":")+4, req.url.search("}")-3);
  db.sequelize.query("select EngName, CostSuperType, CostYear from ProdCosts where ProdNo = " + id + " and CostYear is not NULL")
  .spread(function(results, metadata) {
    res.send(JSON.stringify(results));
  });
});

router.get('/allProducts', function(req, res) {
  db.sequelize.query("select ProdNo, ProdEngName, EngModel from Products where ProdEngName is not null")
  .spread(function(results, metadata) {
    res.send(JSON.stringify(results));
  });
});

router.get('/sumPieceCost', function(req, res) {
	var id = req.url.substring(req.url.search(":")+4, req.url.search("}")-3);
  db.sequelize.query("select sumpiececost from TotalProdCost where ProdNo = " + id)
  .spread(function(results, metadata) {
    res.send(JSON.stringify(results));
  });
});

router.get('/retailPrice', function(req, res) {
	var id = req.url.substring(req.url.search(":")+4, req.url.search("}")-3);
  db.sequelize.query("select PriceRetail from Products where ProdNo = " + id)
  .spread(function(results, metadata) {
    res.send(JSON.stringify(results));
  });
});

router.get('/investCosts', function(req, res) {
  var id = req.url.substring(req.url.search(":")+4, req.url.search("}")-3);
  db.sequelize.query("select EngName, CostSuperType, CostYear from ProdCosts where CostType like \"Investment%\" and ProdNo = " + id)
  .spread(function(results, metadata) {
    res.send(JSON.stringify(results));
  });
});

router.get('/investmentPayback', function(req, res) {
  var id = req.url.substring(req.url.search(":")+4, req.url.search("}")-3);
  db.sequelize.query("select Cost from ProdCosts where EngName like \"Repayment%\" and ProdNo = " + id)
  .spread(function(results, metadata) {
    res.send(JSON.stringify(results));
  });
});

router.get('/prodName', function(req, res) {
  var id = req.url.substring(req.url.search(":")+4, req.url.search("}")-3);
  db.sequelize.query("select ProdEngName from Products where ProdNo = " + id)
  .spread(function(results, metadata) {
    res.send(JSON.stringify(results));
  });
});

router.get('/pieceCosts', function(req, res) {
  console.log(req.url);
  var id = req.url.substring(req.url.search(":")+4, req.url.search("}")-3);
  db.sequelize.query("select EngName, CostSuperType, PieceCost from ProdCosts where ProdNo = " + id + " and CostYear is not NULL")
  .spread(function(results, metadata) {
    res.send(JSON.stringify(results));
  });
});

router.get('/interestRate', function(req, res) {
  console.log(req.url);
  var id = req.url.substring(req.url.search(":")+4, req.url.search("}")-3);
  db.sequelize.query("select Cost from ProdCosts where EngName like \"Interest%\" and ProdNo = " + id)
  .spread(function(results, metadata) {
    res.send(JSON.stringify(results));
  });
});


module.exports = router;
