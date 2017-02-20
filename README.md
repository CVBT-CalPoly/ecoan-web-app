# CVBT Economic Analysis Project

Developers: Jonathan Molina, Nathan Sylvia, Alex Ye

## Getting Started

### Installation
Our application runs on [NodeJS](https://nodejs.org/).

When node is installed, simply clone the repository to your local device and install the NodeJS project by running the following commands on the project's root directory:  

```
git clone https://github.com/CVBT-CalPoly/ecoan-web-app.git
cd ecoan-web-app
npm install
```

### Running
To start the application server, use the following command:

`DEBUG=ecoan:* npm start`

### [Express](http://expressjs.com/)
Our main backend service is written with the Express web framework. Express does _not_, by default, support any traditional web design paradigms, but we simulate a Model-View-Controller paradigm by using [Sequelize](https://github.com/CVBT-CalPoly/cvbt-backend#sequelize) models and writing dispatching JavaScript files to serve our views written with [Pug](https://github.com/CVBT-CalPoly/cvbt-backend#pug).

Creating another page to our site is easy.

In our main app file, `app.js`, create a new listener for our new page, `testpage`.

```
var app = express();

...

app.use('/testpage', testpage);
```

Create a new "controller" for our new page in the `routes/` directory with the same name as your page.
```
dir: routes/
$ ls
index.js  testpage.js  ...
```
In your controller, you can add routing functions using Express. For example, we can easily create an `HTTP GET` request for our new page.

```
var express = require('express');
var router = express.Router();

/* GET */
router.get('/', function(req, res, next) {
  res.render('testpage');
});

module.exports = router;
```
Make sure you have a corresponding Pug file in your views that Express will serve to the client. Look at the Pug section below for more information or look at the [Pug documentation](https://pugjs.org/api/getting-started.html).
```
dir: views/
$ ls
index.pug  error.pug  layout.pug  testpage.pug
```


### [Pug](https://pugjs.org/api/getting-started.html)

### [Sequelize](http://docs.sequelizejs.com/en/v3/)
Sequelize is a promise-based ORM for Node.js and io.js. It supports the dialects PostgreSQL, MySQL, MariaDB, SQLite and MSSQL and features solid transaction support, relations, read replication and more. In our case, we are using a MySQL DMBS.

Most of the databse elements are located in the `models/` folder. The `models/` folder contains a database dispatcher module, `db.js`. This dispatcher can be called throughout the application backend to access our database.

The dispatcher can be called by simply importing the Node module.
```
var db  = require('./models/db');
```
Sequelize also allows us to create a mimicked Model-View-Controller development paradigm. Our database tables are loaded in as models and can be found in `models/`. The models are essentially database schemas mapped to JavaScript modules. Take the `Status` table for example.
###### `models/Status.js`
```
module.exports = function(sequelize, DataTypes) {
  return sequelize.define('Status', {
    StatusCode: {
      type: DataTypes.STRING,
      allowNull: true
    },
    CodeDescription: {
      type: DataTypes.STRING,
      allowNull: true
    },
    ThaiDescription: {
      type: DataTypes.STRING,
      allowNull: true
    }
  }, {
    tableName: 'Status'
  });
};
```
As you can see, the schema consists of 3 string elements and are exported as a Node module. All models are seen by the database dispatcher on _startup_

Sequelize provides out-of-the-box ORM features. You can easily query using the provided Sequelize API. For example, the following:
```
db.BillSale.findAll({
  attributes: ['BillNo', 'ExpDate']
}).then(function(results) {
  console.log(results)
});
```
is equivalent to
```
SELECT BillNo FROM `Status`;
```

Please refer to the [Sequelize documentation](http://docs.sequelizejs.com/en/v3/) for specifics on querying capabilities.

### [Foundation](http://foundation.zurb.com/sites/docs/sass.html)

### [PureCSS](https://purecss.io/)

### [DataTables](https://datatables.net/)
