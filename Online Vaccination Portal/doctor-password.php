<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/password.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    
    <title>Child Shield</title>
</head>
<header>
     
<?php include 'header.php';
 ?>
   
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


        <form class="password">
            <div class="password-header">
                <h1 class="password-title"><b>Password Settings</b></h1>
                           
            </div>

            <fieldset class="password-edit">
                <legend>Change Password</legend>
                <div class="input-container">
                    <lable>Old Password</lable>
                    <input type="password" placeholder="Old Password"/>
                </div>
                <div class="input-container">
                    <lable>New Password</lable>
                    <input type="password" placeholder="New Password" />
                </div>
                <div class="input-container">
                    <lable>Confirm New Password</lable>
                    <input type="password" placeholder="Confirm New Password"/>
                </div>
                <div class="btn-container">
                    <button class="btn-cancel">Cancel</button>
                    <button class="btn-confirm">Confirm</button>
                </div>
                
            </fieldset>
            

        </form>
    </div>
</body>

<?php include 'footer.php';
 ?>



</html>
</html>