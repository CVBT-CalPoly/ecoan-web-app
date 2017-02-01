/* jshint indent: 2 */

module.exports = function(sequelize, DataTypes) {
  return sequelize.define('ProductColorCostJg', {
    ProductColor: {
      type: DataTypes.STRING,
      allowNull: true
    },
    ProdGrpCode: {
      type: DataTypes.STRING,
      allowNull: true
    },
    Cost4: {
      type: "DOUBLE",
      allowNull: true
    }
  }, {
    tableName: 'ProductColorCostJg'
  });
};
