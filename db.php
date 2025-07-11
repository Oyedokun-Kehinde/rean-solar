<?php
$host = "localhost";  
$username = "u153388584_admin";        
$password = "ReanSolar100%";       
$dbname = "u153388584_rean_solar"; 

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
