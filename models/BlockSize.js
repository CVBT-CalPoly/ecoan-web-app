/* jshint indent: 2 */

module.exports = function(sequelize, DataTypes) {
  return sequelize.define('BlockSize', {
    RecordNo1: {
      type: DataTypes.DECIMAL,
      allowNull: true
    },
    ProdDate: {
      type: DataTypes.DATE,
      allowNull: true
    },
    RecorDat: {
      type: DataTypes.DATE,
      allowNull: true
    },
    RecorPreson: {
      type: DataTypes.STRING,
      allowNull: true
    },
    MachineNo: {
      type: DataTypes.INTEGER(11),
      allowNull: true
    }
  }, {
    tableName: 'BlockSize'
  });
};
