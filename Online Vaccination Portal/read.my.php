<?php
include 'connection.my.php';

// Fetch all questions from the database
$sql = "SELECT * FROM questions";
$stmt = $conn->query($sql);
$questions = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Questions</title>
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Header Styles */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            background-color: #ffffff;
        }

        .logo-section {
            display: flex;
            align-items: center;
        }

        .logo {
            width: 100px;
            height: auto;
        }

        .cs-text {
            font-size: 24px;
            font-weight: bold;
            margin-left: 10px;
            color: #1f1f1f;
        }

        .log-dp {
            width: 50px;
        }

        .login-section {
            text-align: right;
        }

        .login-section span {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        /* Navigation Styles */
        .nav {
            background-color: #bfc5c7;
            padding: 0;
        }

        .nav-links {
            align-items: center;
            list-style: none;
            display: flex;
            gap: 20px;
            margin: 0;
            padding: 0;
            margin-left: auto;
        }

        .nav-links a {
            text-decoration: none;
            color: #000;
            font-weight: bold;
            padding: 5px 10px;
        }

        .nav-links .active {
            background-color: #f4a300;
            color: #fff;
            border-radius: 3px;
        }

        /* Button Styles */
        .new-question-btn {
            display: block;
            background-color: #d9534f;
            color: #fff;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            border-radius: 4px;
            margin: 20px auto;
            width: 200px;
            font-size: 16px;
            font-weight: bold;
        }

        .new-question-btn:hover {
            background-color: #c9302c;
        }

        /* Card View Styles */
        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
            gap: 20px;
        }

        .card {
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 20px;
            width: 320px;
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card h3 {
            font-size: 20px;
            color: #333;
            margin-bottom: 10px;
            text-align: center;
        }

        .card p {
            margin: 5px 0;
            font-size: 14px;
            color: #555;
        }

        .card strong {
            font-weight: bold;
            color: #333;
        }

        .options {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .options a {
            background-color: #007bff;
            color: white;
            text-decoration: none;
            padding: 8px 12px;
            border-radius: 4px;
            font-size: 14px;
            text-align: center;
        }

        .options a:hover {
            background-color: #0056b3;
        }

        /* Footer Styles */
        footer {
            background-color: #001c3e;
            color: white;
            padding: 1px;
            margin-top: auto;
        }

        .footer-content {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            max-width: 1200px;
            margin: 0 auto;
        }

        .footer-section {
            flex: 1;
            margin: 0 1rem;
            min-width: 200px;
        }

        .footer-section h3 {
            margin-bottom: 1rem;
        }

        .footer-section ul {
            list-style-type: none;
            padding: 0;
        }

        .footer-section ul li {
            margin-bottom: 0.5rem;
        }

        .footer-section a {
            color: white;
            text-decoration: none;
        }

        /* Social Icons */
        .social-icons a {
            font-size: 1.5rem;
            margin-right: 1rem;
            color: white;
            font-size: 18px;
            display: inline-block;
        }

        /* Footer Bottom */
        .footer-bottom {
            text-align: center;
            margin-top: 2rem;
            padding-top: 1px;
            padding-bottom: 0px;
            border-top: 1px solid rgba(255, 255, 255, 0.3);
            margin: 0px;
        }

        /* Calendar Section */
        .calendar-section {
            display: flex;
            justify-content: flex-end;
        }

        #calendar {
            background-color: white;
            border-radius: 5px;
            padding: 10px;
            color: var(--text-color);
            font-size: 0.9rem;
        }

        #calendar table {
            width: 100%;
        }

        #calendar th, #calendar td {
            text-align: center;
            padding: 5px;
        }

        #calendar .today {
            background-color: var(--secondary-color);
            border-radius: 50%;
        }

        /* Root Variables */
        :root {
            --primary-color: #5facf4;
            --secondary-color: #c2ff99;
            --text-color: #000000;
            --background-color: #fff5f5;
        }
    </style>
</head>
<body>
    <!-- Header Section -->
  
    <?php include 'header.php';
 ?>

  
    <!-- Main Content -->
    <h1 style="text-align:center;">Questions</h1>
    <a href="CreateQuestion.php" class="new-question-btn">Create New Question</a>

    <!-- Card View for Questions -->
    <div class="card-container">
        <?php foreach ($questions as $question): ?>
            <div class="card">
                <h3><?= htmlspecialchars($question['username']) ?></h3>
                <p><strong>Email:</strong> <?= htmlspecialchars($question['email']) ?></p>
                <p><strong>Phone Number:</strong> <?= htmlspecialchars($question['phone_number']) ?></p>
                <p><strong>Child ID:</strong> <?= htmlspecialchars($question['childId']) ?></p>
                <p><strong>Question:</strong> <?= htmlspecialchars($question['question']) ?></p>
                <p><strong>Answer:</strong> <?= htmlspecialchars($question['answer'] ?? '-') ?></p>
                <div class="options">
                    <a href="update.my.php?id=<?= htmlspecialchars($question['id']) ?>">Update</a>
                    <a href="delete.my.php?id=<?= htmlspecialchars($question['id']) ?>">Delete</a>
                    <a href="replay.php?id=<?= htmlspecialchars($question['id']) ?>">Reply</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Footer Section -->
    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="terms.php">Terms & Conditions</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Contact Us</h3>
                <p>Email: info@childshield.com</p>
                <p>Phone: (+94) 456-7890</p>
                <p>Address: New Kandy Road, Malabe, Colombo</p>
            </div>
            <div class="footer-section">
                <h3>Follow Us</h3>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="footer-section calendar-section">
                <div id="calendar"></div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 ChildShield. All rights reserved.</p>
        </div>
    </footer>

    <script>
        function generateCalendar() {
            const today = new Date();
            const month = today.getMonth();
            const year = today.getFullYear();
            const daysInMonth = new Date(year, month + 1, 0).getDate();

            let calendarHTML = '<table>';
            calendarHTML += '<tr><th colspan="7">' + today.toLocaleString('default', { month: 'long' }) + ' ' + year + '</th></tr>';
            calendarHTML += '<tr><th>Su</th><th>Mo</th><Th>Tu</Th><Th>We</Th><Th>Th</Th><Th>Fr</Th><Th>Sa</Th></tr>';

            let day = 1;
            for (let i = 0; i < 6; i++) {
                calendarHTML += '<tr>';
                for (let j = 0; j < 7; j++) {
                    if (i === 0 && j < new Date(year, month, 1).getDay()) {
                        calendarHTML += '<td></td>';
                    } else if (day > daysInMonth) {
                        break;
                    } else {
                        if (day === today.getDate()) {
                            calendarHTML += '<td class="today">' + day + '</td>';
                        } else {
                            calendarHTML += '<td>' + day + '</td>';
                        }
                        day++;
                    }
                }
                calendarHTML += '</tr>';
                if (day > daysInMonth) break;
            }
            calendarHTML += '</table>';

            document.getElementById('calendar').innerHTML = calendarHTML;
        }

        document.addEventListener('DOMContentLoaded', function() {
            generateCalendar();
        });
    </script>
</body>
</html>
