/* jshint indent: 2 */

module.exports = function(sequelize, DataTypes) {
  return sequelize.define('ComponentUsage', {
    ProdNo: {
      type: DataTypes.INTEGER(11),
      allowNull: true
    },
    ComponentNo: {
      type: DataTypes.INTEGER(11),
      allowNull: true
    },
    ComponentQty: {
      type: "DOUBLE",
      allowNull: true
    }
  }, {
    tableName: 'ComponentUsage'
  });
};
