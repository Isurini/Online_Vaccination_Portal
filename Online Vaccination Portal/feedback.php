<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Child Shield - Feedback</title>
    <link rel="stylesheet" href="feedback.css">
    <script src="feedback.js"></script>
</head>
<?php include 'header.php';
 ?>
<body>
    <section class="ratings-reviews">
        <h1>Ratings & Reviews</h1>
        <div class="ratings">
            <div class="stars">
                <p>20% - <span>⭐</span> <span>⭐</span> <span>⭐</span> <span>⭐</span> <span>⭐</span></p>
                <p>40% - <span>⭐</span> <span>⭐</span> <span>⭐</span> <span>⭐</span> <span>⭐</span></p>
                <p>60% - <span>⭐</span> <span>⭐</span> <span>⭐</span> <span>⭐</span> <span>⭐</span></p>
                <p>80% - <span>⭐</span> <span>⭐</span> <span>⭐</span> <span>⭐</span> <span>⭐</span></p>
                <p>100% - <span>⭐</span> <span>⭐</span> <span>⭐</span> <span>⭐</span> <span>⭐</span></p>
            </div>
            <div class="average-rating">
                <p>2.5</p>
                <p>⭐⭐⭐⭐⭐</p>
                <p>Average Ratings</p>
            </div>
        </div>
    </section>
    
    <section class="feedback-form">
        <h2>Leave Feedback</h2>
        <form>
            <input type="text" placeholder="Name" required>
            <input type="email" placeholder="Email" required>
            <input type="text" placeholder="Subject">
            <textarea placeholder="Type your feedback" rows="5"></textarea>
            <div class="star-rating">
                <span>⭐</span><span>⭐</span><span>⭐</span><span>⭐</span><span>⭐</span>
            </div>
            <button type="submit">Submit Feedback</button>
        </form>
    </section>

    <?php include 'footer.php';
 ?>
    
</body>
</html>