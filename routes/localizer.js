const translate = require('google-translate-api');
var menu;
var currentLocale = "";
var isMenuInit = false;

function translateRaw(phrase, locale, next) {
  translate(phrase, {from: "en", to: locale, raw: true})
    .then(res => {
      next(res.text);
    })
    .catch(err => {
      console.error(err);
    });
};

function translateObject(keys, obj, next) {
  // finished translating
  if (keys.length == 0) {
    next(obj);
  }
  else {
    const key = keys.pop();
    translateRaw(obj[key], currentLocale, function(res) {
      obj[key] = res;
      translateObject(keys, obj, next);
    });
  }
}

function getMenu(next) {
  var menuItems = {
    tables: "Tables",
    testmaterial: "Test Material",
    reports: "Reports",
    temptables: "Temporary Tables",
    charts: "Charts",
    months: "Months",
    test: "Test",
    settings: "Settings",
    logout: "Logout"
  };

  // only initialize menu if haven't yet
  if (!isMenuInit) {
    isMenuInit = true;
    translateObject(Object.keys(menuItems), menuItems, function(translations) {
      menu = {
        menu: translations
      };
      next(menu)
    });
  }
  else {
    next(menu);
  }
}

function translatePageHelper(strings, values, next) {
  const page = Object.keys(strings)[0];
  translateObject(Object.keys(strings[page]), strings[page], function(translations) {
    var pageValuesAll;

    if (values != undefined) {
      pageValuesAll = Object.assign(translations, values);
    }
    else {
      pageValuesAll = translations;
    }

    strings[page] = pageValuesAll;
    getMenu(function(menu) {
      next(Object.assign(menu, strings));
    });
  });
}

module.exports = {
  setLocale: function(locale) {
    if (currentLocale !== locale) {
      currentLocale = locale;
      isMenuInit = false;
    }
  },
  translatePage: function(strings, options) {
    translatePageHelper(strings, options.values, options.next);
  },
  getLanguageForLocale: function(locale) {
    const langs = {
      en: "English",
      es: "Spanish",
      fr: "French",
      de: "German",
      th: "Thai",
      zh: "Chinese",
      id: "Indonesian",
      fil: "Tagalog",
      my: "Burmese",
      vi: "Vietnamese",
      cmn: "Mandarin",
      hi: "Hindi",
      ne: "Nepalese",
      ar: "Aravic",
    }
    return langs[locale];
  }
}