<?php include 'db.php'; ?>
<?php
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM movies WHERE id = $id");
$row = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $genre = $_POST['genre'];
    $rating = $_POST['rating'];
    $year = $_POST['year'];
    $conn->query("UPDATE movies SET title='$title', genre='$genre', rating='$rating', release_year='$year' WHERE id=$id");
    header("Location: index.php");
}
?>
<h2>Edit Movie</h2>
<form method="POST">
    Title: <input type="text" name="title" value="<?= $row['title'] ?>" required><br>
    Genre: <input type="text" name="genre" value="<?= $row['genre'] ?>"><br>
    Rating: <input type="number" step="0.1" name="rating" value="<?= $row['rating'] ?>"><br>
    Year: <input type="number" name="year" value="<?= $row['release_year'] ?>"><br>
    <input type="submit" value="Update Movie">
</form>
