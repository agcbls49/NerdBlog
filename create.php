<?php
    session_start();
    include("database.php"); 

    if (!isset($_SESSION['username'])) {
        die("Unauthorized: Please log in.");
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
        $title = $_POST['blog_title'] ?? '';
        $content = $_POST['blog_content'] ?? '';

        if (empty($title) || empty($content)) {
            echo "Title and content cannot be empty.";
            exit;
        }

        $stmt = $conn->prepare("INSERT INTO blogs (title, content, username) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $title, $content, $_SESSION['username']);

        if ($stmt->execute()) {
            header("Location: index.php"); // redirect to blog list
            exit;
        } else {
            echo "Error: " . $stmt->error;
        }
    }
?>
