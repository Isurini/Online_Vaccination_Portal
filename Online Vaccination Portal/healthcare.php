<?php
include_once "connection.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/healthcare.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/header.css">
    <title>Child Shield</title>
</head>
<body>
<header>
<?php include 'header.php';
 ?>

    </header>
    <div class="container">
        <div class="profile">
            <div class="profile-header">
                <img src="images/profile.jpg" alt="profile" class="profile-img"/>
                <div class="profile-text-container">
                    <h1 class="profile-name">Healthcare worker name</h1>
                </div>
            </div>
            <div class="menu">
                <a href="healthcare.html" class="menu-link">Account </a>
                <a href="password.html" class="menu-link"> Change Password</a>
            </div>
        </div><br><br>

            <button type="submit"><a href="vaccine.php">Add Vaccine details</button>
        

        


        <form class="account" action ="submitUpdateuser.php" method="GET">
            <div class="account-header">
                <h1 class="account-title"><b>Account Settings</b></h1>
                
            </div>

            <div class="account-edit">
                <div class="input-container" id="id">
                    <lable>User ID:</lable>
                    <input type="text" value="<?php echo "$ID"?>" name="id" readonly />
                </div>
                <div class="input-container">
                    <lable>First Name</lable>
                    <input type="text" value="<?php echo "$First_Name"?>" name="first" />
                </div>
                <div class="input-container">
                    <lable>Last Name</lable>
                    <input type="text"value="<?php echo "$Last_Name"?>" name="last"/>
                </div>
            </div>

            <div class="account-edit" id="form">
                <div class="input-container" id="contact">
                    <lable>Contact Number</lable>
                    <input type="text"value="<?php echo "$Contact_Num"?>" name="number"/>
                </div>
                <div class="input-container" id="email">
                    <lable>Email Address</lable>
                    <input type="email"value="<?php echo "$Email"?>" name="email"/>
                </div>
            </div>

            <div class="btn-container">
                <button type="submit" name="cancel" class="btn-cancel">Cancel</button>
                <button type="submit" name="save" class="btn-save">Save</button>
            </div>

        </form>


        
    </div>
    <?php include 'footer.php';
 ?>
</body>
</html>