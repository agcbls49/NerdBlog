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
    <title>NerdBlog - About</title>
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
            <a class="navbar-brand text-white" href="#">NerdBlog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo !isset($_SESSION['username']) ? '' : 'disabled-nav-link'; ?>" href="login_register.php">Login/Register</a>
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
    <!-- Content -->
    <div class="container justify-content-center">
        <br>
        <h1 class="text-center" style="color: hsla(160 84.1% 39.4%); font-weight: bold;">About</h2>
        <p style="font-size: 1.5rem">Nerd Blog is a simple CRUD website made using HTML, 
            Bootstrap, Javascript, MySQL and PHP. Users can create an account by creating 
            a username and password and they can create, read, update, and 
            delete blogs they made.</p>
    </div>
</body>
</html>