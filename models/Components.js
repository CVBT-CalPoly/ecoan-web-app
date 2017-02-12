/* jshint indent: 2 */

module.exports = function(sequelize, DataTypes) {
  return sequelize.define('Components', {
    ComponentNo: {
      type: DataTypes.INTEGER(11),
      allowNull: false,
      primaryKey: true,
      autoIncrement: true
    },
    EngName: {
      type: DataTypes.STRING,
      allowNull: true
    },
    ThaiName: {
      type: DataTypes.STRING,
      allowNull: true
    },
    DescriptionEng: {
      type: DataTypes.STRING,
      allowNull: true
    },
    DescriptionThai: {
      type: DataTypes.STRING,
      allowNull: true,
      defaultValue: "-"
    },
    CompTypeNo: {
      type: DataTypes.DECIMAL,
      allowNull: true
    },
    UnitEng: {
      type: DataTypes.STRING,
      allowNull: true
    },
    UnitQty: {
      type: "DOUBLE",
      allowNull: false
    },
    CompPurchaseUnitEn: {
      type: DataTypes.STRING,
      allowNull: false
    },
    Cost: {
      type: "DOUBLE",
      allowNull: false
    },
    PriceSell: {
      type: "DOUBLE",
      allowNull: true
    },
    Source: {
      type: DataTypes.STRING,
      allowNull: true
    },
    Density: {
      type: "DOUBLE",
      allowNull: false
    },
    SortOrder: {
      type: DataTypes.INTEGER(11),
      allowNull: false
    }
  }, {
    tableName: 'Components'
  });
};
