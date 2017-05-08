function signup() {
  var id = document.getElementById("signup-id").value;
  var pass = document.getElementById("signup-pass").value;
  var verif = document.getElementById("signup-pass2").value;

  $.ajax({
    "url": "http://localhost:3000/signup/" + tableName,
    "type": "POST",
    "data": JSON.stringify(newTable),
    success: function(result) {
      selectedRow.remove().draw();
      row = {};
    }
  });
}
