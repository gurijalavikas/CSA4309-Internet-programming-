<?php
include 'dbconnect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['uname'];
    $password = $_POST['pass'];

    // Check if the email already exists
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM pick WHERE email = ?");
    $stmt->execute([$email]);
    $emailExists = $stmt->fetchColumn() > 0;

    if ($emailExists) {
        echo "<p>Email already registered. Please use a different email.</p>";
    } else {
        // Hash the password
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        
        // Prepare and execute the statement
        $stmt = $pdo->prepare("INSERT INTO pick (name, email, uname, passs) VALUES (?, ?, ?, ?)");
        $stmt->execute([$name, $email, $username, $passwordHash]);

        echo "<p>Registration successful!</p>";
    }
}
?>