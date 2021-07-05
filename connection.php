<?php 
  $host="localhost";
  $user="root";
  $pass="";
  $db="web";

  
  $conn=mysqli_connect($host,$user,$pass,$db) or
      die("connection error".mysqli_connect_error());
  



?>