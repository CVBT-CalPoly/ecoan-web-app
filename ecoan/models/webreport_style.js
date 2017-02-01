/* jshint indent: 2 */

module.exports = function(sequelize, DataTypes) {
  return sequelize.define('webreport_style', {
    report_style_id: {
      type: DataTypes.INTEGER(11),
      allowNull: false,
      primaryKey: true,
      autoIncrement: true
    },
    type: {
      type: DataTypes.STRING,
      allowNull: false
    },
    field: {
      type: DataTypes.INTEGER(11),
      allowNull: false
    },
    group: {
      type: DataTypes.INTEGER(11),
      allowNull: false
    },
    style_str: {
      type: DataTypes.TEXT,
      allowNull: false
    },
    uniq: {
      type: DataTypes.INTEGER(11),
      allowNull: true
    },
    repname: {
      type: DataTypes.STRING,
      allowNull: false
    },
    styletype: {
      type: DataTypes.STRING,
      allowNull: false
    }
  }, {
    tableName: 'webreport_style'
  });
};
