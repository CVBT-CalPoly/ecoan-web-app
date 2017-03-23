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
module.exports = router;
