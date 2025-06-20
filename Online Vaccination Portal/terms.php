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
    <link rel="stylesheet" href="terms.css">
    <script src="https://kit.fontawesome.com/20f08145b4.js" crossorigin="anonymous"></script>
</head>
<body>
<header>
<?php include 'header.php';
 ?>
</header>

    <main class="terms-container">
        <h1>Terms and Conditions</h1>
        <section class="terms-section">
            <h2>1. Acceptance of Terms</h2>
            <p>By using Child Shield's services, you agree to comply with and be bound by these Terms and Conditions.</p>
        </section>
        <section class="terms-section">
            <h2>2. Services</h2>
            <p>Child Shield provides baby care services as described on our website. We reserve the right to modify or discontinue any service without notice.</p>
        </section>
        <section class="terms-section">
            <h2>3. User Responsibilities</h2>
            <p>Users are responsible for providing accurate information and maintaining the confidentiality of their account credentials.</p>
        </section>
        <section class="terms-section">
            <h2>4. Privacy Policy</h2>
            <p>Our Privacy Policy, which explains how we collect, use, and protect your personal information, is incorporated into these Terms and Conditions.</p>
        </section>
        <section class="terms-section">
            <h2>5. Limitation of Liability</h2>
            <p>Child Shield shall not be liable for any indirect, incidental, special, consequential, or punitive damages resulting from your use of our services.</p>
        </section>
        <section class="terms-section">
            <h2>6. Accuracy of Information</h2>
            <p> We do not guarantee the completeness, accuracy, or timeliness of any information, despite our best efforts to offer current and correct information. The medical data offered is intended only as a general guide and is not intended to take the place of expert medical advice.</p>
        </section>
        <section class="terms-section">
            <h2>6. Eligibility</h2>
            <p> Healthcare professionals, parents/guardians, and registered users who want to plan, manage, or get information about vaccinations are the intended users of this service.
            </p>
        </section>
    </main>


    <?php include 'footer.php';
 ?>
</body>
</html>
