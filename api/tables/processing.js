var express = require('express');
var router = express.Router();
var db = require('../../models/db');
var helper = require('../../routes/tablehelper');
var fs = require('fs');
var drawCounter = 1;

/* GET home page. */
router.post('/', function(req, res) {
  const tableColumns = helper.getTableHeaders(req.body.table);

  helper.getDbObject(req.body.table).findAndCount({
    attributes: tableColumns,
    limit: parseInt(req.body.length),
    offset: parseInt(req.body.start),
    raw: true,
  }).then(function(results) {
    let response = {
      "draw": drawCounter++,
      "recordsTotal": results.count,
      "recordsFiltered": results.count
    };
    let dataArray = [];
    let rows = results.rows;

    // format data response for DataTables into array of array objects [[], []]
    rows.forEach(function(data) {
      const keys = Object.keys(data);
      let rowData = [];
      keys.forEach(function(key) {
        const value = data[key];
        if (Buffer.isBuffer(value)) {
          fs.writeFile('public/images/test.jpeg', value, 'utf8', function(err) {
            if (err) {
              console.log(err);
            }
          });
          rowData.push("<img src=\"../../images/test.jpeg\" />");
        }
        else {
          rowData.push(data[key]);
        }
      });
      dataArray.push(rowData);
    });
    response["data"] = dataArray;
    // console.log(response);
    // res.attachment('../../images/product.jpeg');
    res.send(JSON.stringify(response));
  });

});

module.exports = router;
