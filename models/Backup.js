module.exports = function(sequelize, DataTypes) {
  return sequelize.define('Backup', {
    Date: {
      type: DataTypes.DATE,
    },
    File: {
      type: DataTypes.STRING,
    }
  }, {
    tableName: 'Backup',
  });
};
