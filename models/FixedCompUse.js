/* jshint indent: 2 */

module.exports = function(sequelize, DataTypes) {
  return sequelize.define('FixedCompUse', {
    ComponentNo: {
      type: DataTypes.INTEGER(11),
      allowNull: false,
      defaultValue: "0",
      primaryKey: true
    },
    Qty: {
      type: DataTypes.INTEGER(11),
      allowNull: true
    },
    ProdGrpCode: {
      type: DataTypes.STRING,
      allowNull: false,
      primaryKey: true
    },
    Owner: {
      type: DataTypes.STRING,
      allowNull: true
    }
  }, {
    tableName: 'FixedCompUse'
  });
};
