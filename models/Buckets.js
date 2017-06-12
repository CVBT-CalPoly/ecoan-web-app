/* jshint indent: 2 */

module.exports = function(sequelize, DataTypes) {
  return sequelize.define('Buckets', {
    UnitEng: {
      type: DataTypes.STRING,
      allowNull: true
    },
    BucketNo: {
      type: DataTypes.INTEGER(11),
      allowNull: true
    },
    Volume: {
      type: "DOUBLE",
      allowNull: true
    },
    ComponentNo: {
      type: DataTypes.INTEGER(11),
      allowNull: true
    },
    DryWeight: {
      type: "DOUBLE",
      allowNull: true
    },
    Owner: {
      type: DataTypes.STRING,
      allowNull: true
    }
  }, {
    tableName: 'Buckets'
  });
};
