
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
	$result = mysqli_query($connect,"SELECT * FROM sign_up ORDER BY id ASC LIMIT $start_from, $limit");
	$msg = "";
	if(isset($_GET['delete_id']))
	{
		 
		$id=$_GET['delete_id'];
		$del = "delete from sign_up where Id='$id';";

		$Result = mysqli_query($connect,$del);
		if($Result)
		{
			echo "<script>location.replace('admin_reg.php');</script>";
		}
		else
		{
			echo "Error in Data Deletion ".mysqli_error($connect);
		}
	}
?>
<body style="background-image: url('Images/sbbg.jfif'); background-size:cover;">
	
<div style="display:block">
	<a href="admin.php"><i class="fa-solid fa-arrow-left" style="color:white;font-size:40px;margin-bottom:-12%;margin-top:4%;margin-left:5%"></i></a>
	<h2 style="color:white;background-color:black;width:500px;padding:20px;margin-left:35%;font-size:50px;text-align:center">User Registered </h2>
</div>	

	<i class="fa-solid fa-magnifying-glass" style="color:white;font-size:35px;margin-left:22%;"></i><input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search..." title="Type in you want to serach">
	
	<form action="" method="post" style="opacity:0.9;">
	<table cellpadding="15" border="1" cellspacing="0" id="myTable">
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
	
		
		
		while($reg = mysqli_fetch_row($result))
		{
			
		?><tr id="mytr">
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
	<?php  

	$result_db = mysqli_query($connect,"SELECT COUNT(id) FROM sign_up"); 
	$row_db = mysqli_fetch_row($result_db);  
	$total_records = $row_db[0];  
	$total_pages = ceil($total_records / $limit); 
	/* echo  $total_pages; */
	$pagLink = "<ul class='pagination' >";  
	for ($i=1; $i<=$total_pages; $i++) {
				$pagLink .= "<li class='page-item' style='display:inline-block;padding:10px;'>
				<a class='page-link' style='text-decoration:none;color:black;border:1px solid black;padding:10px;background:white;margin-left:2450%' href='admin_reg.php?page=".$i."'>".$i."</a></li>";	
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
    echo '<script>alert("Admin Login Requirement")</script>';
    echo "<script>location.replace('admin_login.php');</script>";
}?>