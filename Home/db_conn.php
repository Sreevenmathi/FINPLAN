<?php
// Start the session if needed
// session_start();

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "finplan";

// Create a new MySQLi connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection is successful
if ($conn->connect_error) {
    // If connection failed, show an alert
    echo "<script>alert('Something went wrong: " . $conn->connect_error . "');</script>";
    die(); // Stop further execution if there's an error
}

//  If successful, (for debugging)
// echo "<script>alert('Database connection successful');</script>";

?>
