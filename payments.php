<?php
include ("connection.php");
$sql = "SELECT Date, Patid,Docid, Drug,Refno,Dose,Terms,Nhif,Cost from pharmacy";
$result = $conn->query($sql);

?>


<!DOCTYPE html>
<head>
    <title>Payments</title>
    <link rel="stylesheet" type="text/css" href="stylepaym6.css">
</head>

<body>
        <b style="position: absolute; margin-top:5%; font-size: 30px; color: green;">RONBIZ Payments<br><br>
            Working Dashboard</b>

    </div>
    <div class="logo">
            <img src="logo.jpg">

    </div>
    <b style="color:green; margin-left:45%; font-size: 20px;">RONBIZ</b><br>
    <a href="lpaym.php" style=" margin-left: 95%; position: absolute;">Logout</a>
    <div class="hd">
            <ul class="hed">
            <li><a href="startpage.php">HOME</a></li>
            <li><a href="services.php">SERVICES</a></li>
            <li><a href="contact.php">CONTACT</a></li>
            <li><a href="news.php">NEWS</a></li>
            <li><a href="about.php">ABOUT</a></li>
            <li><a style="background-color: cadetblue; color: blue;" href="startpage.php">LOGIN</a></li>

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

        
        
        <div class="ron">
        <ul class="list">
            <li ><a href="startpage.php">Home</a></li><br>
            <li><a href="startpage.php">Login</a></li><br>
            <li><a href="pharmacy.php">Pharmacy</a></li><br>
            <li><a href="store.php">Pharmacy Store</a></li><br>
            <li><a href="doctor.php">Doctor</a></li><br>
            <li><a class="active"href="payments.php">Payments</a></li><br>

        </ul>
    </div>

    </div><br><br><br><br>
    <div class="paym">

        <table class="table" style="text-align=center;">
            <tr>
                <th>Date</th>
                <th>Doctor ID</th>
                <th>Patient ID</th>
                <th>Drug Issued</th>
                <th>Reference No</th>
                <th>Dose(mg)</th>
                <th>Terms</th>
                <th>Nhif No</th>
                <th>Side Effects</th>
                <th>Amount</th>
                
            </tr>

            
<?php

include ("connection.php");
$sql = "SELECT date,patid,docid, drug,ref,dose,terms,nhif,cost,effect from pharmacy";
$result = $conn->query($sql);

if($result->num_rows > 0){
 while($row = $result->fetch_assoc()){
 ?>
 <tr>
 <td><?php echo $row['date']; ?></td>
 <td><?php echo $row['docid']; ?></td>
 <td><?php echo $row['patid']; ?></td>
 <td><?php echo $row['drug']; ?></td>
 <td><?php echo $row['ref']; ?></td>
 <td><?php echo $row['dose']; ?></td>
 <td><?php echo $row['terms']; ?></td>
 <td><?php echo $row['nhif']; ?></td>
 <td><?php echo $row['effect']; ?></td>
 <td><?php echo $row['cost']; ?></td>
 
 </tr>
 <?php
 }
}
else
{
 ?>
 <tr>
 <th colspan="2">There's No data found!!!</th>
 </tr>
 <?php
}
?>

        </table>

       
        

    </div>

    <div  class="sea">
    <div  style="border:1px solid green; padding:20px; font-size:23px;">
            
            <b style="background-color: aqua; border:1px solid green;padding:2px; ">RONBIZ PHARMACY</b><br>
            Offer the best services<br>
            Save the lives of people<br>
            Cherish the opportunity<br>
        
        </div>
        <br><br>
        <div style=" border: 2px solid green;height: 20%;padding: 10px;">
           
           <?php
                     include ("ronaldsumdemo.php");
                     
         
                     ?>
                   
                 </div>

    </div>

    <br><br><br><br><br><br>

       <div class="policy">
           <p>RONBIZ Pharmacy Sysyem is a Pharmacy Management System which is optimized to make work easier in recording, retrieving and viewing 
               pharmacy's activities. This system is a web-based management system and it is used as per the terms and conditions of the privacy
                policy.
           </p>
           
       </div>
</body>