$(document).ready( function () {

  $.ajax({
    "url": "/api/user_data",
    "type": "GET",
    success: function(result) {
      // removes view backups button if not an admin
      if (!result.username.IsAdmin) {
        (function(x){x.parentNode.removeChild(x);})(document.getElementById("backup_button"));
      }
    }
  });
});
