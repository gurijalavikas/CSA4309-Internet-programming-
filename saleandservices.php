<?php
// This PHP file will serve as the main entry point for the Laptop Sales and Services page.

// No special PHP processing is required for this static page
// All the content and styles are handled through HTML and CSS
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laptop Sales and Services</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            background-image: linear-gradient(to bottom, #ff9900, #ffffff);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            position: relative; /* Needed for positioning the back button */
        }

        .buttons-container {
            text-align: center;
        }

        .nav-button {
            background-color: #ff9900;
            color: white;
            border: none;
            padding: 15px 30px;
            margin: 10px;
            font-size: 18px;
            cursor: pointer;
            border-radius: 5px;
            text-decoration: none;
        }

        .nav-button:hover {
            background-color: #ff6600;
        }

        .header {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin-bottom: 30px;
        }

        .nav-button {
            display: inline-block;
        }

        .back-button {
            position: fixed;
            bottom: 20px;
            left: 20px;
            background-color: #ff9900;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        .back-button:hover {
            background-color: #ff6600;
        }
    </style>
</head>
<body>

    <div class="buttons-container">
        <div class="header">Laptop Sales and Services</div>
        <a href="categories.php" class="nav-button">Sales</a>
        <a href="service.php" class="nav-button">Services</a>
    </div>

    <!-- Back Button -->
    <a class="back-button" onclick="goBack()">Back</a>

    <script>
        // Function to go back to the previous page
        function goBack() {
            window.history.back();
        }
    </script>

</body>
</html>
