/* jshint indent: 2 */

module.exports = function(sequelize, DataTypes) {
  return sequelize.define('ComponentHistory', {
    ComponentNo: {
      type: DataTypes.INTEGER(11),
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
    DescriptionEng: {
      type: DataTypes.STRING,
      allowNull: true
    },
    DescriptionThai: {
      type: DataTypes.STRING,
      allowNull: true
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
      allowNull: true
    },
    CompPurchaseUnitEn: {
      type: DataTypes.STRING,
      allowNull: true
    },
    Cost: {
      type: "DOUBLE",
      allowNull: true
    },
    Density: {
      type: "DOUBLE",
      allowNull: true
    },
    Source: {
      type: DataTypes.STRING,
      allowNull: true
    },
    SortOrder: {
      type: DataTypes.INTEGER(11),
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
    SorOrder: {
      type: DataTypes.INTEGER(11),
      allowNull: true
    }
  }, {
    tableName: 'ComponentHistory'
  });
};
