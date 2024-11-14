<?php
// File path for storing reviews
$reviewsFile = 'reviews.json';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $reviewText = htmlspecialchars($_POST['review']);

    // Create a new review
    $newReview = [
        'name' => $name,
        'email' => $email,
        'reviewText' => $reviewText,
    ];

    // Get existing reviews
    $reviews = [];
    if (file_exists($reviewsFile)) {
        $reviews = json_decode(file_get_contents($reviewsFile), true);
    }

    // Add the new review
    $reviews[] = $newReview;

    // Save reviews back to file
    file_put_contents($reviewsFile, json_encode($reviews));

    // Redirect to avoid form resubmission on refresh
    header('Location: reviews.php');
    exit;
}

// Load existing reviews
$reviews = [];
if (file_exists($reviewsFile)) {
    $reviews = json_decode(file_get_contents($reviewsFile), true);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Reviews</title>
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
            max-width: 800px;
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

        .review-form {
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input, .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .form-group textarea {
            resize: vertical;
        }

        .form-group button {
            background-color: #ff9900;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .form-group button:hover {
            background-color: #ff6600;
        }

        .reviews-section {
            margin-top: 40px;
        }

        .review {
            background-color: #fff5e6;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .review h4 {
            margin-bottom: 10px;
            color: #ff9900;
        }

        .review p {
            margin-bottom: 5px;
            color: #666;
        }

        .no-reviews {
            text-align: center;
            font-size: 18px;
            color: #888;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Customer Reviews</h2>

        <!-- Review Form -->
        <div class="review-form">
            <h3>Submit Your Review</h3>
            <form action="reviews.php" method="post">
                <div class="form-group">
                    <label for="name">Your Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Your Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="review">Your Review:</label>
                    <textarea id="review" name="review" rows="4" required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit">Submit Review</button>
                </div>
            </form>
        </div>

        <!-- Reviews Section -->
        <div class="reviews-section">
            <h3>What Customers Say</h3>
            <?php if (empty($reviews)): ?>
                <div class="no-reviews">No reviews yet. Be the first to review!</div>
            <?php else: ?>
                <?php foreach ($reviews as $review): ?>
                    <div class="review">
                        <h4><?php echo htmlspecialchars($review['name']); ?></h4>
                        <p><?php echo htmlspecialchars($review['reviewText']); ?></p>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>

</body>
</html>
