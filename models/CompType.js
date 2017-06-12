/* jshint indent: 2 */

module.exports = function(sequelize, DataTypes) {
  return sequelize.define('CompType', {
    CompTypeEng: {
      type: DataTypes.STRING,
      allowNull: false
    },
    CompTypeLL: {
      type: DataTypes.STRING,
      allowNull: true
    },
    DetailsEng: {
      type: DataTypes.STRING,
      allowNull: true
    },
    detailsLL: {
      type: DataTypes.STRING,
      allowNull: true
    },
    CompTypeNo: {
      type: DataTypes.INTEGER(11),
      allowNull: false,
      primaryKey: true,
      autoIncrement: true
    },
    Owner: {
      type: DataTypes.STRING,
      allowNull: true
    }
  }, {
    tableName: 'CompType'
  });
};
