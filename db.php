<?php
$servername = getenv('DB_SERVERNAME'); // Get the DB server from env
$port = getenv('DB_PORT'); // Get the DB port from env
$username = getenv('DB_USERNAME'); // Get the DB username from env
$password = getenv('DB_PASSWORD'); // Get the DB password from env
$dbname = getenv('DB_NAME'); // Get the DB name from env

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else {
    echo "Database connection successful!";
}
?>
