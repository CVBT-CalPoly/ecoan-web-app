function login() {
  var id = document.getElementById("login-id").value;
  var pass = document.getElementById("login-pass").value;
  if(id === "admin" && pass === "password") {
    window.location.replace("table/prodhistory");
  }
}
