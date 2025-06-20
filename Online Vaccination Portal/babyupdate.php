<?php

require_once 'connection.php';

if(isset($_GET['id']))
{
    $id = $_GET['id'];

    $sql="SELECT * FROM babyprofile  WHERE id='$id'";
    $result = $conn->query($sql);

    if($result->num_rows >0)
    {
        $row =$result->fetch_assoc();
        $bname = $row['name'];
        $bagey = $row['ageYear'];
        $bagem = $row['ageMonth'];
        $bdob = $row['dob'];
        $bgender = $row['gender'];
        $bweight = $row['weight'];
        $bheight = $row['height'];
        $bgroup = $row['bloodGroup'];
        $pname = $row['parentName'];
        $pemail = $row['email'];
        $pcontact = $row['contactNo'];
        $paddress = $row['address'];

    
      
    }
    else  {
        echo"No record available.";
    }
}
else 
{
    echo "ID parameter is missing.";
}

    
$conn->close();


?>


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

        <div class="main-content">
            <div class="form-section">
                <fieldset>
                    <legend>Account Details</legend>
                    <form method="post" action="babyupdate.inc.php">
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

<footer class="footer">
    <div class="footer-content">
        <div class="support-section">
            <h3>DO YOU NEED ANY</h3>
            <h2>SUPPORT ?</h2>
        </div>

        <div class="support-section">
            <p><span class="icon">📩</span> <a href="mailto:ChildShield@gmail.com">ChildShield@gmail.com</a></p>
        </div>

        <div class="support-section">
            <p><span class="icon">📞</span> +94 764277426</p>
        </div>

        <div class="calendar-section">
            <h3>Calendar</h3>
            <table class="calendar">
                <thead>
                    <tr>
                        <th colspan="7">OCTOBER 2024</th>
                    </tr>
                    <tr>
                        <th>Mon</th>
                        <th>Tue</th>
                        <th>Wed</th>
                        <th>Thu</th>
                        <th>Fri</th>
                        <th>Sat</th>
                        <th>Sun</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>6</td>
                        <td>7</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>9</td>
                        <td>10</td>
                        <td>11</td>
                        <td>12</td>
                        <td>13</td>
                        <td>14</td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>16</td>
                        <td class="highlighted">17</td>
                        <td>18</td>
                        <td>19</td>
                        <td>20</td>
                        <td>21</td>
                    </tr>
                    <tr>
                        <td>22</td>
                        <td>23</td>
                        <td>24</td>
                        <td>25</td>
                        <td>26</td>
                        <td>27</td>
                        <td>28</td>
                    </tr>
                    <tr>
                        <td>29</td>
                        <td>30</td>
                        <td>31</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
