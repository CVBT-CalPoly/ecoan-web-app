/* jshint indent: 2 */

module.exports = function(sequelize, DataTypes) {
  return sequelize.define('Bill_Product', {
    BillNo: {
      type: DataTypes.DECIMAL,
      allowNull: true
    },
    ProductNo: {
      type: DataTypes.INTEGER(11),
      allowNull: true
    },
    ProdAmont: {
      type: DataTypes.INTEGER(11),
      allowNull: true
    },
    Price: {
      type: DataTypes.INTEGER(11),
      allowNull: true
    },
    Amont: {
      type: DataTypes.INTEGER(11),
      allowNull: true
    }
  }, {
    tableName: 'Bill_Product'
  });
};
