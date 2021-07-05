<?php
include ("connection.php");
?>

<!DOCTYPE html>

<head>
    <title>Pharmacy</title>
    <link rel="stylesheet" type="text/css" href="stylepharm.css">
</head>
<body>
        <b style="position: absolute; margin-top:5%; font-size: 30px; color: green;">RONBIZ Pharmacy<br><br>
            Working Dashboard</b>
    
    </div>
    <div class="logo">
            <img src="logo.jpg">

    </div>
    <b style="color:green; margin-left:45%; font-size: 20px;">RONBIZ</b><br>
    <a href="lpharm.php" style=" margin-left: 95%; position: absolute;">Logout</a>
    <div class="hd">
            <ul class="hed">
            <li><a href="startpage.php">HOME</a></li>
            <li><a href="services.php">SERVICES</a></li>
            <li><a href="contact.php">CONTACT</a></li>
            <li><a href="news.php">NEWS</a></li>
            <li><a href="about.php">ABOUT</a></li>
            <li><a style="background-color: cadetblue; color: blue;" href="login.php">LOGIN</a></li>

        </ul>
        </div>
<br>

<div class="grn">

        <a href="Goto.php" class="back">Goto:</a>
    </div><br>

    </div>
</div>
<div class="goto">
    
        <b style="color: white; background-color:#3c3c3c; padding:5px 55px; font-size: 30px;">Go To:</b>

        
        

        <ul class="list">
            <li><a href="startpage.php">Home</a></li><br>
            <li><a href="login.php">Login</a></li><br>
            <li ><a class="active"href="pharmacy.php">Pharmacy</a></li><br>
            <li><a href="store.php">Pharmacy Store</a></li><br>
            <li><a href="doctor.php">Doctor</a></li><br>
            <li><a href="payments.php">Payments</a></li><br>

        </ul>

    </div>


        <div class="frm">
                <B style="margin-left: 33%;">PLEASE FILL ALL THE DETAILS</B>
            <form class="frm1" method="GET" action="">
                <br>
                <br>
                Date and Time
                <input style="margin-left: 9%; width:26%;" type="date" name="date" value=""><br><br>
                Name of Drug Issued
                <input style="margin-left: 3%;" type="text" name="drug" value=""><br><br>
                Reaference No
                <input style="margin-left: 9%;" type="text" name="ref" value=""><br><br>
                Dose(mg)
                <input style="margin-left: 14%;" type="text" name="dose" value=""><br><br>
                    Side Effects
                    <input style="margin-left: 12%;" type="text" name="effect" value=""><br><br>
                   <div class="frm2">
                       Patient ID
                    <input style="margin-left: 15%;" type="text" name="patid" value=""><br><br>
                    Total Cost
                    <input style="margin-left: 15%;" type="text" name="cost" value=""><br><br>
                    Payment Terms
                    <input style="margin-left: 3%;" type="text" name="terms" value=""><br><br>
                   Patient NHIF No
                    <input style="margin-left: %;" type="text" name="nhif" value=""><br><br>
                   Doctor ID
                    <input style="margin-left: 15%;" type="text" name="docid" value=""><br><br>
    
                   </div> 
                    <br>
                    <br>
                <div class="btn">
                <input type="submit" name="update"  class="btn1" value="Update">
                <input type="button" name="cancel"  class="btn2" value="Cancel">
                </div>

                </form>
                <?php
 if(isset($_GET['update'])){
$date=$_GET['date'];
$drug=$_GET['drug'];
$ref=$_GET['ref'];
$dose=$_GET['dose'];
$effect=$_GET['effect'];
$patid=$_GET['patid'];
$cost=$_GET['cost'];
$terms=$_GET['terms'];
$nhif=$_GET['nhif'];
$docid=$_GET['docid'];

$sql="insert into pharmacy values('$date','$drug','$ref','$dose','$effect','$patid','$cost','$terms','$nhif','$docid')";

$result=mysqli_query($conn,$sql);

if($result){
    echo"Data Recorded Successfully";
}
else{
    echo"Data Failed to be recorded";
}
}

?> 

            </div>

        

            <div  style="border:1px solid green; padding:20px; font-size:23px;" class="sea">
            
            <b style="background-color: aqua; border:1px solid green;padding:2px; ">RONBIZ PHARMACY</b><br>
            Offer the best services<br>
            Save the lives of people<br>
            Cherish the opportunity<br>
        
        </div>

       <div class="policy">
           <p>RONBIZ Pharmacy Sysyem is a Pharmacy Management System which is optimized to make work easier in recording, retrieving and viewing 
               pharmacy's activities. This system is a web-based management system and it is used as per the terms and conditions of the privacy
                policy.
           </p>
           
       </div>
       
</body>