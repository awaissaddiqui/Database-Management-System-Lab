

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO App</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>TODO App</h1>
        <form action="add_task.php" method="POST">
            <input type="text" name="task" placeholder="Enter new task" required>
            <input type="submit" value="Add Task">
        </form>
        <ul>
            <?php
                // Include the database connection file
                include 'db.php';

                // Fetch tasks from the database
                $stmt = $pdo->query("SELECT * FROM todos");
                while ($row = $stmt->fetch()) {
                    echo '<li' . ($row['is_done'] ? ' class="done"' : '') . '>';
                    echo '<span>' . htmlspecialchars($row['task']) . '</span>';
                    echo '<a href="toggle_task.php?id=' . $row['id'] . '">' . ($row['is_done'] ? 'Undo' : 'Done') . '</a>';
                    echo '<a href="delete_task.php?id=' . $row['id'] . '">Delete</a>';
                    echo '</li>';
                }
            ?>
        </ul>
    </div>
</body>
</html>
