<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="stylesheet" href="AskFromDoc.css">
    <title>Vaccination potal</title>
</head>
<body background="back.jfif">
    </fieldset>
    
    <?php include 'header.php';
 ?>
    <script src="js/script.js"></script>

    <div class="container">
        <h2>Ask from doctor</h2>
        <div class="form-container">
            <form action="insert.php" method = "POST">
                <label for="name">Child ID</label>
                <input type="text" id="Child ID" name="ChildID" placeholder="Baby's ID">
                
                <label for="age">Name</label>
                <input type="text" id="Name" name="Name" placeholder="Baby's Name">
                
                <label for="email">Email</label>
                <input type="email" id="email" name="Email" placeholder="Email">
                
                <label for="phone">Phone</label>
                <input type="tel" id="phone" name="Phone" placeholder="Phone Number">
                
                <label for="question">Questions</label>
                <textarea id="question" name="Questions" placeholder="Type Your Question"></textarea>
                
                <button type="submit">Submit</button>
            </form>

            <div class="image-box">
                <img class="doc-pic" src="images/doctor.jpg">
            </div>
        </div>
    </div>

    <!-- Footer Section -->
  
    <?php include 'footer.php';
 ?>
</body>
</html>
