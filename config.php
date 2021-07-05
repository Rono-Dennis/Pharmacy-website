 <?php

 $servername = "localhost";
 $dBUsername = "root";
 $dBPassword = "";
 $dBName     = "web";

 $conn  = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

 if (!$conn) {
 	die("connection failed: ".mysqli_connect_error());
 }
 	<?php
if (isset($_POST['create'])) {
	 
	 reguire 'config.php'; 

	$username       = $_POST['uid'];
	$email          = $_POST['mail'];
	$password       = $_POST['pwd'];
	$passwordRepeat = $_POST['pwd-repeat'];
	//$Password    = $_POST['Password'];

	if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat)) {
		header("Location: registration.php? error=emptyfields&uid=".$username."&email=" .$email);
		exit();
	}
	else if (!filter_var($email, FILTER_VALIDATE_EMAIL) &&  !preg_match("/^[a-zA-Z0-9]*$/", $username)){
		header("Location: registration.php?error=invalidmail&uid=".$username);
    	exit();
	}
    
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    	header("Location: registration.php?error=invalidmail&uid=".$username);
    	exit();
    }

    elseif (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    	header("Location: registration.php? error=invalidui&mail=".$email);
    	exit();
    }

    elseif ($password !== $passwordRepeat) {
    	header("Location: registration.php? error=passwordcheckuid=".$username."&mail=".$email);
    	exit();
    }

    else {
    	$sql = "SELECT uidUsers FROM users WHERE uidUsers=?";

    	$stmt = mysqli_stmt_init($conn);
    	if (!mysqli_stmt_prepare($stmt, $sqli)) {
    		header("Location: registration.php?error=sqlerror");
    		exit();
    	}
    	else{
    		mysqli_stmt_bind_param($stmt, "s", $username,);
    		mysqli_stmt_execute($stmt);
    		mysqli_stmt_store_result($stmt);
    		$resultCheck = mysqli_stmt_num_rows($stmt);
    		if ($resultCheck > 0) {
    			header("Location: registration.php? error=usertaken&mail=".$email);
    	        exit();
    		}
    		else{
    			$sql = "INSERT INTO users (uidUsers, emailUsers, pwdUsers) VALUES (?, ?, ?)";
    			$stmt = mysqli_stmt_init($conn);
    	        if (!mysqli_stmt_prepare($stmt, $sqli)) {
    	    	header("Location: registration.php?error=sqlerror");
    		    exit();
    		    }
    		    else{
                  $hashedPwd = password_hash($password , PASSWORD_DEFAULT);


    		    	mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
    		    	mysqli_stmt_execute($stmt);
    		    	header("Location: registration.php?registration=success";
    		    		exit();
    		    }
    		}
    	}
    }

    //mysqli_stmt_close($stmt);
    //mysqli_close('');


    //$sql = "INSERT INTO users (firstname, lastname, email, phonenumber, Password) VALUES('$firstname','$lastname','$email','$phonenumber','$Password')";

   //$result=mysqli_query($conn,$sql);

    //if ($result) { 
    	//echo 'successfully saved';
    //}
   // else{
    //	echo 'There were errors while saving the data';  
   // }

	//echo $firstname . " " . $lastname . "" . $email . " " . $phonenumber . " " . $Password;
}

	?>