<?php
    include_once'connection.php';
?>

<?php
   if($_GET['submit']){
        $Vaccine_ID=$_GET['id'];
        $Age=$_GET['age'];
        $NumberOfDose=$_GET['dose'];
        $VaccineName=$_GET['name'];

        $query = "UPDATE vaccine SET
                    Age='$Age',
                    NumberOfDose='$NumberOfDose',
                    VaccineName='$VaccineName' WHERE
                    Vaccine_ID='$Vaccine_ID'";

        $data=mysqli_query($conn,$query);

        if($data){
            echo "<script>
                    alert('Record Updated!!');
                    window.location.href='vaccine.php';
                  </script>";
            
        }
        else{
            echo"<script>alert('Error in Update')</script>";
        }
    }

    mysqli_close($conn);

?>