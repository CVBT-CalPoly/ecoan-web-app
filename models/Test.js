/* jshint indent: 2 */

module.exports = function(sequelize, DataTypes) {
  return sequelize.define('Test', {
    ID: {
      type: DataTypes.INTEGER(11),
      allowNull: false,
      primaryKey: true,
      autoIncrement: true
    },
    Mixno: {
      type: DataTypes.STRING,
      allowNull: true
    },
    Compno: {
      type: DataTypes.STRING,
      allowNull: true
    },
    Owner: {
      type: DataTypes.STRING,
      allowNull: true
    }
  }, {
    tableName: 'Test'
  });
};
