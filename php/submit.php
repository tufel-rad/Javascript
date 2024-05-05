<?php
	
	$servername = "localhost";
	$username = "root"; // Default XAMPP username
	$password = ""; // Default XAMPP password (empty by default)
	$dbname = "mydatabase";


	$conn = new mysqli($servername, $username, $password);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	$sql = "INSERT INTO `mydatabase`.`form_data` ( `name`, `email`, `msg`) VALUES ('$name', '$email', '$message');";


	if ($conn->query($sql) == true){
		echo "Form submitted successfully!";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	$conn->close();


?>
