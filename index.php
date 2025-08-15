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
    <script src="app.js"></script>
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
                        <a class="nav-link" href="login_register.php">Login/Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="links.html">Links</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br><br>
    <!-- Content -->
    <!-- Cards Section -->
    <div class="container">
        <div class="row">
            <!-- Card 1 -->
            <div class="col-md-6 mb-4">
                <div class="card text-bg-light h-100">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h5 class="card-title">Light card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            
            <!-- Card 2 -->
            <div class="col-md-6 mb-4">
                <div class="card text-bg-light h-100">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h5 class="card-title">Light card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            
            <!-- Card 3 -->
            <div class="col-md-6 mb-4">
                <div class="card text-bg-light h-100">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h5 class="card-title">Light card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            
            <!-- Card 4 -->
            <div class="col-md-6 mb-4">
                <div class="card text-bg-light h-100">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h5 class="card-title">Light card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>