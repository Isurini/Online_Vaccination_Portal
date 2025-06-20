<?php

require './config.php';

// Check if the delete_id parameter exists in the URL
if (isset($_GET['ID'])) {
    $userID = $_GET['ID'];
    // select query
    $sql = "SELECT * FROM users WHERE ID = '$userID'";
    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result) == 1){
    {
        foreach($result as $row)
        {
           $firstName= $row["First_Name"];
           $lastName= $row["Last_Name"];
           $contactNumber= $row["Contact_number"];
           $email= $row["Email"];

        }
    }
}

} else {
    echo "User not found";
}

$con->close();

?>
