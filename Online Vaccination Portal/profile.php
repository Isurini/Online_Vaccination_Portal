<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baby Profile</title>
    <link rel="stylesheet" href="css/profile.css">
    <script src="js/profile.js"></script>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
</head>

<header class="header">
    <div class="logo-section">
        <img class="logo" src="images/logo.png" alt="ChildShield Logo">
        <span class="cs-text">ChildShield</span>
    </div>
    <div class="login-section">
        <img class="log-dp" src="images/appli.webp" alt="App Image">
        <span>LOG IN USING YOUR ACCOUNT ON:</span>
        <a href="#" class="forgot-link">Forgotten your username or password?</a>
    </div>
</header>

<nav class="nav">
    <ul class="nav-links">
        <li><a href="#">Home</a></li>
        <li class="dropdown">
            <a href="#">About Us</a>
        </li>
        <li class="dropdown">
            <a href="#">Services &#9662;</a>
            <ul class="dropdown-menu">
                <li><a href="#">Student Support</a></li>
                <li><a href="#">Technical Support</a></li>
            </ul>
        </li>
        <li><a href="#">FAQs</a></li>
        <li><a href="#">Feedback</a></li>
        <li><a href="#"><button class="login-btn">Login</button></a></li>
    </ul>
</nav>

<body>
    <div class="profile-container">
        <div class="sidebar">
            <button class="logout-btn">Log-Out</button>
            <hr>
            <div class="profile-photo-section">
                <img src="css/profile.jpeg" alt="Profile Photo" id="profilePic">
                <a href="#" class="edit-photo-link">Edit Profile Photo</a>
            </div>
            <div class="bio-section">
                <h2>Bio</h2>
                <div class="bio-placeholder"></div>
            </div>
        </div>

        <div class="main-content">
            <div class="form-section">
                <fieldset>
                    <legend>Account Details</legend>
                    <form method="post" action="update.inc.php">
    <input type="hidden" name="id" value="<?php echo $id; ?>"> 
    
    <div class="form-group">
        <label for="Name">Name</label>
        <input type="text" id="Name" name="bname" value="<?php echo $bname; ?>"><br>
    </div>

    <div class="form-group">
        <label for="Agey">Age-Years</label>
        <input type="text" id="Agey" name="bagey" value="<?php echo $bagey; ?>"><br>
    </div>

    <div class="form-group">
        <label for="Agem">Age-Months</label>
        <input type="text" id="Agem" name="bagem" value="<?php echo $bagem; ?>"><br>
    </div>

    <div class="form-group">
        <label for="DOB">Date of Birth</label>
        <input type="date" id="DOB" name="bdob" value="<?php echo $bdob; ?>"><br>
    </div>

    <div class="form-group">
        <label for="weight">Weight</label>
        <input type="text" id="weight" name="bweight" value="<?php echo $bweight; ?>"><br>
    </div>

    <div class="form-group">
        <label for="height">Height</label>
        <input type="text" id="height" name="bheight" value="<?php echo $bheight; ?>"><br>
    </div>


    <div class="form-group">
        <label for="parent-name">Parent's Name</label>
        <input type="text" id="parent-name" name="pname" value="<?php echo $pname; ?>"><br>
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="pemail" value="<?php echo $pemail; ?>"><br>
    </div>

    <div class="form-group">
        <label for="contact-no">Contact No</label>
        <input type="tel" id="contact-no" name="pcontact" value="<?php echo $pcontact; ?>"><br>
    </div>

    <div class="form-group">
        <label for="address">Address</label>
        <input type="text" id="address" name="paddress" value="<?php echo $paddress; ?>"><br>
    </div>

    <button type="submit" class="apply-btn logout-btn">Apply Changes</button>
</form>
                </fieldset>
            </div>
        </div>
    </div>
</body>

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
    <script>function generateCalendar() {
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
            </html>