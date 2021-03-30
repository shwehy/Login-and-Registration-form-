<!DOCTYPE html>
<?php
// session_start();
// $var = $_SESSION['varname'];


 ?>
<html>
    <head>
      <meta charset="UTF-8">
        <title>my sample webpage</title>
        <link href="stylesheet/mystyle.css" rel="stylesheet" type="text/css">
    </head>
<body>
    <h1 id="titleForm">Welcome to the form</h1>
    <div class="centerDiv1">
   <form action="search.php" method="post" name="loginForm" onsubmit="return validateLoginForm()">
       <div class="center divForm1">
      <h1>Login</h1>
      <div class="formcontainer ">
      <hr/>
      <div class="container">
        <label for="uname"><strong>Email</strong></label>
        <input type="text" placeholder="Enter Email" name="email" ><br>
        <label for="psw"><strong>Password</strong></label>
        <input type="password" placeholder="Enter Password" name="psw">
      </div>
          <div class="center">
           <button type="submit" id="submitB" >Login</button>
          </div>

           </div>
           </div>
          </form>
       <form action="submit.php" method="post" name="registerForm" onsubmit="return validateRegForm()">

        <div class="divForm2 center">
        <h1>Register</h1>
      <div class="formcontainer">
      <hr/>
      <div class="container ">
        <label for="uname"><strong>Name</strong></label>
        <input type="text" placeholder="Enter your name" name="Rname" ><br>
        <label for="uemail"><strong>Email</strong></label>
        <input type="text" placeholder="Enter Email" name="Remail" ><br>
        <label for="psw"><strong>Password</strong></label>
        <input type="password" placeholder="Enter Password" name="Rpsw" ><br>
        <label for="psw"><strong>Confirm Password</strong></label>
        <input type="password" placeholder="Enter Password" name="Rpswc" ><br>
      </div>
      <div class="center">
           <button type="submit" id="submitA" onsubmit="return validateEmail()">signUp</button>
          </div>

    </div>
    <!-- <label>$var_value</label> -->
   </div>
    </form>
</div>

</body>
    <script src="login1.js"></script>
</html>
