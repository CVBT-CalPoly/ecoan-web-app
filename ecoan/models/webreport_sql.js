/* jshint indent: 2 */

module.exports = function(sequelize, DataTypes) {
  return sequelize.define('webreport_sql', {
    id: {
      type: DataTypes.INTEGER(11),
      allowNull: false,
      primaryKey: true,
      autoIncrement: true
    },
    sqlname: {
      type: DataTypes.STRING,
      allowNull: true
    },
    sqlcontent: {
      type: DataTypes.TEXT,
      allowNull: true
    }
  }, {
    tableName: 'webreport_sql'
  });
};
