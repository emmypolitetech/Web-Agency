<?php
$site_name = "Kurios Baseloue Technology Limited";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Kurios Baseloue Technology Limited - Your trusted partner in import, export, and technology solutions">
    <meta name="keywords" content="import, export, technology, electronics import, agricultural export, tech solutions">
    <title><?php echo isset($page_title) ? $page_title . " - " . $site_name : $site_name; ?></title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<header class="main-header">
    <div class="header-container">
        <div class="logo">
            <a href="index.php">
                <img src="images/logo.png" alt="Kurios Baseloue Technology Limited">
                <span class="company-info">RC: 123456789</span>
            </a>
        </div>
        
        <nav class="main-nav">
            <button class="mobile-menu-toggle" aria-label="Toggle Menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
            
            <ul class="nav-links">
                <li><a href="index.php" <?php echo $current_page == 'index.php' ? 'class="active"' : ''; ?>>Home</a></li>
                <li><a href="services.php" <?php echo $current_page == 'services.php' ? 'class="active"' : ''; ?>>Services</a></li>
                <li><a href="about.php" <?php echo $current_page == 'about.php' ? 'class="active"' : ''; ?>>About Us</a></li>
                <li><a href="contact.php" <?php echo $current_page == 'contact.php' ? 'class="active"' : ''; ?>>Contact</a></li>
            </ul>
        </nav>
    </div>
</header> 
</header> 