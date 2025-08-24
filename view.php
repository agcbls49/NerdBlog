<?php
    include("database.php");

    $post = null;

    // This is for the read more button
    if (isset($_GET['id'])) {
        $id = intval($_GET['id']); 

        $sql = "SELECT id, username, title, content, created_at FROM blogs WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();

        $result = $stmt->get_result();
        $post = $result->fetch_assoc();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NerdBlog - View Post</title>
    <link rel="icon" type="image/x-icon" href="IconNerdBlog.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nata+Sans:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <?php if ($post): ?>
                    <div class="card text-bg-light">
                        <div class="card-header">
                            Posted by <?= htmlspecialchars($post['username']) ?> 
                            on <?= date("M j, Y g:i A", strtotime($post['created_at'])) ?>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($post['title']) ?></h5>
                            <p class="card-text"><?= nl2br(htmlspecialchars($post['content'])) ?></p>
                            <a href="index.php" class="btn btn-dark mt-3">Back to Blog</a>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="alert alert-danger">Post not found.</div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>