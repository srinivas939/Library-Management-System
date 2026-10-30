<?php
session_start();
if ($_SESSION['role'] != 'admin') {
    header("Location: index.html");
    exit();
}
?>
<h2>Admin Dashboard</h2>
<a href="add_book.php">Add Book</a><br>
<a href="search_books.php">Search Book</a><br>
<a href="view_books.php">View All Books</a><br>