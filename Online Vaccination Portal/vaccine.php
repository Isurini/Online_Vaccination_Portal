<?php
include_once "connection.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/vaccine.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/header.css">
    <script src="js/vaccine.js"></script> 
    <title>Child Shield</title>
    
</head>
<body>
<header>
       <header class="header">
            <div class="logo-section">
                <img class="logo" src="images/logo.png" >
                <span class="cs-text">ChildShield</span>
            </div>
            <div class="login-section">
                <img class="log-dp" src="images/profile-pic.webp">
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
                        <li><a href="#">Student Support</a></li>
                        <li><a href="#">Technical Support</a></li>
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
</header>
       <div class="topic">
              <h1 >Child Immunization Schedule</h1>
       </div>

       <br>
       <button class="btn"><a href = "AddVaccine.php" class="btn-add">Add Vaccine</a></button>
       <br>
       <br>

       <center>
       <div class="vaccineData tbl" style="border-style: groove; border-color:#000">
       <table border="1" width="100%">
              <tr>
                     <th class="col1">Vaccine ID</th>
                     <th class="col1">AGE</th>
                     <th class="col1">Number of Dose</th>
                     <th class="col1">Vaccine Name</th>
                     <th class="col1">Edit</th>
                     <th class="col1">Delete</th>

              </tr>
              
              <?php
                     $sql="select * from vaccine";
                     $result = $conn->query($sql);

                     if($result->num_rows>0){

                            while($row=$result->fetch_assoc()){
                                   
                                   echo"<tr>
                                   <td>".$row["Vaccine_ID"]."</td>
                                   <td>".$row["Age"]."</td>
                                   <td>".$row["NumberOfDose"]."</td>
                                   <td>".$row["VaccineName"]."</td>";
                                   
                                   echo"<td><a href='editvaccine.php?
                                   &id=$row[Vaccine_ID]
                                   &age=$row[Age]
                                   &dose=$row[NumberOfDose]
                                   &name=$row[VaccineName]'>Edit</a></td>";

                                   echo "<td><a href='vaccinedelete.php?
                                    &id' 
                                   >Delete</a></td>";

                                  
                            }
                            
                     }
                     else{
                            echo "Empty Rows";
                     }

                     echo"</table>";

                     mysqli_close($conn);

              ?>
              
       </div>
       </center>
       <br>
       <br>

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
				
</body>
</html>
