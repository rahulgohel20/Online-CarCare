<!DOCTYPE html>
<html>
    <?php session_start();?>
<head>
	<title>Car Care</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="Fonts/fontawesome-free-5.15.3-web/fontawesome-free-5.15.3-web/css/all.css">
    
</head>
<body style="background-image: url('Images/loginbg.jpg'); background-size: cover;">
    <div class="main">
    	<div class="nav-bar">
        	<div class="nav-logo">
                <marquee direction="left" behavior="scroll" ><i class="fas fa-car"></i> Car Care <i class="fas fa-car"></i></marquee>
            </div>
            <div class="nav-list">
                <i class="fas fa-window-close"></i>   
            	<ul>
                    
                	
                    <a href="#"><li style="border-bottom: rgb(0, 255, 221) solid 3px;color: aqua;" >Login</li></a>
                    <a href="user_signup.php"><li>Sign up</li></a>
                    

            	</ul>
            </div>
        </div>
        <div class="account" style="margin-top:10%">
            <i style="border-radius:100%;box-shadow: 0px 0px 20px 0px white;" class="fas fa-user-circle"></i>
        </div>
        <div class="login-bg">
            
            <div class="login-head">
                
                <h2>Login</h2>
            </div>
            <form method="post">
                <div class="login">
                    <i class="fas fa-signature"></i>
                    <input type="text" id="firstname" name="firstname" placeholder="First name (Display)" maxlength="8" pattern="[A-Za-a]{0-9}" title="Name should be from[A-Za-z]" required><br>
                    <i class="far fa-envelope"></i>
                    <input type="email" id="name1" name="email" placeholder="Enter email id" required><br><br>
                    <i class="fas fa-lock"></i>
                    <input type="password" id="pass1" name="password"  placeholder="Enter password" required><br><br>
                    <input type="submit" id ="btn-login" name="btn-login" value="Submit"></input><br>   
                    <a href="reset_password.php"><button type="button" class="btn-reset_password"><u>Reset password ?</u></button></a><br><br>
              
                    <p id="or">-----------------------or------------------------</p>
                    <a href="user_signup.php"><button type="button" class="btn-create"><u>Create account</u></button></a>

                    <div class="icons">
                        <ul>
                            <a href="#"><li><i class="fab fa-facebook"></i></li></a>
                            <a href="#"><li><i class="fab fa-instagram"></i></li></a>
                            <a href="#"><li><i class="fab fa-twitter"></i></li></a>
                            
                        </ul>
                    </div>
                </div>
            </form>
            <img src="Images\loginimg.png" style="margin-top:-500%;margin-left:100%;width:1000px">
        </div>
        
        <div class="footer">
            <table style="width:100%; ">
                <tbody>
                    <tr>

                        <td>
                            <p style="color: white; background-color: black; text-align: center;padding-top:10px; padding-bottom:10px;
                             font-size:20px; font-weight: 300;"> <b>Website: Car Care ©2021 Developed BY : Rahul Gohel, Parin Kuhada, Priyank Dodiya, Riddhi Chaniyara.</b> </p>
                        </td>
                    </tr>
                </tbody>
            </table>
	    </div>
    </div>
</body>
</html>

<?php
$log=0;
include('db_connect.php');
$msg="Login Succesfully";
if(isset($_POST['btn-login']))
{
	$email=mysqli_real_escape_string($connect,trim($_POST['email']));
	$password=mysqli_real_escape_string($connect,trim($_POST['password']));
	$name=mysqli_real_escape_string($connect,trim($_POST['firstname']));
    
	$query="SELECT * FROM sign_up WHERE Email_id='$email' AND Confirm_pass='$password';";
	
	$fire=mysqli_query($connect,$query);
	if($fire)
	{
		if(mysqli_num_rows($fire)==1)
		{
			session_start();
            $log="User";
            $_SESSION['login']=$log;
            $_SESSION['firstname']=$name;
            $_SESSION['sname']=1;
            $_SESSION['aname']=1;
			$_SESSION['is_login']=true;
			$_SESSION['email-through']=$email;
			echo "<script>location.replace('home.php'); </script>";

		}
		else
		{
			echo '<script>alert("Invalid Password or Email...!")</script>';
		}
	}
}
?>