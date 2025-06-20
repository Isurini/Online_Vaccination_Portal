<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="stylesheet" href="dash.css">
    <title>Vaccination potal</title>
</head>
<body>
<?php include 'header.php';
 ?>
    <script src="script.js"></script>

    <?php
session_start();
$loggedIn = isset($_SESSION['user_id']);
$username = $loggedIn ? $_SESSION['username'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Child Shield - Baby Care</title>
    <link rel="stylesheet" href="css/index.css">
    <script src="https://kit.fontawesome.com/20f08145b4.js" crossorigin="anonymous"></script>
</head>
<body>
<header>
    
 
</header>
    <main>
        <section id="home" class="hero">
            <h1>Welcome to Child Shield</h1>
            <p>Nurturing your little ones with love and care</p>
        </section>

        <section id="services" class="services">
            <h2>Our Services</h2>
            <div class="service-grid">
                <div class="service-card">
                    <i class="fas fa-baby"></i>
                    <h3><a href="babyrejistration.php">Baby Registation Form</h3>
                    
                    
                </div>
                <div class="service-card">
                    <i class="fas fa-child"></i>
                    <h3><a href="profile.php">Baby Profile</h3>
                    
                </div>
                <div class="service-card">
                    <i class="fas fa-bell"></i>
                    <h3><a href="reminder.php">Reminding</h3>
                    <p></p>
                </div>
                <div class="service-card">
                    <i class="fas fa-heartbeat"></i>
                    <h3><a href="feedback.php">Feedback</h3>
                    <p></p>
                </div>
                <div class="service-card">
                    <i class="fas fa-mobile"></i>
                    <h3><a href="contactUs.php">Contact US</h3>
                    <p></p>
                </div>
            </div>
        </section>

       
    </main>

    

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();

                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });

            const serviceCards = document.querySelectorAll('.service-card');
            serviceCards.forEach(card => {
                card.addEventListener('mouseenter', () => {
                    card.style.transform = 'scale(1.05)';
                    card.style.transition = 'transform 0.3s ease';
                });
                card.addEventListener('mouseleave', () => {
                    card.style.transform = 'scale(1)';
                });
            });
        });


 
        <?php include 'footer.php';
 ?>
   
</body>
</html>

