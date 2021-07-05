<?php 
  $host="localhost";
  $user="root";
  $pass="";
  $db="web";

  
  $conn=mysql_connect($host,$user,$pass);
  $con=mysql_select_db($db,$conn);

  
?>