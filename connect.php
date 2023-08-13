<?php
$servername = "localhost";
$database = "bdinfinite";
$username = "root";
$pass = "";
// Create connection
try{
      $conn = mysqli_connect($servername, $username, $pass, $database);
}
catch(mysqli_sql_exception){
      echo"Could not connect";
}



?>