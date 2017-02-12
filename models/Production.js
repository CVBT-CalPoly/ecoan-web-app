/* jshint indent: 2 */

module.exports = function(sequelize, DataTypes) {
  return sequelize.define('Production', {
    ExpDate: {
      type: DataTypes.DATE,
      allowNull: true
    },
    Machine: {
      type: DataTypes.CHAR(1),
      allowNull: true
    },
    ProductNo: {
      type: DataTypes.INTEGER(11),
      allowNull: true
    },
    QtyProd: {
      type: DataTypes.INTEGER(11),
      allowNull: true
    },
    ProdComm: {
      type: DataTypes.STRING,
      allowNull: true
    }
  }, {
    tableName: 'Production'
  });
};
