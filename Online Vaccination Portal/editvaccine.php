<?php
include_once "connection.php"
?>

<?php
$Vaccine_ID=$_GET['id'];
$Age=$_GET['age'];
$NumberOfDose=$_GET['dose'];
$VaccineName=$_GET['name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Child Shield</title>
    <link rel="stylesheet" href="css/editVaccine.css">
   
</head>
<header>
    <?php include 'header.php';
 ?>
<body>
    

    </header>
    
    <div class="vaccineData tbl" style="border-style: groove; border-color: DarkBlue">
    <table border="1" width="100%">
    <form action ="submitUpdatevaccine.php" method="GET">

        <fieldset class="vaccine-edit">
            <legend><b>Edit Vaccine Information</b></legend>
            <div class="input-container">
                <lable style="font-size: 25px;">Vaccine ID:</lable>
                <input type="text" value="<?php echo "$Vaccine_ID"?>" name="id" readonly />
            </div>
            <div class="input-container">
                <lable style="font-size: 25px;">AGE:</lable>
                <input type="text" value="<?php echo "$Age"?>" name="age"/>
            </div>
            <div class="input-container">
                <lable style="font-size: 25px;">Number Of Dose:</lable>
                <input type="text" value="<?php echo "$NumberOfDose"?>" name="dose" />
            </div>
            <div class="input-container">
                <lable style="font-size: 25px;">Vaccine Name:</lable>
                <input type="text" value="<?php echo "$VaccineName"?>" name="name"/>
            </div>
            <input type="Submit"
              value="Update" name="submit" class="update">
           
            
        </fieldset>
                
        
    </table>
    </div>
    
    <?php include 'footer.php';
 ?>



    </script>
</body>
</html>