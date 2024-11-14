<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Summary</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            background-image: linear-gradient(to bottom, #ff9900, #ffffff);
        }

        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            background-color: #ff9900;
            color: white;
            padding: 10px;
            text-align: center;
            border-radius: 10px 10px 0 0;
        }

        .section {
            margin-bottom: 20px;
        }

        .section h2 {
            margin-bottom: 10px;
            color: #ff9900;
        }

        .address-form, .payment-method {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 10px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        .form-group input, .form-group select, .form-group textarea {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        .order-summary {
            margin-top: 20px;
        }

        .order-summary p {
            margin: 10px 0;
            color: #333;
        }

        .place-order-btn, .back-btn {
            background-color: #ff9900;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            text-align: center;
            margin-top: 20px;
            display: block;
        }

        .place-order-btn:hover, .back-btn:hover {
            background-color: #ff6600;
        }

        .back-btn {
            background-color: rgba(255, 153, 0, 0.7); /* Orange overlay */
        }

        .order-status {
            background-color: #f39c12;
            color: white;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="header">
            <h1>Order Summary</h1>
        </div>

        <div class="section address-form">
            <h2>Shipping Address</h2>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" placeholder="Enter your name" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <textarea id="address" rows="4" placeholder="Enter your address" required></textarea>
            </div>
            <div class="form-group">
                <label for="city">City</label>
                <input type="text" id="city" placeholder="Enter your city" required>
            </div>
            <div class="form-group">
                <label for="zip">ZIP Code</label>
                <input type="text" id="zip" placeholder="Enter your ZIP code" required>
            </div>
            <div class="form-group">
                <label for="country">Country</label>
                <input type="text" id="country" placeholder="Enter your country" required>
            </div>
        </div>

        <div class="section payment-method">
            <h2>Payment Method</h2>
            <div class="form-group">
                <label for="payment-method">Choose payment method</label>
                <select id="payment-method" required>
                    <option value="">Select a payment method</option>
                    <option value="credit-card">Credit Card</option>
                    <option value="paypal">PayPal</option>
                    <option value="bank-transfer">Bank Transfer</option>
                </select>
            </div>
        </div>

        <div class="section order-summary">
            <h2>Order Summary</h2>
            <div id="order-items">
                <!-- Cart items will be injected here by JavaScript -->
            </div>
            <p id="order-total">Total: ₹0</p>
        </div>

        <button class="place-order-btn" id="place-order-btn">Place Order</button>
        <div class="order-status" id="order-status">
            <!-- Order status will be updated here -->
        </div>

        <!-- Back button to go back to the cart -->
        <button class="back-btn" id="back-btn">Back to Cart</button>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const orderItemsContainer = document.getElementById('order-items');
        const orderTotalElement = document.getElementById('order-total');
        const orderStatusElement = document.getElementById('order-status');

        function updateOrderSummary() {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            let totalPrice = 0;

            orderItemsContainer.innerHTML = '';

            cart.forEach(item => {
                totalPrice += item.price * item.quantity;

                const orderItem = document.createElement('div');
                orderItem.className = 'cart-item';
                
                orderItem.innerHTML = `
                    <div class="cart-info">
                        <h3>${item.name}</h3>
                        <p>Price: ₹${item.price}</p>
                        <p>Quantity: ${item.quantity}</p>
                        <p>Total: ₹${item.price * item.quantity}</p>
                    </div>
                `;

                orderItemsContainer.appendChild(orderItem);
            });

            orderTotalElement.textContent = `Total: ₹${totalPrice}`;
        }

        document.getElementById('place-order-btn').addEventListener('click', () => {
            const name = document.getElementById('name').value;
            const address = document.getElementById('address').value;
            const city = document.getElementById('city').value;
            const zip = document.getElementById('zip').value;
            const country = document.getElementById('country').value;
            const paymentMethod = document.getElementById('payment-method').value;

            if (!name || !address || !city || !zip || !country || !paymentMethod) {
                alert('Please fill out all fields.');
                return;
            }

            let cart = JSON.parse(localStorage.getItem('cart')) || [];

            if (cart.length === 0) {
                alert('Your cart is empty.');
                return;
            }

            // Store order details
            const orderDetails = {
                name,
                address,
                city,
                zip,
                country,
                paymentMethod,
                items: cart,
                total: orderTotalElement.textContent,
                timestamp: new Date().toLocaleString() // Adding timestamp
            };

            let orderHistory = JSON.parse(localStorage.getItem('orderHistory')) || [];
            orderHistory.push(orderDetails);
            localStorage.setItem('orderHistory', JSON.stringify(orderHistory));

            // Clear the cart
            localStorage.removeItem('cart');
            orderStatusElement.textContent = 'Your order has been placed successfully!';
            orderStatusElement.style.backgroundColor = '#2ecc71'; // Success color
        });

        // Back to Cart functionality
        document.getElementById('back-btn').addEventListener('click', () => {
            window.history.back(); // Navigates back to the cart page
        });

        // Initial order summary load
        updateOrderSummary();
    });
    </script>

</body>
</html>
