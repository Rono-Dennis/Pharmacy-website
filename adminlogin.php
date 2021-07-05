<?php

session_start();

$con = mysqli_connect('localhost', 'root', '', 'youtubeadmin');

  

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	 
    <link rel="stylesheet" type="text/css" href="style56.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styledoc1.css">
	

<style>
    
.heading{
    width: 100.1%;
     
}

    .policy{
    background-color: teal;
    width: 100.999%;
    height: 15%;
    margin-top: 34%;
    position: absolute;
    text-align: center;
    font-size: 20px;

}

.about{

  background-color: gold;
  width: 100.999%;
  height: 15%;
  position: absolute;
  font-size: 20px;
  text-align: center;
  margin-top: 23%;

}

     @media screen and (max-width: 600px){
        .body{
            margin-top:     -2%;
        }
        .container{
            margin-top:     -7%;
            display: block;
             
             
            width: 100%;
             
        }
         
        .about{
            margin-top:     70%;
            font-size:  10px;
            height: 10%;
        }
        .policy{
            margin-top:     88%;
            font-size:  10px;
            height: 10%;
        }
        .other-written{
            margin-top:     -2%;
        }
        .logo{
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }
        .heading{
             display: block;
            margin-left: 1.5%;
            margin-right: auto;
            width: 90%;
            margin-top: 15%;

        }
     }
</style>


</head>
 <header>
 


        

     

 
    
    <div class="logo">
            <img src="logo.jpg">

    </div>
    <b style="color:green; margin-left:45%; font-size: 20px;">RONO</b><br>
     
    <div class="hd">
            <ul class="hed">
            
            <li><a href="startpage.php">HOME</a></li> 
            <li><a href="services.php">SERVICES</a></li>
            <li><a href="contact.php">CONTACT</a></li>
            <li><a href="news.php">NEWS</a></li>
            <li><a href="about.php">ABOUT</a></li>
             
        </ul>
        </div>
<br>

<div class="grn">

        <a href="" class="back"></a>
    </div><br>

     
</header>
<body class="body">
	<div class="container center-div shadow">
		<div class="heading text-center mb-5 text-uppercase text-white ">ADMIN LOGIN PAGE</div>
 
     <div class="container row d-flex flex-row justify-content-center md-5">
     	
         <div class="admin-form shadow p-2" >

         	<form action="logincheck.php" method="POST">
         		
         		<div class="form-group">
         		<label>Email ID</label>
         		<input type="text" name="user"  class="form-control" value="" autocomplete="off"></div>

         		<div class="form-group">
         		<label>Password</label>
         		<input type="pass" name="pass" class="form-control" value="" autocomplete="off"></div>

             <input type="submit" class="btn btn-success" name="send" value="submit">
      
         	</form>
         </div>
     </div>

     </div>

 
<div style="margin-left: -1%;  " class="about">
    <b style="margin-left: -1%; background-color: purple;  text-decoration: underline;">About RONO Pharmacy</b>
    <p>
    RONO Pharmacy is a private pharmacy organization which was started on 1999. Due to the fact that this organization has grown up so fast
    through offerring of safe and high quality services, it has openned up offices in some recognized towns such as Nyeri Town. Although, 
    this Pharmacy is actually located in Nairobi City opposite Bomas of Kenya, RONO Pharmacy(PLAZA).

    </p>
    
    
    <div class="other-written">RONO PHARMACY IS WHERE YOU FIND SERVICES OF NO REGRETS.</div>
    
     
    
</div>

        <div style="margin-left: -1%;  " class="policy">
           <p>RONO Pharmacy Sysyem is a Pharmacy Management System which is optimized to make work easier in recording, retrieving and viewing 
               pharmacy's activities. This system is a web-based management system and it is used as per the terms and conditions of the privacy
                policy.
           </p>
           
       </div>


</body>
</html>