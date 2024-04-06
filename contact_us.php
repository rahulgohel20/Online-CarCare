<?php
session_start();
 if($_SESSION['is_login']===true){?>
<!DOCTYPE html>

<html>
    
    <head>
        <title>Car Care</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

        <style>
            #lable{
                color:black;
                font-size:40px;
                
               
            }
            p{
                color:black;
                font-size:23px;
            }
            .connect{
                background:rgb(235, 233, 233);
                width:1800px;
                height:780px;
                padding-top:80px;
                padding-bottom:60px;
               
            }
            b lable{
               color:white;
               font-size:23px;
               
            }
            .div1{
                border-left:4px solid rgb(27,27,27);
                border-top:4px solid rgb(27,27,27);
                border-bottom:4px solid rgb(27,27,27);
                margin-left:260px;
                margin-top:80px;
                padding:90px;
                
              float:left;
            }
            pre{
                color:white;
                font-size:23px;
            }
            #input1{
                background:white;               font-size:17px;
                font-family:'poppins',sans-serif;
                width:550px;
                height:53px;
                padding-left:10px;
            }
            #input2{
                background:white;               font-size:17px;
                font-family:'poppins',sans-serif;
                width:250px;
                height:53px;
                padding-left:10px;
                
            }
            #input3{
                background:white;                font-size:17px;
                font-family:'poppins',sans-serif;
                width :550px;
                height:60px;
                padding-left:10px;
            }
            #input4{
                    background:white;;
                    width:200px;
                    height:53px;
                    font-size:25px;
                    font-family:'poppins',sans-serif;
                    padding-left:10px;
                    border-radius:10px;
            }
            .div2{
                float:right;
                border-right:4px solid rgb(27,27,27);
                border-top:4px solid rgb(27,27,27);
                padding-top:60px;
                border-bottom:4px solid rgb(27,27,27);
                margin-top:80px;
                margin-right:280px;
                width:466.8px;
                height:573px;
                
            }
            #pre{
               color:white;
               font-size:26px;
            }
            .dropbtn {
  background:blue;
  color: white;
  padding:10px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  
}

.dropbtn:hover, .dropbtn:focus {
  color:blue;
}

.dropdown {
  position: fixed;
  display: inline-block;
  float:right;
  margin-top:5%;
  right:0%;
  margin-right:4%;
}

.dropdown-content {
  display: none;
  position: absolute;
  width: 170px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 15px 20px;
  text-decoration: none;
  display: block;
  font-weight:900;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
        </style>
    </head>
    <body  style="background-color:black">
        
        <div class="main">
        <div class="nav-bar">
        	<div class="nav-logo">
            <a href="home.php"><marquee direction="left" behavior="scroll" ><i class="fas fa-car"></i> Car Care <i class="fas fa-car"></i></marquee></a>
                
            </div>               
                <div class="nav-list">
                    
                    <ul>
                        
                        <a href="home.php"><li>Home</li></a>
                        <a href="services.php"><li>Services</li></a>
                        <a href="contact_us.php"><li style="border-bottom:  rgb(0, 255, 221) solid 3px;color: aqua;">Contact us</li></a>
                        
                    </ul>
                    <p style="color:Green;float: center;font-size: 25px;margin-left: 190%;padding-top: 20px;">WELCOME</p>
                    <p style="margin-left:190%;"><?php  
                    if($_SESSION['login']=="User"){
                        echo("&nbsp&nbsp&nbsp&nbsp&nbsp".$_SESSION['firstname']);
                    }
                    else{
                        echo($_SESSION['login']);
                    }
                    ?> </p>
                </div>
                <i style="font-size:40px;color:white;margin-left:27%;margin-top:-1.5% " class="fas fa-user-circle"></i>

        </div>
        <div class="dropdown">
  <button onclick="myFunction()" class="dropbtn"><i class="fa-solid fa-caret-down" style="color:white"></i></button>
  <div id="myDropdown" class="dropdown-content">
    <a href="user_logout.php">Logout</a>
    <!--<a href="#about">About</a>
    <a href="#contact"></a>-->
  </div>
</div>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
        <center style="margin-top:5%">
            <div class="connect">
                <lable id="lable"><b>Let's Connect</b></lable><br><br>
                <p>Get in touch with us</p>
                <div style="padding:50px">
                    <p style="display:inline-block;border-radius:50px;padding:60px;background-color:black;margin:1%"><img src="Images/gmail.png" style="border-radius:50px;height:300px;width:250px;margin:-4%;"><br><br><b style="color:white">Rahul Gohel</b><br><br><br><a href="mailto:rahul.rahulgohel2091@gmail.com?subject=Mail from <?php echo $_SESSION['email-through'];?>" style="text-decoration:none;color:white;background-color:blue;padding:20px 20px;border-radius:70px;box-shadow:0px 0px 25px 10px white;">Connect Me</a></p>
                    <p style="display:inline-block;border-radius:50px;padding:60px;background-color:black;margin:1%"><img src="Images/gmail.png" style="border-radius:50px;height:300px;width:250px;margin:-4%;"><br><br><b style="color:white">Parin Kuhada</b><br><br><br><a href="mailto:kuhadaparin@gmail.com?subject=Mail from <?php echo $_SESSION['email-through'];?>" style="text-decoration:none;color:white;background-color:blue;padding:20px 20px;border-radius:70px;box-shadow:0px 0px 25px 10px white;">Connect Me</a></p>
                    <p style="display:inline-block;border-radius:50px;padding:60px;background-color:black;margin:1%"><img src="Images/gmail.png" style="border-radius:50px;height:300px;width:250px;margin:-4%;"><br><br><b style="color:white">Priyank Dodiya</b><br><br><br><a href="mailto:priyankdodiya11@gmail.com?subject=Mail from <?php echo $_SESSION['email-through'];?>" style="text-decoration:none;color:white;background-color:blue;padding:20px 20px;border-radius:70px;box-shadow:0px 0px 25px 10px white;">Connect Me</a></p>
                    <p style="display:inline-block;border-radius:50px;padding:60px;background-color:black;margin:1%"><img src="Images/gmail.png" style="border-radius:50px;height:300px;width:250px;margin:-4%;"><br><br><b style="color:white">Riddhi Chaniyara</b><br><br><br><a href="" style="text-decoration:none;color:white;background-color:blue;padding:20px 20px;border-radius:70px;box-shadow:0px 0px 25px 10px white;">Connect Me</a></p>
                </div>
            </div>
        </center>
       <div class="div1">
           <form method="POST">
           <b><lable>Your name *</lable></b><br>
         <input  id="input1" type="text" name="name" placeholder="Type Your Name Here"  title="Name should be from [A-Za-z]"><br><br><br>

           <b><pre>Email Address *                   Phone no *</pre></b>
           <pre><input id="input2" type="email" name="email" placeholder="Type Your Email Id Here">     <input id="input2" type="text" name="phone" placeholder="Type Your Phone No. Here" maxlength="10" pattern="[0-9]{10}" title="Number should be from [0-9]"></pre><br><br>

           <b><lable>Message *</lable></b><br>
           <input id="input3" type="text" name="message" placeholder="Type Your Message "><br><br><br><br><br>

           <input id="input4" type="Submit" name="sub" value="Submit" style="background-color:red">       
        </form>
       </div>
       <div class="div2">
           <b><pre id="pre">             Contact information</pre></b><br>
           <pre>      Office Hrs Timing: 8 A.M. to 5 P.M. <br><br>      Email : parinkuhada@gmail.com<br>                : priyankdodiya11@gmail.com                <br>                : rahul.rahulgohel@gmail.com             <br>                : riddhichaniyara2002@gmail.com <br><br>     Contact No.:9638468696</pre>
         
        </div>
</div>
    </body>
</html>
<?php }
else{
    echo '<script>alert("Login Requirement")</script>';
    echo "<script>location.replace('index.php');</script>";
}?>
<?php

    
	include('db_connect.php');
	$msg = "";
	if(isset($_POST['sub']))
	{
		
		$nm = $_POST['name'];
		$mob = $_POST['phone'];
		$prblm = $_POST['message'];
        $em = $_POST['email'];
       
	
		//existing email address in our database
		//$sql = "SELECT User_id FROM registration WHERE Email_id = '$em' LIMIT 1" ;
		
		//$check_query = mysqli_query($connect,$sql);
		//$count_em = mysqli_num_rows($check_query);
		
        $q_ins = "insert into contact_us(Name,Mobile_no,Email,Message)values('$nm','$mob','$em','$prblm');";
       
            
            
            
        if($connect->query($q_ins) === TRUE)
        {
            
          echo '<script>alert("Your Message Send Successfully..")</script>';
        }
        else
        {
            $msg = "Error: " . $q_ins . "<br>" . $connect->error;
        }        		
        
        echo "Password is not the same";
        
		echo "<script>location.replace('contact_us.php');</script>";
    }
?>

