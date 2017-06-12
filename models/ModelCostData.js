/* jshint indent: 2 */

module.exports = function(sequelize, DataTypes) {
  return sequelize.define('ModelCostData', {
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
    Owner: {
      type: DataTypes.STRING,
      allowNull: true
    }
  }, {
    tableName: 'ModelCostData'
  });
};
