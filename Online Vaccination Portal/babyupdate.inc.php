<?php

require_once 'connection.php';

if($_SERVER ['REQUEST_METHOD'] == 'POST')
{
   
  
    $id = $_POST['id'];
    $bname = $_POST['bname'];
    $bagey = $_POST['bagey'];
    $bagem = $_POST['bagem'];
    $bdob = $_POST['bdob'];
    $bgender = $_POST['bgender'];
    $bweight = $_POST['bweight'];
    $bheight = $_POST['bheight'];
    $bgroup = $_POST['bgroup'];
    $pname = $_POST['pname'];
    $pemail = $_POST['pemail'];
    $pcontact = $_POST['pcontact'];
    $paddress = $_POST['paddress'];


    $sql = "UPDATE babyprofile 
            SET name='$bname', 
                ageYear='$bagey', 
                ageMonth='$bagem', 
                dob='$bdob',
                gender='$bgender', 
                weight='$bweight', 
                height='$bheight', 
                bloodGroup='$bgroup', 
                parentName='$pname',
                email='$pemail', 
                contactNo='$pcontact', 
                address='$paddress' 
                 WHERE id='$id'";
   
   if($conn->query($sql) === TRUE)
   {
    echo"<script>alert('Baby Details Updated Succesfully');</script>";
    echo "<script>window.location.href='babydisplay.php';</script>";
    exit();

   }
   else{
    echo "Details Updated Failed :".$conn->error;
   }

}
$conn->close();
?>