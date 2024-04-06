<?php
    
include("db_connect.php");
$msg = "";
//print "<pre>";
//print_r($_GET);
//die;
if(isset($_GET['updateid']))
	{
		$id = $_GET['updateid'];
		
		$q_sel = "select * from sign_up where Id='$id'";
	
		$result = mysqli_query($connect, $q_sel);
		$reg=mysqli_fetch_array($result,MYSQLI_ASSOC);
        /*print "<pre>";
        print_r($data);
        die;*/
	
    }
if(isset($_POST['btn_reg']))
{
    
    $nm = $_POST['firstname'];
    $sn = $_POST['lastname'];
    $em = $_POST['email'];
    $create = $_POST['pass1'];
    $confirm = $_POST['pass2'];
    
    
    
        $update = "update sign_up SET First_name='$nm',Last_name='$sn',Email_id='$em',Create_pass='$create',Confirm_pass='$confirm' where Id='$id';";
        

    
    
    $Result = mysqli_query($connect,$update);
    if($Result)
    {
        echo '<script>alert("Updated Successfully..!")</script>';
        echo "<script>location.replace('admin_reg.php'); </script>";
    }
    else
    {
        echo "Error in Data Updation ".mysqli_error($connect);
    }
}


	
?>
<?php
session_start();
 if($_SESSION['is_login1']===true){?>
<!DOCTYPE html>

<html>
    
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
                    <input type="text" id="firstname" name="firstname" value="<?php echo $reg['First_name']?>" placeholder="First name.."   required><br>

                    <label for="lname">Last Name</label><br>
                    <input type="text" id="lastname" name="lastname" value="<?php echo $reg['Last_name']?>" placeholder="Last name.." required><br>

                    <label for="email">Email</label><br>
                    <input type="email" id="email"  name="email" name="email" value="<?php echo $reg['Email_id']?>" placeholder="Enter Number.."  required><br>

                    <label for="pass1">Create Password</label><br>
                    <input type="password" id="pass1" name="pass1"  value="<?php echo $reg['Create_pass']?>" placeholder="Enter Address.." required><br>

                    <label for="pass2">Confirm Password</label><br>
                    <input type="password" id="pass2" name="pass2" value="<?php echo $reg['Confirm_pass']?>" placeholder="Enter Birthdate.." required><br>

                    <input type="submit"  id="btn_reg" name="btn_reg" value="submit" style="Width:250px;"><br><br>

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