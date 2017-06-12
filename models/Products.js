/* jshint indent: 2 */

module.exports = function(sequelize, DataTypes) {
  return sequelize.define('Products', {
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
      type: DataTypes.TEXT,
      allowNull: true
    },
    EngCom: {
      type: DataTypes.TEXT,
      allowNull: true
    },
    Status: {
      type: DataTypes.STRING,
      allowNull: true
    },
    MoldWt: {
      type: "DOUBLE",
      allowNull: true
    },
    GrayWtMold: {
      type: "DOUBLE",
      allowNull: true
    },
    ColorWtMold: {
      type: "DOUBLE",
      allowNull: true
    },
    Length: {
      type: "DOUBLE",
      allowNull: true
    },
    Width: {
      type: "DOUBLE",
      allowNull: true
    },
    Thickness: {
      type: "DOUBLE",
      allowNull: true
    },
    ProdNo: {
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
    tableName: 'Products'
  });
};
