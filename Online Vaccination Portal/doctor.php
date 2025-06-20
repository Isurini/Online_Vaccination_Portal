<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/doctor.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    
    <title>Child Shield</title>
</head>
<?php include 'header.php';
 ?>
    </header>
<body>
    <div class="container">
        <div class="profile">
            <div class="profile-header">
                <img src="images/profile.jpeg" alt="profile" class="profile-img"/>
                <a href="#" class="edit-photo-link">Edit Profile Photo</a>
                <div class="profile-text-container">
                    <h1 class="profile-name">Doctor</h1>
                </div>
            </div>
            <div class="menu">
                <a href="doctor.html" class="menu-link">Account </a>
                <a href="doctor-password.html" class="menu-link"> Change Password</a>
            </div>
        </div>


        <form class="account">
            <div class="account-header">
                <h1 class="account-title"><b>Account Settings</b></h1>
                
            </div>

            <div class="account-edit">
                <div class="input-container">
                    <lable>First Name</lable>
                    <input type="text" placeholder="First Name"/>
                </div>
                <div class="input-container">
                    <lable>Last Name</lable>
                    <input type="text" placeholder="Last Name"/>
                </div>
            </div>

            <div class="account-edit" id="form">
                <div class="input-container" id="contact">
                    <lable>Contact Number</lable>
                    <input type="text" placeholder="Contact Number"/>
                </div>
                <div class="input-container" id="email">
                    <lable>Email Address</lable>
                    <input type="email" placeholder="Email Address"/>
                </div>
            </div>

            <div class="btn-container">
                <button class="btn-cancel">Cancel</button>
                <button class="btn-save">Save</button>
            </div>

        </form>
        
    </div>
</body>
<?php include 'footer.php';
 ?>
</html>