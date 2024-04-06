<?php
session_start();

 if($_SESSION['is_login']===true){?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<style>
body {
    font-family: Arial, Helvetica, sans-serif;
    margin:0;
    padding:0;
    position:static;
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
.head h2{
    color:black;
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
    background:blue;
    font-size:30px;
}


/* Change styles for span and cancel button on extra small screens */


</style>
</head>
<body style="background-image: url('Images/ssbg2.jpg'); background-size:cover;">
<div class="main" style="overflow:hidden">
        <div class="nav-bar">
        	<div class="nav-logo">
                <a href="home.php"><marquee direction="left" behavior="scroll" ><i class="fas fa-car"></i> Car Care <i class="fas fa-car"></i></marquee></a>
                
            </div>
            <a href="waterless.php" style="margin-left:70%;background:red;border-radius:100px"><i class="fa-solid fa-arrow-left-long" style="color:white;margin-top:-19%;font-size:50px;padding:20px"></i></a>
        </div>
        <div class="nav" style="margin-top:7%;">
            <ul>
                
                <li style="padding:20px 10px;text-align:center"><a href="service_booked.php">Services Booked</a></li>
                
                <hr>
                
            </ul>
        </div>
    
</div>
</body>
</html>
<?php }
else{
    echo '<script>alert("Login Requirement")</script>';
    echo "<script>location.replace('service_station_login.php');</script>";
}?>

