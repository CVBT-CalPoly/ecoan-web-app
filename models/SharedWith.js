module.exports = function(sequelize, DataTypes) {
  return sequelize.define('SharedWith', {
    host: {
      type: DataTypes.STRING,
      allowNull: false,
      primaryKey: true
    },
    share: {
      type: DataTypes.STRING,
      allowNull: false,
      primaryKey: true
    },
    Owner: {
      type: DataTypes.STRING,
      allowNull: true
    }
  }, {
    tableName: 'SharedWith'
  });
};
