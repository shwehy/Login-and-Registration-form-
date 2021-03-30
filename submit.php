<?php
$servername = "localhost";
$username = "root";
$password = "Ali123";
$dbname = "db_lab3";
$name = $_POST["Rname"];
$email = $_POST["Remail"];
$psw = $_POST["Rpsw"];
$pswc = $_POST["Rpswc"];
session_start();
$_SESSION['flag'] = '0';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if($name == ''){
  die("Error no name : " . $conn->error);
}
if($email == ''){
  die("Error no mail : " . $conn->error);
}
if($psw == ''||$psw!=$pswc){
  die("Error pass not matched : " . $conn->error);
}
// $hash = BCrypt.hashpw($psw, BCrypt.gensalt());
// $hash = password_hash($psw, PASSWORD_DEFAULT);
$hash = md5($psw);
$sql = "INSERT INTO user (name,email,password)
VALUES ('$name', '$email','$hash')";

if ($conn->query($sql) === TRUE) {
  // echo "New record created successfully";
  // echo '<script>alert("Welcome to Geeks for Geeks")</script>';
$_SESSION['name'] = $name . ' you have been recorded successfully';
$_SESSION['flag']='1';
  header("Location: Welcome.php");
//   $message = "new record";
// echo "<script type='text/javascript'>alert('$message');</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
