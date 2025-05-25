<?php
// Initialize response array
$response = array(
    'success' => false,
    'message' => ''
);

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data and sanitize
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

    // Validate inputs
    $errors = [];
    
    if (empty($name)) {
        $errors[] = "Name is required";
    }
    
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Valid email is required";
    }
    
    if (empty($subject)) {
        $errors[] = "Subject is required";
    }
    
    if (empty($message)) {
        $errors[] = "Message is required";
    }

    // If no errors, proceed with sending email
    if (empty($errors)) {
        // Email recipient
        $to = "info@kuriosbaseloue.com";
        
        // Email headers
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion();
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

        // Email content
        $email_content = "
        <html>
        <head>
            <title>New Contact Form Submission</title>
        </head>
        <body>
            <h2>New Contact Form Submission</h2>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            " . (!empty($phone) ? "<p><strong>Phone:</strong> $phone</p>" : "") . "
            <p><strong>Subject:</strong> $subject</p>
            <p><strong>Message:</strong></p>
            <p>" . nl2br($message) . "</p>
        </body>
        </html>
        ";

        // Attempt to send email
        $mail_sent = mail($to, "New Contact Form Submission: $subject", $email_content, $headers);

        // Prepare response
        $response = [
            'success' => $mail_sent,
            'message' => $mail_sent ? 
                'Thank you for your message. We will get back to you soon!' : 
                'Sorry, there was an error sending your message. Please try again later.'
        ];
    } else {
        $response = [
            'success' => false,
            'message' => 'Please correct the following errors:',
            'errors' => $errors
        ];
    }

    // Send JSON response
    header('Content-Type: application/json');
    echo json_encode($response);
    exit;
}

// If not POST request, redirect to contact page
header('Location: contact.php');
exit;

/* 
// Optional: Database function
function saveToDatabase($name, $email, $phone, $subject, $message) {
    // Add your database connection and query here
    // Example:
    // $conn = new mysqli("localhost", "username", "password", "database");
    // $stmt = $conn->prepare("INSERT INTO contact_submissions (name, email, phone, subject, message) VALUES (?, ?, ?, ?, ?)");
    // $stmt->bind_param("sssss", $name, $email, $phone, $subject, $message);
    // $stmt->execute();
    // $stmt->close();
    // $conn->close();
}
*/
?> 