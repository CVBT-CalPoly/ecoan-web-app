/* jshint indent: 2 */

module.exports = function(sequelize, DataTypes) {
  return sequelize.define('LvType', {
    LvType: {
      type: DataTypes.STRING,
      allowNull: true
    },
    LvTypeNo: {
      type: DataTypes.INTEGER(11),
      allowNull: false,
      primaryKey: true,
      autoIncrement: true
    },
    Owner: {
      type: DataTypes.STRING,
      allowNull: true
    }
  }, {
    tableName: 'LvType'
  });
};
