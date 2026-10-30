<?php
require 'db.php';
$role = $_SESSION['role'] ?? 'user';
$query = ($role === 'admin') ? "SELECT * FROM books" : "SELECT * FROM books WHERE available = 'Yes'";
$result = $conn->query($query);
while ($row = $result->fetch_assoc()) {
    echo "<p>{$row['title']} - {$row['author']} - {$row['isbn']} - Available: {$row['available']}</p>";
}
?>