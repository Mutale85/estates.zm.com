<?php
    include ("include/db.php");
    if (isset($_SESSION['user_id'])) {
        header("Location: dashboard/"); 
    }
  ?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EstateTrack - Property Management Software</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero {
            background-image: url('/api/placeholder/1200/600');
            background-size: cover;
            background-position: center;
            height: 60vh;
            display: flex;
            align-items: center;
        }
        .feature-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">EstateTrack</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signup.php">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="hero">
        <div class="container text-white">
            <h1 class="display-4">Manage Your Properties with Ease</h1>
            <p class="lead">Track tenants, properties, and rental income all in one place.</p>
            <a href="signup.php" class="btn btn-primary btn-lg">Get Started</a>
        </div>
    </header>

    <section id="features" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Features</h2>
            <div class="row">
                <div class="col-md-4 text-center mb-4">
                    <div class="feature-icon">🏠</div>
                    <h3>Property Management</h3>
                    <p>Easily manage and track all your properties in one place.</p>
                </div>
                <div class="col-md-4 text-center mb-4">
                    <div class="feature-icon">👥</div>
                    <h3>Tenant Tracking</h3>
                    <p>Keep detailed records of your tenants and their lease agreements.</p>
                </div>
                <div class="col-md-4 text-center mb-4">
                    <div class="feature-icon">💰</div>
                    <h3>Rental Income</h3>
                    <p>Track and manage your rental income and expenses effortlessly.</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white py-4">
        <div class="container text-center">
            <p>&copy; 2024 EstateTrack. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>