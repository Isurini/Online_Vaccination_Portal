<?php
include_once "connection.php"
?>

<?php
       $age =$_POST["field1"];
       $numOfDose =$_POST["field2"];
       $vaccine=$_POST["field3"];

       $sql ="INSERT INTO vaccine(Vaccine_ID,Age,NumberOfDose,VaccineName)
              VALUES('', '$age', '$numOfDose', '$vaccine')";

       if(mysqli_query($conn, $sql)){
              
              echo "<script>
              alert('Record inserted successfully!!!');
              window.location.href='vaccine.php';
              </script>";
      
       }
       else{
              echo "<script>alert('Error in insert!!')</script>";
       }

       mysqli_close($conn);
?>