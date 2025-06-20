<?php
    session_start();

    include_once'config.php';



   if(isset($_GET['confirm'])){
        if(isset($_POST['field1'])&& isset($_POST['field2']) &&isset($_POST['field3'])){
            function validate($data){
                $data=trim($data);
                $data=stripslashes($data);
                $data=htmlspecialchars($data);
                return $data;

            }

            $field1=validate($_POST['field1']);
            $field2=validate($_POST['field2']);
            $field3=validate($_POST['field3']);

            if(empty($field1)){
                header("Location:password.php?error=Old Password is required");
                exit();
            }
            else if(empty($field2)){
                header("Location:password.php?error=New Password is required");
                exit();
            }
            else if($field2!==$field3){
                header("Location:password.php?error=The Confirmation Password dose not match");
                exit();
            }
            else{
                $field1=md5($field1);
                $field2=md5($field2);
                $id = $_SESSION['id'];

                $sql="SELECT password FROM users WHERE id='$id' AND password='$field1'";

                $result = mysqli_query($con , $sql);

                if(mysqli_num_rows($result)===1){

                    $sql_2="UPDATE users SET password='$field2' WHERE id='$id' ";
                }
                else{
                    header("Location:password.php?error=Incorrect Password");
                    exit();
                }
            }
        }
        else{
            header("Location:password.php");
            exit();
        }

        
    }
    else if (isset($_GET['cancel'])){
        header("Location:password.php");
        exit();
    }

    mysqli_close($con);

?>
