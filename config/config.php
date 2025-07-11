<?php
// Application Configuration
define('APP_NAME', 'REAN Solar Connect');
define('APP_URL', 'http://localhost/rean-solar-connect');
define('APP_VERSION', '1.0.0');

// Email Configuration
define('SMTP_HOST', 'smtp.gmail.com');
define('SMTP_PORT', 587);
define('SMTP_USERNAME', 'your-email@gmail.com');
define('SMTP_PASSWORD', 'your-app-password');

// File Upload Configuration
define('MAX_FILE_SIZE', 5 * 1024 * 1024); // 5MB
define('UPLOAD_PATH', 'assets/uploads/');
define('ALLOWED_IMAGE_TYPES', ['jpg', 'jpeg', 'png', 'gif']);
define('ALLOWED_DOCUMENT_TYPES', ['pdf', 'doc', 'docx']);

// Google Maps API
define('GOOGLE_MAPS_API_KEY', 'your-google-maps-api-key');

// Payment Gateway (Paystack)
define('PAYSTACK_PUBLIC_KEY', 'your-paystack-public-key');
define('PAYSTACK_SECRET_KEY', 'your-paystack-secret-key');

// Session Configuration
ini_set('session.cookie_lifetime', 3600 * 24 * 7); // 7 days
session_start();

// Error Reporting (disable in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>