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
    var rowNum = 0;

    // format data response for DataTables into array of array objects [[], []]
    rows.forEach(function(data) {
      const keys = Object.keys(data);
      let rowData = [];
      
      keys.forEach(function(key) {
        const value = data[key];

        // check if image blob stored in database (which is retrieved as a buffer)
        if (Buffer.isBuffer(value)) {
          var fileName = "image" + rowNum++ + ".jpeg"; // increment counter so each row refers to a different image

          fs.writeFile('public/images/'+fileName, value, 'utf8', function(err) {
            if (err) {
              console.log(err);
            }
          });
          rowData.push("<img src=\"../../images/"+fileName+"\" />"); // cell will display image
        }
        else {
          rowData.push(data[key]);
        }
      });
      dataArray.push(rowData);
    });
    
    response["data"] = dataArray;
    res.send(JSON.stringify(response));
  });

});

module.exports = router;