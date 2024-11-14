<?php
// Database connection
$pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $orderId = $_POST['order_id'];
    
    // Delete order and associated items
    $stmt = $pdo->prepare("DELETE FROM orders WHERE id = :id");
    $stmt->execute(['id' => $orderId]);

    $stmt = $pdo->prepare("DELETE FROM order_items WHERE order_id = :order_id");
    $stmt->execute(['order_id' => $orderId]);

    header('Location: profile.php'); // Redirect back to the profile page
    exit();
}
?>
