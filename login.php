<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laptop Sale and Services Login</title>
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

        .login-container {
            width: 350px;
            padding: 30px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
        }

        .login-container h1 {
            text-align: center;
            margin-bottom: 30px;
            font-weight: bold;
            font-size: 24px;
            color: #ff9900;
        }

        #login-form {
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

        #login-btn {
            background-color: #ff9900;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        #login-btn:hover {
            background-color: #e68a00;
        }

        #register-link {
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
        }

        #register-link a {
            color: #ff9900;
            text-decoration: none;
        }

        #register-link a:hover {
            text-decoration: underline;
        }

        #error-message {
            color: #f00;
            text-align: center;
            margin-top: -10px;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .login-container {
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

    <div class="login-container">
        <h1>Laptop Sale and Services</h1>
        <!-- PHP Form Handling -->
        <?php
            $errorMessage = "";

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // Sample stored credentials
                $storedUsername = 'user'; // Replace with database call
                $storedPassword = 'pass'; // Replace with database call

                $enteredUsername = $_POST['username'];
                $enteredPassword = $_POST['password'];

                // Validate credentials
                if ($enteredUsername === $storedUsername && $enteredPassword === $storedPassword) {
                    header('Location: homepage.html'); // Redirect to homepage on successful login
                    exit();
                } else {
                    $errorMessage = "Invalid username or password";
                }
            }
        ?>

        <form id="login-form" method="POST" action="">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button id="login-btn" type="submit">Login</button>
        </form>
        <?php if ($errorMessage): ?>
            <p id="error-message"><?php echo $errorMessage; ?></p>
        <?php endif; ?>
        <p id="register-link">Don't have an account? <a href="register.php">Register here</a></p>
    </div>

</body>
</html>
