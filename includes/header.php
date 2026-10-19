
<?php
// Default SEO details
$pageTitle = $pageTitle ?? 'Muggun Technologies';
$pageDescription = $pageDescription ?? 'Muggun Technologies provides software development and digital solutions.';

// Identify the current page
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <meta name="description"content="<?= htmlspecialchars($pageDescription) ?>">
    <meta name="keywords" content="<?= htmlspecialchars($keyword) ?>">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" type="image/png" href="assets/img/logo.png">
 
</head>

<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-3">
        <div class="container">
           <a class="navbar-brand d-flex align-items-center" href="index.php">
                <img src="assets/img/logo-light.png" alt="Muggun Technologies Logo" height="30" class="d-inline-block align-text-top logo-img">
            </a>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#mainNavbar"
                aria-controls="mainNavbar"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navigation Links -->
            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
                    <li class="nav-item">
                        <a href="index.php" class="footer-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $currentPage === 'about.php' ? 'active' : '' ?>"href="about.php"> About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $currentPage === 'services.php' ? 'active' : '' ?>"href="services.php"> Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $currentPage === 'internship.php' ? 'active' : '' ?>"href="internship.php"> Internship & Live Projects</a>
                    </li>
                    <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
                        <a class="btn btn-primary px-4" href="contact-us.php">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

