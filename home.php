<?php
    session_start();
    include("database.php");

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
    <title>NerdBlog</title>
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
                        <!-- disable going to login and register if logged in -->
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
    <!-- Reminder for Logout Button -->
    <?php if(isset($_SESSION['username'])): ?>
        <div class="user-header" style="background-color: #FF8C00;">
            <div class="user-header-content">
                <h1 style="color: black; font-weight: bold;">Welcome to NerdBlog, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="submit" name="logout" value="Logout" class="btn btn-dark btn-lg">
                </form>
            </div>
        </div>
    <?php endif; ?>
    <br><br>

    <!-- Content -->
    <!-- Asks for user to login to enable blog form -->
    <div class="centered-container">
        <?php if(!isset($_SESSION['username'])): ?>
            <div class="login-prompt">
                Please <a href="login_register.php" style="text-decoration: none; color: #FF8C00;">Login</a> to create posts
            </div>
        <?php endif; ?>
        
        <!-- Blog Form (disabled if not logged in) -->
        <form action="create.php" method="post">
            <div class="<?php echo !isset($_SESSION['username']) ? 'disabled-form' : ''; ?>">
                <div class="mb-3">
                    <label for="blog-title" class="form-label">Blog Title</label>
                    <input type="text" class="form-control" id="blog-title" name="blog_title" placeholder="Add a title to your post" 
                        style="font-weight: bold;" <?php echo !isset($_SESSION['username']) ? 'disabled' : ''; ?>>
                </div>
                <div class="form-floating">
                    <textarea class="form-control" id="floatingTextarea" name="blog_content" <?php echo !isset($_SESSION['username']) ? 'disabled' : ''; ?>></textarea>
                    <label for="floatingTextarea">Add text to your post</label>
                    <br>
                    <a href="index.php" class="btn btn-dark">See Other Posts</a>
                    <input type="submit" value="Post" name="submit" class="btn btn-dark" <?php echo !isset($_SESSION['username']) ? 'disabled' : ''; ?>>
                </div>
            </div>
        </form>
        
    </div>
</body>
</html>