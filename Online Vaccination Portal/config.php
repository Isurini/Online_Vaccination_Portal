<?php

$con=new mysqli("localhost","root","","vaccinations");

if($con->connect_error)
{
    die("Connection failed".$con->connect_error);
}

?>