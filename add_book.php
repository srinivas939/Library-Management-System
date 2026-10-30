<?php
require 'db.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $isbn = $_POST['isbn'];
    $available = $_POST['available'];

    $stmt = $conn->prepare("INSERT INTO books (title, author, isbn, available) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $title, $author, $isbn, $available);
    $stmt->execute();
    echo "Book added successfully.";
}
?>
<form method="POST">
  <input type="text" name="title" placeholder="Title" required><br>
  <input type="text" name="author" placeholder="Author" required><br>
  <input type="text" name="isbn" placeholder="ISBN" required><br>
  <select name="available">
    <option value="Yes">Yes</option>
    <option value="No">No</option>
  </select><br>
  <button type="submit">Add Book</button>
</form>