<?php
header('Content-Type: application/json');

$host = "localhost";
$db   = "sureeyesclinic_Reviews";
$user = "sureeyesclinic_Admin";
$pass = "TVAOyj=XUvBT[&LQ";

$conn = new mysqli($host, $user, $pass, $db);

if($conn->connect_error) {
    echo json_encode(['success'=>false,'message'=>'DB connection failed: '.$conn->connect_error]);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $conn->real_escape_string($_POST['email']);

    if(empty($email)) {
        echo json_encode(['success'=>false,'message'=>'Email is required']);
        exit;
    }

    $sql = "INSERT INTO newsletter_subscribers (email) VALUES ('$email')";

    if($conn->query($sql)) {
        echo json_encode(['success'=>true,'message'=>'Subscribed successfully!']);
    } else {
        if($conn->errno == 1062) {
            echo json_encode(['success'=>false,'message'=>'This email is already subscribed.']);
        } else {
            echo json_encode(['success'=>false,'message'=>'Insert failed: '.$conn->error]);
        }
    }

    $conn->close();
}
?>
