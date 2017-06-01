$(document).ready( function () {

  $.ajax({
    "url": "http://localhost:3000/api/user_data",
    "type": "GET",
    success: function(result) {
      if (result.username.IsAdmin) {
        var backupButton = document.createElement('a');

        backupButton.className = "button expanded";
        backupButton.href = "#";
        backupButton.innerHTML = "View Backups";

        document.body.appendChild(backupButton);
      }
    }
  });
});
