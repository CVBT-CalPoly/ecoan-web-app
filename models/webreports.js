/* jshint indent: 2 */

module.exports = function(sequelize, DataTypes) {
  return sequelize.define('webreports', {
    rpt_id: {
      type: DataTypes.INTEGER(11),
      allowNull: false,
      primaryKey: true,
      autoIncrement: true
    },
    rpt_name: {
      type: DataTypes.STRING,
      allowNull: false
    },
    rpt_title: {
      type: DataTypes.STRING,
      allowNull: true
    },
    rpt_cdate: {
      type: DataTypes.DATE,
      allowNull: false
    },
    rpt_mdate: {
      type: DataTypes.DATE,
      allowNull: true
    },
    rpt_content: {
      type: DataTypes.TEXT,
      allowNull: false
    },
    rpt_owner: {
      type: DataTypes.STRING,
      allowNull: false
    },
    rpt_status: {
      type: DataTypes.STRING,
      allowNull: false,
      defaultValue: "public"
    },
    rpt_type: {
      type: DataTypes.STRING,
      allowNull: false
    }
  }, {
    tableName: 'webreports'
  });
};
