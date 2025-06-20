<?php
// DB connection
require 'config.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // Use mysqli_real_escape_string to prevent SQL injection
    $Username = mysqli_real_escape_string($con, $_POST["Username"]);
    $password = mysqli_real_escape_string($con, $_POST["password"]);

    // Check username and password
    $sql = "SELECT * FROM users WHERE User_name = '$Username' AND password = '$password'";
    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result) == 1 ) {
        $row = mysqli_fetch_assoc($result);
        $id = $row["ID"];

        echo "<script>alert('User login successful');</script>";
        echo "<script>window.location.href = 'user.php?ID=$id';</script>";
    } else {
        echo "<script>alert('Invalid Username or password');</script>";
        echo "<script>window.location.href = 'Login.php';</script>";
    }
}

mysqli_close($con);
?>