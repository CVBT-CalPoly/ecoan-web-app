/* jshint indent: 2 */

module.exports = function(sequelize, DataTypes) {
  return sequelize.define('Table1', {
    ID: {
      type: DataTypes.INTEGER(11),
      allowNull: false,
      primaryKey: true,
      autoIncrement: true
    },
    Field1: {
      type: DataTypes.STRING,
      allowNull: true
    }
  }, {
    tableName: 'Table1'
  });
};
