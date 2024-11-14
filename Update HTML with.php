<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
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

        .profile-details {
            margin-bottom: 30px;
        }

        .profile-details div {
            margin-bottom: 10px;
        }

        .profile-details label {
            font-weight: bold;
            margin-right: 10px;
        }

        .profile-actions {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .action-button {
            background-color: #ff9900;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            font-size: 16px;
            text-decoration: none;
        }

        .action-button:hover {
            background-color: #ff6600;
        }

        .order-history {
            margin-top: 40px;
        }

        .order-history ul {
            list-style: none;
            padding-left: 0;
        }

        .order-history ul li {
            background-color: #fff5e6;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .order-history ul li button {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #ff3333;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .order-history ul li button:hover {
            background-color: #cc0000;
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
        <h2>User Profile</h2>

        <!-- User Details Section -->
        <div class="profile-details">
            <div>
                <label>Username:</label>
                <span id="username"><?php echo htmlspecialchars($user['username']); ?></span>
            </div>
            <div>
                <label>Email:</label>
                <span id="email"><?php echo htmlspecialchars($user['email']); ?></span>
            </div>
            <div>
                <label>Address:</label>
                <span id="address"><?php echo htmlspecialchars($user['address']); ?></span>
            </div>
        </div>

        <!-- Profile Actions -->
        <div class="profile-actions">
            <a href="cart.html" class="action-button">View Cart</a>
            <a href="review.html" class="action-button">Submit a Review</a>
        </div>

        <!-- Order History Section -->
        <div class="order-history">
            <h2>Order History</h2>
            <ul id="order-list">
                <?php if (empty($orders)): ?>
                    <li>No orders yet.</li>
                <?php else: ?>
                    <?php foreach ($orders as $index => $order): ?>
                        <li>
                            <div>
                                <h3>Order Placed on: <?php echo htmlspecialchars($order['timestamp']); ?></h3>
                                <div>
                                    <?php
                                    // Fetch order items
                                    $orderStmt = $pdo->prepare("SELECT * FROM order_items WHERE order_id = :order_id");
                                    $orderStmt->execute(['order_id' => $order['id']]);
                                    $items = $orderStmt->fetchAll(PDO::FETCH_ASSOC);
                                    
                                    foreach ($items as $item): ?>
                                        <div>
                                            <h4><?php echo htmlspecialchars($item['name']); ?></h4>
                                            <p>Price: ₹<?php echo htmlspecialchars($item['price']); ?></p>
                                            <p>Quantity: <?php echo htmlspecialchars($item['quantity']); ?></p>
                                            <p>Total: ₹<?php echo htmlspecialchars($item['price'] * $item['quantity']); ?></p>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                                <p>Total Amount: ₹<?php echo htmlspecialchars($order['total']); ?></p>
                                <p>Shipping Address: <?php echo htmlspecialchars($order['address']); ?>, <?php echo htmlspecialchars($order['city']); ?>, <?php echo htmlspecialchars($order['zip']); ?>, <?php echo htmlspecialchars($order['country']); ?></p>
                                <p>Payment Method: <?php echo htmlspecialchars($order['payment_method']); ?></p>
                                <form method="POST" action="delete_order.php" style="display:inline;">
                                    <input type="hidden" name="order_id" value="<?php echo htmlspecialchars($order['id']); ?>">
                                    <button type="submit">Delete Order</button>
                                </form>
                            </div>
                        </li>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ul>
        </div>

        <!-- Footer -->
        <footer>
            <a href="homepage.html">Home</a> | 
            <a href="review.html">Review Page</a>
        </footer>
    </div>

</body>
</html>
