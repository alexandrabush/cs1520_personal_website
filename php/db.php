<?php
	// Add a cookie
    $cookieUserName= $_POST["name"];
    setcookie("name", $cookieUserName);
    
	if ($_POST){
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "submission";
		//Create the conn
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}

		//Create the database, if it does not already exist
		if ($conn->select_db('submission') == false){
			$submission_db = "CREATE DATABASE submission";
			if ($conn->query($submission_db) == true) {
				echo "Database created successfully";
			}
			else {
				echo "There was a problem creating the database";
			}
		}
		//Create the table, if it doesn't already exist
		$table = mysqli_query($conn, 'select 1 from `submissions` LIMIT 1');
		if(!$table){
			$submission = "CREATE TABLE submissions (
			id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			name VARCHAR(50) NOT NULL,
			email VARCHAR(50) NOT NULL,
			message TEXT,
			submission_date TIMESTAMP
			)";
			if ($conn->query($submission) === true){
				echo "Table submissions created";
			}
			else {
				echo "Error creating table: " .$conn->error;
			}
		}
		//Get the appropriate variables from the form when submitted
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		//Insert values into the database
		$query = "INSERT INTO `submissions` (`id`, `name`, `email`, `message`, `submission_date`) VALUES (NULL, '$name', '$email', '$message', CURRENT_TIMESTAMP);";
		if(!mysqli_query($conn, $query)){
			die("Error: Could not save information" . mysqli_error($conn));
		}
		mysqli_close($conn);
	}
?>