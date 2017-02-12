/* jshint indent: 2 */

module.exports = function(sequelize, DataTypes) {
  return sequelize.define('ProdCosts', {
    ProdGrpCode: {
      type: DataTypes.STRING,
      allowNull: true
    },
    ProdNo: {
      type: DataTypes.INTEGER(11),
      allowNull: true
    },
    CostSupertype: {
      type: DataTypes.STRING,
      allowNull: true
    },
    CostType: {
      type: DataTypes.STRING,
      allowNull: true
    },
    EngName: {
      type: DataTypes.STRING,
      allowNull: true
    },
    ThaiName: {
      type: DataTypes.STRING,
      allowNull: true
    },
    Qtty: {
      type: "DOUBLE",
      allowNull: true
    },
    PieceCost: {
      type: "DOUBLE",
      allowNull: true
    },
    SortOrder: {
      type: DataTypes.INTEGER(11),
      allowNull: true
    },
    Cost: {
      type: "DOUBLE",
      allowNull: true
    },
    UnitEngRpt: {
      type: DataTypes.STRING,
      allowNull: true
    },
    UnitThaiRpt: {
      type: DataTypes.STRING,
      allowNull: true
    },
    CompPurchaseUnitEn: {
      type: DataTypes.STRING,
      allowNull: true
    },
    CostYear: {
      type: "DOUBLE",
      allowNull: true
    },
    CostMonth: {
      type: "DOUBLE",
      allowNull: true
    },
    PercentCost: {
      type: "DOUBLE",
      allowNull: true
    }
  }, {
    tableName: 'ProdCosts'
  });
};
