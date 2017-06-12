/* jshint indent: 2 */

module.exports = function(sequelize, DataTypes) {
  return sequelize.define('WhoPriceSell', {
    DistributorName: {
      type: DataTypes.STRING,
      allowNull: false
    },
    DistributorAddress: {
      type: DataTypes.STRING,
      allowNull: true
    },
    DistributorAddress2: {
      type: DataTypes.STRING,
      allowNull: true
    },
    DistributorLocation: {
      type: DataTypes.STRING,
      allowNull: true
    },
    District: {
      type: DataTypes.STRING,
      allowNull: false
    },
    Province: {
      type: DataTypes.STRING,
      allowNull: false
    },
    ZipC: {
      type: DataTypes.STRING,
      allowNull: true
    },
    Telephone: {
      type: DataTypes.STRING,
      allowNull: true
    },
    ReceiptNote: {
      type: DataTypes.STRING,
      allowNull: true
    },
    ContactPerson: {
      type: DataTypes.STRING,
      allowNull: true
    },
    Type: {
      type: DataTypes.STRING,
      allowNull: true
    },
    DisplayStandRomanIIrooftile: {
      type: DataTypes.STRING,
      allowNull: true
    },
    DisplayStandSemiSheetRoofTile: {
      type: DataTypes.STRING,
      allowNull: true
    },
    DisplayStandPavingSlab: {
      type: DataTypes.STRING,
      allowNull: true
    },
    DateBeganDistributing: {
      type: DataTypes.DATE,
      allowNull: true
    },
    DateEndedDistributing: {
      type: DataTypes.DATE,
      allowNull: true
    },
    CustomerType: {
      type: DataTypes.STRING,
      allowNull: false
    },
    DistributorCode: {
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
    tableName: 'WhoPriceSell'
  });
};
