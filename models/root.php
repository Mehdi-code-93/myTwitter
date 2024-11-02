<?php

$host = 'localhost';
$dbname = 'twitter_academy_db';
$username = 'root';
$password = 'root';

try {
    $database = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>