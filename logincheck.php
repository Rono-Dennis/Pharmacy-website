<?php

session_start();

$con = mysqli_connect('localhost', 'root', '', 'youtubeadmin');

 

$db = mysqli_select_db($con, 'youtubeadmin');

if (isset($_POST['send'])) {
	$user = $_POST['user'];
	$pass = $_POST['pass'];

	$sql = "select * from admintable where user = '$user' and pass = '$pass'";
	$query = mysqli_query($con, $sql);

	$row = mysqli_num_rows($query);
		if ($row == 1) {
			echo "login succesful";
			$_SESSION['user'] = $user;
			header('location:adminmainpage.php');

		}else{
			echo "login failed";
			header('location:adminlogin.php');
		}
	}


?>
