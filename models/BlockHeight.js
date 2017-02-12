/* jshint indent: 2 */

module.exports = function(sequelize, DataTypes) {
  return sequelize.define('BlockHeight', {
    RecordNo1: {
      type: DataTypes.DECIMAL,
      allowNull: true
    },
    BuildingBlockNo1: {
      type: DataTypes.DECIMAL,
      allowNull: true
    },
    BlockHeight_A: {
      type: "DOUBLE",
      allowNull: true
    },
    BlockHeight_B: {
      type: "DOUBLE",
      allowNull: true
    },
    BlockHeight_C: {
      type: "DOUBLE",
      allowNull: true
    },
    BlockHeight_D: {
      type: "DOUBLE",
      allowNull: true
    },
    BlockHeight_E: {
      type: "DOUBLE",
      allowNull: true
    },
    BlockHeight_F: {
      type: "DOUBLE",
      allowNull: true
    },
    BlockHeight_AD: {
      type: "DOUBLE",
      allowNull: true
    },
    BlockHeight_BE: {
      type: "DOUBLE",
      allowNull: true
    },
    BlockHeight_CF: {
      type: "DOUBLE",
      allowNull: true
    },
    Wight: {
      type: "DOUBLE",
      allowNull: true
    },
    WightUnit: {
      type: DataTypes.STRING,
      allowNull: true
    },
    AverageBlock: {
      type: "DOUBLE",
      allowNull: true
    },
    StandardDeviation: {
      type: "DOUBLE",
      allowNull: true
    },
    Beinconsistent: {
      type: "DOUBLE",
      allowNull: true
    }
  }, {
    tableName: 'BlockHeight'
  });
};
