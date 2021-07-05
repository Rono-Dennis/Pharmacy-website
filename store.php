<?php

session_start();

$con = mysqli_connect('localhost', 'root', '', 'youtubeadmin');

  

?>

<?php

include 'connection.php';

$sql = "SELECT * FROM store";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<head>
    <title>PHARMACY STORE</title>
    <link rel="stylesheet" type="text/css" href="stylestore4.css">
</head>

<body>
        <b style="position: absolute; margin-top:5%; font-size: 30px; color: green;">RONBIZ Pharmacy Store<br><br>
            Working Dashboard</b>

    </div>
    <div class="logo">
            <img src="logo.jpg">

    </div>
    <b style="color:green; margin-left:45%; font-size: 20px;">RONBIZ</b><br>
    <a href="lstore.php" style=" margin-left: 95%; position: absolute;">Logout</a>
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

        
        

        <ul class="list">
             
             
            <li><a class="active" href="store.php">Pharmacy Store</a></li><br>
            <li><a href="doctor.php">Doctor</a></li><br>
             
            <li><a href="useradd.php">Userstore</a></li>  
            <li><a href="userspharmacy.php">Pharmacy</a></li><br>
            <li><a href="userstore.php">Pharmacy Store</a></li><br>
            <li><a href="userspayements.php">Payments</a></li><br>
            <li><a href="payements.php">payements records</a></li><br>
            <li><a href="Pharmaccy.php">User Pharmacy</a></li><br> 
        </ul>

    </div><br><br><br><br>
    <div class="store">

        <table class="table">
            <tr>
                <th>Item Name</th>
                <th>Reference No</th>
                <th>Type</th>
                <th>Usage</th>
                <th>Stock(mg)</th>
                <th>B_price/50mg</th>
                <th>S_Price/50mg</th>
                <th>Buying Date</th>
                <th>Expiry Date</th>
            </tr>
            <?php

include 'connection.php';

$sql = "SELECT * FROM store";
$result = $conn->query($sql);

if($result->num_rows > 0){
 while($row = $result->fetch_assoc()){
 ?>
 <tr>
 <td><?php echo $row['item']; ?></td>
 <td><?php echo $row['refno']; ?></td>
 <td><?php echo $row['type']; ?></td>
 <td><?php echo $row['uses']; ?></td>
 <td><?php echo $row['instock']; ?></td>
 <td><?php echo $row['bprice']; ?></td>
 <td><?php echo $row['sprice']; ?></td>
 <td><?php echo $row['dbought']; ?></td>
 <td><?php echo $row['dexpiry']; ?></td>
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

        <form class="btn">

<input type="button"class="btn1" name="refresh" value="Refresh">
<input type="button"class="btn2" name="cancel" value="Cancel">
       
</form>

    </div>



    <div  style="border:1px solid green; padding:20px; font-size:23px;" class="sea">
            
            <b style="background-color: aqua; border:1px solid green;padding:2px; ">RONBIZ PHARMACY</b><br>
            Offer the best services<br>
            Save the lives of people<br>
            Cherish the opportunity<br>
        
        </div>

    <div class="add">
        <a class="add1" href="add.php" style="border: 1px solid green;border-radius:5px;color:whitesmoke;background-color:blue; margin-top: 11%; 
        position: absolute; text-decoration: none; margin-left: 17%; padding: 1px 10px;">Add new item</a>
    </div>
       <div class="policy">
           <p>RONBIZ Pharmacy Sysyem is a Pharmacy Management System which is optimized to make work easier in recording, retrieving and viewing 
               pharmacy's activities. This system is a web-based management system and it is used as per the terms and conditions of the privacy
                policy.
           </p>
           
       </div>
</body>