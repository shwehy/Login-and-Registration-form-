<?php
$servername = "localhost";
$username = "root";
$password = "Ali123";
$dbname = "db_lab3";
$email = $_POST["email"];
$psw = $_POST["psw"];
session_start();
// Create connection
  $_SESSION['table']="";
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if($email == ''){
  die("Error no mail : " . $conn->error);
}
if($psw == ''){
  die("Error pass not matched : " . $conn->error);
}
$hash = md5($psw);




$sql = "SELECT id, name, email,password FROM user WHERE(email = '$email' AND password = '$hash' )";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
if (mysqli_num_rows($result) > 0) {
  $_SESSION['name'] = $row["name"];
  $_SESSION['flag']='0';

    // $_SESSION['table'] = mysqli_fetch_assoc($result1);
  header("Location: Welcome.php");

} else {
  echo '<h2>'.' no match found '.'<br>'.'<a href="Login.php">back </a> '.'</h2';
}

mysqli_close($conn);
?>
