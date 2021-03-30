<html>
<head>
  <meta charset="UTF-8">
    <title>my sample webpage</title>
    <link href="stylesheet/mystyle.css" rel="stylesheet" type="text/css">
</head>
<h1>Page </h1>
<body>
      <div class="centerDiv1">
             <?php
               session_start();
             $servername = "localhost";
             $username = "root";
             $password = "Ali123";
             $dbname = "db_lab3";
             $conn = mysqli_connect($servername, $username, $password, $dbname);
             // Check connection
             if (!$conn) {
               die("Connection failed: " . mysqli_connect_error());
             }

             echo'<h2>Welcome '. $_SESSION['name'].'</h2>';
             echo "<br>";
             if($_SESSION['flag']=='0') {
             $sql1 = "SELECT id, name, description FROM department";
             $result1=mysqli_query($conn, $sql1);
             if ($result1->num_rows > 0) {
              // output data of each row
              while($row = $result1->fetch_assoc()) {
                echo "id: " . $row["id"]. " - Name: " . $row["name"]. "--->  " . $row["description"]. "<br>";
              }
            }
          }
              ?><br>
              <div class="center">
                <button type="button" id="submitA" onclick="location.href = 'Login.php';" > Back </button>
            </div>
        </div>
</body>
</html>
