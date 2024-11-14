<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>More</title>
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

        .more-list {
            list-style-type: none;
            padding-left: 0;
        }

        .more-item {
            margin-bottom: 15px;
        }

        .more-item a {
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

        .more-item a:hover {
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
        <h2>More Options</h2>
        <ul class="more-list">
            <?php
                // PHP array to store the "More" menu items
                $moreItems = [
                    ['href' => 'faq.html', 'text' => 'Frequently Asked Questions'],
                    ['href' => 'support.html', 'text' => 'Support'],
                    ['href' => 'terms.html', 'text' => 'Terms of Service'],
                    ['href' => 'privacy.html', 'text' => 'Privacy Policy'],
                    ['href' => 'about.html', 'text' => 'About Us']
                ];

                // Loop through the array and output each menu item
                foreach ($moreItems as $item) {
                    echo '<li class="more-item"><a href="' . $item['href'] . '">' . $item['text'] . '</a></li>';
                }
            ?>
        </ul>
    </div>

    <!-- Footer -->
    <footer>
        <?php
            // PHP array to store the footer items
            $footerItems = [
                ['href' => 'profile.html', 'text' => 'Profile'],
                ['href' => 'homepage.html', 'text' => 'HOME'],
                ['href' => 'review.html', 'text' => 'Reviews']
            ];

            // Dynamically generate the footer links
            foreach ($footerItems as $index => $item) {
                echo '<a href="' . $item['href'] . '">' . $item['text'] . '</a>';
                // Add a separator except after the last item
                if ($index < count($footerItems) - 1) {
                    echo ' | ';
                }
            }
        ?>
    </footer>

</body>
</html>
