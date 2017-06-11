/* jshint indent: 2 */

module.exports = function(sequelize, DataTypes) {
  return sequelize.define('MixWt', {
    MixNo: {
      type: DataTypes.STRING,
      allowNull: true
    },
    MixWt: {
      type: "DOUBLE",
      allowNull: true
    },
    Owner: {
      type: DataTypes.STRING,
      allowNull: true
    }
  }, {
    tableName: 'MixWt'
  });
};
