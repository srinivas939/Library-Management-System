<?php
session_start();
require 'db.php';

$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['username'] = $username;
    $_SESSION['role'] = $user['role'];
    header("Location: " . ($user['role'] == 'admin' ? "dashboard_admin.php" : "dashboard_user.php"));
} else {
    echo "Invalid credentials";
}
?>