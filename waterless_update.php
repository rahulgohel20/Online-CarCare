<?php
    
include("db_connect.php");
$msg = "";
//print "<pre>";
//print_r($_GET);
//die;
if(isset($_GET['updateid']))
	{
		$id = $_GET['updateid'];
		
		$q_sel = "select * from registration where Id='$id'";
	
		$result = mysqli_query($connect, $q_sel);
		$reg=mysqli_fetch_array($result,MYSQLI_ASSOC);
        /*print "<pre>";
        print_r($data);
        die;*/
	
    }
if(isset($_POST['btn_reg']))
{
    
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
    
        $update = "update registration SET First_name='$nm',Last_name='$sn',Email_id='$em',state='$st',Birthdate='$bdate',City='$city',Mobile_no='$mn',Gender='$gen',Address='$add',
                    services='$ser',service_station='$ss' where Id='$id';";
        

    
    
    $Result = mysqli_query($connect,$update);
    if($Result)
    {
        echo "<script>location.replace('admin_waterless.php'); </script>";
    }
    else
    {
        echo "Error in Data Updation ".mysqli_error($connect);
    }
}


	
?>

<!DOCTYPE html>

<html>
<?php
session_start();
 if($_SESSION['is_login']===true){?>
    <head>
        <title>Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="Fonts/fontawesome-free-5.15.3-web/fontawesome-free-5.15.3-web/css/all.css">
        
    </head>
    <style>
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
    </style>
    <body style="background-image: url('Images/adminbg.jpg'); background-size: cover;">
        
        <div class="main">
            
        <div class="nav-bar">
        	<div class="nav-logo">
                <marquee direction="left" behavior="scroll" ><i class="fas fa-car"></i> Car Care <i class="fas fa-car"></i></marquee>
                
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
            <div class="reg-bg" style="margin-top:10%; margin-left:10%;">
                
                <div class="reg-head">
                    
                    <h2 style="margin-left:-20%;">Update Sign up</h2>
                </div>
                <img src="Images\Car.png" style="margin-top:0px;margin-left:800%;width:0px">
                <form method="post">
                <div class="reg1" style="margin-left:10%;padding-top:50px;">
                <label for="fname">First Name</label><br>
                    <input type="text" id="reg_firstname" name="reg_firstname" value="<?php echo $reg['First_name']?>" placeholder="First name.."  maxlength="10" required><br>

                    <label for="lname">Last Name</label><br>
                    <input type="text" id="lastname" name="lastname" value="<?php echo $reg['Last_name']?>" placeholder="Last name.." required><br>

                    <label for="phone">Mobile No.</label><br>
                    <input type="tel" id="mobile"  name="mobile" value="<?php echo $reg['Mobile_no']?>" placeholder="Enter Number.." maxlength="10" pattern="[0-9]{10}" required><br>

                    <label for="mno">Email Address</label><br>
                    <input type="email" id="email" name="email" value="<?php echo $reg['Email_id']?>" placeholder="Enter Address.." required><br>

                    <label for="dob">Birthday</label><br>
                    <input type="date" id="birth_date" name="birth_date" value="<?php echo $reg['Birthdate']?>" placeholder="Enter Birthdate.." required><br>

                    <label for="state">State</label><br>
                    <select id="state" name="state" value="<?php echo $reg['state']?>" required>
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
                    <select id="services" name="services" value="<?php echo $reg['services']?>" required>
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
                    <select id="service_name" name="service_name" value="<?php echo $reg['service_station']?>"  required>
                        <?php while($reg = mysqli_fetch_row($result))
                        {?>
                        <option value="<?php echo $reg[0];?>"><?php echo $reg[0];?></option>
                        <?php }?>
                    </select><br>
                    <label for="city">City</label><br>
                    <input type="text" id="city" name="city" value="<?php echo $reg['City'];?>" placeholder="Enter City..." maxlength="10" required><br>
                    <label for="address">Address</label><br>
                    <input type="text" id="address" name="address" value="<?php echo $reg['Address'];?>" placeholder="Enter address..." required><br><br>

                    <label for="gen">Gender</label><br>
                    <select id="gender" name="gender" value="<?php echo $reg['Gender']?>" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>

                    </select><br>
                
                    <input type="submit" value="Submit" name="btn_reg"><br><br><br>
                </div>
            </div>
        </div>
    </body>
</html>
<?php }
else{
    echo '<script>alert("Admin Login Requirement")</script>';
    echo "<script>location.replace('admin_login.php');</script>";
}?>
