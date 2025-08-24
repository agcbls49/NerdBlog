<?php
    session_start();
    include("database.php");

    // Check if GET request on edit button then show form
    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
        $id = intval($_GET['id']);
        $stmt = $conn->prepare("SELECT id, username, title, content FROM blogs WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $post = $result->fetch_assoc();

        // If post not found or not owned by user
        if (!$post || $_SESSION['username'] !== $post['username']) {
            header("Location: index.php");
            exit;
        }
    }

    // If POST request on update button then update post
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = intval($_POST['id']);
        $title = trim($_POST['title']);
        $content = trim($_POST['content']);

        $stmt = $conn->prepare("UPDATE blogs SET title = ?, content = ? WHERE id = ? AND username = ?");
        $stmt->bind_param("ssis", $title, $content, $id, $_SESSION['username']);
        $stmt->execute();

        header("Location: index.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NerdBlog - Edit Post</title>
    <link rel="icon" type="image/x-icon" href="IconNerdBlog.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nata+Sans:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header">
                Edit Post
            </div>
            <div class="card-body">
                <form method="POST" action="update.php">
                    <input type="hidden" name="id" value="<?php echo htmlspecialchars($post['id']); ?>">
                    
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" 
                               value="<?php echo htmlspecialchars($post['title']); ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Content</label>
                        <textarea name="content" class="form-control" rows="15" style="height:100%;" required><?php 
                            echo htmlspecialchars($post['content']); 
                        ?></textarea>
                    </div>

                    <button type="submit" class="btn btn-success">Update</button>
                    <a href="index.php" class="btn btn-dark">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>