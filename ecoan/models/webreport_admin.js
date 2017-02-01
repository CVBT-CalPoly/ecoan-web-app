/* jshint indent: 2 */

module.exports = function(sequelize, DataTypes) {
  return sequelize.define('webreport_admin', {
    id: {
      type: DataTypes.INTEGER(11),
      allowNull: false,
      primaryKey: true,
      autoIncrement: true
    },
    tablename: {
      type: DataTypes.STRING,
      allowNull: true
    },
    db_type: {
      type: DataTypes.STRING,
      allowNull: true
    },
    group_name: {
      type: DataTypes.STRING,
      allowNull: true
    }
  }, {
    tableName: 'webreport_admin'
  });
};
