<?php
header('Content-Type: application/json');

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if the request is POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
    exit;
}

// Get the form data
$data = json_decode(file_get_contents('php://input'), true);

if (!$data) {
    $data = $_POST;
}

// Validate the form data
if (!isset($data['name']) || !isset($data['email']) || !isset($data['message'])) {
    http_response_code(400);
    echo json_encode(['error' => 'Missing required fields']);
    exit;
}

$name = filter_var($data['name'], FILTER_SANITIZE_STRING);
$email = filter_var($data['email'], FILTER_SANITIZE_EMAIL);
$message = filter_var($data['message'], FILTER_SANITIZE_STRING);

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['error' => 'Invalid email address']);
    exit;
}

// Set up email parameters
$to = 'info@kuriosbaseloue.com'; // Replace with your email
$subject = 'New Contact Form Submission from ' . $name;
$headers = [
    'From' => $email,
    'Reply-To' => $email,
    'X-Mailer' => 'PHP/' . phpversion(),
    'Content-Type' => 'text/html; charset=UTF-8'
];

// Prepare email body
$email_body = "
<html>
<head>
    <title>New Contact Form Submission</title>
</head>
<body>
    <h2>Contact Form Submission Details</h2>
    <p><strong>Name:</strong> {$name}</p>
    <p><strong>Email:</strong> {$email}</p>
    <p><strong>Message:</strong></p>
    <p>" . nl2br($message) . "</p>
</body>
</html>
";

// Send email
$mail_sent = mail($to, $subject, $email_body, implode("\r\n", $headers));

if ($mail_sent) {
    echo json_encode(['success' => true, 'message' => 'Thank you for your message. We will get back to you soon.']);
} else {
    http_response_code(500);
    echo json_encode(['error' => 'Failed to send email']);
}
?> 