/* jshint indent: 2 */

module.exports = function(sequelize, DataTypes) {
  return sequelize.define('blobtest', {
    PictureS: {
      type: "TINYBLOB",
      allowNull: true
    },
    PictureM: {
      type: "BLOB",
      allowNull: true
    },
    PictureL: {
      type: "MEDIUMBLOB",
      allowNull: true
    },
    ID: {
      type: DataTypes.INTEGER(11),
      allowNull: true
    }
  }, {
    tableName: 'blobtest'
  });
};
