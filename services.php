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
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
    </style>
</head>

<body style="background-image: url('Images/2017-Hyundai-Verna-Front-Teaser.jpg'); background-size: cover;">
	<div class="main">
    	<div class="nav-bar">
        	<div class="nav-logo">
                <a href="home.php"><marquee direction="left" behavior="scroll" ><i class="fas fa-car"></i> Car Care <i class="fas fa-car"></i></marquee></a>
            </div>
            <div class="nav-list">
                <i class="fas fa-window-close"></i> 
            	<ul>
                    
                	<a href="home.php"><li>Home</li></a>
                    <a href="#"><li style="border-bottom: rgb(0, 255, 221) solid 3px;color: aqua;">Services</li></a>
                    <a href="contact_us.php"><li>Contact us</li></a>
                    
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
        <div class="available">
            <div class="available-img">
                
                <ul>
                    <a href="waterless.php"><li><img src="Images/images3.png" ><br><p style="text-align: center;color: rgb(247, 244, 66);text-shadow: 5px 5px 4px rgb(0, 0, 0);
                        text-decoration: none;	font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
                        font-size: 35px;padding-top: 5%;">Waterless Car Wash</p></li></a>
                    <a href="sell&buy.php"><li style="margin-top: 1%;"><img src="Images/images.png"><br><p style="text-align: center;color: rgb(247, 244, 66);text-shadow: 5px 5px 4px rgb(0, 0, 0);
                        text-decoration: none;	font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
                        font-size: 35px;padding-top: 5%;">Car Sell & Buy</p></li></a>
                    <a href="car_rent.php"><li style="margin-left:7%;"><img src="Images/images4.png"><br><p style="text-align: center;color: rgb(247, 244, 66);text-shadow: 5px 5px 4px rgb(0, 0, 0);
                        text-decoration: none;	font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
                        font-size: 35px;padding-top: 5%;">Car Rent</p></li></a>
                    <!--a href="#"><li><img src="Images/images1.png"><br><p style="text-align: center;color: rgb(247, 244, 66);text-shadow: 5px 5px 4px rgb(0, 0, 0);
                        text-decoration: none;	font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
                        font-size: 35px;padding-top: 5%;">Service</p></li></a-->
                </ul>
            </div>
            
        </div>

       
        <div class="footer">
            <table style="width:100%; ">
                <tbody>
                    <tr>

                        <td>
                            <p style="color: black; background-color: white; text-align: center;padding-top:10px; padding-bottom:10px;
                            margin-bottom:2%; font-size:20px; font-weight: 300;"> <b>Website: Car Care ©2021 Developed BY : Rahul Gohel, Parin Kuhada, Priyank Dodiya, Riddhi Chaniyara.</b> </p>
                        </td>
                    </tr>
                </tbody>
            </table>
	    </div>
    </div>

    
    
</body>
</html>
<?php }
else{
    echo '<script>alert("Login Requirement")</script>';
    echo "<script>location.replace('index.php');</script>";
}?>