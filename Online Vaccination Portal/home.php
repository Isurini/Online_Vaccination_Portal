<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="stylesheet" href="dash.css">
    <title>Vaccination potal</title>
</head>
<body>
    
<?php include 'header.l.php';
 ?>
    <script src="script.js"></script>



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
                    <h3>Baby Registation Form</h3>
                    
                    
                </div>
                <div class="service-card">
                    <i class="fas fa-child"></i>
                    <h3>Baby Profile</h3>
                    
                </div>
                <div class="service-card">
                    <i class="fas fa-bell"></i>
                    <h3>Reminding</h3>
                    <p></p>
                </div>
                <div class="service-card">
                    <i class="fas fa-heartbeat"></i>
                    <h3>Feedback</h3>
                    <p></p>
                </div>
                <div class="service-card">
                    <i class="fas fa-mobile"></i>
                    <h3>Contact US</h3>
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
    </script>

 
   

<?php include 'footer.php';
 ?>

</body>
</html>
