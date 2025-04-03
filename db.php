<?php
$servername = "shuttle_proxy.rhyy.net";
$port = 41167; // Added port number
$username = "root";
$password = "oYCEtxbowPQVorrpZukBtfryYPgPWMqZ";
$dbname = "user_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>