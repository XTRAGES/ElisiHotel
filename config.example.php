<?php
    session_start();
    
    // Database configuration - EXAMPLE FILE
    // Copy this file to config.php and update with your actual database credentials
    
    $host = 'localhost';                 // Your database host (usually localhost)
    $db = "hotel_management";            // Your database name
    $user = 'your_db_username';          // Your database username
    $password = 'your_db_password';      // Your database password

    try{
        $conn = new PDO("mysql:host=$host; dbname=$db", 
        $user, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(Exception $e){
        echo "Connection failed: " . $e->getMessage();
        die();
    }
?>
