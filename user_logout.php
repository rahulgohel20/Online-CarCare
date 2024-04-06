<?php
	session_start();
	session_destroy();
	echo '<script>alert("Thank You For Visinting Car Care")</script>';

	echo "<script>location.replace('index.php'); </script>";
 ?>