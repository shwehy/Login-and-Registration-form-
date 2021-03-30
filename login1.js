function validateRegForm() {
    var username = document.forms["registerForm"]["Rname"].value;
    var email = document.forms["registerForm"]["Remail"].value;
    var psw = document.forms["registerForm"]["Rpsw"].value;
    var cpsw = document.forms["registerForm"]["Rpswc"].value;
    const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    if (username == "") {
      alert("Name must be filled out");
      return false;
    }
    if (email == "") {
        alert("E-mail must be filled out");
        return false;
      }
      if(!(re.test(email))){
        alert("email is invalid");
        return false;
      }
      if (psw == "") {
        alert("Password must be filled out");
        return false;
      }
      if (cpsw == "") {
        alert("You must confirm your password");
        return false;
      }
      if (cpsw != psw){
          alert("Passwords are not matching");
          return false;
      }
  }

  function validateLoginForm(){
    var email = document.forms["loginForm"]["email"].value;
    var psw = document.forms["loginForm"]["psw"].value;
    const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (email == "") {
        alert("E-mail must be filled out");
        return false;
      }
    if (psw == "") {
        alert("Password must be filled out");
        return false;
  }
  if(!(re.test(email))){
    alert("email is invalid");
    return false;
  }

}
