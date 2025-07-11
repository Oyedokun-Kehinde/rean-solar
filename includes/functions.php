<?php
require_once 'config/database.php';

// Sanitize input data
function sanitize($data) {
    return htmlspecialchars(strip_tags(trim($data)));
}

// Generate random token
function generateToken($length = 32) {
    return bin2hex(random_bytes($length));
}

// Send email function
function sendEmail($to, $subject, $body, $altBody = '') {
    // Implement PHPMailer or similar
    // Return true/false based on success
}

// Calculate distance between two coordinates
function calculateDistance($lat1, $lon1, $lat2, $lon2) {
    $earth_radius = 6371; // kilometers
    
    $dLat = deg2rad($lat2 - $lat1);
    $dLon = deg2rad($lon2 - $lon1);
    
    $a = sin($dLat/2) * sin($dLat/2) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * sin($dLon/2) * sin($dLon/2);
    $c = 2 * atan2(sqrt($a), sqrt(1-$a));
    
    return $earth_radius * $c;
}

// Upload file function
function uploadFile($file, $destination_folder) {
    if (!isset($file['error']) || is_array($file['error'])) {
        return ['success' => false, 'message' => 'Invalid file upload'];
    }
    
    if ($file['error'] !== UPLOAD_ERR_OK) {
        return ['success' => false, 'message' => 'Upload failed'];
    }
    
    if ($file['size'] > MAX_FILE_SIZE) {
        return ['success' => false, 'message' => 'File too large'];
    }
    
    $file_extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
    $new_filename = uniqid() . '.' . $file_extension;
    $upload_path = $destination_folder . $new_filename;
    
    if (move_uploaded_file($file['tmp_name'], $upload_path)) {
        return ['success' => true, 'filename' => $new_filename, 'path' => $upload_path];
    }
    
    return ['success' => false, 'message' => 'Failed to move uploaded file'];
}

// Get user location services
function getNearbyServices($user_lat, $user_lon, $service_type, $radius = 50) {
    $db = new Database();
    $conn = $db->getConnection();
    
    $sql = "SELECT u.id, up.first_name, up.last_name, bp.business_name, 
                   up.latitude, up.longitude, bp.rating, bp.total_reviews,
                   (6371 * acos(cos(radians(?)) * cos(radians(up.latitude)) * 
                   cos(radians(up.longitude) - radians(?)) + sin(radians(?)) * 
                   sin(radians(up.latitude)))) AS distance
            FROM users u
            JOIN user_profiles up ON u.id = up.user_id
            JOIN business_profiles bp ON u.id = bp.user_id
            WHERE u.user_type = ? AND u.status = 'active' AND bp.verified = 1
            HAVING distance < ?
            ORDER BY distance ASC";
    
    $stmt = $conn->prepare($sql);
    $stmt->execute([$user_lat, $user_lon, $user_lat, $service_type, $radius]);
    
    return $stmt->fetchAll();
}

// Authentication functions
function isLoggedIn() {
    return isset($_SESSION['user_id']);
}

function requireLogin() {
    if (!isLoggedIn()) {
        header('Location: auth/login.php');
        exit();
    }
}

function getUserType() {
    return $_SESSION['user_type'] ?? null;
}

function hasPermission($required_type) {
    return getUserType() === $required_type;
}
?>