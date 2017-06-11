/* jshint indent: 2 */

module.exports = function(sequelize, DataTypes) {
  return sequelize.define('Mix', {
    MixNo: {
      type: DataTypes.INTEGER(6),
      allowNull: false,
      defaultValue: "0",
      primaryKey: true
    },
    ComponentNo: {
      type: DataTypes.INTEGER(11),
      allowNull: false,
      defaultValue: "0",
      primaryKey: true
    },
    Qtty: {
      type: "DOUBLE",
      allowNull: true
    },
    UnitOrBucket: {
      type: DataTypes.TEXT,
      allowNull: true
    },
    Owner: {
      type: DataTypes.STRING,
      allowNull: true
    }
  }, {
    tableName: 'Mix'
  });
};
