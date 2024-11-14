<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <style>
        /* Basic Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            background: linear-gradient(to bottom, #ff9900, #ffffff);
            color: #333;
            padding: 20px;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #ff9900;
            margin-bottom: 20px;
            text-align: center;
        }

        .menu-list {
            list-style-type: none;
            padding-left: 0;
        }

        .menu-item {
            margin-bottom: 15px;
        }

        .menu-item a {
            display: block;
            background-color: #ff9900;
            color: white;
            padding: 15px;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }

        .menu-item a:hover {
            background-color: #ff6600;
        }

        footer {
            margin-top: 40px;
            text-align: center;
        }

        footer a {
            color: #ff9900;
            text-decoration: none;
            padding: 10px;
        }

        footer a:hover {
            color: #ff6600;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Main Menu</h2>
        <ul class="menu-list">
            <?php
                // PHP Array to store menu items
                $menuItems = [
                    ['href' => 'profile.html', 'text' => 'User Profile'],
                    ['href' => 'order.html', 'text' => 'Order History'],
                    ['href' => 'review.html', 'text' => 'Submit a Review'],
                    ['href' => 'services.html', 'text' => 'Our Services'],
                    ['href' => 'contact.html', 'text' => 'Contact Us'],
                    ['href' => 'booking.html', 'text' => 'Book a Service']
                ];

                // Dynamically generate menu items
                foreach ($menuItems as $item) {
                    echo '<li class="menu-item"><a href="' . $item['href'] . '">' . $item['text'] . '</a></li>';
                }
            ?>
        </ul>
    </div>

    <!-- Footer -->
    <footer>
        <?php
            // PHP Array to store footer items
            $footerItems = [
                ['href' => 'profile.html', 'text' => 'Profile'],
                ['href' => 'order.html', 'text' => 'Orders'],
                ['href' => 'review.html', 'text' => 'Reviews']
            ];

            // Dynamically generate footer links
            foreach ($footerItems as $item) {
                echo '<a href="' . $item['href'] . '">' . $item['text'] . '</a> | ';
            }
        ?>
    </footer>

</body>
</html>
