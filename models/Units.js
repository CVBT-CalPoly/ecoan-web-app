/* jshint indent: 2 */

module.exports = function(sequelize, DataTypes) {
  return sequelize.define('Units', {
    UnitEng: {
      type: DataTypes.STRING,
      allowNull: false,
      primaryKey: true
    },
    Unit_LL: {
      type: DataTypes.STRING,
      allowNull: true
    },
    Unit_English_Full: {
      type: DataTypes.STRING,
      allowNull: true
    },
    Unit_LL_Full: {
      type: DataTypes.STRING,
      allowNull: true
    },
    Unit_Type_English: {
      type: DataTypes.STRING,
      allowNull: true
    },
    Rel_to_Base: {
      type: "DOUBLE",
      allowNull: true
    },
    Owner: {
      type: DataTypes.STRING,
      allowNull: true
    }
  }, {
    tableName: 'Units'
  });
};
