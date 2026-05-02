<?php
$host = '127.0.0.1'; 
$db   = 'cc111smsdb';  
$user = 'root';        
$pass = '';            
$port = '3308';        
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;port=$port;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // show errors
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // fetch as assoc array
    PDO::ATTR_EMULATE_PREPARES   => false,                  // real prepared statements
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    die("Database connection failed.");
}
?>
