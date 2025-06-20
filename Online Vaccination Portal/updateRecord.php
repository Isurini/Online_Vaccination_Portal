<?php
include_once "config.php"
?>

<?php
       $name =$_POST["field1"];
       $vaccine =$_POST["field2"];
       $dose=$_POST["field3"];
       $lot=$_POST["field4"];
       $date=$_POST["field5"];
       $note=$_POST["field6"];

       $sql ="INSERT INTO record(Record_ID,Baby_Name,Vaccine_Type,Number_Of_Dose,Lot_Num,Date_Of_Injection,Note)
              VALUES('', '$name', '$vaccine', '$dose','$lot','$date','$note')";

       if(mysqli_query($con, $sql)){
              
              echo "<script>
              alert('Record updated successfully!!!');
              window.location.href='recordpage.php';
              </script>";
       }
       else{
              echo "<script>alert('Error in insert!!')</script>";
       }

       mysqli_close($con);
?>