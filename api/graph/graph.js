var express = require('express');
var router = express.Router();
var db = require('../../models/db');


router.get('/breakeven', function(req, res) {
  db.sequelize.query("select EngName, CostSuperType, CostYear from ProdCosts where ProdNo = 1")
  .spread(function(results, metadata) {
    res.send(JSON.stringify(results));
  });
});

module.exports = router;
