 <?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="styleresponsive.css">
<style>

  * {
  margin: 0px;
  padding: 0px;
 }

.topnav {
  overflow: hidden;
  background-color: green;
  margin-top: 50px;
   
}

body{
    background-color: aliceblue;
    padding: 10px 0px;
    height: 150%;
    
}

.policy{
    background-color: teal;
    width: 100.999%;
    height: 15%;
    margin-top: 14%;
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
  margin-top: 3%;

}
 

.topnav a {
  float: right;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.active {
  background-color: violet;
  color: white;
}

.topnav .icon {
  display: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 17px;    
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: green;
  font-family: inherit;
  margin: 0;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: green;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: green;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}
 
.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: red;
  color: white;
}

.dropdown-content a:hover {
  background-color: #ddd;
  color: black;
}

.dropdown:hover .dropdown-content {
  display: block;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}
</style>
</head>
<body>

   <div align="center" class="logo">
            <img src="logo.jpg">

<div class="topnav" id="myTopnav">
  <a href="start.php">BACK</a>
            <a href="startpage.php"><i class="fa fa-fw fa-home"></i> HOME</a>
             <a href="services.php">SERVICES</a>
             <a href="contact.php"><i class="fa fa-fw fa-envelope"></i> CONTACT</a>
             <a href="news.php">NEWS</a>
             <a href="about.php">ABOUT</a>
            <a  href="register.php"><i class="fa fa-fw fa-user"></i>REGISTER</a>
   
  <a href="#about">About</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

 

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
 <div class="header">
    <h2>Login</h2>
  </div>
   
  <form method="post" action="login.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" >
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="login_user"><i class="fa fa-fw fa-user"></i>Login</button>
    </div>
    <p>
      Not yet a member? <a href="register.php"><i class="fa fa-fw fa-user"></i>Sign up</a>
    </p>
  </form>


  <div style="margin-left: -1%;  " class="about">
    <b style="margin-left: -1%; background-color: purple;  text-decoration: underline;">About RONO Pharmacy</b>
    <p>
    RONO Pharmacy is a private pharmacy organization which was started on 1999. Due to the fact that this organization has grown up so fast
    through offerring of safe and high quality services, it has openned up offices in some recognized towns such as Nyeri Town. Although, 
    this Pharmacy is actually located in Nairobi City opposite Bomas of Kenya, RONO Pharmacy(PLAZA).

    </p>
    
    
    RONO PHARMACY IS WHERE YOU FIND SERVICES OF NO REGRETS.<br><br>
    
     
    
</div>

        <div style="margin-left: -1%;  " class="policy">
           <p>RONO Pharmacy Sysyem is a Pharmacy Management System which is optimized to make work easier in recording, retrieving and viewing 
               pharmacy's activities. This system is a web-based management system and it is used as per the terms and conditions of the privacy
                policy.
           </p>
           
       </div>


</body>
</html>
