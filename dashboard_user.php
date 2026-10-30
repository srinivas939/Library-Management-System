<?php
session_start();
if ($_SESSION['role'] != 'user') {
    header("Location: index.html");
    exit();
}
?>
<h2>User Dashboard</h2>
<a href="search_books.php">Search Book</a><br>
<a href="view_books.php">View Available Books</a><br>