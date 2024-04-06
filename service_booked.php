<?php
session_start();
 if($_SESSION['is_login']===true){?>
<html>
<head>

	<title>Registered Details</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

	<style>
		table{
			width:100%;
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
		#myTable tr:hover {
		/* Add a grey background color to the table header and on hover */
			background-color: grey;
			
		}
		#myTable #mytr td:hover{
			
		}
		#myInput {
			background-image: url('/css/searchicon.png');
			background-position: 10px 12px;
			background-repeat: no-repeat;
			width: 50%;
			margin-left:2%;
			font-size: 20px;
			padding: 20px 20px 20px 40px;
			border: 1px solid #ddd;
			margin-bottom: 3%;
			border-radius:50px;
		}

	</style>
</head>
<?php
	
	include_once("db_connect.php");
	$limit = 10;  
	if (isset($_GET["page"])) {
	$page  = $_GET["page"]; 
	} 
	else{ 
	$page=1;
	};  
	$start_from = ($page-1) * $limit;  
	$result = mysqli_query($connect,"SELECT * FROM registration where service_station='".$_SESSION['sname']."' ORDER BY id ASC LIMIT $start_from, $limit");
	echo $_SESSION['sname'];
	die;
	$msg = "";
	if(isset($_GET['reject_id']))
	{
		$_SESSION['reject']=1; 
		$id=$_GET['reject_id'];
		if(isset($_GET['reject'])){
			$del = "delete from registration where Id='$id';";
		
			$Result = mysqli_query($connect,$del);
			if($Result)
			{
				echo "<script>location.replace('service_booked.php');</script>";

			}
			else
			{
				echo "Error in Data Deletion ".mysqli_error($connect);
			}
		}
		else{
			echo '<script>alert("First of all reject this service..!")</script>';

		}	
	}

    if(isset($_GET['pending_id']))
    {
        $_SESSION['pending']=1;
    }
    if(isset($_GET['confirm_id']))
    {
        $_SESSION['confirm']=1;
    }
?>
<body style="background-image: url('Images/sbbg.jfif'); background-size:cover;">
	
<div style="display:block">
	<a href="service_station.php"><i class="fa-solid fa-arrow-left" style="color:white;font-size:40px;margin-bottom:-12%;margin-top:4%;margin-left:5%"></i></a>
	<h2 style="color:white;background-color:black;width:500px;padding:20px;margin-left:35%;font-size:50px;text-align:center">Services Booked </h2>
</div><i class="fa-solid fa-magnifying-glass" style="color:white;font-size:35px;margin-left:22%;"></i><input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search..." title="Type in you want to serach">

	<form action="" method="post">
	<table cellpadding="15" border="1" cellspacing="0" id="myTable">
		<tr class="header">
            <th>Id</th>
            <th>First_name</th>
            <th>Last_name</th>
            <th>Email_id</th>
            <th>Mobile_no</th>
            <th>Birthdate</th>
            <th>City</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Sate</th>
            <th>Services</th>
			<th>Service Station</th>
            <th colspan=4></th>
        </tr>
	<?php

		
		
	while($reg = mysqli_fetch_array($result))
	{
		?><tr id="mytr">
		<td><?php echo $reg[0]; ?></td>
		<td><?php echo $reg[1]; ?></td>
		<td><?php echo $reg[2]; ?></td>
		<td><?php echo $reg[3]; ?></td>
		<td><?php echo $reg[4]; ?></td>
		<td><?php echo $reg[5]; ?></td>
		<td><?php echo $reg[6]; ?></td>
		<td><?php echo $reg[7]; ?></td>
		<td><?php echo $reg[8]; ?></td>
		<td><?php echo $reg[9]; ?></td>
		<td><?php echo $reg[10]; ?></td>
		<td><?php echo $reg[11]; ?></td>
		
		<td><a href="service_booked.php?reject_id=<?php echo $reg[0];?>" onclick="return confirm('Are you sure to Reject this service !'); "  style="text-decoration:none;background:red;padding:5px;
				border:2px solid black;color:white">Delete</a></td>
		<td><a href="mailto:<?php echo $reg[2];?>?subject=Mail from <?php echo $_SESSION['s-email'];?>" onclick="return confirm('Are you sure to Reject this service !'); "  style="text-decoration:none;background:red;padding:5px;
				border:2px solid black;color:white" class="reject" name="reject">REJECT</a></td>
		<td><a href="mailto:<?php echo $reg[2];?>?subject=Mail from <?php echo $_SESSION['s-email'];?>"   style="text-decoration:none;background:blue;padding:5px;
				border:2px solid black;color:white">PENDING</a></td>
		<td><a href="mailto:<?php echo $reg[2];?>?subject=Mail from <?php echo $_SESSION['s-email'];?>"  style="text-decoration:none;background:green;padding:5px;
				border:2px solid black;color:white">CONFIRM</a></td>
		</tr><?php
		
	}?>
	</table><br>
	<?php  

	$result_db = mysqli_query($connect,"SELECT COUNT(id) FROM registration"); 
	$row_db = mysqli_fetch_row($result_db);  
	$total_records = $row_db[0];  
	$total_pages = ceil($total_records / $limit); 
	/* echo  $total_pages; */
	$pagLink = "<br><ul class='pagination' style='text-align:center' >";  
	for ($i=1; $i<=$total_pages; $i++) {
				$pagLink .= "<li class='page-item' style='display:inline-block;'>
				<a class='page-link' style='text-decoration:none;color:black;border:1px solid black;padding:10px;background:white;' href='service_booked.php?page=".$i."'>".$i."</a></li>";	
	}
	echo $pagLink . "</ul><h5 style='color:white;text-align:center;font-size:20px;margin-top:20px'>pages</h5>";  
	?>
	<script>
		function myFunction() {
		var input, filter, table, tr, td, i, txtValue;
		input = document.getElementById("myInput");
		filter = input.value.toUpperCase();
		table = document.getElementById("myTable");
		tr = table.getElementsByTagName("tr");
		for (i = 1; i < tr.length; i++) {
			td = tr[i].getElementsByTagName("td")[1];
			if (td) {
			txtValue = td.textContent || td.innerText;
			if (txtValue.toUpperCase().indexOf(filter) > -1) {
				tr[i].style.display = "";
			} else {
				tr[i].style.display = "none";

			}
			}       
		}
		}
	</script>
</form>

<?php echo $msg; ?>
</body>
</html>
<?php }
else{
    echo '<script>alert("Login Requirement")</script>';
    echo "<script>location.replace('service_station_login.php');</script>";
}?>