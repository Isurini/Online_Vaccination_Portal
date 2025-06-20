<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about us page</title>
    <link rel="stylesheet" href="footer.css">
    <script src="js/aboutus.js"></script>
    
</head>
    
    
 
    
</header>

<body>
    
   

<footer>
    <div class="footer-content">
        <div class="footer-section">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="terms.php">Terms & Conditions</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="aboutus.html">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>Contact Us</h3>
            <p>Email: info@childshield.com</p>
            <p>Phone: (+94) 456-7890</p>
            <p>Address: New kandy road, Malabe, Colombo</p>
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
        <p>&copy; 2024 Child Shield. All rights reserved.</p>
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
        calendarHTML += '<tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr>';

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
            if (day > daysInMonth) {
                break;
            }
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