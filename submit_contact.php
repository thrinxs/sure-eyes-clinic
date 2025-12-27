<?php
header('Content-Type: application/json');

$host = "localhost";
$db = "sureeyesclinic_Reviews"; // your database name
$user = "sureeyesclinic_Admin"; // your DB username
$pass = "TVAOyj=XUvBT[&LQ"; // your DB password

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    echo json_encode(['success'=>false, 'message'=>'DB connection failed']);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $message = $conn->real_escape_string($_POST['message']);
    $subscribe = isset($_POST['subscribe']) ? 1 : 0;

    $sql = "INSERT INTO contacts (name, email, message, subscribe) VALUES ('$name', '$email', '$message', $subscribe)";

    if ($conn->query($sql)) {
        echo json_encode(['success'=>true, 'message'=>'Thank you! Your message has been sent.']);
    } else {
        echo json_encode(['success'=>false, 'message'=>'Failed to send message. Please try again.']);
    }

    $conn->close();
}
?>
