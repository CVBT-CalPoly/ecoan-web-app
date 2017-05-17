var express = require('express');
var router = express.Router();
var db = require('../../models/db');
var helper = require('../../routes/tablehelper');
var drawCounter = 1;

router.post('/:table', function(req, res) {
  const dbObject = helper.getDbObject(req.params.table);
  const tableColumns = helper.getTableHeaders(req.params.table);
  // var parsed = JSON.parse(Object.keys(req.body)[0]);
  console.log(req.body);

  dbObject.findAndCount({
    attributes: tableColumns,
    limit: 1,
    offset: 0,
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
      var rowObject = {};
      var ndx = 0;

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
          var seconds = new Date().getTime(); // appending seconds will advise browser not to use cached image
          rowData.push("<img src=\"../../images/"+fileName+"?"+ seconds +"\" />"); // cell will display image
        }
        else {
          rowData.push(value);
          // rowObject[tableColumns[ndx++]] = value;
        }
      });
      dataArray.push(rowData);
      // dataArray.push(rowObject);
    });
    
    response["data"] = dataArray;
    res.send(JSON.stringify(response));
  });

  // res.send("Success");
});

// router.post('/:table', function(req, res) {
//   const dbObject = helper.getDbObject(req.params.table);
//   const tableColumns = helper.getTableHeaders(req.params.table);
//   // var parsed = JSON.parse(Object.keys(req.body)[0]);
//   console.log(req.body);

//   dbObject.findAndCount({
//     attributes: tableColumns,
//     limit: 1,
//     offset: 0,
//     raw: true,
//   }).then(function(results) {
//     let response = {
//       "draw": drawCounter++,
//       "recordsTotal": results.count,
//       "recordsFiltered": results.count
//     };
//     let dataArray = [];
//     let rows = results.rows;
//     var rowNum = 0;

//     // format data response for DataTables into array of array objects [[], []]
//     rows.forEach(function(data) {
//       const keys = Object.keys(data);
//       let rowData = [];
      
//       keys.forEach(function(key) {
//         const value = data[key];

//         // check if image blob stored in database (which is retrieved as a buffer)
//         if (Buffer.isBuffer(value)) {
//           var fileName = "image" + rowNum++ + ".jpeg"; // increment counter so each row refers to a different image

//           fs.writeFile('public/images/'+fileName, value, 'utf8', function(err) {
//             if (err) {
//               console.log(err);
//             }
//           });
//           var seconds = new Date().getTime(); // appending seconds will advise browser not to use cached image
//           rowData.push("<img src=\"../../images/"+fileName+"?"+ seconds +"\" />"); // cell will display image
//         }
//         else {
//           rowData.push(data[key]);
//         }
//       });
//       dataArray.push(rowData);
//     });
    
//     response["data"] = dataArray;
//     res.send(JSON.stringify(response));
//   });

//   // res.send("Success");
// });

module.exports = router;