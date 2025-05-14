<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>🎬 Movie List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <header>
        <h1>🎬 Movie List</h1>
        <a class="add-btn" href="add.php">➕ Add New Movie</a>
    </header>

    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Genre</th>
                <th>Rating</th>
                <th>Year</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $result = $conn->query("SELECT * FROM movies");
            while ($row = $result->fetch_assoc()):
            ?>
            <tr>
                <td><?= htmlspecialchars($row['title']) ?></td>
                <td><?= htmlspecialchars($row['genre']) ?></td>
                <td><?= htmlspecialchars($row['rating']) ?></td>
                <td><?= htmlspecialchars($row['release_year']) ?></td>
                <td>
                    <a class="action edit" href="edit.php?id=<?= $row['id'] ?>">✏️Edit</a>
                    <a class="action delete" href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Delete this movie?')">🗑️ Delete</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>
</body>
</html>
