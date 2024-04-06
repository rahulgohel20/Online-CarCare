<!DOCTYPE html>

<html>
    <?php session_start();?>
    <head>
        <title>Car Care</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="Fonts/fontawesome-free-5.15.3-web/fontawesome-free-5.15.3-web/css/all.css">
    </head>
    <body  style="background-image: url('Images/regbg.jfif'); background-size: cover;">
        
        <div class="main">
            <div class="nav-bar">
                <div class="nav-logo">
                    <marquee direction="left" behavior="scroll" ><i class="fas fa-car"></i> Car Care <i class="fas fa-car"></i></marquee>
                </div>
                <div class="nav-list">
                    <i class="fas fa-window-close"></i>   
                    <ul>
                        
                        
                        <a href="index.php"><li>Login</li></a>
                        <a href="#"><li style="border-bottom:  rgb(0, 255, 221) solid 3px;color: aqua;">Sign up</li></a>
                        
                    </ul>
                </div>
            </div>
            
            <div class="reg-bg">
                
                <div class="reg-head">
                    
                    <h2>Sign Up</h2>
                </div>
                <form method="post">
                <div class="reg">
                    <i class="fas fa-signature"></i>
                    <input type="text" id="firstname" name="firstname" placeholder="First name"  title="Name should be from [A-Za-z]" required><br>
                    
                    &nbsp<input type="text" id="lastname" name="lastname" placeholder="Last name"  title="Name should be from [A-Za-z]" required><br><br>
                    <i class="far fa-envelope"></i>
                    <input type="email" id="email" name="email" placeholder="Enter email id" required><br><br>
                    <i class="fas fa-lock"></i>
                    <input type="password" id="pass1" name="pass1" placeholder="Create password" required><br>
                    &nbsp<input type="password" id="pass2" name="pass2" placeholder="Confirm password" required><br><br>
                    
                    <input type="submit"  id="btn_reg" name="btn_reg" value="submit" style="Width:250px;"><br><br>
                

                </div>
                </form>
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

<?php

    
	include('db_connect.php');
	$msg = "";
	if(isset($_POST['btn_reg']))
	{
		
		$nm = $_POST['firstname'];
        
		$sn = $_POST['lastname'];
		$pass1 = $_POST['pass1'];
        $pass2 = $_POST['pass2'];
        $em = $_POST['email'];
       
        
        
	
		//existing email address in our database
		// $sql = "SELECT User_id FROM registration WHERE Email_id = '$em' LIMIT 1" ;
		
		// $check_query = mysqli_query($connect,$sql);
		// $count_em = mysqli_num_rows($check_query);
		if($pass1===$pass2){

            $query= mysqli_query($connect,"select * from sign_up where Email_id='$em'");
            
        if(mysqli_num_rows($query)>0){
            echo '<script>alert("Email already exist..!")</script>';
        }
        
            else{
                $q_ins = "insert into sign_up(First_name,Last_name,Email_id,Create_pass,Confirm_pass)values('$nm','$sn','$em','$pass1','$pass2');";
                
                
                
                if($connect->query($q_ins) === TRUE)
                {
                    $_SESSION['firstname']=$nm;
                    $_SESSION['email-through']=$em;
                    $msg="Data Inserted";
                    echo '<script>alert("Sign-up Successfully")</script>';
                    echo "<script>location.replace('index.php');</script>";
                }
                else
                {
                    $msg = "Error: " . $q_ins . "<br>" . $connect->error;
                }  
            }      		
        }
        else{   
            echo "Password is not the same";
            echo '<script>alert("Password is not the same")</script>';
        }
		
    }
?>