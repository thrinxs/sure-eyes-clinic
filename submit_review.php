<?php
header('Content-Type: application/json');

$host = "localhost";
$db   = "sureeyesclinic_Reviews";
$user = "sureeyesclinic_Admin";
$pass = "TVAOyj=XUvBT[&LQ";

// Connect to database
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    echo json_encode(['success' => false, 'message' => 'DB connection failed: '.$conn->connect_error]);
    exit;
}

// Collect and validate POST data
$name = isset($_POST['reviewName']) ? trim($conn->real_escape_string($_POST['reviewName'])) : '';
$email = isset($_POST['reviewEmail']) ? trim($conn->real_escape_string($_POST['reviewEmail'])) : '';
$phone = isset($_POST['reviewPhone']) ? trim($conn->real_escape_string($_POST['reviewPhone'])) : '';
$location = isset($_POST['reviewLocation']) ? trim($conn->real_escape_string($_POST['reviewLocation'])) : '';
$rating = isset($_POST['reviewRating']) ? (int)$_POST['reviewRating'] : 0;
$review_text = isset($_POST['reviewText']) ? trim($conn->real_escape_string($_POST['reviewText'])) : '';

// Check required fields
if (empty($name) || empty($email) || empty($rating) || empty($review_text)) {
    echo json_encode(['success' => false, 'message' => 'Required fields missing.']);
    exit;
}

// Prepare insert statement
$stmt = $conn->prepare("INSERT INTO reviews (name, email, phone, location, rating, review_text) VALUES (?, ?, ?, ?, ?, ?)");
if (!$stmt) {
    echo json_encode(['success' => false, 'message' => 'Prepare failed: '.$conn->error]);
    exit;
}

$stmt->bind_param("ssssis", $name, $email, $phone, $location, $rating, $review_text);

// Execute insert
if ($stmt->execute()) {
    echo json_encode([
        'success' => true,
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'location' => $location,
        'rating' => $rating,
        'review_text' => $review_text
    ]);
} else {
    echo json_encode(['success' => false, 'message' => 'Insert failed: '.$stmt->error]);
}

$stmt->close();
$conn->close();
?>
