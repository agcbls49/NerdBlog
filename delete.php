<?php
    include("database.php");
    session_start();

    if (isset($_POST['id'])) {
        $id = intval($_POST['id']);
        $username = $_SESSION['username'];

        $sql = "DELETE FROM blogs WHERE id = ? AND username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("is", $id, $username);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            // Success: post deleted
            header("Location: index.php");
            exit;
        } else {
            // Fail: not your post or doesn't exist
            header("Location: index.php");
            exit();
        }
    }
?>
