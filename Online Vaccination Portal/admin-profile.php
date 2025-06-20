<?php
session_start();
require_once 'config.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baby Profile</title>
    <link rel="stylesheet" href="css/admin-profile.css">
    
</head>
<body>
<header>
    <header class="header">
        <div class="logo-section">
            <img class="logo" src="images/logoo.png" >
            <span class="cs-text">ChildShield</span>
        </div>
        <div class="login-section">
            <img class="log-dp" src="profile-pic.webp">
            <span>LOG IN USING YOUR ACCOUNT ON:</span>
            
            <a href="#" class="forgot-link">Forgotten your username or password?</a>
        </div>
    </header>
    <nav class="nav">
        <ul class="nav-links">
            <li><a href="#">Home</a></li>
            <li class="dropdown">
                <a href="#">About Us </a>
                
            </li>
            <li class="dropdown">
                <a href="#">services &#9662;</a>
                <ul class="dropdown-menu">
                    <li><a href="#">Baby Details</a></li>
                    <li><a href="#">Vaccine Details</a></li>
                </ul>
            </li>
            <li>
                <a href="#">FAQs</a>
                
            </li>
            <li><a href="#">Feedback</a></li>
            
            <li><a href="#"><button class="login-btn">
                Login
             </button></a></li>
        </ul>
    </nav>
    <script src="js/script.js"></script>
</header>

    <div class="profile-container">
        <div class="sidebar">
            <hr>
            <h2>Administrator</h2><br><br>
            <div class="profile-photo-section">
                <img src="images/adminpic.jpeg" alt="Profile Photo" id="profilePic">
                <button id="addEditBtn" ><i class="fas fa-plus"></i> Edit Profile picture</button></a>
                <a href="#" class="edit-photo-link"></a>
            </div><br><br>
            <div class="bio-section">
                <h2>Bio</h2>
                <div class="bio-placeholder"></div>
            </div>
            <button class="logout-btn">Log-Out</button>
        </div>

        
        <div class="main-content">
            <div class="form-section">
                <fieldset>
                    <legend>Account Details</legend>
                    <form id="edit-profile-form">
                        <div class="form-group">
                            <label for="admin_ID"> ID</label>
                            <input type="text" id="admin_ID" name="admin_ID" readonly>
                        </div>
            
                        <div class="form-group">
                            <label for="Name"> Name </label>
                            <input type="text" id="Name" name="bname" required>
                        </div>
            
                        <div class="form-group">
                            <label for="Age"> Age </label>
                            <input type="text" id="Age" name="bage" required>
                        </div>
            
                        <div class="form-group">
                            <label for="DOB"> Date of Birth </label>
                            <input type="Date" id="DOB" name="bdob" required>
                        </div>
            
                        <div class="form-group">
                            <label for="gender"> Gender </label>
                            <select id="gender" name="bgender" required>
                                <option value="male"> Male </option>
                                <option value="Female"> Female </option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="email"> Email </label>
                            <input type="email" id="email" name="pemail" required> <br>
                        </div>
            
                        <div class="form-group">
                            <label for="contact-no"> Contact No </label>
                            <input type="tel" id="contact-no" name="pcontact" placeholder="123-456-7890" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required><br>
                        </div>
            
                        <div class="form-group">
                            <label for="address"> Adress </label>
                            <input type="text" id="address"  name="paddress" required><br>
                        </div>            
                    </form>
                
               
                 
                    <button class="logout-btn" type="submit" class="apply-btn">Apply Changes</button>
                </fieldset>
            </div>
        </div>
    </div>
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