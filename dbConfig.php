<?php include 'login.php';


    $Username=$_POST['Username'];
    $password=$_POST['password'];

    //to prevent sql injections
    $Username=stripcslashes($Username);
    $password=stripcslashes($password);
   // $Username=mysql_real_escape_string($Username);
    //$password=mysql_real_escape_string($password);

    


    $host="localhost";
    $user="root";
    $pass="";
    $db="web";

    
    $conn=mysqli_connect($host,$user,$pass,$db);
    
    
    
    $sql="select *from login where Username='$Username' AND password='$password'";

    $result=mysqli_query($conn,$sql) or die("failed to query database".mysqli_connect_error());

    $row=mysqli_fetch_array($result);
    if($row['Username']== $Username && $row['password']==$password){
        header("location:usergoto.php");
    }
    else{
        echo"login unsuccessfully";
    }
?>

