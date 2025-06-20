<?php

require 'config.php';
   $User_Type = $_POST["User_Type"];
    $firstname = $_POST["firstname"];
    $Lastname = $_POST["Lastname"];
    $Username = $_POST["Username"];
    $contact = $_POST["contact"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

 $sql= "INSERT INTO users VALUES ('',' $User_Type ',' $firstname ' ,' $Lastname ','$Username',' $contact ',' $email ', '$password','$cpassword' )";

 
 if($con -> query($sql))
 {
    echo "<script> alert ('Data Added Successfully')
    window.location.href = 'Login.php'</script>";
 }

 else{
    echo "Error" .$con ->error;
 }

 $con ->close();

  
           
?>