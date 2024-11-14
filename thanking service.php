<?php
// Sample data for demonstration (in a real application, this data might come from a database or form submission)
$serviceType = "Laptop Repair";
$serviceDate = "September 15, 2024";
$serviceTime = "10:00 AM";
$serviceId = "#123456";

$customerName = "John Doe";
$customerEmail = "john.doe@example.com";
$customerPhone = "+1-234-567-890";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>After Booking Service - Laptop Sales and Services</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Laptop Sales and Services</h1>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="contact.html">Contact Us</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="confirmation">
            <h2>Thank You for Booking Our Service!</h2>
            <p>Your request for a laptop service has been successfully booked. Our team will reach out to you shortly to confirm the details.</p>
            <div class="service-summary">
                <h3>Service Summary</h3>
                <ul>
                    <li><strong>Service Type:</strong> <?php echo htmlspecialchars($serviceType); ?></li>
                    <li><strong>Date:</strong> <?php echo htmlspecialchars($serviceDate); ?></li>
                    <li><strong>Time:</strong> <?php echo htmlspecialchars($serviceTime); ?></li>
                    <li><strong>Service ID:</strong> <?php echo htmlspecialchars($serviceId); ?></li>
                </ul>
            </div>
            <div class="customer-info">
                <h3>Customer Information</h3>
                <ul>
                    <li><strong>Name:</strong> <?php echo htmlspecialchars($customerName); ?></li>
                    <li><strong>Email:</strong> <?php echo htmlspecialchars($customerEmail); ?></li>
                    <li><strong>Phone:</strong> <?php echo htmlspecialchars($customerPhone); ?></li>
                </ul>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Laptop Sales and Services. All rights reserved.</p>
    </footer>
</body>
</html>
