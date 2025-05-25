<?php
$pageTitle = "Contact Us - Kurios Baseloue Technology Limited";

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';
    
    // Basic validation
    $errors = [];
    if (empty($name)) $errors[] = "Name is required";
    if (empty($email)) $errors[] = "Email is required";
    if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Invalid email format";
    if (empty($message)) $errors[] = "Message is required";
    
    // If no errors, process the form
    if (empty($errors)) {
        // TODO: Add your email sending logic here
        $success = true;
    }
}
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
                <li><a href="services.php">Services</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php" class="active">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="page-header">
            <div class="container">
                <h1>Contact Us</h1>
                <p>Get in touch with us for any inquiries or support</p>
            </div>
        </section>

        <section class="contact-section">
            <div class="container">
                <div class="contact-grid">
                    <div class="contact-info">
                        <h2>Get In Touch</h2>
                        <p>We're here to help and answer any questions you might have. We look forward to hearing from you.</p>
                        
                        <div class="contact-details">
                            <div class="contact-item">
                                <i class="contact-icon location"></i>
                                <div>
                                    <h3>Location</h3>
                                    <p>123 Business District<br>Lagos, Nigeria</p>
                                </div>
                            </div>
                            
                            <div class="contact-item">
                                <i class="contact-icon email"></i>
                                <div>
                                    <h3>Email</h3>
                                    <p>info@kuriosbaseloue.com</p>
                                </div>
                            </div>
                            
                            <div class="contact-item">
                                <i class="contact-icon phone"></i>
                                <div>
                                    <h3>Phone</h3>
                                    <p>+234 XXX XXX XXXX</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="contact-form">
                        <?php if (isset($errors) && !empty($errors)): ?>
                            <div class="alert alert-error">
                                <ul>
                                    <?php foreach ($errors as $error): ?>
                                        <li><?php echo htmlspecialchars($error); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endif; ?>

                        <?php if (isset($success)): ?>
                            <div class="alert alert-success">
                                <p>Thank you for your message. We'll get back to you soon!</p>
                            </div>
                        <?php endif; ?>

                        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" id="name" name="name" value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input type="text" id="subject" name="subject" value="<?php echo isset($_POST['subject']) ? htmlspecialchars($_POST['subject']) : ''; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea id="message" name="message" rows="5" required><?php echo isset($_POST['message']) ? htmlspecialchars($_POST['message']) : ''; ?></textarea>
                            </div>

                            <button type="submit" class="submit-button">Send Message</button>
                        </form>
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