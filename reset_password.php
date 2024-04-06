
<!DOCTYPE html>

<html>
    
    <head>
        <title>Car Care</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        
    </head>
<body>
    

<div class="form">
    <form>
        <h1 class="rp-head">Reset your password</h1><br>
        <label>Email</label><br><br>
        <input type="email" id="email" placeholder="Enter email..." name="email"   required><br><br>

        <label>Old Password</label><br><br>
        <input type="text" id="old-pass" placeholder="Old password..." name="old-pass"   required><br><br>

        <label>New Password</label><br><br>
        <input type="password" id="new-pass" placeholder="New password...." name="new-pass"   required><br><br>

        <label>Confirm Password</label><br><br>
        <input type="password" id="confirm-pass" placeholder="Confirm password..." name="confirm-pass"   required><br><br>

        <input type="submit" id="sub_reset" class="sub_reset"  name="sub_reset" value="Reset Password" />
        <a href="index.php"><- back to login</a><br><br>


    </form>

 </div>

 </body>
 </html>


  
 <?php

    
include('db_connect.php');

if(isset($_POST['sub_reset']))
{
    
    $em = $_POST['email'];
    $oldpass=$_POST['old-pass'];
    $newpass=$_POST['new-pass'];
    $confirmpass=$_POST['confirm-pass'];

    

    //existing email address in our database
    //$sql = "SELECT User_id FROM registration WHERE Email_id = '$em' LIMIT 1" ;
    
    //$check_query = mysqli_query($connect,$sql);
    //$count_em = mysqli_num_rows($check_query);
    $query = mysqli_query($connect,"SELECT * FROM sign_up WHERE Email_id='$em'");
    $row = mysqli_num_rows($query);
        if($row)
        {
             $q_ins = "UPDATE sign_up SET Create_pass='$newpass',Confirm_pass='$confirmpass' where Email_id='$em';";
        
        
            if(mysqli_query($connect,$q_ins))
            {
                echo '<script>alert("Your Password Reset Successfully..!")</script>';
                echo "<script>location.replace('index.php');</script>";
            }
            else
            {
                echo "<script>alert('Email not registered..!')</script>";
            }        		
        }
        else{
            echo "<script>alert('Something is error..!')</script>";

        }
    
}
else{
    echo "<script>alert('Something is error..!')</script>";

}
?>        