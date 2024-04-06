<?php

    
include('db_connect.php');
$msg = "";
if(isset($_POST['btn']))
{
    
    $nm = $_POST['name'];
    
    $st = $_POST['state'];
    $mobile = $_POST['mobile'];
    $city = $_POST['city'];
    $em = $_POST['email'];
   
    
    

    //existing email address in our database
    //$sql = "SELECT User_id FROM registration WHERE Email_id = '$em' LIMIT 1" ;
    
    //$check_query = mysqli_query($connect,$sql);
    //$count_em = mysqli_num_rows($check_query);
    

        $q_ins = "insert into buy(name,email,mobile,city,state)values('$nm','$em','$mobile','$city','$st');";
        
        
        
        if($connect->query($q_ins) === TRUE)
        {
            echo '<script>alert("Your Details Sent to Seller..!")</script>';
            echo "<script>location.replace('sell&buy.php');</script>";
        }
        else
        {
            $msg = "Error: " . $q_ins . "<br>" . $connect->error;
        }        		
    
    
    
}
?>