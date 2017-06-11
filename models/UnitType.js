/* jshint indent: 2 */

module.exports = function(sequelize, DataTypes) {
  return sequelize.define('UnitType', {
    Unit_Type_English: {
      type: DataTypes.STRING,
      allowNull: false,
      primaryKey: true
    },
    Unit_Type_LL: {
      type: DataTypes.STRING,
      allowNull: true
    },
    Owner: {
      type: DataTypes.STRING,
      allowNull: true
    }
  }, {
    tableName: 'UnitType'
  });
};
