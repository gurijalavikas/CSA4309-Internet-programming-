<?php
// Database connection
$host = 'localhost';
$db = 'your_database_name';
$user = 'your_database_user';
$pass = 'your_database_password';

$pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Fetch user details
session_start();
$username = $_SESSION['username']; // Assume username is stored in session
$stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
$stmt->execute(['username' => $username]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// Fetch order history
$stmt = $pdo->prepare("SELECT * FROM orders WHERE user_id = :user_id ORDER BY timestamp DESC");
$stmt->execute(['user_id' => $user['id']]);
$orders = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
