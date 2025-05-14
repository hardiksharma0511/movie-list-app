<?php include 'db.php'; ?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $genre = $_POST['genre'];
    $rating = $_POST['rating'];
    $year = $_POST['year'];
    $conn->query("INSERT INTO movies (title, genre, rating, release_year) VALUES ('$title', '$genre', '$rating', '$year')");
    header("Location: index.php");
}
?>
<h2>Add Movie</h2>
<form method="POST">
    Title: <input type="text" name="title" required><br>
    Genre: <input type="text" name="genre"><br>
    Rating: <input type="number" step="0.1" name="rating"><br>
    Year: <input type="number" name="year"><br>
    <input type="submit" value="Add Movie">
</form>
