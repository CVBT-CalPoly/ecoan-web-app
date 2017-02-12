/* jshint indent: 2 */

module.exports = function(sequelize, DataTypes) {
  return sequelize.define('ModelCstDatHistory', {
    ParameterNo: {
      type: DataTypes.INTEGER(11),
      allowNull: true
    },
    EngParameter: {
      type: DataTypes.STRING,
      allowNull: true
    },
    ThaiParameter: {
      type: DataTypes.STRING,
      allowNull: true
    },
    Value: {
      type: "DOUBLE",
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
    }
  }, {
    tableName: 'ModelCstDatHistory'
  });
};
