<?php
if( empty(session_id()) && !headers_sent()){

session_start();
}
 if($_SESSION['is_login']===true){?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-family: Arial, Helvetica, sans-serif;
    margin:0;
    padding:0;
    position:static;
    overflow:hidden;
}
.head{
    width:100%;
    font-size:40px;
    text-align:center;
    background:rgb(90, 90, 90);
    margin:0%;
    padding: 1px;
    opacity:0.9;
    color:black;
    
}
.head a{
    position:absolute;
    text-align:right;
    color:red;
    background:black;
    padding:15px;
    border-radius:50px;
    text-decoration:none;
    right:70px;
    top:50px;
}
.head a:hover{
    color:white;
    transition:0.5ms;
}
.nav{
    height:100%;
    background:black;
    padding-bottom:50%;
    width:20%;
    opacity:0.9;
}
ul{
    list-style-type:none;
    margin:0;
    padding:0;
    
    
}
li a{
    display:block;
    font-size:25px;
    color:white;
    
    padding:15px 10px;
    text-decoration:none;
}
li a:hover{
    background:red;
    font-size:30px;
}



/* Change styles for span and cancel button on extra small screens */


</style>
</head>
<body style="background-image: url('Images/adminbg.jpg'); background-size:cover;">
<div class="main">
    <div class="head">
        <h2>WELCOME TO ADMIN PANEL</h2>
        <a href="admin_logout.php">Logout</a>
    </div>
    <div class="nav">
        <ul>
            <li><a href="admin_reg.php">Registered</a></li>
            <li><a href="admin_waterless.php">Waterless Booked</a></li>
            <li><a href="admin_carsell.php">Car Sell Details</a></li>
            <li><a href="admin_carbuy.php">Car Buy Booked</a></li>
            <li><a href="admin_carrent.php">Car Rent Details</a></li>
            <li><a href="admin_carrent_book.php">Car Rent Booked</a></li>
            <li><a href="admin_contact_us">Contact us</a></li>
            <li><a href="admin_service_station">Service Station</a></li>
        </ul>
    </div>
    
</div>
</body>
</html>
<?php }
else{
    echo '<script>alert("Admin Login Requirement")</script>';
    echo "<script>location.replace('admin_login.php');</script>";
}?>

