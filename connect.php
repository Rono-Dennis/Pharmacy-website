 <?php

 $servername = "localhost";
 $username = "root";
 $password = "";
 $db="web";

 //Create connection
 $conn = mysqli_connect($servername, $username, $password, $db);

 //Check connection
 if (!conn) {
 	die("connection failed" .mysqli_connect_error());
 }
 echo "Connected successsfully";
 ?>