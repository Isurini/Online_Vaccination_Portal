<?php
require_once 'connection.php';

if(isset($_GET['delete_id']))
{
    $deleteID =$_GET['delete_id'];

    $sql= "DELETE FROM babyprofile WHERE id= '$deleteID'";

    if($conn->query($sql) === TRUE)
    {
        echo "<script> alert ('User account deleted'); </script>";
        echo "<script> window.location.href = 'babyrejistration.php';</script> ";


    }else{
        echo "Account deleted failed ";
    }
}

else{
    echo "delete id parameter not found";

}

$conn->close();

?>