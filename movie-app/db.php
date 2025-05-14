<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "movie_db");

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
