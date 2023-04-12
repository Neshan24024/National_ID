<?php
session_start();
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

    // Generate a random number
    $random_number = rand(100000, 999999);

    // SQL query to insert data into the applicants table
    $sql = "INSERT INTO applicants (name, email, phone, address, applicant_id) VALUES ('$name', '$email', '$phone', '$address', '$random_number')";

    if(mysqli_query($conn, $sql)) {
        echo "<script>alert('Application submitted successfully.')</script>";
		$_SESSION['applicant_id']=$random_number;
        sleep(1);
        header("Location:showid.php");
    } else {
        echo "<script>alert('Error submitting application. Please try again.')</script>";
    }
}
?>
