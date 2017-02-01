/* jshint indent: 2 */

module.exports = function(sequelize, DataTypes) {
  return sequelize.define('ProdGrp', {
    ProdGrpCode: {
      type: DataTypes.STRING,
      allowNull: false
    },
    ThaiProductGroup: {
      type: DataTypes.STRING,
      allowNull: true
    },
    EngProductGroup: {
      type: DataTypes.STRING,
      allowNull: true
    },
    MarkDownWholesale: {
      type: "DOUBLE",
      allowNull: true
    },
    MarkDownRetail: {
      type: "DOUBLE",
      allowNull: true
    },
    DaysWorked: {
      type: DataTypes.INTEGER(11),
      allowNull: true
    },
    NumberWorkers: {
      type: DataTypes.INTEGER(11),
      allowNull: true
    },
    QtyMolds: {
      type: DataTypes.INTEGER(11),
      allowNull: true
    },
    MouldsPerDay: {
      type: DataTypes.INTEGER(11),
      allowNull: true
    },
    Interest: {
      type: "DOUBLE",
      allowNull: true
    },
    Period: {
      type: DataTypes.INTEGER(11),
      allowNull: true
    },
    DownPay: {
      type: "DOUBLE",
      allowNull: true
    },
    MonthsOfCap: {
      type: DataTypes.INTEGER(11),
      allowNull: true
    },
    Waste: {
      type: "DOUBLE",
      allowNull: true
    },
    Maint: {
      type: "DOUBLE",
      allowNull: true
    },
    ItemNotes: {
      type: DataTypes.STRING,
      allowNull: true
    },
    CuringTime: {
      type: DataTypes.INTEGER(11),
      allowNull: true
    },
    GAP: {
      type: "DOUBLE",
      allowNull: true
    },
    Admin: {
      type: DataTypes.FLOAT,
      allowNull: false
    },
    Manager: {
      type: DataTypes.FLOAT,
      allowNull: false
    },
    Clerk: {
      type: DataTypes.FLOAT,
      allowNull: false
    }
  }, {
    tableName: 'ProdGrp'
  });
};
