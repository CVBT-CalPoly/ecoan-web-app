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
    "Tables": {
      "es": "Tabla"
    },
    "Test Material": {
      "es": "Material de prueba"
    },
    "Reports": {
      "es": "Informes"
    },
    "Temporary Tables": {
      "es": "Mesas Temporales"
    },
    "Charts": {
      "es": "Gráficos"
    },
    "Months": {
      "es": "Meses"
    },
    "Test": {
      "es": "Prueba"
    },
    "Settings": {
      "es": "Ajustes",
    },
    "Logout": {
      "es": "Cerrar sesión"
    },
    "Account Settings": {
      "es": "Ajustes de usuario"
    },
    "Tables Shared With": {
      "es": "Mesas compartidas con"
    },
    "Share your tables with other users": {
      "es": "Comparte tus tablas con otros usuarios"
    },
    "Add": {
      "es": "Añadir"
    },
    "User Language": {
      "es": "Idioma del usuario"
    },
    "Select a new preferred language": {
      "es": "Seleccione un nuevo idioma preferido"
    },
    "Change": {
      "es": "Cambio"
    },
    "English": {
      "es": "Inglés"
    },
    "Spanish": {
      "es": "Español"
    }
  });
})(); // self-invoking function

module.exports = {
  setLocale: function(locale) {
    myLocalize.setLocale(locale);
  },
  getText: function(value) {
    return myLocalize.translate(value);
  },
  getMenuObject: function(values) {
    const menu = {
      tables_text: myLocalize.translate("Tables"),
      testmaterial_text: myLocalize.translate("Test Material"),
      reports_text: myLocalize.translate("Reports"),
      temptables_text: myLocalize.translate("Temporary Tables"),
      charts_text: myLocalize.translate("Charts"),
      months_text: myLocalize.translate("Months"),
      test_text: myLocalize.translate("Test"),
      settings_text: myLocalize.translate("Settings"),
      logout_text: myLocalize.translate("Logout")
    };
    return Object.assign(menu, values);
  },
  getLanguageForLocale: function(locale) {
    const langs = {
      en: "English",
      es: "Spanish"
    }
    return langs[locale];
  }
}