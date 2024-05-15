<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $pdo->prepare("SELECT is_done FROM todos WHERE id = ?");
    $stmt->execute([$id]);
    $task = $stmt->fetch();

    if ($task) {
        $is_done = $task['is_done'] ? 0 : 1;
        $stmt = $pdo->prepare("UPDATE todos SET is_done = ? WHERE id = ?");
        $stmt->execute([$is_done, $id]);
    }

    header('Location: index.php');
    exit;
}
?>
