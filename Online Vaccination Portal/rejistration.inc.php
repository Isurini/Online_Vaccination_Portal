<?php

require_once "connection.php";

 if ($_SERVER["REQUEST_METHOD"] == "POST") 
 {
    
    $bname = $_POST["bname"];
    $bagey = $_POST["bagey"];
    $bagem = $_POST["bagem"];
    $bdob = $_POST["bdob"];
    $bgender = $_POST["bgender"];
    $bweight = $_POST["bweight"];
    $bheight = $_POST["bheight"];
    $bgroup = $_POST["bgroup"];
    $pname = $_POST["pname"];
    $pemail = $_POST["pemail"];
    $pcontact = $_POST["pcontact"];
    $paddress = $_POST["paddress"];
 

 
 $sql= "INSERT INTO babyprofile (name,ageYear,ageMonth,dob,gender,weight,height,bloodGroup,parentName,email,contactNo,address)
        VALUES ('$bname' ,'$bagey','$bagem','$bdob ',' $bgender', '$bweight ','$bheight','  $bgroup',' $pname','$pemail','$pcontact',' $paddress')";

 
 if($conn->query($sql)=== TRUE)
 {
    echo "<script> alert ('Data Added Successfully')</script>";
    echo "<script>window.location.href ='babydisplay.php' </script>";
 }

 else{
    echo "Error" .$sql . "<br>" .$conn->error;
 }

 }
 $conn->close();

  
           
?>