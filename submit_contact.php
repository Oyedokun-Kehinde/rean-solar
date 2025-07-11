<?php
include 'db.php';

$full_name = isset($_POST['full_name']) ? trim($_POST['full_name']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$subject = isset($_POST['subject']) ? trim($_POST['subject']) : '';
$message = isset($_POST['message']) ? trim($_POST['message']) : '';

if ($full_name && $email && $subject && $message) {
    $stmt = $conn->prepare("INSERT INTO contact_submissions (full_name, email, subject, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $full_name, $email, $subject, $message);

    if ($stmt->execute()) {
        echo "Message submitted successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "All fields are required.";
}

$conn->close();
?>
