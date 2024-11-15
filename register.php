<?php
// register.php

function sanitizeInput($data) {
    return htmlspecialchars(trim($data));
}

// Database connection variables
$host = 'localhost';
$db = 'user_registration'; // Ensure this matches your database name
$user = 'root';
$pass = '';

// Initialize error and success messages
$errorMessage = "";
$successMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = sanitizeInput($_POST['fullname']);
    $email = sanitizeInput($_POST['email']);
    $username = sanitizeInput($_POST['username']);
    $password = sanitizeInput($_POST['password']);

    if (empty($fullName) || empty($email) || empty($username) || empty($password)) {
        $errorMessage = "Please fill all the fields.";
    } else {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Connect to the database
        $conn = new mysqli($host, $user, $pass, $db);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } else {
            echo "Database connected successfully!<br>";
        }

        // Prepare and execute the SQL statement
        $stmt = $conn->prepare("INSERT INTO users (fullname, email, username, password) VALUES (?, ?, ?, ?)");
        if (!$stmt) {
            die("Statement preparation failed: " . $conn->error);
        }
        
        $stmt->bind_param("ssss", $fullName, $email, $username, $hashedPassword);
        
        if ($stmt->execute()) {
            $successMessage = "Registration successful!";
            echo $successMessage; // To confirm successful execution
            header("Location: login.html");
            exit();
        } else {
            $errorMessage = "Error executing statement: " . $stmt->error;
            echo $errorMessage;
        }

        $stmt->close();
        $conn->close();
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laptop Sale and Services Register</title>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-size: cover;
            background-position: center;
            background-color: black;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .register-container {
            width: 350px;
            padding: 30px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
        }

        .register-container h1 {
            text-align: center;
            margin-bottom: 30px;
            font-weight: bold;
            font-size: 24px;
            color: #ff9900;
        }

        #register-form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }

        input {
            padding: 12px;
            margin-bottom: 20px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        input:focus {
            border-color: #ff9900;
            outline: none;
        }

        #register-btn {
            background-color: #ff9900;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        #register-btn:hover {
            background-color: #e68a00;
        }

        #login-link {
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
        }

        #login-link a {
            color: #ff9900;
            text-decoration: none;
        }

        #login-link a:hover {
            text-decoration: underline;
        }

        #error-message {
            color: #f00;
            text-align: center;
            margin-top: -10px;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .register-container {
            animation: fadeIn 1s ease;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>

    <div class="register-container">
        <h1>Register</h1>
        <form id="register-form" method="POST" action="register.php">
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button id="register-btn">Register</button>
        </form>
        <p id="error-message"></p>
        <p id="login-link">Already have an account? <a href="login.php">Login here</a></p>
    </div>

    <script>
       // const registerForm = document.getElementById('register-form');
       //  const errorMessage = document.getElementById('error-message');

        // registerForm.addEventListener('submit', (e) => {
           //  e.preventDefault();
           //  const fullName = document.getElementById('fullname').value;
            // const email = document.getElementById('email').value;
             //const username = document.getElementById('username').value;
            // const password = document.getElementById('password').value;

           //  if (!fullName || !email || !username || !password) {
           //      errorMessage.textContent = 'Please fill all the fields';
           //  } else {
                // Save the registered user's details in localStorage
              //   localStorage.setItem('username', username);
              //   localStorage.setItem('password', password);
                
              //   alert('Registration successful!');
               //  window.location.href = "login.html";
           //  }
       //  });
    </script>

</body>
</html>
