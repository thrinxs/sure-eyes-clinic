<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = "localhost";
$db   = "sureeyesclinic_Reviews";
$user = "sureeyesclinic_Admin";
$pass = "TVAOyj=XUvBT[&LQ";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, location, rating, review_text FROM reviews ORDER BY created_at DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="testimonial-slide">';
        echo '  <div class="testimonial-person">';
        echo '      <h4 class="testimonial-name">'.htmlspecialchars($row['name']).'</h4>';
        if(!empty($row['location'])) {
            echo '<p class="testimonial-location">'.htmlspecialchars($row['location']).'</p>';
        }
        echo '      <div class="testimonial-rating">'.str_repeat('★', $row['rating']).str_repeat('☆', 5 - $row['rating']).'</div>';
        echo '  </div>';
        echo '  <p class="testimonial-text">'.htmlspecialchars($row['review_text']).'</p>';
        echo '</div>';
    }
}

$conn->close();
?>
