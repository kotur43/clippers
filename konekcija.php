<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "clippers";
@ session_start();

@ $connect = new mysqli ($host, $username, $password, $dbname); 
	
	if (mysqli_connect_errno()) {
		echo "Error: Could not connect to database. Please try again later.";
		echo "Check database parameters in konekcija.php file.";
		exit;
	}
?>