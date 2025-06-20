<?php
include_once "config.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/password.css">
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
                <a href="password.html" class="menu-link" id="password"> Change Password</a>
            </div>
        </div>


        <form class="password" method="post" action="updatePassword.php">
            <div class="password-header">
                <h1 class="password-title"><b>Password Settings</b></h1>
            </div>
            

            <fieldset class="password-edit">
                <legend>Change Password</legend>
                <?php if (isset($_GET['error'])){?>
                <p class="error"><?php echo $_GET['error']; ?> </p>
                <?php } ?>

                <?php if (isset($_GET['success'])){?>
                    <p class="success"><?php echo $_GET['success']; ?> </p>
                <?php } ?>

                <div class="input-container">
                    <lable>Old Password</lable>
                    <input type="password" placeholder="Old Password" name="field1"/>
                </div>
                <div class="input-container">
                    <lable>New Password</lable>
                    <input type="password" placeholder="New Password" name="field2"/>
                </div>
                <div class="input-container">
                    <lable>Confirm New Password</lable>
                    <input type="password" placeholder="Re-enter New Password" name="field3"/>
                </div>
                <div class="btn-container">
                    <button class="btn-cancel" name="Cancel">Cancel</button>
                    <button class="btn-confirm" name="Confirm">Confirm</button>
                </div>
                
            </fieldset>
            

        </form>
    </div>
    <?php include 'footer.php';
 ?>


    </script>
</body>
</html>