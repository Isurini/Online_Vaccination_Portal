<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about us page</title>
    <link rel="stylesheet" href="css/aboutus.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <script src="js/AboutUs.js"></script>
    
</head>
    
 <?php include 'header.php';
 ?>
 
    

    
<body>
    
    <div class="heading">
        <h1>About Us</h1>
    </div>
    <div class="container">
        <section class="about">
            <div class="about-image">
                <img src="images/about.jpg" alt="About" class="image">
            </div>
            <div class="about-content">

                <p>Our platform enhances the
                    vaccination experience by offering essential features such as timely reminders for
                    upcoming vaccinations, detailed vaccine reports, and direct communication with
                    healthcare professionals. Users can easily ask questions and receive expert
                    responses from doctors, ensuring they have the necessary information and support
                    to adhere to their vaccination schedules. This report outlines our website's
                    functionalities, user engagement metrics, and the overall impact of our services on
                    improving health and vaccination compliance.
                    The portal provides administrators with tools to manage user data, monitor
                    vaccination schedules, and ensure smooth platform operation.
                    <span id="seeMore"></span>
                    <button class="read_more" onclick="seemore()">See more..</button>
                </p>

            </div>
        </section>
    </div>

    
</body>

<?php include 'footer.php';
 ?>
 



</html>