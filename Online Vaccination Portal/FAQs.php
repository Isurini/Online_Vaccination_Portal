<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Child Shield</title>
    <link rel ="stylesheet" href ="FAQs.css">
</head>

<body>
<?php include 'header.php';
 ?>
    <h1>FAQs</h1>

    <section class="faq-section">
        <div class="faq-item">
            <p class="question">Q: Why am I receiving an <B>"Error 404 - Page Not Found"?</B></p>
            <p class="answer">A: The "Error 404" message usually means the page you are trying to reach has been relocated or deleted. Check that the URL is correct. If you clicked on a link within the portal, and you have reached this page in error, please contact us so we can rectify the problem.</p>
        </div>
        <div class="faq-item">
            <p class="question">Q: Why did I get logged out unexpectedly?</p>
            <p class="answer">A: The automatic logouts come either when a person is away or for reasons of security. Please ensure that you use the portal once you have logged on. If this continues to happen, check your browser settings to make sure cookies are enabled or try a different browser.</p>
        </div>
        <div class="faq-item">
            <p class="question">Q: I am getting a “System Maintenance” message. What does this mean?</p>
            <p class="answer">A: Our portal is probably undergoing regular maintenance to optimize performance and functionality. Please check our website for the schedule of maintenance, or please try some time later. If this maintenance wasn't announced on our website and you're still seeing this message, please report it to support for further assistance.</p>
        </div>
        <div class="faq-item">
            <p class="question">Q: Why am I unable to access my baby’s vaccination records?</p>
            <p class="answer">A: This could be a temporary problem of the server or possibly that your browser is outdated. Try logging out and logging back in, or switching to another browser. If the problem persists, then please contact customer support with details of the error for further assistance.</p>
        </div>
    </section>
    <section class="ask-question">
        <h3>Ask Another Question</h3>
        <form action="#" method="post">
            <textarea name="question" rows="5" placeholder="Type your question"></textarea>
            <button type="submit">Submit</button>
        </form>
    </section>
    <?php include 'footer.php';
 ?>
</body>
</html>