<?php
header('Content-Type: application/json');

// Get the form data
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';

// Basic validation
if (empty($name) || empty($email) || empty($message)) {
    http_response_code(400);
    echo json_encode(['status' => 'error', 'message' => 'All fields are required']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['status' => 'error', 'message' => 'Invalid email address']);
    exit;
}

// In a real application, you would:
// 1. Sanitize inputs
// 2. Save to database
// 3. Send email notification
// 4. Implement CSRF protection
// 5. Rate limiting

// For now, we'll just return a success response
echo json_encode([
    'status' => 'success',
    'message' => 'Thank you for your message! We will get back to you soon.'
]);
?> 