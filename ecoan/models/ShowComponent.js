/* jshint indent: 2 */

module.exports = function(sequelize, DataTypes) {
  return sequelize.define('ShowComponent', {
    ID: {
      type: DataTypes.INTEGER(11),
      allowNull: false,
      primaryKey: true,
      autoIncrement: true
    },
    Raw Material: {
      type: DataTypes.STRING,
      allowNull: true
    },
    Amount of Unit or Quantity of Bucket: {
      type: DataTypes.STRING,
      allowNull: true
    },
    Unit or Bucket: {
      type: DataTypes.STRING,
      allowNull: true
    }
  }, {
    tableName: 'ShowComponent'
  });
};
