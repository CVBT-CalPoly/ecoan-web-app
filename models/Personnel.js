/* jshint indent: 2 */

module.exports = function(sequelize, DataTypes) {
  return sequelize.define('Personnel', {
    FirstName: {
      type: DataTypes.STRING,
      allowNull: true
    },
    lastname: {
      type: DataTypes.STRING,
      allowNull: true
    },
    FirstNmThai: {
      type: DataTypes.STRING,
      allowNull: true
    },
    LastNmThai: {
      type: DataTypes.STRING,
      allowNull: true
    },
    HireDate: {
      type: DataTypes.DATE,
      allowNull: true
    },
    EndDate: {
      type: DataTypes.DATE,
      allowNull: true
    },
    Salarys: {
      type: DataTypes.DECIMAL,
      allowNull: true
    },
    SalaryTimePeriod: {
      type: DataTypes.STRING,
      allowNull: true
    },
    BirthDate: {
      type: DataTypes.DATE,
      allowNull: true
    },
    HouseNo: {
      type: DataTypes.STRING,
      allowNull: true
    },
    Village: {
      type: DataTypes.STRING,
      allowNull: true
    },
    District: {
      type: DataTypes.STRING,
      allowNull: true
    },
    Ampher: {
      type: DataTypes.STRING,
      allowNull: true
    },
    Provence: {
      type: DataTypes.STRING,
      allowNull: true
    },
    ZipC: {
      type: DataTypes.STRING,
      allowNull: true
    },
    Mobie: {
      type: DataTypes.STRING,
      allowNull: true
    },
    sex: {
      type: DataTypes.STRING,
      allowNull: true
    },
    NationaiIDCardNo: {
      type: DataTypes.STRING,
      allowNull: true
    },
    DateofIssue: {
      type: DataTypes.DATE,
      allowNull: true
    },
    DateofExpiry: {
      type: DataTypes.DATE,
      allowNull: true
    },
    DrivingCard: {
      type: DataTypes.STRING,
      allowNull: true
    },
    IssueDate: {
      type: DataTypes.DATE,
      allowNull: true
    },
    ExpiryDate: {
      type: DataTypes.DATE,
      allowNull: true
    },
    Finish: {
      type: DataTypes.STRING,
      allowNull: true
    },
    NameSchool: {
      type: DataTypes.STRING,
      allowNull: true
    },
    EmpPhoto: {
      type: "BLOB",
      allowNull: true
    },
    AccountNo: {
      type: DataTypes.STRING,
      allowNull: true
    },
    BankName: {
      type: DataTypes.STRING,
      allowNull: true
    },
    EmpNo: {
      type: DataTypes.INTEGER(11),
      allowNull: false,
      primaryKey: true,
      autoIncrement: true
    }
  }, {
    tableName: 'Personnel'
  });
};
