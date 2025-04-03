<?php
session_start();
include 'db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");  // Redirect to login if not authenticated
    exit;
}

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

echo "<table><tr><th>Username</th><th>Email</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row['username'] . "</td><td>" . $row['email'] . "</td></tr>";
}
echo "</table>";
?>
