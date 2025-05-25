<?php
$page_title = "Home";
include 'includes/header.php';
?>

<body>
    <header>
        <nav class="navbar">
            <div class="logo">
                <img src="images/logo.png" alt="Kurios Baseloue Technology Limited">
                <span class="company-rc">RC: 123456</span>
            </div>
            <div class="nav-toggle" id="navToggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul class="nav-links" id="navLinks">
                <li><a href="#home" class="active">Home</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="home" class="hero">
            <div class="hero-content">
                <h1>Welcome to Kurios Baseloue Technology</h1>
                <p>Your trusted partner in import, export, and technology solutions</p>
                <a href="#services" class="cta-button">Explore Our Services</a>
            </div>
        </section>

        <section id="services" class="services">
            <h2>Our Services</h2>
            <div class="service-grid">
                <div class="service-card">
                    <i class="fas fa-microchip"></i>
                    <h3>Electronics Import</h3>
                    <p>Quality electronic components and devices sourced from trusted global suppliers. We ensure timely delivery and competitive pricing.</p>
                </div>
                <div class="service-card">
                    <i class="fas fa-tractor"></i>
                    <h3>Agricultural Export</h3>
                    <p>Connecting local farmers to international markets. We handle logistics, documentation, and quality control for agricultural exports.</p>
                </div>
                <div class="service-card">
                    <i class="fas fa-laptop-code"></i>
                    <h3>Technology Solutions</h3>
                    <p>Innovative technology solutions tailored to modern business needs. From software development to IT consulting.</p>
                </div>
            </div>
        </section>

        <section id="about" class="about">
            <h2>About Us</h2>
            <div class="about-content">
                <p>Kurios Baseloue Technology Limited is a leading import/export and technology solutions company based in Nigeria. With years of experience in international trade and technology services, we bridge the gap between local businesses and global markets.</p>
                <p>Our commitment to excellence, reliability, and customer satisfaction has made us a trusted partner for businesses across various sectors.</p>
            </div>
        </section>

        <section id="contact" class="contact">
            <h2>Contact Us</h2>
            <div class="contact-form">
                <form id="contactForm">
                    <div class="form-group">
                        <input type="text" id="name" name="name" required placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" name="email" required placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <textarea id="message" name="message" required placeholder="Your Message"></textarea>
                    </div>
                    <button type="submit" class="submit-btn">Send Message</button>
                </form>
            </div>
        </section>
    </main>

<?php include 'includes/footer.php'; ?> 