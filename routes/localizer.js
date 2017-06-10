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
    "E-Mail": {
      "es": "E-Mail"
    },
    "First Name": {
      "es": "Nombre de pila"
    },
    "Last Name": {
      "es": "Apellido"
    },
    "Password": {
      "es": "Contraseña",
    },
    "Repeat Password": {
      "es": "Repite la contraseña",
    },
    "Paswords do not match": {
      "es": "Las contraseñas no coinciden"
    },
    "Username already taken": {
      "es": "Nombre de usuario ya tomado"
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