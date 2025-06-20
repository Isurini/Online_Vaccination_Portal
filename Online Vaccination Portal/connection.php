<?php

$conn=new mysqli("localhost","root","","vaccinations");

if($conn->connect_error)
{
    die("Connection failed".$conn->connect_error);
}

?>