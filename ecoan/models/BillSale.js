/* jshint indent: 2 */

module.exports = function(sequelize, DataTypes) {
  return sequelize.define('BillSale', {
    BillNo: {
      type: DataTypes.INTEGER(11),
      allowNull: false,
      primaryKey: true,
      autoIncrement: true
    },
    ExpDate: {
      type: DataTypes.DATE,
      allowNull: true
    },
    CustomerNo: {
      type: DataTypes.INTEGER(11),
      allowNull: true
    },
    TotalBill: {
      type: DataTypes.DECIMAL,
      allowNull: true
    },
    EmpNo: {
      type: DataTypes.INTEGER(11),
      allowNull: true
    },
    ComBill: {
      type: DataTypes.STRING,
      allowNull: true
    }
  }, {
    tableName: 'BillSale'
  });
};
