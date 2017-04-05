# CVBT Economic Analysis Project

Developers: Jonathan Molina, Nathan Sylvia, Alex Ye

## Tasks

1. Web-based application; server side
1. User-friendly low-resource attractive website.  The website should not require a high-power computer or a broad-band internet connection.
1. User Friendly menus (Done)
1. Generate graphs and charts (I have examples and equations)
   1. Graphs
      1. A cost break down pie chart (100% = production cost, profit not included)
      1. A break-even analysis (show the break even point; base it on 1-year production)
      1. A pay back period analysis  
      1. A rate of return analysis (rate of return versus % production capacity)
   1. Tables
      1. Filter rows by column values
      1. Add new rows
      1. Delete new rows
      1. Update new rows
      1. Choose number of rows shown at a time
1. Provide for printing of reports.
   1. Production Cost Breakdown by Product (This is functional but needs some formatting and work on the headers).  One challenge here is to be able to order the items in a logical way according to the user (e.g., raw materials are listed from fine to coarse).  There is a manual calculation that shows the equations and has an example for checking purposes.  The calculations on the website have been checked.
   1.	Inputs by Product
   1. Price Lists by Product Group (this is functional but needs formatting)
   1. Table reports (most tables should have a printable report)
   1. Labor rates by group 
   1. Mix Registry Report
1. Provide for backups (we do have a web master who probably takes care of this).
1. Allow rollbacks (keep history of additions, changes and deletions.  This probably requires the use of triggers).
1. Have user accounts so that users can save their data (scenarios; i.e., input data) on-line
1. Allow them to create different scenarios.
1. Create way for users to access in their native languages
1. Documentation: code should be commented.  User Help should be accessible for each web page or menu item.  There should be a map/plan of the database and an explanation so that students who work on this later will be able to understand it.

## Getting Started

### Installation
Our application runs on [NodeJS](https://nodejs.org/).

When node is installed, clone the repository to your local device and install the NodeJS project by running the following commands:  

```
git clone https://github.com/CVBT-CalPoly/ecoan-web-app.git
cd ecoan-web-app
npm install
```

### Running
To start the application server, use the following command:

`DEBUG=ecoan:* npm start`


## Contributing
### Coding Standards
Since JavaScript has so many dialects from developer to developer and almost no standardized coding style such as Python PEP or Java's verbosity centric naming schemes, we will loosely follow the [AirBnB JavaScript Style](https://github.com/airbnb/javascript) Guide as our standard coding style.

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
  attributes: ['BillNo']
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
We use Foundation as our front-end framework as it is a slightly smaller file size to deliver and has all the tools we need to get started on the front-end. Check out the full Foundation documentation for specific styling elements.

The only thing to note is to remember to initialize the Foundation package if for some reason your create your own HTML away from our template structure.

```
$(document).foundation();
```

### [DataTables](https://datatables.net/)
DataTables is a package used for displaying database table information. The DataTable package works on a basic HTML `<table>` tags. You can create your own DataTable by simply statically or dynamically create an HTML and initializing the DataTable JavaScript as shown below.

```
<table>
  <thead>
    <tr>
      <td>Content</td>
      <td>Content</td>
      <td>Content</td>
  </thead>
  <tbody>
    <tr>
      <td>Content</td>
      <td>Content</td>
      <td>Content</td>
  </tbody>
</table>

<script>
$(document).ready(function () {
    $('#data-table').DataTable();
} );
</script>
```
Add-ons can be added to the DataTable initialization by adding it right to the initializing function. For instance, adding horizontal scrolling to your table is as simple adding a single line of code:

```
<script>
$(document).ready( function () {
  $('#data-table').DataTable({
    "scrollX":true
  });
} );
</script>
```
