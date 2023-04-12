<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];

	// Database connection code goes here
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "national_id";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	// SQL query to insert data into the applicants table
	$sql = "INSERT INTO applicants (name, email, phone, address) VALUES ('$name', '$email', '$phone', '$address')";

	if(mysqli_query($conn, $sql)) {
		echo "<script>alert('Application submitted successfully.')</script>";
	} else {
		echo "<script>alert('Error submitting application. Please try again.')</script>";
	}
}
?>
