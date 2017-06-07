module.exports = function(sequelize, DataTypes) {
  var model = sequelize.define('Backup', {
    Date: {
      type: DataTypes.DATE,
    },
    File: {
      type: DataTypes.STRING,
    }
  }, {
    tableName: 'Backup',
  });
  model.removeAttribute("id");
  return model;
};
