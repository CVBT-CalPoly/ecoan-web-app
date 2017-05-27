var express = require('express');
var router = express.Router();
const processingHelper = require("../../api/tables/processinghelper");

// POST
router.post('/', function(req, res) {
  processingHelper.processTable(req, res, req.body.table);
});

module.exports = router;
