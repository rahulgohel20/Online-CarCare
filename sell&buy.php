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
          padding:5px;
          margin:1%;
        }
        .row::after{
          content:"";
          clear:both;
          display:table;

        }
        /*.head{
            background:blue;
            padding:50px;
            text-align:center;
            box-shadow: 0px 0px 50px 10px black;
        }
        .head h1{
            font-size:50px;
            margin-top:5%;
            font-family:Georgia, 'Times New Roman', Times, serif;
        }
        .head p{
            font-weight:900;
            font-size:20px;
            color:yellow
        }
        .head p button{
            padding:10px;
            background:purple;
            border-radius:50px;
            font-weight:700;
            color:white;
            box-shadow:0px 0px 25px 10px black;
            font-size:25px;
        }*/
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
  margin-right:2%;
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
                    <p style="color:Green;float: center;font-size: 25px;margin-left: 280%;padding-top: 20px;">WELCOME</p>
                    <p style="margin-left:285%;"><?php  
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
          <i style="font-size:40px;color:white;margin-left:33.5%;margin-top:-1.5% " class="fas fa-user-circle"></i>

          
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
                <h1>.</h1><br>
                <p>.</p>
            </div><br><br>
            <div>

                  <table class="table table-bordered" style="margin-top:5%;" id="myTable">  
                          
                      <?php  
                      include('db_connect.php');
                      $query = "SELECT * FROM sell_buy order by id;";
                        
                      $result = mysqli_query($connect, $query);  
                      
                      
                      $rowcount = mysqli_num_rows( $result );
                      
                      ?>
                      
                      <div style="margin:2%; background:white;border-radius:50px">
                        <h1 style="padding:20px;margin-left:3%">Fresh Recommendation</h1><br><hr/>
                        <div style="margin-left:3%"> 
                          <?php 
                          while($row = mysqli_fetch_array($result))  
                         
                          {
                            /*for($i=0;i<$rowcount;$i++){
                              $id[$i]= $row[0];

                            }*/
                            ?>
                          
                          <div class="row">
                            <div class="column" id="coloum"  style="margin:1%;padding:60px;border:5px solid black;background:white;border-radius:50px;text-align:center;">
                              <!--<span style="margin:1%;padding:60px;border:5px solid black;background:white;border-radius:50px;">--> 
                              <?php echo '
                              
                              <img src="data:image/jpg;base64,'.base64_encode($row['images'] ).'" height="200" width="300"/>';?></button>
                              <h2 class="card-title" style=""><?php echo $row[6];?></h2>
                              <h2 style="">Price: <?php echo $row[13];?></h2>
                              <h3 style="">TYPE: <?php echo $row[9];?></h3><br>
                              
                              <!--<h3 style="color:blue">Connect with Gmail :<a href="mailto: <?php echo $row[2];?>"> <?php echo $row[2];?></h3></a><br>-->
                              <!--<a href="" style="float:right;text-decoration:none;color:blue;font-size:20px;padding-top:10px;">Buy now</a>-->
                            
                              <button class="open-button" onclick="openForm2()" style="border:none"><a href="cardetails?updateid=<?php echo $row[0]; ?>"  style="text-decoration:none;background:green;padding:5px;
					                      border:2px solid black;color:white">Buy Now</a></button>
                            </div>
                            <?php
                            
                                  
                            }
                      
                            ?>
                          </div> 
                        </div> 
                      </div>
                      </table>
                      <script>
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
            <div class="loginPopup">
      <div class="formPopup" id="popupForm">
        <form  method="post" class="formContainer">
          <h2 style="color:white">Send Your Details</h2><br>
          <label for="name">
            <strong style="color:white">Full Name</strong>
          </label>
          <input type="text" id="name" placeholder="Your Name" name="name" pattern="[A-Za-z]{10}" title="Name should be from [A-Za-z]" required><br>
          <label for="email">
            <strong style="color:white">E-mail</strong>
          </label>
          <input type="email" id="email" placeholder="Your Email" name="email" required><br>
          <label for="mobile">
            <strong style="color:white">Mobile Number</strong>
          </label>
          <input type="text" id="mobile" placeholder="Your Mobile Number" maxlength="10" name="mobile" pattern="[0-9]{10}" title="Number should be from [0-9]" required><br>
          <label for="city">
            <strong style="color:white">City</strong>
          </label>
          <input type="text"  id="city" name="city" placeholder="Your City"  required><br>
          <label for="state">
            <strong style="color:white">State</strong>
          </label>
          <select id="state" name="state"  required>
            <option value="Andhra Pradesh">Andhra Pradesh</option>
            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
            <option value="Assam">Assam</option>
            <option value="Bihar">Bihar</option>
            <option value="Chhattisgarh">Chhattisgarh</option>
            <option value="Goa">Goa</option>
            <option value="Gujarat">Gujarat</option>
            <option value="Haryana">Haryana</option>
            <option value="Himachal Pradesh">Himachal Pradesh</option>
            <option value="Jammu Kashmir">Jammu Kashmir</option>
            <option value="Jharkhand">Jharkhand</option>
            <option value="Karnataka">Karnataka</option>
            <option value="kerala">kerala</option>
            <option value="Madhya Pradesh">Madhya Pradesh</option>
            <option value="Maharashtra">Maharashtra</option>
            <option value="Manipur">Manipur</option>
            <option value="Meghalaya">Meghalaya</option>
            <option value="Mizoram">Mizoram</option>
            <option value="Nagaland">Nagaland</option>
            <option value="Odisha">Odisha</option>
            <option value="Punjab">Punjab</option>
            <option value="Rajasthan">Rajasthan</option>
            <option value="Sikkim">Sikkim</option>
            <option value="Tamil Nadu">Tamil Nadu</option>
            <option value="Telangana">Telangana</option>
            <option value="Tripura">Tripura</option>
            <option value="Uttar Pradesh">Uttar Pradesh</option>
            <option value="Uttarakhand">Uttarakhand</option>
            <option value="West Bengal">West Bengal</option>

          </select><br>
          <label for="from-date">
            <strong style="color:white">From*</strong>
          </label>
          <input type="date" id="from-date" placeholder="From date" name="from-date" required><br>
          <label for="to-date">
            <strong style="color:white">To*</strong>
          </label>
          <input type="date" id="to-date" placeholder="To date" name="to-date" required><br>
          <button type="submit" class="btn btn-primary" name="submit">Submit</button><br/>
          <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
        </form>
      </div>
    </div>
    <script>
      function openForm() {
        document.getElementById("popupForm").style.display = "block";
      }
      function closeForm() {
        document.getElementById("popupForm").style.display = "none";
      }
    </script>
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

  if(isset($_POST['submit']))
  {
      
      $nm = $_POST['name'];
      
      $st = $_POST['state'];
      $mobile = $_POST['mobile'];
      $city = $_POST['city'];
      $em = $_POST['email'];
      $from = $_POST['from-date'];
      $to = $_POST['to-date'];
      
      

      //existing email address in our database
      //$sql = "SELECT User_id FROM registration WHERE Email_id = '$em' LIMIT 1" ;
      
      //$check_query = mysqli_query($connect,$sql);
      //$count_em = mysqli_num_rows($check_query);
      
      $query= mysqli_query($connect,"select * from rent where email='$em'");
      $query3= mysqli_query($connect,"select * from rent where mobile='$mobile'");
      if(mysqli_num_rows($query)>0){
          echo '<script>alert("Email already exist..!")</script>';
      }
      elseif(mysqli_num_rows($query3)>0){
          echo '<script>alert("Mobile number already exist..!")</script>';
      }
        else{
          $q_ins = "insert into rent(name,email,mobile,city,state,from_date,to_date)values('$nm','$em','$mobile','$city','$st','$from','$to');";
          
          
          if($connect->query($q_ins) === TRUE)
          {
              echo '<script>alert("Your Details Sent Successfully..!")</script>';
              echo "<script>location.replace('car_rent.php');</script>";
          }
          else
          {
              $msg = "Error: " . $q_ins . "<br>" . $connect->error;
          }        		
        }
      
      
  }
?>        
    

