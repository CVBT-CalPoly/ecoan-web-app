/* jshint indent: 2 */

module.exports = function(sequelize, DataTypes) {
  return sequelize.define('EmpSalary', {
    Position: {
      type: DataTypes.STRING,
      allowNull: false,
      primaryKey: true
    },
    Salary: {
      type: "DOUBLE",
      allowNull: true
    }
  }, {
    tableName: 'EmpSalary'
  });
};
