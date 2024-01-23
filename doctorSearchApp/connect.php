<?php
$servername = "localhost"; // Corrected typo in localhost
$username = "root";
$password = "";
$database = "doctor_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    '<script> alert("Connection failed: " . $conn->connect_error)</script>';
} else {
    // echo "DB Connected Successfully ";
}

// Close the connection w
?>
