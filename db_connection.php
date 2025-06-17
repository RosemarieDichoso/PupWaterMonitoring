<?php
$host = 'localhost';
$dbname = 'pup_water_monitoring';
$username = 'root'; // replace with your actual DB username
$password = '';     // replace with your actual DB password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
