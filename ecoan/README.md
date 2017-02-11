# CVBT Economic Analysis Project

Developers: Jonathan Molina, Nathan Sylvia, Alex Ye

## Getting Started

### Installation
Our application runs on [NodeJS](https://nodejs.org/).

When node is installed, simply install the NodeJS project by running the following command on the project's root directory:  

`npm install`

### Running
To start the application server, use the following command:

`DEBUG=ecoan:* npm start`

### [Express](http://expressjs.com/)
Our main backend service is written with the Express web framework. Express does _not_, by default, support any traditional web design paradigms, but we simulate a Model-View-Controller paradigm by using [Sequelize](http://docs.sequelizejs.com/en/v3/) models and writing dispatching JavaScript files to serve our views written with [Pug](https://pugjs.org/api/getting-started.html).

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

### [Foundation](http://foundation.zurb.com/sites/docs/sass.html)

### [PureCSS](https://purecss.io/)

### [DataTables](https://datatables.net/)
