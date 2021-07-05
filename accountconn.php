<?php
include ("account.php");


$name=$_POST['name'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];
$host="localhost";
$user="root";
$pass="";
$db="web";
$conn=mysqli_connect($host,$user,$pass,$db);
  
if(!$conn){
    die("Connection failed" .mysqli_connect_error());
}
else{

    if($_POST['pass']===$_POST['cpass']){
        $stm=$conn -> prepare("insert into login(Username,password) values(?,?)");
        $stm -> bind_param("ss",$name,$cpass);
        $stm-> execute();
        echo'<script href="doctor.php" type="text/javascript">alert("Account Created Successfully...")</script>';
    }

    else{
        echo'<script type="text/javascript">alert("Password did not match!")</script>';
    }    


}


?>