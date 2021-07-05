
<!DOCTYPE html>
<head>
    <title>Create Account</title>
    <link rel="stylesheet" type="text/css" href="styleacc2.css">
</head>
<body>

    </div>
    <div class="logo">
            <img style="width: 100px;" src="logo.jpg">

    </div>
    <b style="color:white; margin-left:45%; font-size: 20px;">RONBIZ</b><br>
<a href="lacc.php" style=" margin-left: 95%; position: absolute;">Logout</a><br>
    <div class="hd">
            <ul class="hed">
            <li><a href="startpage.php">HOME</a></li>
            <li><a href="services.php">SERVICES</a></li>
            <li><a href="contact.php">CONTACT</a></li>
            <li><a href="news.php">NEWS</a></li>
            <li><a class="active" href="about.php">ABOUT</a></li>
            <li><a style="background-color: cadetblue; color: blue;" href="login.php">LOGIN</a></li>

        </ul>
        </div>

<div class="grn">

        <br>
    </div>

    </div>
</div>

    
    <div >
    <div style="background-color:aliceblue;
    margin:15px auto;
    border: solid grey;
    width: 20%;
    height: 50%; 
    font-size:20px;
    padding:15px 50px; ">
    <form method="POST" action="accountconn.php" >
        
        <b style="font-style: italic; color: green; text-decoration: underline; margin-left: 20%; background-color:rgb(10, 187, 241);
        border-radius: 50px; font-size: 20px; border: none; padding: 20px;">Create Account</b>
        <br><br> <br><b style="color:  rgb(10, 187, 241);font-style: italic;">Set username</b><br>
        <input style="width:100%; font-size:20px;"type="text" name="name" placeholder="set your username" value="" required>
        <br>
        <br>
        <b style="color:  rgb(10, 187, 241); font-style: italic;">Set password</b>
        <input style="width:100%;font-size:20px;"type="password" name="pass" placeholder="set your password" value="" required>
        <br>
        <br>
        <b style="color:  rgb(10, 187, 241); font-style: italic;">Confirm password</b><br>
        <input style="width:100%;font-size:20px;"type="password" name="cpass" placeholder="Confirm your password" required>
        <br>
        <br>
        
        <input style="margin-left: 69%; background-color: blue; color: white; border: 1px solid green; border-radius: 5px;  padding: 3px 20px; " type="submit" name="create" value="Create"></a><br>
      </form>
</div>
</div>
</div>
<br>
      
       
<div class="button">
        <a style="margin-left: 2%; background-color: green; border: 1px solid white; color:white; padding: 2px 13px; text-decoration: none;" href="doctor.php" class="btn3"><--Back</a><br><br>
</div>
</body>