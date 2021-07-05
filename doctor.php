<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>

<?php
$con = mysqli_connect('localhost', 'root', '', 'youtubeadmin');
include ("connection.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
   

<style>
body{
    background-color: aliceblue;
    padding: 0px 0px;
    height: 150%;
  }


.navbar {
  overflow: hidden;
  background-color: green;
  font-family: Arial, Helvetica, sans-serif;
  margin-top: 15%;
}
* {
  margin: 0px;
  padding: 0px;
}

.header {
  width: 50%;
  margin: 3px auto 0px;
  color: white;
  background: #5F9EA0;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 10px;

   
}


.frm{
    border: 1px solid green;
    position: absolute;
    width: 85%;
    padding: 20px;
    margin-left: 9%;
    margin-top: -1%;
    height: 70%;
}
.frm1{
    margin-left: 10%;
    height: 90%;
    width: 50%;
}

.frm2{
    margin-left: 40%;
    position: absolute;
    margin-top: -30%;
}


.btn1{
    padding: 0px 20px;
    color: black;
    background-color: greenyellow;
    border: 1px solid green;
    text-decoration: none;
}
.btn1:hover{
    border: 2px solid goldenrod;
}

.btn2:hover{
    border: 2px solid goldenrod;
}


.btn2{
    margin-left: 69%;
    padding: 0px 20px;
    color: black;
    background-color: green;
    border: 1px solid rgb(245, 27, 38);
    text-decoration: none;
}

.sea{
    padding-block-end: 0%;
    margin-top: -26%;
    margin-left: 78.5%;
    
}


form, .content {
  width: 32%;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid #B0C4DE;
  background: white;
  border-radius: 0px 0px 10px 10px;
  margin-left:65%;
}
.input-group {
  margin: 18px 0px 18px 0px;
}
.input-group label {
  display: block;
  text-align: left;
  margin: 3px;
}
.input-group input {
  height: 30px;
   
  padding: 5px 12px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}

.input-group1 input {
  height: 30px;
  width: 30%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}

 
.error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
}
.success {
  color: #3c763d; 
  background: #dff0d8; 
  border: 1px solid #3c763d;
  margin-bottom: 20px;
}

.centgoto{
    border: 1px solid #3c3c3c;
    background: none;
    width: 700px;
    height: 249px;
    padding: 0px;
    margin-left: 20%;
    position: absolute;
    

}

.btn3{
     
     
    position: absolute;
    padding: 0px 20px;
    color: black;
    background-color: blue;
    border: 1px solid green;
    text-decoration: none;
    border-radius: 5px;
}
.btn3:hover{
    border: 2px solid goldenrod;
}

.policy{
    background-color: teal;
    width: 100%;
    height: 15%;
    margin-top: 47%;
    position: absolute;
    text-align: center;
    font-size: 20px;

}

.about{

  background-color: gold;
  width: 100%;
  height: 15%;
  position: absolute;
  font-size: 20px;
  text-align: center;
  margin-top: 37%;

}

.navbar a {
  float: right;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}

@media screen and (max-width: 600px) {
  .navbar a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .navbar a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .navbar.responsive {position: relative;}
  .navbar.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .navbar.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .navbar.responsive .dropdown {float: none;}
  .navbar.responsive .dropdown-content {position: relative;}
  .navbar.responsive .dropdown .dropbtn {
    display: block;
    width: 150%;
    text-align: left;
  }
}


</style>
</head>
<body>

  <div style="position: absolute;  margin-left: 40%; margin-top: -15%; " class="logo">
            <img src="logo.jpg">


  <div style="position: absolute; margin-left: 339%; margin-top: -69%; " class="header">
    <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
        <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
        <p> <a href="start.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>

        

    </div>

<div class="navbar" id="myTopnav">
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
  <a href="startpage.php"><i class="fa fa-fw fa-home"></i> HOME</a>  
  <a href="services.php">SERVICES</a> 
   <a href="news.php">NEWS</a>
   <a href="contact.php"><i class="fa fa-fw fa-envelope"></i> CONTACT</a>
   <a href="about.php">ABOUT</a>    

  <div class="dropdown">
    <button class="dropbtn">Our Services 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
             <a href="startpage.php">Home</a>           
             <a href="login.php">Login</a> 
             <a href="userpharmacy.php">Pharmacy</a> 
             <a href="userstore.php">Pharmacy Store</a> 
             <a href="userpayments.php">Payments</a> 
              
<a href="doctor.php">Doctor</a>
<a href="useradd.php">AddUser</a>
 
 
 
 
 
    </div>
  </div>
   
</div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "navbar") {
    x.className += " responsive";
  } else {
    x.className = "navbar";
  }
}
</script>
 <div> <marquee>Rono </marquee>  </div>


<div class="frm">
                <B style="margin-left: 33%;">PLEASE FILL ALL THE DETAILS</B>
            <form class="frm1" method="GET" action="">
                
                <div class="input-group">
                <label style="margin-left: 9%;" >Doctor's Name</label>
                <input style="margin-left: 9%;"  type="text" name="docname" value=""></div>
                <div class="input-group">
                <label style="margin-left: 9%;" >Doctor ID</label>
                <input style="margin-left: 9%;" type="text" name="docid" value=""></div>
                <div class="input-group">
                <label style="margin-left: 9%;" >Email Address</label>
                <input style="margin-left: 9%;" type="email" name="emaddr" value=""></div>
                <div class="input-group">
                <label style="margin-left: 9%;" >Medical Centre Name</label>
                <input style="margin-left: 9%;" type="text" name="cename" value=""></div>
                <div class="input-group">

                <label style="margin-left: 9%;" >Medical Centre Address</label>
                <input style="margin-left: 9%;" type="text" name="cenaddr" value=""></div>

                <div class="frm2">

                <div class="input-group">                     
                <label style="margin-left: -90%;" >Medical Centre RefNo</label>
                <input style="margin-left: -90% " type="text" name="cenref" value=""></div>
                <div class="input-group">                     
                <label style="margin-left: -90%;" >Office No1</label>
                <input style="margin-left: -90%;" type="text" name="offno1" value=""></div>
                <div class="input-group">
                <label style="margin-left: -90%;" >Office No2</label>
                <input style="margin-left: -90%;" type="text" name="offno2" value=""></div>
                <div class="input-group">
                <label style="margin-left: -90%;" >Working Days</label>
                <input style="margin-left: -90%;" type="text" name="workingdays" value=""></div>
                <div class="input-group">
                <label style="margin-left: -90%;" >NHIF NO</label>
                <input style="margin-left: -90%;" type="text" name="nhif" value=""></div> </div>
    
                    
                    <br>
                    <br>
                <div class="btn">
                <input type="submit" name="register" class="btn1" value="Register">
                <input type="button" name="cancel" class="btn2" value="Cancel">

                <b style="color: green; margin-left: 20%;  font-style: italic;">Register and create doctor's system login account</b>
        
       <a href="account.php" class="btn3">Create Account</a>
                
            </div></div>

                </form>
               <?php
 if(isset($_GET['register'])){
$docname=$_GET['docname'];
$docid=$_GET['docid'];
$emaddr=$_GET['emaddr'];
$cename=$_GET['cename'];
$cenaddr=$_GET['cenaddr'];
$cenref=$_GET['cenref'];
$offno1=$_GET['offno1'];
$offno2=$_GET['offno2'];
$workingdays=$_GET['workingdays'];
$nhif=$_GET['nhif'];

$sql="insert into doctor values('$docname','$docid','$emaddr','$cename','$cenaddr','$cenref','$offno1',
'$offno2','$workingdays','$nhif')";

$result=mysqli_query($conn,$sql);

if($result){
    echo"Doctor Details Inserted to Database Successfully";
}
else{
    echo"data failed to be inserted into the database";
}
}

?>          

 


        

        </div>

        <div style="margin-left: 0%;  " class="about">
    <b style="margin-left: -45%; background-color: purple;  text-decoration: underline;">About RONO Pharmacy</b>
    <p>
    RONO Pharmacy is a private pharmacy organization which was started on 1999. Due to the fact that this organization has grown up so fast
    through offerring of safe and high quality services, it has openned up offices in some recognized towns such as Nyeri Town. Although, 
    this Pharmacy is actually located in Nairobi City opposite Bomas of Kenya, RONO Pharmacy(PLAZA).

    </p>
    
    
    RONO PHARMACY IS WHERE YOU FIND SERVICES OF NO REGRETS.<br><br>
    
    <b style="font-style: italic; margin-left: 79%;">Welcome to RONO Pharmacy.</b><br><br>
    
</div>

        <div style="margin-left: 0%;  " class="policy">
           <p>RONO Pharmacy Sysyem is a Pharmacy Management System which is optimized to make work easier in recording, retrieving and viewing 
               pharmacy's activities. This system is a web-based management system and it is used as per the terms and conditions of the privacy
                policy.
           </p>
           
       </div>


</body>
</html>
