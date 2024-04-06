<?php
session_start();
 if($_SESSION['is_login1']===true){?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-family: Arial, Helvetica, sans-serif;
    margin:0;
    padding:0;
    position:static;
}
.head{
    width:100%;
    font-size:40px;
    text-align:center;
    background:rgb(90, 90, 90);
    margin:0%;
    padding: 1px;
    
    color:black;
    
}
.head a{
    position:absolute;
    text-align:right;
    color:red;
    background:black;
    padding:15px;
    border-radius:50px;
    text-decoration:none;
    right:70px;
    top:50px;
}
.head a:hover{
    color:white;
    transition:0.5ms;
}
 
ul{ 
    
    margin:0;
    padding:0;
    
    
}
li a{
    display:block;
    
    font-size:25px;
    color:white;
    
    padding:15px 10px;
    text-decoration:none;
}
li a:hover{
    background:red;
    font-size:30px;
}
table{
			
			border:1px solid $color-form-highlight;
			justify-content:center;
			text-align:center;
			color:white;
		}
		table .header{
			
			width:100%;
			background:#000;
			
		}
		table tr{
			background:lightgrey;

			width:100%;
			
			
		}
		table tr td{
			color:black;
		}

/* Change styles for span and cancel button on extra small screens */


</style>
</head>
<?php
	
	include_once("db_connect.php");
	$msg = "";
	if(isset($_GET['delete_id']))
	{
		 
		$id=$_GET['delete_id'];
		$del = "delete from sign_up where Id='$id';";

		$Result = mysqli_query($connect,$del);
		if($Result)
		{
			echo "Data Deleted Successfully";
		}
		else
		{
			echo "Error in Data Deletion ".mysqli_error($connect);
		}
	}
?>
<body style="background-image: url('Images/sbbg.jfif'); background-size:cover;">

    <div class="head">
        <h2>WELCOME TO ADMIN PANEL</h2>
        <a href="admin_login.php">Logout</a>
    </div>
    
        
        <span style="display:inline-block;margin-left:20%;margin-top:5%">
            <form action="" method="post" style="">
            <table cellpadding="15" border="1" cellspacing="0">
                <tr class="header">
                    <th>Id</th>
                    <th>First_name</th>
                    <th>Last_name</th>
                    <th>Email_id</th>
                    <th>Create_password</th>
                    <th>Confirm_password</th>
                    <th colspan=2></th>
                </tr>
            <?php
            
                $q_sel = "select * from sign_up;";
                
                $result = mysqli_query($connect, $q_sel);
                //echo mysqli_num_rows($result);
                
                while($reg = mysqli_fetch_row($result))
                {
                    
                ?><tr>
                    <td><?php echo $reg[0]; ?></td>
                    <td><?php echo $reg[1]; ?></td>
                    <td><?php echo $reg[2]; ?></td>
                    <td><?php echo $reg[3]; ?></td>
                    <td><?php echo md5($reg[4]); ?></td>
                    <td><?php echo md5($reg[5]); ?></td>

                    <td><a href="admin_reg.php?delete_id=<?php echo $reg[0]; ?>" onclick="return confirm('Are you sure to delete !'); "  style="text-decoration:none;background:red;padding:5px;
                            border:2px solid black;color:white">DELETE</a></td>
                    <td><a href="reg_update.php?updateid=<?php echo $reg[0]; ?>"  style="text-decoration:none;background:green;padding:5px;
                            border:2px solid black;color:white">UPDATE</a></td>		</tr><?php
            }?>
            </table><br>
            </form>
        </span>
        <div class="nav" style="background:black;width:20%;height:700px;margin-top:-23.5%">
            <ul>
                <li><a href="admin_reg.php">Registered</a></li>
                <li><a href="admin_waterless.php">Waterless Booked</a></li>
                <li><a href="admin_carsell.php">Car Sell Details</a></li>
                <li><a href="admin_carbuy.php">Car Buy Booked</a></li>
                <li><a href="admin_carrent.php">Car Rent Details</a></li>
                <li><a href="admin_carrent_book.php">Car Rent Booked</a></li>
                <!--<li><a href="#">Contact us</a></li>-->
            </ul>
        </div>

<?php echo $msg; ?>
</body>
</html>
<?php }
else{
    echo '<script>alert("Admin Login Requirement")</script>';
    echo "<script>location.replace('admin_login.php');</script>";
}?>


