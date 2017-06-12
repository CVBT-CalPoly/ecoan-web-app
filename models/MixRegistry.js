/* jshint indent: 2 */

module.exports = function(sequelize, DataTypes) {
  return sequelize.define('MixRegistry', {
    MixNo: {
      type: DataTypes.INTEGER(11),
      allowNull: false,
      defaultValue: "0",
      primaryKey: true
    },
    MixColor: {
      type: DataTypes.STRING,
      allowNull: true
    },
    ProdGrpCode: {
      type: DataTypes.STRING,
      allowNull: false,
      defaultValue: "",
      primaryKey: true
    },
    Notes: {
      type: DataTypes.STRING,
      allowNull: true
    },
    Status: {
      type: DataTypes.CHAR(1),
      allowNull: true
    },
    Owner: {
      type: DataTypes.STRING,
      allowNull: true
    }
  }, {
    tableName: 'MixRegistry'
  });
};
