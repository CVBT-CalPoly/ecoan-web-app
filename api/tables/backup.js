var express = require('express');
var router = express.Router();
var mysqlDump = require('mysqldump');
var db = require('../../models/db');

// POST
router.post('/', function(req, res) {
    const date = new Date();
    const filename = date.getMonth() + "-" + date.getDate() + "-" + date.getFullYear() + "-"+ date.getHours() + ":" + date.getMinutes() + ":" + date.getSeconds() + "-backup-data.sql";

    mysqlDump({
        host: process.env.DB_HOST,
        user: process.env.DB_USER,
        password: process.env.DB_PASS,
        database: process.env.DB_NAME,
        dest: "./backups/" + filename // destination file
    }, function(err) {
        // created data.sql file;
        console.log(JSON.stringify(err));
        // create Backup table row
        db.Backup.create({
            File: filename
        }).then(backup => {
            // save row in Backup table
            backup.save().then(() => {
                console.log("Backup is completed and saved.");
            res.send("Success");
            });
        })
    })
});

module.exports = router;
