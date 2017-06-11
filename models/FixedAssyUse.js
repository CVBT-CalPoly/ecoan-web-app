/* jshint indent: 2 */

module.exports = function(sequelize, DataTypes) {
  return sequelize.define('FixedAssyUse', {
    ProdGrpCode: {
      type: DataTypes.STRING,
      allowNull: true
    },
    ProdNo: {
      type: DataTypes.INTEGER(11),
      allowNull: true
    },
    Qty: {
      type: DataTypes.INTEGER(11),
      allowNull: true
    },
    Owner: {
      type: DataTypes.STRING,
      allowNull: true
    }
  }, {
    tableName: 'FixedAssyUse'
  });
};
