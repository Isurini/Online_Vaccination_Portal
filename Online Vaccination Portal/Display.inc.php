<?php
//inseret DB connection
require 'config.php';

//retrive data from the database
$sql = "SELECT * FROM users";
$result = $con -> query($sql);

if($result->num_rows >0){
    while($row = $result -> fetch_assoc()){
        echo "<tr>";
        echo "<td>" . $row["ID"]. "</td>";
        echo "<td>" . $row["User_Type"]. "</td>";
        echo "<td>" . $row["First_Name"]. "</td>";
        echo "<td>" . $row["Last_Name"]. "</td>";
        echo "<td>" . $row["Contact_number"]. "</td>";
        echo "<td>" . $row["Email"]. "</td>";
        echo"<td>";
        echo"<td>";
        echo "<button onClick=\"redirectToUpdateForm(".$row["ID"].")\">Update</button>  ";
        echo "<a href =\"Delete.php?Delete_ID=".$row["ID"]."\"> Delete </a>";
        echo"</td>";
        echo "</tr>";
    }
}
else{
    echo "No data available";
}
$con ->close();

?>