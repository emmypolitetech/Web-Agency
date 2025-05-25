<?php
$pageTitle = "Our Services - Kurios Baseloue Technology Limited";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="header">
        <nav class="navbar">
            <div class="logo">
                <img src="images/logo.png" alt="Kurios Baseloue Logo">
                <span class="company-info">RC: 123456789</span>
            </div>
            <div class="nav-toggle" id="navToggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul class="nav-links" id="navLinks">
                <li><a href="index.php">Home</a></li>
                <li><a href="services.php" class="active">Services</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="page-header">
            <div class="container">
                <h1>Our Services</h1>
                <p>Comprehensive import, export, and technology solutions for your business</p>
            </div>
        </section>

        <section class="services-detailed">
            <div class="container">
                <div class="service-item">
                    <div class="service-content">
                        <h2>Electronics Import</h2>
                        <p>We specialize in importing high-quality electronic products from trusted manufacturers worldwide. Our services include:</p>
                        <ul>
                            <li>Consumer Electronics</li>
                            <li>Industrial Equipment</li>
                            <li>Computer Hardware</li>
                            <li>Telecommunications Equipment</li>
                            <li>Electronic Components</li>
                        </ul>
                        <a href="contact.php" class="cta-button">Get Import Quote</a>
                    </div>
                    <div class="service-image">
                        <img src="images/electronics-import.jpg" alt="Electronics Import">
                    </div>
                </div>

                <div class="service-item reverse">
                    <div class="service-content">
                        <h2>Agricultural Export</h2>
                        <p>We facilitate the export of quality agricultural produce to international markets. Our export services cover:</p>
                        <ul>
                            <li>Cash Crops</li>
                            <li>Fresh Produce</li>
                            <li>Processed Agricultural Products</li>
                            <li>Organic Products</li>
                            <li>Agricultural Raw Materials</li>
                        </ul>
                        <a href="contact.php" class="cta-button">Start Exporting</a>
                    </div>
                    <div class="service-image">
                        <img src="images/agriculture-export.jpg" alt="Agricultural Export">
                    </div>
                </div>

                <div class="service-item">
                    <div class="service-content">
                        <h2>Technology Solutions</h2>
                        <p>We provide cutting-edge technology solutions to help businesses thrive in the digital age:</p>
                        <ul>
                            <li>Custom Software Development</li>
                            <li>IT Infrastructure Setup</li>
                            <li>Cloud Solutions</li>
                            <li>Digital Transformation</li>
                            <li>Technical Consulting</li>
                        </ul>
                        <a href="contact.php" class="cta-button">Explore Tech Solutions</a>
                    </div>
                    <div class="service-image">
                        <img src="images/tech-solutions.jpg" alt="Technology Solutions">
                    </div>
                </div>
            </div>
        </section>

        <section class="why-choose-us">
            <div class="container">
                <h2>Why Choose Us</h2>
                <div class="features-grid">
                    <div class="feature-card">
                        <i class="feature-icon experience"></i>
                        <h3>Industry Experience</h3>
                        <p>Years of expertise in international trade and technology</p>
                    </div>
                    <div class="feature-card">
                        <i class="feature-icon quality"></i>
                        <h3>Quality Assurance</h3>
                        <p>Strict quality control and verification processes</p>
                    </div>
                    <div class="feature-card">
                        <i class="feature-icon support"></i>
                        <h3>24/7 Support</h3>
                        <p>Round-the-clock customer service and support</p>
                    </div>
                    <div class="feature-card">
                        <i class="feature-icon global"></i>
                        <h3>Global Network</h3>
                        <p>Strong partnerships worldwide for efficient service delivery</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h4>Contact Us</h4>
                <p>Email: info@kuriosbaseloue.com</p>
                <p>Phone: +234 XXX XXX XXXX</p>
            </div>
            <div class="footer-section">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> Kurios Baseloue Technology Limited. All rights reserved.</p>
        </div>
    </footer>

    <script src="js/main.js"></script>
</body>
</html> 