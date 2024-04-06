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
  margin-top:-2.4%;
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

@import url(https://fonts.googleapis.com/css?family=Exo:100);
* {margin: 0; padding: 0; border: 0 none;}
html, body {height: 100%; width: 100%; font-size: 1rem; font-family: 'Exo', sans-serif; font-weight: 100;}
.cont-slider {
    position: relative;
    height: 100vh;
    max-height: 90vh;
    width: auto;
    min-width: 100vw;
    margin: 0 auto;
    overflow: hidden;
}
.slider {
    animation: sliding 25s ease-out 0s backwards infinite;
    position: absolute;
    left: 0;
    top: 0;
    width: 500%;
    height: 100%;
}
.slide {
    display: inline-block;
    position: relative;
    width: 20%;
    height: 100%;    
    background-attachment: fixed;
    background-position: center center;
    background-size: cover;
}
.slide span {
    background: rgba(0, 0, 0, 0.3);
    border-radius: 0 5vh 5vh 0;
    color: #FFF;
    position: absolute;
    left: 0;
    top:5%;
    font-size: 20vh;
    line-height: 15vh;
    width: 50%;
    border: 1px solid rgba(255,255,255,.45);
    border-left: 0 none;
}
.one {
  background-image: url("Images/bg6.jpg");}
.two {
  background-image: url("Images/bg7.jpg");}
.three {
  background-image: url("Images/bg3.jpg");}
.four {
  background-image: url("Images/bg.jpg");}
.five {
  background-image: url("Images/bg5.jpg");}

@keyframes sliding {
  10% {left : 0%}
  15% {left: -100%; }
  20% {left: -100%; }
  35% {left: -100%; }
  40% {left: -200%; }  
  55% {left: -200%; }
  60% {left: -300%; }
  75% {left: -300%; }
  80% {left: -400%; }
  95% {left: -400%; }   
  100% {left: 0%; }
}
    </style>
</head>

<body style="background-image: url('Images/2017-Hyundai-Verna-Rear-Three-Quarter-Teaser-960x720.jpg'); background-size: cover;">
    
	<div class="main">
    	<div class="nav-bar" style="position:absolute">
        	<div class="nav-logo">
                <marquee direction="left" behavior="scroll" ><i class="fas fa-car"></i> Car Care <i class="fas fa-car"></i></marquee>
                
            </div>
            
            <div class="nav-list">
                
                
            	<ul>
                    
                	<a href="#"><li style="border-bottom: rgb(0, 255, 221) solid 3px;color: aqua;">Home</li></a>
                    
                    <a href="services.php"><li>Services</li></a>
                    <a href="contact_us.php"><li>Contact us</li></a>
                    
            	</ul>
                
                
                
                <p style="color:Green;float: center;font-size: 25px;margin-left: 180%;padding-top: 20px;">WELCOME</p>
                <p style="margin-left:180%;"><?php  
                    if($_SESSION['login']=="User"){
                        echo("&nbsp&nbsp&nbsp&nbsp&nbsp".$_SESSION['firstname']);
                    }
                    else{
                        echo($_SESSION['login']);
                    }
                    ?> </p>
                   
            </div>
            <i style="font-size:40px;color:white;margin-left:25%;margin-top:-1.5% " class="fas fa-user-circle"></i>
            
        </div>
                
            <div style="margin-top:7.5%;">
            </div> 
            <div class="dropdown" style="position:absolute">
              <button onclick="myFunction()" class="dropbtn" style="padding:50%;"><i class="fa-solid fa-caret-down" style="color:white;"></i></button>
              <div id="myDropdown" class="dropdown-content">
                  <a href="user_logout.php">Logout</a>
                    <!--<a href="#about">About</a>
                    <a href="#contact"></a>-->
              </div>
</div>
<header class="cont-slider">
    <section class="slider">
      <article class="slide one"><span><h1 id="heading">WELCOME TO <h1 id="heading-color">CAR CARE..!!</h1></h1></span></article><!--
      --><article class="slide two"><span style="width:60%"><h1 id="heading">Car Care Provide <h1 id="heading-color">Best Services..!!</h1></h1></span></article><!--
      --><article class="slide three"><span><h1 id="heading">Best Car <h1 id="heading-color">Selling Price..!!</h1></h1></span></article><!--
      --><article class="slide four"><span><h1 id="heading">Eco-Friendly <h1 id="heading-color">CAR CARE..!!</h1></h1></span></article><!--
      --><article class="slide five"><span><h1 id="heading">Book Car <h1 id="heading-color">For Good Journey :) ..!!</h1></h1></span></article>
    </section>
</header>
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
        <div class="wcu">
            <a href="waterless_ourservices.php" style="text-decoration:none;color:black"><h1 class="wcu-head">WHY CHOOSE US</h1></a>
            <div class="wcu-list">
                <ul>
                    <li><img src="Images/c1_icon.png"><br><h1></h1></li>
                    <li><img src="Images/c2_icon.png"></li>
                    <li><img src="Images/c3_icon.png"></li>
                </ul>
            </div>
        </div>
        <div class="grp">
            <h1>Developers<h2>
            <ul>
                
            </ul>
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