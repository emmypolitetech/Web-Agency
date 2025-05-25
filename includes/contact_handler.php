<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
    exit;
}

// Get POST data
$data = json_decode(file_get_contents('php://input'), true);

if (!$data) {
    $data = $_POST;
}

// Validate required fields
$required_fields = ['name', 'email', 'message'];
foreach ($required_fields as $field) {
    if (empty($data[$field])) {
        http_response_code(400);
        echo json_encode(['error' => "Missing required field: {$field}"]);
        exit;
    }
}

// Validate email
if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['error' => 'Invalid email address']);
    exit;
}

// In a production environment, you would typically:
// 1. Sanitize inputs
// 2. Save to database
// 3. Send email notification
// For this example, we'll just return success

$response = [
    'success' => true,
    'message' => 'Thank you for your message. We will get back to you soon.'
];

echo json_encode($response); 