   <?php
include ("connection.php"); 
?>

<!DOCTYPE html>

<head>
    <title>Add Item</title>
    <link rel="stylesheet" type="text/css" href="styleadd2.css">
</head>
<body>

    <b style="position: absolute; margin-top:5%; font-size: 30px; color: green;">RONBIZ Pharmacy Store<br><br>
        Item Addition Dashboard</b>
    
    </div>
    <div class="logo">
            <img src="logo.jpg">

    </div>
    <b style="color:green; margin-left:45%; font-size: 20px;">RONBIZ</b><br>
    <a href="ladd.php" style=" margin-left: 95%; position: absolute;">Logout</a>
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

        <a href="store.php" class="back"><--Back</a>
    </div><br>

    </div>
</div>
<div class="goto">
    
        <b style="color: white; background-color:#3c3c3c; padding:5px 55px; font-size: 30px;">Go To:</b>

        
        

        <ul class="list">
            <li><a href="startpage.php">Home</a></li><br>
            <li><a href="login.php">Login</a></li><br>
            <li><a href="pharmacy.php">Pharmacy</a></li><br>
            <li><a class="active" href="store.php">Pharmacy Store</a></li><br>
            <li><a href="doctor.php">Doctor</a></li><br>
            <li><a href="payments.php">Payments</a></li><br>

        </ul>

    </div>


        <div class="frm">
                <B style="margin-left: 33%; font-style: italic; border: 2px solid green; padding: 1px 20px;">FILL DETAILS TO ADD ITEM</B>
            <form>
            <div class="frm1">
                <br>
                <br>
                Item Name
                <input style="margin-left: 6%;" type="text" name="item" value=""><br><br>
                Reference No
                <input style="margin-left: 3.6%;" type="text" name="refno" value=""><br><br>
                Type
                <input style="margin-left: 12%;" type="text" name="type" value=""><br><br>
                Use
                <input style="margin-left: 13%;" type="text" name="uses" value=""><br><br>
            </div>    
            
                    <div class="frm2">
                    
                    In Stock
                    <input style="margin-left: 9%;" type="text" name="instock" value=""><br><br>
                    Buying Price
                    <input style="margin-left: 4.5%;" type="text" name="bprice" value=""><br><br>
                    Selling Price
                    <input style="margin-left: 4.7%;" type="text" name="sprice" value=""><br><br>
                    Date Bought
                    <input style="margin-left: 5%; width:25.5%;" type="date" name="dbought" value=""><br><br>
                    Expiry Date
                    <input style="margin-left: 5.5%; width:25.5%;" type="date" name="dexpiry" value=""><br><br>
                    </div>
                    <br>
                    
                
                    <div class="btn">
                <input type="submit" class="btn1" name="add" value="Add">
                <input type="button" class="btn2" name="cancel" value="Cancel">
                 
                </div>
                </form>

                <?php

     include ("connection.php"); 

 if(isset($_GET['add'])){
$item=$_GET['item'];
$refno=$_GET['refno'];
$type=$_GET['type'];
$uses=$_GET['uses'];
$instock=$_GET['instock'];
$bprice=$_GET['bprice'];
$sprice=$_GET['sprice'];
$dbought=$_GET['dbought'];
$dexpiry=$_GET['dexpiry'];

$sql="insert into store values('$item','$refno','$type','$uses','$instock','$bprice','$sprice','$dbought','$dexpiry')";

 $result=mysqli_query($conn,$sql);

if($result){
    echo"Item Added to the Database Successfully";
}
else{
    echo"Data Failed to be inserted to the database";
}
}

?> 
<div style="margin-top:-11.3%;">
                <img style="width: 25%; height: 65%; position: absolute;margin-left: 44%; margin-top: -45.5%; border: 1px solid green;" src="pic.jpg">
                <img style="width: 25%; height: 65%; position: absolute;margin-left: 69%; margin-top: -45.5%; border: 1px solid green;" src="pic08.jpg">
                </div>
                

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