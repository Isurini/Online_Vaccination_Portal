<!DOCTYPE html>
<html lang="en"> 
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Child Shield-Signup</title>
        <link rel ="stylesheet" href ="css/signup.css">
    </head>
    
    <body> 
        <div class="signup-box">
            <h1>SIGN UP</h1>
            <div class="wrapper">
                <form action="insert.php" method="POST">
                    <div class="user-options">
                        <label><input type="radio" name="User_Type" value="user" required> Users</label>
                        <label><input type="radio" name="User_Type" value="health" required> Health Care Members</label>
                        <label><input type="radio" name="User_Type" value="admin" required> Admin</label>
                    </div>
                    <input type="text" placeholder="First Name" name="firstname" required>
                    <input type="text" placeholder="Last Name" name="Lastname" required>
                    <input type="text" placeholder="User Name" name="Username" required>
                    <input type="tel" placeholder="Contact Number" name="contact" required>
                    <input type="email" placeholder="Email Address" name="email" required>
                    <input type="password" placeholder="Password" name="password" required>
                    <input type="password" placeholder="Confirm Password" name="cpassword" required>
                    <div class="terms">
                        <input type="checkbox" id="checkbox" required>
                        <label for="checkbox">Accept <a href="#">Terms & Conditions</a></label>
                    </div>
                    <button type="submit" name="submit">Sign Up</button>
                </form>
                <div class="member">
                    <p>Already have an account? <a href="./Login.php">Login</a></p>
                </div>
            </div>
        </div>
    </body>
</html>
