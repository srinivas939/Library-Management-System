<?php
require 'db.php';
?>
<form method="GET">
  <input type="text" name="search" placeholder="Search by title">
  <button type="submit">Search</button>
</form>
<?php
if (isset($_GET['search'])) {
    $search = "%" . $_GET['search'] . "%";
    $stmt = $conn->prepare("SELECT * FROM books WHERE title LIKE ?");
    $stmt->bind_param("s", $search);
    $stmt->execute();
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()) {
        echo "<p>{$row['title']} - {$row['author']} - {$row['isbn']} - Available: {$row['available']}</p>";
    }
}
?>