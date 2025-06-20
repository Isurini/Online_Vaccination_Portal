<?php
include_once "connection.php";

if (isset($_GET['id'])) {
    $Vaccine_ID = $_GET['id'];

    // Sanitizing input
    $Vaccine_ID = intval($Vaccine_ID);

    // Preparing the SQL query
    $query = "DELETE FROM vaccine WHERE Vaccine_ID = $Vaccine_ID";

    if (mysqli_query($conn, $query)) {
        echo "<script>
            alert('Vaccine Deleted successfully!!');
            window.location.href='vaccine.php';
        </script>";
    } else {
        echo "<script>
                alert('Error: " . mysqli_error($conn) . "');
              </script>";
    }

    mysqli_close($conn);
} else {
    echo "<script>
            alert('No Vaccine ID provided.');
            window.location.href='vaccine.php';
          </script>";
}
?>
