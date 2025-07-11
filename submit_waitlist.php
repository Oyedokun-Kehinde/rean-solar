<?php
// Include database connection
require 'db.php';

// Sanitize and fetch POST data
$name          = isset($_POST['name']) ? trim($_POST['name']) : '';
$email         = isset($_POST['email']) ? trim($_POST['email']) : '';
$phone         = isset($_POST['phone']) ? trim($_POST['phone']) : '';
$interest_area = isset($_POST['interest_area']) ? trim($_POST['interest_area']) : '';
$location      = isset($_POST['location']) ? trim($_POST['location']) : '';
$agree         = isset($_POST['agree']) ? 1 : 0; // checkbox returns boolean

// Validation
if ($name && $email && $phone && $interest_area && $location && $agree) {

    // Step 1: Check if already exists (by email or phone)
    $check = $conn->prepare("SELECT id FROM users WHERE email = ? OR phone = ?");
    $check->bind_param("ss", $email, $phone);
    $check->execute();
    $check->store_result();

    if ($check->num_rows > 0) {
        // Already exists
        echo "⚠️ You’re already on the waitlist!";
        $check->close();
    } else {
        $check->close();

        // Step 2: Insert new record
        $stmt = $conn->prepare("INSERT INTO users (name, email, phone, interest_area, location, agree) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssi", $name, $email, $phone, $interest_area, $location, $agree);

        if ($stmt->execute()) {
                echo "✅ You’ve been added to the waitlist!";
                sendConfirmationEmail($email, $name); // to subscriber
                notifyAdmin($name, $email, $phone, $interest_area, $location); // to admin
               
        } else {
            echo "❌ Error: " . $stmt->error;
        }

        $stmt->close();
    }

} else {
    echo "⚠️ All fields are required and consent must be given.";
}

$conn->close();
?>
