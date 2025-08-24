<?php 
    session_start();
    include("database.php");

    // Fetch posts from database
    $sql = "SELECT id, username, title, content, created_at FROM blogs ORDER BY id DESC";
    $result = $conn->query($sql);

    if (!$result) {
        die("Error: " . $conn->error);
    }

    // Handle logout before any HTML output
    if (isset($_POST["logout"])) {
        session_destroy();
        header("Location: index.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NerdBlog - Blogs</title>
    <link rel="icon" type="image/x-icon" href="IconNerdBlog.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nata+Sans:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Nav Bar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="index.php">NerdBlog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo isset($_SESSION['username']) ? 'disabled-nav-link' : ''; ?>" href="login_register.php">Login/Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="links.php">Links</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br><br>
    <!-- Content -->
    <!-- Cards or Blogs Section -->
    <div class="container">
        <div class="row">
            <?php
                while ($row = $result->fetch_assoc()) {
                    // Show username and date time on the post
                    echo '
                        <div class="col-md-6 mb-4">
                            <div class="card text-bg-light h-100">
                                <div class="card-header">
                                    Posted by ' . htmlspecialchars($row['username']) . ' on ' . date("M j, Y g:i A", strtotime($row['created_at'])) . '
                    ';

                    // Only show delete button if logged in
                    if (isset($_SESSION['username']) && $_SESSION['username'] == $row['username']) {
                        echo '
                            <form action="delete.php" method="POST" style="display:inline; float:right; margin:0;">
                                <input type="hidden" name="id" value="' . $row['id'] . '">
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        ';
                    }

                    // Allow edits if post username is same as username logged in
                    if (isset($_SESSION['username']) && $_SESSION['username'] == $row['username']) {
                        echo '
                            <form action="update.php" method="GET" style="display:inline; float:right; margin:0; margin-right: 10px;">
                                <input type="hidden" name="id" value="' . $row['id'] . '">
                                <button type="submit" class="btn btn-sm btn-dark">Edit</button>
                            </form>
                        ';
                    }

                    // Show the title and content of the post
                    echo '
                        </div>
                            <div class="card-body d-flex flex-column">
                            <h5 class="card-title">' . htmlspecialchars($row['title']) . '</h5>                        
                            <p class="card-text flex-grow-1">' . nl2br(htmlspecialchars(substr($row['content'], 0, 200))) . '</p>
                            <form action="view.php" method="GET" style="display:inline; float:left; margin:0;" class="mt-auto">
                                <input type="hidden" name="id" value="' . $row['id'] . '">
                                <button type="submit" class="btn btn-sm btn-dark">Read More</button>
                            </form>
                            </div>
                        </div>
                    </div>';
                }

            ?>
        </div>
    </div>
</body>
</html>