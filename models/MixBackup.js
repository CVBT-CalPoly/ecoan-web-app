/* jshint indent: 2 */

module.exports = function(sequelize, DataTypes) {
  return sequelize.define('MixBackup', {
    MixNo: {
      type: DataTypes.STRING,
      allowNull: true
    },
    ComponentNo: {
      type: DataTypes.INTEGER(11),
      allowNull: true
    },
    Quantity: {
      type: "DOUBLE",
      allowNull: true
    },
    UnitOrBucket: {
      type: DataTypes.STRING,
      allowNull: true
    },
    Owner: {
      type: DataTypes.STRING,
      allowNull: true
    }
  }, {
    tableName: 'MixBackup'
  });
};
