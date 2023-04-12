<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "national_id";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM applicants WHERE id=$id";
    
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
        sleep(2);
    header("Location:admin.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();
?>
