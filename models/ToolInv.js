/* jshint indent: 2 */

module.exports = function(sequelize, DataTypes) {
  return sequelize.define('ToolInv', {
    ProdGrpCode: {
      type: DataTypes.STRING,
      allowNull: true
    },
    CapInv: {
      type: "DOUBLE",
      allowNull: true
    },
    Owner: {
      type: DataTypes.STRING,
      allowNull: true
    }
  }, {
    tableName: 'ToolInv'
  });
};
