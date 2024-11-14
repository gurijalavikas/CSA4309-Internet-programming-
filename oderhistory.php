<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            background-image: linear-gradient(to bottom, #ffffff, #ff9900);
        }

        .history-container {
            margin: 20px;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .history-item {
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
        }

        .history-item h3 {
            margin: 0 0 5px;
            color: #ff9900;
        }

        .history-item p {
            margin: 5px 0;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="history-container">
        <h2>Order History</h2>
        <div id="history-list">
            <?php
                // Simulating order history data retrieval
                $orderHistory = [
                    [
                        'timestamp' => '2024-09-01 14:23:00',
                        'items' => [
                            ['name' => 'Product A', 'price' => 500, 'quantity' => 2],
                            ['name' => 'Product B', 'price' => 750, 'quantity' => 1]
                        ],
                        'total' => 1750,
                        'address' => '123 Main St',
                        'city' => 'New Delhi',
                        'zip' => '110001',
                        'country' => 'India',
                        'paymentMethod' => 'Credit Card'
                    ],
                    [
                        'timestamp' => '2024-08-15 10:10:00',
                        'items' => [
                            ['name' => 'Product C', 'price' => 1000, 'quantity' => 1]
                        ],
                        'total' => 1000,
                        'address' => '456 Market Rd',
                        'city' => 'Mumbai',
                        'zip' => '400001',
                        'country' => 'India',
                        'paymentMethod' => 'PayPal'
                    ]
                ];

                // Check if the order history is empty
                if (empty($orderHistory)) {
                    echo '<p>No orders yet.</p>';
                } else {
                    // Loop through each order
                    foreach ($orderHistory as $item) {
                        echo '<div class="history-item">';
                        echo '<h3>Order Placed on: ' . $item['timestamp'] . '</h3>';
                        
                        // Generate HTML for each item in the order
                        foreach ($item['items'] as $cartItem) {
                            echo '<div>';
                            echo '<h4>' . $cartItem['name'] . '</h4>';
                            echo '<p>Price: ₹' . $cartItem['price'] . '</p>';
                            echo '<p>Quantity: ' . $cartItem['quantity'] . '</p>';
                            echo '<p>Total: ₹' . ($cartItem['price'] * $cartItem['quantity']) . '</p>';
                            echo '</div>';
                        }

                        // Display order details
                        echo '<p>Total Amount: ₹' . $item['total'] . '</p>';
                        echo '<p>Shipping Address: ' . $item['address'] . ', ' . $item['city'] . ', ' . $item['zip'] . ', ' . $item['country'] . '</p>';
                        echo '<p>Payment Method: ' . $item['paymentMethod'] . '</p>';
                        echo '</div>';
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>
