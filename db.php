<?php
// Load .env variables
require_once 'vendor/autoload.php'; // This will load the Composer autoload file
Dotenv\Dotenv::createImmutable(__DIR__)->load();

// Fetch environment variables
$servername = getenv('DB_SERVERNAME');
$port = getenv('DB_PORT');
$username = getenv('DB_USERNAME');
$password = getenv('DB_PASSWORD');
$dbname = getenv('DB_NAME');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Database connection successful!";
}
?>
