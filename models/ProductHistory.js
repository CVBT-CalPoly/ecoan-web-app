/* jshint indent: 2 */

module.exports = function(sequelize, DataTypes) {
  return sequelize.define('ProductHistory', {
    ProdNo: {
      type: DataTypes.INTEGER(11),
      allowNull: true
    },
    ProdGrpCode: {
      type: DataTypes.STRING,
      allowNull: true
    },
    ProdThaiName: {
      type: DataTypes.STRING,
      allowNull: true
    },
    ProdEngName: {
      type: DataTypes.STRING,
      allowNull: true
    },
    Picture: {
      type: "BLOB",
      allowNull: true
    },
    ThaiModel: {
      type: DataTypes.STRING,
      allowNull: true
    },
    EngModel: {
      type: DataTypes.STRING,
      allowNull: true
    },
    MixNo: {
      type: DataTypes.STRING,
      allowNull: true
    },
    ProdWt: {
      type: "DOUBLE",
      allowNull: true
    },
    ColorMixNo: {
      type: DataTypes.STRING,
      allowNull: true
    },
    FaceWt: {
      type: "DOUBLE",
      allowNull: true
    },
    Mold: {
      type: "DOUBLE",
      allowNull: true
    },
    PiecesPerMould: {
      type: DataTypes.INTEGER(11),
      allowNull: true
    },
    ProductCost: {
      type: "DOUBLE",
      allowNull: true
    },
    PriceRetail: {
      type: "DOUBLE",
      allowNull: true
    },
    PriceWholeSale: {
      type: "DOUBLE",
      allowNull: true
    },
    ProdStockGoal: {
      type: DataTypes.INTEGER(11),
      allowNull: true
    },
    ThaiCom: {
      type: DataTypes.STRING,
      allowNull: true
    },
    EngCom: {
      type: DataTypes.STRING,
      allowNull: true
    },
    Status: {
      type: DataTypes.CHAR(1),
      allowNull: true
    },
    ChangeType: {
      type: DataTypes.STRING,
      allowNull: true
    },
    ChangeDate: {
      type: DataTypes.DATE,
      allowNull: true
    },
    ChangeTime: {
      type: DataTypes.TIME,
      allowNull: true
    },
    Owner: {
      type: DataTypes.STRING,
      allowNull: true
    }
  }, {
    tableName: 'ProductHistory'
  });
};
