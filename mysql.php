<?php
$servername = "localhost";
$username = "jaswin";
$password = "Jaswinsingh6326@";
$db = "assignment";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
?>
