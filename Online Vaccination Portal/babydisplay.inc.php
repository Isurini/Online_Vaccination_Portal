<?php

require_once 'connection.php';

$sql="SELECT * FROM  babyprofile ";

$result=$conn->query($sql);

if($result ->num_rows>0)
{
    
    while($row=$result->fetch_assoc())
    {
        echo"<tr>";
    
        echo "<td>".$row["id"]."</td>";
        echo "<td>".$row["name"]."</td>";
        echo "<td>".$row["ageYear"]."</td>";
        echo "<td>".$row["ageMonth"]."</td>";
        echo "<td>".$row["dob"]."</td>";
        echo "<td>".$row["weight"]."</td>";
        echo "<td>".$row["height"] ."</td>";
        echo "<td>",$row["parentName"]."</td>";
        echo "<td>".$row["email"]."</td>";
        echo "<td>".$row["contactNo"]."</td>";
        echo "<td>".$row["address"]."</td>";
        echo "<td>";
        echo "<button class='update' onclick=\"redirectToUpdateForm(".$row["id"].")\"> Update </button>";
        echo "<a class='delete' href=\"babydelete.php?delete_id=" . $row["id"] ."\"> Delete </a>";       
        echo "</td>";
        echo "</tr>";

    }
}

else{
    echo "No Data Available.";
}

$conn->close();

?>