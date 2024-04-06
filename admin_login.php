<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-family: Arial, Helvetica, sans-serif;
    margin:0;
    padding:0;
}
.head{
    font-size:40px;
    text-align:center;
    background:rgb(90, 90, 90);
    margin:0%;
    padding: 10px;
    opacity:0.9;
    color:black;
}

label{
    font-size:25px;
    font-weight:700;
}

/* Full-width input fields */
input[type=text], input[type=password] {
    font-size:20px;
    width: 100%;
    padding: 12px 20px;
    margin: 10px 10px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
input[type=checkbox]{
    margin-top:2%;
}

/* Set a style for all buttons */
button.btn1 {
  background-color: #04AA6D;
  font-size:20px;
  color: white;
  padding-left: 60px;
  padding-right:60px;
  padding-top:10px;
  padding-bottom:10px;
  position:absolute;
  right:30px;
  top:130px;
  border: 1px solid black;
  cursor: pointer;
  
}
button.btn{
    background-color:blue;
    color:white;
    font-size:20px;
    padding:10px;
    width:100%;
    margin-top:3%;
}
button:hover {
  opacity: 0.7;
  
}
/*button.btn1:hover{
    opacity: 0.5;
    
}*/

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  top:3%;
  left:25%;
  position: relative;
  width:300px;
}
.closecontainer {
  
  position: relative;
  top:-10px;
  
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
  margin-top:5%;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 40%; /* Could be more or less, depending on screen size */
  height:70%;
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 20px;
  margin-left:10%;
  top: 7px;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
     
     
  }
}
</style>
</head>
<body style="background-image: url('Images/adminbg.jpg'); background-size:cover;">
<div class="main">
    <div class="head">
        <h2>ADMIN PANEL</h2>
        <button onclick="document.getElementById('id01').style.display='block'" class="btn1" style="width:auto;">Login</button>
    </div>
    

    <div id="id01" class="modal">
    
    <form class="modal-content animate" action="" method="post">
        
        <div class="closecontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        </div>
        <div class="imgcontainer">
        
            <img src="Images/admin.png" alt="Avatar" class="avatar">
        </div>
        <div class="container">
        <label for="aname"><b>Admin Name</b></label>
        <input type="text" placeholder="Enter Admin Name" name="aname" pattern="[A-Za-z]{0-10}" title="Name should be from [A-za-Z]" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>
            
        <button type="submit" name="submit" class="btn">Login</button>
        <label>
            <input type="checkbox"  name="remember"> Remember me
        </label>
        </div>

        <div class="container" style="background-color:#f1f1f1">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
    </form>
    </div>



    

    
</div>
</body>
</html>

<?php

$log=0;
include('db_connect.php');
$msg="Login Succesfully";
if(isset($_POST['submit']))
{
	$name=mysqli_real_escape_string($connect,trim($_POST['aname']));
	$password=mysqli_real_escape_string($connect,trim($_POST['psw']));
	//$name=mysqli_real_escape_string($connect,trim($_POST['firstname']));
    
    if($name=="Rahul" && $password=="Rah2091"){
      
        session_start();
        $_SESSION['is_login']=true;
        
        echo "<script>location.replace('admin.php'); </script>";
      
        
    }
    else
          if($name!="Rahul")
            {
              echo '<script>alert("Invalid Admin Name..!")</script>';
            }
          else{
              echo '<script>alert("Invalid Password..!")</script>';

          }
}
?>