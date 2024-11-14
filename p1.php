<?php
// Start the session
session_start();

// Initialize the cart if it doesn't exist
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Handle add to cart request
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_to_cart'])) {
    $productId = $_POST['product_id'];
    $productName = $_POST['product_name'];
    $productPrice = $_POST['product_price'];

    // Check if the product is already in the cart
    $found = false;
    foreach ($_SESSION['cart'] as &$product) {
        if ($product['id'] == $productId) {
            $product['quantity'] += 1;
            $found = true;
            break;
        }
    }

    // If not found, add a new entry
    if (!$found) {
        $_SESSION['cart'][] = [
            'id' => $productId,
            'name' => $productName,
            'price' => $productPrice,
            'quantity' => 1
        ];
    }

    echo "<script>alert('$productName has been added to your cart.');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laptop Sales</title>
    <style>
        /* Your CSS styles here */
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <h1>Laptop Sales</h1>
    </div>

    <div class="product-list">
        <!-- Product 1 -->
        <div class="product-card">
            <form method="post" action="">
                <div class="product-image">
                    <img src="https://via.placeholder.com/200" alt="Laptop 1">
                </div>
                <div class="product-info">
                    <h3>Chuwi CoreBook X i5 14" Laptop</h3>
                    <div class="ratings">
                        <span>⭐⭐⭐⭐</span> 100+ bought in last month
                    </div>
                    <p>Intel Core i5, 16GB RAM, 512GB SSD, Windows 11</p>
                    <p>
                        <span class="original-price">₹49,000</span>
                        <span class="price">₹26,990</span>
                    </p>
                    <input type="hidden" name="product_id" value="1">
                    <input type="hidden" name="product_name" value="Chuwi CoreBook X i5 14\" Laptop">
                    <input type="hidden" name="product_price" value="26990">
                    <button type="submit" name="add_to_cart" class="add-to-cart-btn">Add to Cart</button>
                </div>
            </form>
        </div>

        <!-- Repeat similar structure for each product -->
        <!-- Product 2 -->
        <div class="product-card">
            <form method="post" action="">
                <div class="product-image">
                    <img src="https://via.placeholder.com/200" alt="Laptop 2">
                </div>
                <div class="product-info">
                    <h3>Lenovo ThinkPad E14 13th Gen</h3>
                    <div class="ratings">
                        <span>⭐⭐⭐⭐⭐</span> Top-rated laptop
                    </div>
                    <p>Intel Core i5, 16GB RAM, 512GB SSD, Windows 11</p>
                    <p>
                        <span class="original-price">₹95,000</span>
                        <span class="price">₹71,990</span>
                    </p>
                    <input type="hidden" name="product_id" value="2">
                    <input type="hidden" name="product_name" value="Lenovo ThinkPad E14 13th Gen">
                    <input type="hidden" name="product_price" value="71990">
                    <button type="submit" name="add_to_cart" class="add-to-cart-btn">Add to Cart</button>
                </div>
            </form>
        </div>

        <!-- Repeat for more products -->

    </div>

    <a href="javascript:history.back()" class="back-button">Back</a>
</div>

</body>
</html>
