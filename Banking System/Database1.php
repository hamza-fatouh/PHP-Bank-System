<?php

	// Database connection code

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "cards";

	// Create connection

	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection

	If ($conn->connect_error) {

		Die("Connection failed: " . $conn->connect_error);

	}

	// Check if form has been submitted

	If ($_SERVER["REQUEST_METHOD"] == "POST") {

		// Get form data

		$Card_Name = $_POST["Card_Name"];
		$Card_Number = $_POST["Card_Number"];
		$Card_Date = $_POST["Card_Date"];
		$Cvv = $_POST["Cvv"];
        

		// Check if username already exists

		$sql = "SELECT * FROM cards WHERE Card_Number='$Card_Number'";
		$result = $conn->query($sql);

		If ($result->num_rows> 0) {

			// Username already exists

			Echo "Card Number Is already taken. Please choose a different username.";

		} 
        
        else {

			// Insert new user into database

			$sql = "INSERT INTO cards (Card_Name, Card_Number, Card_Date, Cvv) VALUES ('$Card_Name', '$Card_Number', '$Card_Date', '$Cvv')";
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