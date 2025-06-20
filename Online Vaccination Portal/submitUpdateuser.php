<?php
    include_once'connection.php';
?>

<?php
   if($_GET['save']){
        $User_ID=$_GET['id'];
        $F_Name=$_GET['first'];
        $L_Name=$_GET['last'];
        $Contact_Num=$_GET['number'];
        $Email=$_GET['email'];

        $query = "UPDATE user SET
                    F_Name='$F_Name',
                    L_Name='$L_Name',
                    Contact_Num='$Contact_Num',
                    Email='$Email'  WHERE
                    User_ID='$User_ID'";

        $data=mysqli_query($conn,$query);

        if($data){
            echo"<script>
            alert('Details Updated!!');
            window.location.href='vaccine.php';
            </script>";
    
        }
        else{
            echo"<script>alert('Error in Update')</script>";
        }
    }
    else if($_GET['cancel']){

        $data=mysqli_query($conn,$query);

        if($data){
            echo "<script>
            alert('Cancel Detail update!!');
            window.location.href='vaccine.php';
          </script>";
    
        }
        else{
            echo"<script>alert('Error in Update')</script>";
        }
    }
    mysqli_close($conn);

?>