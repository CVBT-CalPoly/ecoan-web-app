/* jshint indent: 2 */

module.exports = function(sequelize, DataTypes) {
  return sequelize.define('TotalProdCost', {
    ProdNo: {
      type: DataTypes.INTEGER(11),
      allowNull: true
    },
    sumpiececost: {
      type: "DOUBLE",
      allowNull: true
    }
  }, {
    tableName: 'TotalProdCost'
  });
};
