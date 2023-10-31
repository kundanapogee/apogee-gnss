<?php
// session_start();
date_default_timezone_set('Asia/Kolkata');

$servername = "localhost";
$username = "root";
$password = "";
$database = "apogeegnss_gnss";

// $servername = "localhost";
// $username = "apogeegnss_gnss";
// $password = "apogeegnss_gnss";
// $database = "apogeegnss_gnss";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connected successfully"; 
        // die();
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }                      
?>