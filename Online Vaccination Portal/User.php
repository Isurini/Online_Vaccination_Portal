<?php include("User.inc.php"); ?>

<!DOCTYPE html>

    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="User.css">
        <title>Child Shield</title>
    </head>
    <body>
    <?php include 'header.php';
 ?>
        
        <div class="container">
            <div class="profile">
                <div class="profile-header">
                    <img src="images/profile-pic.webp" alt="profile" class="profile-img"/>
                    <div class="profile-text-container">
                        <h1 class="profile-name">User</h1>
                    </div>
                </div>
                <div class="menu">
                    <a href="User.php" class="menu-link">Account </a>
                    <a href="password.php" class="menu-link"> Change Password</a>
                </div>
            </div>

            <form class="account"  method='POST'>
                <div class="account-header">
                    <h1 class="account-title"><b>Account Details</b></h1>
                </div>

                <div class="account-edit">
                    <input type="hidden" name = "id" value="<?= $_GET["ID"]; ?>"  />
                    <div class="input-container">
                        <label>First Name</label>
                        <input type="text" placeholder="First Name" name = "firstName" value="<?= $firstName; ?>"  />
                    </div>
                    <div class="input-container">
                        <label>Last Name</label>
                        <input type="text" placeholder="Last Name" name = "lastName" value="<?= $lastName; ?>"/>
                    </div>
                </div>

                <div class="account-edit">
                    <div class="input-container">
                        <label>Contact Number</label>
                        <input type="text" placeholder="Contact Number" name = "contactnumber" value="<?= $contactNumber; ?>"/>
                    </div>
                    <div class="input-container">
                        <label>Email Address</label>
                        <input type="email" placeholder="Email Address" name = "email" value="<?= $email; ?>" />
                    </div>
                </div>

                <div class="btn-container">
                    <button class="btn-cancel">Cancel</button>
                    <button class="btn-save" type="submit" formaction="update.php">Update</button>
                    <button class="btn-delete" formaction="Delete.php?Delete_ID=<?= $_GET['ID']; ?>"> Delete Account </button>
                </div>
        </form>
        
        </div>
        <?php include("footer.php"); ?>

    </body>
    </html>

