<?php
    
    include("db_connect.php");
    $msg = "";
    //print "<pre>";
    //print_r($_GET);
    //die;
    if(isset($_GET['updateid']))
      {
        $id = $_GET['updateid'];
        
        $q_sel = "select * from service_station where id='$id'";
        
        $result = mysqli_query($connect, $q_sel);
    
        $reg=mysqli_fetch_array($result,MYSQLI_ASSOC);
            /*print "<pre>";
            print_r($data);
            die;*/
      
        }
    if(isset($_POST['submit_sign']))
    {
        
    $nm = $_POST['aname']; 
    $mobile = $_POST['mobile'];
    $pass1 = $_POST['cre_psw'];
    $pass2 = $_POST['con_psw'];
    $em = $_POST['email'];
    $add=$_POST['address'];
    
    if($pass1===$pass2)
    {
        
       
          $q_ins = "update service_station SET name='$nm',email='$em',mobile='$mobile',Create_pass='$pass1',Confirm_pass='$pass2',address='$add' where id='$id';";
        
        
        
          if($connect->query($q_ins) === TRUE)
          {
            
            echo '<script>alert("Update Successfully..!")</script>';
              
            echo "<script>location.replace('admin_service_station.php'); </script>";
          }
          else
          {
              $msg = "Error: " . $q_ins . "<br>" . $connect->error;
          } 
              		
    }
    else{
      echo '<script>alert("Password should be not match ..!")</script>';
    }
}     
    ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles.css">
    
<link rel="stylesheet" href="Fonts\fontawesome-free-5.15.3-web\fontawesome-free-5.15.3-web\css\all.css">
<style>
body {
    font-family: Arial, Helvetica, sans-serif;
    margin:0;
    padding:0;
}
.head{
    font-size:40px;
    
    background:black;
    height:20%;
    margin:0%;
    padding: 10px;
    opacity:0.9;
    color:black;
}

.head h2{
    margin-top:2%;
    color:white;
}
label{
    font-size:25px;
    font-weight:700;
}

/* Full-width input fields */
input[type=text], input[type=password],input[type=email],input[type=tel] {
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
  top:100px;
  border: 1px solid black;
  cursor: pointer;
  
}

button.sign_up {
  background-color: #04AA6D;
  font-size:20px;
  color: white;
  padding-left: 60px;
  padding-right:60px;
  padding-top:10px;
  padding-bottom:10px;
  position:absolute;
  right:290px;
  top:100px;
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
  height: 120%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}
.modal2 {
   /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: scroll; /* Enable scroll if needed */
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

.modal-content2 {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 40%; /* Could be more or less, depending on screen size */
  height:110%;
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
<body style="background-image: url('Images/ssbg.jpg'); background-size:cover;">
<div class="main">
  
    <div class="head">
    <div class="nav-logo" style="margin-top:2%;margin-left:2%">
                <a href="home.php"><marquee direction="left" behavior="scroll" ><i class="fas fa-car"></i> Car Care <i class="fas fa-car"></i></marquee></a>
                
            </div>  
        <h2 style="text-align:center;margin-top:-4%">Service Station</h2>
        <button onclick="document.getElementById('id01').style.display='block'" class="btn1" style="width:auto;">Login</button>
        <button onclick="document.getElementById('id02').style.display='block'" class="sign_up" style="width:auto;">Sign up</button>

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
            <label for="aname"><b>Service Station Name (Optional)*</b></label>
            <input type="text" placeholder="Service station Name" name="aname" title="Name should be from [A-Za-z]"  >
            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Enter Email" name="email_login" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
                
            <button type="submit" name="submit" id="submit" class="btn">Login</button>
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

    <div id="id02" class="modal2">
    
        <form class="modal-content2 animate" action="" method="post">
            
            
            <div class="imgcontainer">
            
                <img src="Images/sslogo.png" alt="Avatar" class="avatar">
            </div>
            <div class="container">
            <label for="aname"><b>Service Station Name</b></label>
            <input type="text" placeholder="Service station Name" name="aname" id="aname" value="<?php echo $reg['name']?>" title="Name should be from [A-Za-z]" required>

            <label for="aname"><b>Email Address</b></label>
            <input type="email" placeholder="Enter Email" name="email" value="<?php echo $reg['email']?>" required>

            <label for="cre_psw"><b>Create Password</b></label>
            <input type="password" placeholder="Create Password" name="cre_psw" value="<?php echo $reg['Create_pass']?>" required>

            <label for="con_psw"><b>Confirm Password</b></label>
            <input type="password" placeholder="Confirm Password" name="con_psw" value="<?php echo $reg['Confirm_pass']?>" required>

            <label for="mobile"><b>Mobile</b></label>
            <input type="tel" placeholder="Enter Mobile No." name="mobile" maxlength="10" value="<?php echo $reg['mobile']?>" pattern="[0-9]{10}" title="Number should be from [0-9]" required>

            <label for="address"><b>Address</b></label>
            <input type="text" placeholder="Enter Address." name="address" value="<?php echo $reg['address']?>" required>
                
            <button type="submit" name="submit_sign" class="btn">Submit</button>
            
            </div>

            

            
        </form>
    </div>



    

    
</div>
</body>
</html>

