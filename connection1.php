<?php 
  $host="localhost";
  $user="root";
  $pass="";
  $db="web";

  
  $conn=mysql_connect($host,$user,$pass,$db);
  
  if($conn){
      echo"connected successful";
  }
  else{
      die("connection error".mysqli_connect_error());
  }



?>