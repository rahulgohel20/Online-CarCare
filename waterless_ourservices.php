<?php
session_start();
 if($_SESSION['is_login']===true){?>
<html>

<head>
	<title>Go Waterless</title>
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
        .ourservices{
            color:rgb(2, 2, 49);
            width:;
            height:;
            margin-top:5%;
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
                            
                                <a href="waterless.php"><li >About us</li></a>
                                <a href="#"><li style="border-bottom: rgb(0, 255, 221) solid 3px;color: aqua;">Our Services</li></a>
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
        <div class="ourservices" style="margin-top:10%">
                <p style="font-size:60px;font-family:;margin-left:40%;font-family: Cambria;font-weight:900;" >our services</p>
                <p style="font-size:28px;margin-left:300px;"><br>a gowaterless car wash is 100% natural- 100 echo friendly and effient method that uses no<br> <p style="font-size:28px;margin-left:45%;">water at all</p></p>

        </div>

        <div class="s1" style="margin-left:7%;margin-top:5%;background-color:rgb(182, 182, 182);width:400px;height:200;padding:50px;border-radius:50px;">
                <img src="Images/ser1.png" style="margin-left:35%;margin-top:-10%">
                <p name="s1"style="font-size:25;font-weight:700;margin-left:20%;">Exterior Cleaning</p>
                <p style="font-size:20;font-weight:100;margin-left:10%;margin-top:8%;">Outer Body Cleaning & polishing,<br> Tyre & Rim cleaning, and Tyre Polishing.</p>
        </div>

        <div class="s2" style="margin-left:38%;margin-top:-17%;background-color:rgb(182, 182, 182);width:400px;height:200;padding:50px;border-radius:50px;">
                <img src="Images/ser2.png" style="margin-left:35%;margin-top:-10%">
                <p name="s1"style="font-size:25;font-weight:700;margin-left:23%;">Interior Cleaning</p>
                <p style="font-size:20;font-weight:100;margin-left:10%;margin-top:8%;">Dicky Cleaning,Perfume Spray,Seat<br> Cleaning,Clean the Floor and Foot Mats.</p>
        </div>

        <div class="s3" style="margin-left:69%;margin-top:-17%;background-color:rgb(182, 182, 182);width:400px;height:200;padding:50px;border-radius:50px;">
                <img src="Images/ser3.png" style="margin-left:35%;margin-top:-10%">
                <p name="s1"style="font-size:25;font-weight:700;margin-left:23%;">Micro Detailing</p>
                <p style="font-size:20;font-weight:100;margin-left:10%;margin-top:8%;">Professional car detailing is the art and<br> the craft of cleaning and restoring a<br> vehicle to new condition.</p>
        </div>

        <div class="s4" style="margin-left:7%;margin-top:5%;background-color:rgb(182, 182, 182);width:400px;height:200;padding:50px;border-radius:50px;">
                <img src="Images/ser4.png" style="margin-left:35%;margin-top:-10%">
                <p name="s1"style="font-size:25;font-weight:700;margin-left:20%;">Car Sanitization</p>
                <p style="font-size:20;font-weight:100;margin-left:10%;margin-top:8%;">We provide the car sanitization service at your door step to protect your car and you from the harmful micro-organisms.</p>
        </div>

        <div class="s5" style="margin-left:38%;margin-top:-17%;background-color:rgb(182, 182, 182);width:400px;height:200;padding:50px;border-radius:50px;">
                <img src="Images/ser5.png" style="margin-left:35%;margin-top:-10%">
                <p name="s1"style="font-size:25;font-weight:700;margin-left:20%;"> Commercial Sanitization</p>
                <p style="font-size:20;font-weight:100;margin-left:10%;margin-top:8%;">Our highly professional and dedicated team will work with highestnorms to serve our customers during and after the COVID-19 pandemic.</p>
        </div>

        <div class="s3" style="margin-left:69%;margin-top:-17%;background-color:rgb(182, 182, 182);width:400px;height:200;padding:50px;border-radius:50px;">
                <img src="Images/ser5.png" style="margin-left:35%;margin-top:-10%">
                <p name="s1"style="font-size:25;font-weight:700;margin-left:20%;">Door Step Service</p>
                <p style="font-size:20;font-weight:100;margin-left:10%;margin-top:8%;">How about, for a change, you sit and watch movie at home or shop outside just to come back and see your car cleaned?.</p>
        </div>
        <h1 style="font-size:50px;color:rgb(2, 2, 49);margin-left:40%;margin-top:15%;font-weight:900">Our Process</h1>
            <p style="font-size:20px;color:#19274c;margin-left:38%;margin-top:1%;margin-bottom:5%">We have a Very Easy and Hassle-free Process</p>
            

        <div class="service-nav-list">
                
                        
            <ul style="margin-top:3%;width:300px;display:inline;">
                <img src="Images/choiceyourpage.png" style="width:200px;">
                <img src="Images/Scheduleyourservice.png" style="margin-left:10%;">
                <img src="Images/Doorstepservice.png" style="margin-left:10%;">
                <img src="Images/onlinepay.png" style="margin-left:10%;">
            </ul>
        </div>

        <b>   <pre>                               01 Choose Your               02 Schedule Your                             03 Door Step                           04 Pay Online or</pre></b>
        <b>   <pre>                                      Package                                 Service                                               Service                                  Use COD Option  </pre></b>
        <br>
        <pre style="font-size:23px; font-family:Calibri">                                       Choose from Silver or                            Book Your Service By                                     Door Step Service is                                   Pay Easily before or after</pre>
        <pre style="font-size:23px; font-family:Calibri">                                      Gold Plan for Exterior or                     filling out the form on the                            Provided to you by our                                     the service by your</pre>
        <pre style="font-size:23px; font-family:Calibri">                                         Interior Cleaning.                                  appointment page.                                      trained professionals                                       preferred payment</pre>
        <pre style="font-size:23px;font-family:calibri">                                                                                                                                                                                                                                                                          method</pre>

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