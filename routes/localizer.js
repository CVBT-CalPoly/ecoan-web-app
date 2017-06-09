var Localize = require('localize');
var myLocalize;

(function initializeTranslations() {
  myLocalize = new Localize({
    "Log In": {
      "es": "Iniciar sesión",
    },
    "Sign Up": {
      "es": "Regístrate",
    },
    "Username": {
      "es": "Nombre de usuario",
    },
    "Password": {
      "es": "Contraseña",
    },
    "Repeat Password": {
      "es": "Repite la contraseña",
    },
    "View Backups": {
      "es": "Ver copias de seguridad",
    },
  });
})(); // self-invoking function

module.exports = {
  setLocale: function(locale) {
    myLocalize.setLocale(locale);
  },
  getText: function(value) {
    return myLocalize.translate(value);
  }
}