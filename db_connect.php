<?php
	$connect = mysqli_connect("localhost","root","") or die("Connection not established, check the connection");

	mysqli_select_db($connect,"car care");
	
	
?>