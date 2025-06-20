<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Child Shield-Login</title>
    <link rel ="stylesheet" href ="Login.css">
</head>
<body>
    <div class="login-box">
        <h1>LOGIN</h1>
        <form action="Login.inc.php" method= "POST">
            <input type="text" placeholder="Username" name="Username" required>
            <input type="password" placeholder="Password" name="password" required>
        <div class="options">
                <label>
                    <input type="checkbox" id="checkbox"> Remember me
                </label>
                <a href="#" class="forgot-password"> Forgot Password?</a>
        </div>
            <button type="submit" >Login</button>
        </form>
        <div class="member">
        <p>Don't have an account?<a href="./signup.php">Sign Up</a></p>
        </div>
    </div>
</body>
</html>