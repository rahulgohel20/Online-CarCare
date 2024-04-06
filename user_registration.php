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
        
    </head>
    <style>
        .reg-bg::-webkit-scrollbar {
            display: none;
        }
        label{
            font-size:25px;
            color:white;
            
        }
        input, select {
        width: 90%;
        padding: 15px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        font-size:20px;
        }
       
        input[type=submit] {
        width: 50%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin-left: 20%;
        margin-top:2%;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        }

        input[type=submit]:hover {
        background-color: #45a049;
        }

        .info-fill {
        border-radius: 5px;
        margin-top:5%;
        margin-left:30%;
        margin-bottom:5%;
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
    <body style="background-image: url('Images/waterlessbg.jpg'); background-size: cover;">
        
        <div class="main" style="overflow-x:hidden">
            
        <div class="nav-bar">
        <div class="nav-logo">
                <a href="home.php"><marquee direction="left" behavior="scroll" ><i class="fas fa-car"></i> Car Care <i class="fas fa-car"></i></marquee></a>
                
            </div>
            
            <div class="nav-list">
            
            	
                
                
                
                <p style="color:Green;float: center;font-size: 25px;margin-left: 650%;padding-top: 20px;">WELCOME</p>
                <p style="margin-left:650%;"><?php  
                    if($_SESSION['login']=="User"){
                        echo("&nbsp&nbsp&nbsp&nbsp&nbsp".$_SESSION['firstname']);
                    }
                    else{
                        echo($_SESSION['login']);
                    }
                    ?></p>
            </div>
            <i style="font-size:40px;color:white;margin-left:46%;margin-top:-1.5% " class="fas fa-user-circle"></i>
            
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
        
            <div class="reg-bg" style=" margin-left:10%;opacity:0.9;overflow:scroll;height:70%;overflow-x:hidden">
                
                <div class="reg-head">
                    
                    <h2 style="margin-left:-15%;margin-top:-10%">Registration</h2>
                </div>
                
                <form method="post">
                <div class="reg1" style="margin-left:10%;padding-top:50px;">
                    <label for="fname">First Name</label><br>
                    <input type="text" id="reg_firstname" name="reg_firstname" placeholder="First name.."  title="Name should be from [A-Za-z]"  maxlength="10" required><br>

                    <label for="lname">Last Name</label><br>
                    <input type="text" id="lastname" name="lastname" placeholder="Last name.."  title="Name should be from [A-Za-z]" required><br>

                    <label for="phone">Mobile No.</label><br>
                    <input type="tel" id="mobile"  name="mobile" placeholder="Enter Number.." maxlength="10" pattern="[0-9]{10}" required><br>

                    <label for="mno">Email Address</label><br>
                    <input type="email" id="email" name="email" placeholder="Enter Address.." required><br>

                    <label for="dob">Birthday</label><br>
                    <input type="date" id="birth_date" name="birth_date" placeholder="Enter Birthdate.." required><br>

                    <label for="state">State</label><br>
                    <select id="state" name="state" required>
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
                    <label for="services">Choose Service</label><br>
                    <select id="services" name="services" required>
                        <option value="Exterior Cleaning">Exterior Cleaning</option>
                        <option value="Interior Cleaning">Interior Cleaning</option>
                        <option value="Micro Detailing">Micro Detailing</option>
                        <option value="Car Sanitization">Car Sanitization</option>
                        <option value="Commercial Sanitization">Commercial Sanitization</option>
                        <option value="Door Step Service">Door Step Service</option>
                    </select><br>
                    <?php
                        include('db_connect.php');
		                $q_sel = "select name from service_station;";
		                $result = mysqli_query($connect, $q_sel);?>
                    <label for="services">Choose Service Station</label><br>
                    <select id="service_name" name="service_name" required>
                        <?php while($reg = mysqli_fetch_row($result))
                        {?>
                        <option value="<?php echo $reg[0];?>"><?php echo $reg[0];?></option>
                        <?php }?>
                    </select><br>
                    <label for="city">City</label><br>
                    <input type="text" id="city" name="city" placeholder="Enter City..." maxlength="10" required><br>
                    <label for="address">Address</label><br>
                    <input type="text" id="address" name="address" placeholder="Enter address..." required><br><br>

                    <label for="gen">Gender</label><br>
                    <select id="gender" name="gender" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>

                    </select><br>
                
                    <input type="submit" value="Submit" name="btn_reg"><br><br><br>
                </form>
                
            </div>
           
        </div>
        <div class="footer">
                <table style="width:100%; ">
                    <tbody>
                        <tr>

                            <td>
                                <p style="color: white; background-color: black; text-align: center;padding-top:10px; padding-bottom:10px;
                                 font-size:20px; font-weight: 300;margin-top:-2.5%"> <b>Website: Car Care ©2021 Developed BY : Rahul Gohel, Parin Kuhada, Priyank Dodiya, Riddhi Chaniyara.</b> </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
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
	if(isset($_POST['btn_reg']))
	{
        $success=0;
        $insert=0;
		$nm = $_POST['reg_firstname'];
        $st = $_POST['state'];
		$sn = $_POST['lastname'];
        $em = $_POST['email'];
        $bdate=$_POST['birth_date'];
		$city = $_POST['city'];
        $mn=$_POST['mobile'];
		$gen=$_POST['gender'];
		$add=$_POST['address'];
        $ser=$_POST['services'];
        $ss=$_POST['service_name'];
        
		//existing email address in our database
		//$sql = "SELECT User_id FROM registration WHERE Email_id = '$em' LIMIT 1" ;
		
		//$check_query = mysqli_query($connect,$sql);
		//$count_em = mysqli_num_rows($check_query);
        $query= mysqli_query($connect,"select * from registration where Email_id='$em'");
        $query3= mysqli_query($connect,"select * from registration where Mobile_no='$mn'");
        if(mysqli_num_rows($query)>0){
            echo '<script>alert("Email already exist..!")</script>';
        }
        elseif(mysqli_num_rows($query3)>0){
            echo '<script>alert("Mobile number already exist..!")</script>';
        }
		else{
            $q_ins = "insert into registration(First_name,Last_name,Email_id,Mobile_no,Birthdate,City,Gender,Address,state,services,service_station)
            values('$nm','$sn','$em','$mn','$bdate','$city','$gen','$add','$st','$ser','$ss')";
            
            
            
            if($connect->query($q_ins) === TRUE)
            {
                session_start();
                $_SESSION['firstname']=$nm;
                $msg="Data Inserted";
                $success=1;
                $_SESSION['success']=$success;
                $insert=1;
                $_SESSION['insert']=$insert;
                echo '<script>alert("Data Inserted Successfully..!")</script>';
                echo "<script>location.replace('waterless.php');</script>";
            }
            else
            {
                $msg = "Error: " . $q_ins . "<br>" . $connect->error;
            } 
        }       		
        
       
		
    }
?>