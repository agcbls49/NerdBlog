<?php
    include("database.php");

    if (isset($_POST['id'])) {
        $id = intval($_POST['id']); // make sure it’s an integer
        $sql = "DELETE FROM blogs WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();

        // redirect back to index after deletion
        header("Location: index.php");
        exit;
    }
?>
