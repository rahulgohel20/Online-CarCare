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
        *{
          box-sizing:border-box;
        }
        .column{
          float:left;
          width:30%;
          height:450px;
          padding:5px;
          margin:1%;
        }
        .row::after{
          content:"";
          clear:both;
          display:table;
         
        }
        #myInput {
			background-image: url('/css/searchicon.png');
			background-position: 10px 12px;
			background-repeat: no-repeat;
			width: 50%;
			margin-left:2%;
			font-size: 24px;
      font-weight:700;
			padding: 20px 20px 20px 40px;
			border: 3px solid grey;
			margin-top: -2%;
      margin-bottom:1%;
			border-radius:50px;
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
  <body style="box-sizing:border-box">
        
    <div class="main" style="background:white">
        <div class="nav-bar" style="height:15%;">
          <div class="nav-logo">
          <a href="home.php"><marquee direction="left" behavior="scroll" ><i class="fas fa-car"></i> Car Care <i class="fas fa-car"></i></marquee></a>
          </div>
              
          <div class="nav-list">
                
            <ul>
        
                <a href="contact_us.php" style="border-bottom:  rgb(0, 255, 221) solid 3px;color: aqua;"><li >Car Buy</li></a>
                <a href="carsell_contact_us.php"><li>Contact us</li></a>
                
            </ul>
                    <p style="color:Green;float: center;font-size: 25px;margin-left: 265%;padding-top: 20px;">WELCOME</p>
                    <p style="margin-left:260%;"><?php  
                    if($_SESSION['login']=="User"){
                        echo("&nbsp&nbsp&nbsp&nbsp&nbsp".$_SESSION['firstname']);
                    }
                    else{
                        echo($_SESSION['login']);
                    }
                    ?> </p> 
          </div>
          <div class="sell">
            <a href="car_sell.php" ><i class="fas fa-plus">Sell</i></a>
          </div>
          <i style="font-size:40px;color:white;margin-left:30%;margin-top:-1.5% " class="fas fa-user-circle"></i>

          
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
        <div>
          <h1>.<h1><br><br>
        </div>
        
        
        <!--<i class="fa-solid fa-magnifying-glass" style="font-size:35px;margin-left:22%;"></i><input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search..." title="Type in you want to serach">-->
        <div>
        <?php  
                      include("db_connect.php");
                      $msg = "";
                      if(isset($_GET['updateid']))
                      {
                        $id = $_GET['updateid'];
                        
                        $q_sel = "select * from sell_buy where Id='$id'"; 
                        $result = mysqli_query($connect, $q_sel);  
                        $row = mysqli_fetch_array($result);
                      
                        $rowcount = mysqli_num_rows($result);
                      
                          
                            
                          ?>
                          
                              
                              <?php  
                                
                                if(isset($_GET['updateid']))
                                {
                                  $id = $_GET['updateid'];
                                  
                                  $q_sel = "select * from sell_buy where Id='$id'"; 
                                  $result = mysqli_query($connect, $q_sel);  
                                  $row = mysqli_fetch_array($result);
                                
                                  $rowcount = mysqli_num_rows($result);
                                
                                    
                                      
                                    ?>
                                    <h1 style="float:right;margin-right:20%;font-size:50px"><?php echo $row[6];?></h1>
                                    
                                    <div style="margin-top:5%;margin-left:5%;background-color:transparent"><?php echo '
                                    
                                    <img src="data:image/jpg;base64,'.base64_encode($row['images'] ).'" height="500" width="700"/>';?></div>
                                        <br><br><p style="float:right;margin-right:32%;font-size:20px;margin-top:-19%;font-weight:900">Price <h1 style="float:right;margin-right:12%;font-size:40px;margin-top:-20%">*<?php echo $row[13];?></h1>
                                        <p style="float:right;margin-right:32%;font-size:15px;margin-top:-25%">Car Type <h1 style="float:right;margin-right:20%;font-size:20px;margin-top:-25%"><?php echo $row[9];?></h1>
                                        <fieldset style="width:30%;height:50%;float:right;margin-right:9%;margin-top:-15%"><legend style="text-align:center;color:blue"><h1 style="font-size:40px">SellerDetails</h1></legend>
                                        <br><p style="color:black">Name <h2 style="color:black;float:right;margin-right:10%;margin-top:-3%"><?php echo $row[1];?></h2>
                                          <h3 style="color:black">Email : <?php echo $row[2];?></h3>
                                          <h3 style="color:black">Mobile No : <?php echo $row[3];?></h3>
                                          <h3 class="card-title" style="color:black">City : <?php echo $row[4];?></h3>
                                          <h3 style="color:black">State: <?php echo $row[5];?></h3>
                                      </fieldset>
                                        <!--<span style="margin:1%;padding:60px;border:5px solid black;background:white;border-radius:50px;">--> 
                                        
                                        <br><div style="">
                                          <p style="color:black;margin-left:5%">Km Driven  <br><h3 style="color:black;margin-left:5%;padding:2px;font-size:30px"><?php echo $row[7];?></h3></p>
                                          <p style="color:black;margin-left:20%;margin-top:-3%">Transmission  <br><h3 style="color:black;margin-left:20%;padding:2px;font-size:30px"><?php echo $row[11];?></h3></p>
                                          <p style="color:black;margin-left:40%;margin-top:-3%">Year <br><h3 style="color:black;margin-left:40%;padding:2px;font-size:30px"><?php echo $row[8];?></h3></p>
                                          <p style="color:black;margin-left:5%;margin-top:3%">Fuel type <br><h3 style="color:black;margin-left:5%;padding:2px;font-size:30px"><?php echo $row[10];?></h3></p>
                                          <p style="color:black;margin-left:20%;margin-top:-3%">Owner <br><h3 style="color:black;margin-left:20%;padding:2px;font-size:30px"><?php echo $row[12];?></h3></p>
                                          
                                          
                                          
                                          
                                          
                                          
                                         
          
                                        </div>
                                        <!--<a href="" style="float:right;text-decoration:none;color:blue;font-size:20px;padding-top:10px;">Buy now</a>-->
                                      
                                      
                                      
                                      <br>
                                    <?php 
                                }?>
                                     
                                     <div class="footer">
                    <table style="width:100%; ">
                      <tbody>
                        <tr>

                            <td>
                                <p style="color: white; background-color: black; text-align: center;padding-top:10px; padding-bottom:10px;
                                margin-bottom:0%; font-size:20px; font-weight: 300;"> <b>Website: Car Care ©2021 Developed BY : Rahul Gohel, Parin Kuhada, Priyank Dodiya, Riddhi Chaniyara.</b> </p>
                            </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                            
                          <?php 
                      }?>
          </div>
            
	  </div>

  </body>

</html>
<?php }
else{
    echo '<script>alert("Login Requirement")</script>';
    echo "<script>location.replace('index.php');</script>";
}?>

       

    

