<?php
session_start();
 if($_SESSION['is_login']===true){?>
<html>
<title>Go Waterless</title>
<head>
	<title>Car Care</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        pre{
            color:rgb(2, 2, 49);
            font-family: Cambria;
            font-size:30px;
        }
        .waterless{
            background:rgb(235, 233, 233); 
            width:1800px;
            height:220px;
            padding-top:60px;
            
            border-bottom:2px solid rgb(204, 201, 201);
        }
        lable{
            font-size:37px;
            font-family:'poppins' sans-serif;
            color:19274c;
        }
        .head{
            background:orange;
            padding:50px;
            text-align:center;
            box-shadow: 0px 0px 50px 10px black;
            display:block;
            height:25%;
        }
        .head img{
            width:350px;
            height:150px;
            display:block;
            margin-top:7%;
        }
        .head p{
            font-weight:900;
            font-size:20px;
            color:black;
            margin-top:-6%;
        }
        .head p button{
            padding:10px;
            background:white;
            border-radius:50px;
            font-weight:700;
            color:blue;
            box-shadow:0px 0px 25px 10px black;
            font-size:25px;
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
  margin-right:1.5%;
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

<body style="background-color:white">
<div class="main"> 
    <div class="nav-bar">
    <div class="nav-logo">
                <a href="home.php"><marquee direction="left" behavior="scroll" ><i class="fas fa-car"></i> Car Care <i class="fas fa-car"></i></marquee></a>
                
            </div>
                <div class="nav-list">
            
                    <i class="fas fa-window-close"></i>   
                        <ul>
                        
                            <a href="#"><li style="border-bottom: rgb(0, 255, 221) solid 3px;color: aqua;">About us</li></a>
                            <a href="waterless_ourservices.php"><li>Our Services</li></a>
                            <a href="waterless_contact_us.php"><li>Contact us</li></a>
                            <a href="user_registration.php" style="padding-left:30px;"><li style="color:white;background-color:blue;padding-bottom:20px;">Book your car wash</li></a>
                            
                        </ul>
                        <p style="color:Green;float: center;font-size: 25px;margin-left: 107%;padding-top: 20px;">WELCOME</p>
                    <p style="margin-left:106%;"><?php  
                    if($_SESSION['login']=="User"){
                        echo("&nbsp&nbsp&nbsp&nbsp&nbsp".$_SESSION['firstname']);
                    }
                    else{
                        echo($_SESSION['login']);
                    }
                    ?> </p>
                </div>
                <i style="font-size:40px;color:white;margin-left:6%;margin-top:-1.5% " class="fas fa-user-circle"></i>

    </div>
    <div class="dropdown">
  <button onclick="myFunction()" class="dropbtn"><i class="fa-solid fa-caret-down" style="color:white"></i></button>
  <div id="myDropdown" class="dropdown-content">
    <a href="waterless.php">Waterless Service</a><hr>
    <a href="sell&buy.php">Car Sell & Buy </a><hr>
    <a href="car_rent.php">Car Rent</a><hr>
    <a href="user_logout.php" style="color:red">Logout</a>
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
    <div class="head">
        <img src="Images/waterlesshey.png">
        <p>Hey...! If you have Waterless Service Station, So add your Service Station in Car Care Site.&nbsp&nbsp&nbsp&nbsp<a href="service_station_login.php"><button type="button" name="click" id="click">Click here</button></a></p>
    </div>
    <center>
        <div class="waterless">
            <b><lable>WELCOME To Waterless Car Wash</lable></b><br><br>
                <lable style="font-size:24px;">A waterless car wash uses high lubricity sprays to polish and wash the vehicle’s bodywork. The <br>spray’s high lubricity encapsulate dirt and dust particles.</lable>
        </div>
    </center>
    

    <h1 style="color: #19274c; font-size:70px;margin-top:5%;;margin-left:3%;font-weight:800">
    Now Your<br>
    Car Wash Will<br>
    Be Eco – Friendly</h1>
    <div style="margin-left:10%;">
        <p style="color:#19274c;margin-left:-7%;font-size:23px;font-family: Georgia, 'Times New Roman', Times, serif;"><br>A waterless car wash uses high lubricity sprays to polish and<br> wash the vehicle’s body work. The spray’s high lubricity<br> encapsulate dirt and dust particles</p>
        <img src="Images/satisfaction-guarantee-1.png" style=";margin-top:10%;;margin-left:10%;">
        <div>
            <p style="color:#19274c;margin-left:3%;font-size:23px;margin-top:-13%;;margin-left:35%;font-weight:800">About Go Waterless</p>
        </div>
        <div>
            <h1 style="color: #19274c; font-size:50px;margin-top:1%;;margin-left:35%;font-weight:800">A 100% waterless<br>
            & eco friendly car<br>
            wash company.</h1>
            <p style="color:#19274c;margin-left:35%;font-size:23px;font-family: Georgia, 'Times New Roman', Times, serif;"><br>A <b>waterless</b> car wash uses high lubricity sprays to <b>polish</b><br>
            and  wash the vehicle’s bodywork. The spray’s high lubricity<br>
            encapsulate dirt and dust particles. This process is similar to<br>
            how water removes dirt. You have to <b>simply spray</b> the<br> 
            surface of the car and then wipe it off. 
        </div>
    </div>
                    <div class="footer">
                        <table style="width:100%; ">
                        <tbody>
                            <tr>

                                <td>
                                    <p style="color: white; background-color: black; text-align: center;padding-top:10px; padding-bottom:10px;
                                    margin-bottom:0%;margin-top:5%; font-size:20px; font-weight: 300;"> <b>Website: Car Care ©2021 Developed BY : Rahul Gohel, Parin Kuhada, Priyank Dodiya, Riddhi Chaniyara.</b> </p>
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