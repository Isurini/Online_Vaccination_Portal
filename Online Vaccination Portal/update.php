<?php
require 'config.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $ID = $_POST["id"];
    $firstName= $_POST["firstName"];
    $lastName= $_POST["lastName"];
    $contactNumber= $_POST["contactnumber"];
    $email= $_POST["email"];

    // Prepare and bind
    $stmt = $con->prepare("UPDATE users SET First_Name = ?, Last_Name = ?, Contact_number = ?, Email = ? WHERE ID = ?");
    $stmt->bind_param( "ssssi",$firstName, $lastName, $contactNumber, $email, $ID);

    // Execute the statement
    if($stmt->execute()) {
        echo "<script>alert('User Details Updated Successfully');</script>";
        echo "<script>window.location.href = 'Display.php';</script>";
    } else {
        echo "Details Update Failed: " . $stmt->error;
    }

    $stmt->close();
}

$con->close();

?>