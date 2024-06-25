<?php

	// Database connection code

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "contact";

	// Create connection

	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection

	If ($conn->connect_error) {

		Die("Connection failed: " . $conn->connect_error);

	}

	// Check if form has been submitted

	If ($_SERVER["REQUEST_METHOD"] == "POST") {

		// Get form data

		$Name = $_POST["Name"];
		$Email = $_POST["Email"];
		$Message = $_POST["Message"];

		// Check if username already exists

		$sql = "SELECT * FROM contact WHERE Name='$Name'";
		$result = $conn->query($sql);

		If ($result->num_rows> 0) {

			// Username already exists

			Echo "Username already taken. Please choose a different username.";

		} 
        
        else {

			// Insert new user into database

			$sql = "INSERT INTO contact (Name, Email, Message) VALUES ('$Name', '$Email', '$Message')";
			If ($conn->query($sql) === TRUE) {

				Echo "Registration successful!";

			} 
            
            else {

				Echo "Error: " . $sql . "<br>" . $conn->error;

			}

		}

	}
	
	// Close connection

	$conn->close();

?>