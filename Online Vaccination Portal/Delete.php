<?php

require './config.php';

// Check if the delete_id parameter exists in the URL
if (isset($_GET['Delete_ID'])) {
    $deleteID = $_GET['Delete_ID'];

    // Delete query
    $sql = "DELETE FROM users WHERE ID = '$deleteID'";

    if ($con->query($sql) === TRUE) {
        echo "<script> alert('User Account Deleted');</script>";
        echo "<script>window.location.href = 'Display.php';</script>";
    } else {
        echo "Account deletion failed";
    }
} else {
    echo "Delete ID parameter not found";
}

$con->close();

?>