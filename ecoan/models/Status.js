/* jshint indent: 2 */

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
