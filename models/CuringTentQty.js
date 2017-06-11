/* jshint indent: 2 */

module.exports = function(sequelize, DataTypes) {
  return sequelize.define('CuringTentQty', {
    Prodno: {
      type: DataTypes.INTEGER(11),
      allowNull: true
    },
    Quantity: {
      type: DataTypes.INTEGER(11),
      allowNull: true
    },
    Owner: {
      type: DataTypes.STRING,
      allowNull: true
    }
  }, {
    tableName: 'CuringTentQty'
  });
};
