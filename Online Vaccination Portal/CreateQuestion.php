<?php
// Include the database connection
include 'connection.my.php';

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form input values
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $childId = $_POST['childId'];
    $question = $_POST['question'];

    // Prepare the SQL insert query with the new fields
    $sql = "INSERT INTO questions (username, email, phone_number, childId, question) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    
    // Execute the statement with the form data
    $stmt->execute([$username, $email, $phone_number, $childId, $question]);

    // Redirect to the read.php page after submission
    header("Location: read.my.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CreateQuestion.css">
    <title>Create Question</title>
    <style>
       


    </style>
</head>
<body background="back.jfif">
<?php include 'header.php';
 ?>



    <div class="container">
        <h1>Ask Question</h1>
        <!-- HTML form for creating a question -->
        <form method="post" action="" onsubmit="return validateForm()">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required><br>
            <span id="usernameError" class="error"></span>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required><br>
            <span id="emailError" class="error"></span>

            <label for="phone_number">Phone Number:</label>
            <input type="text" name="phone_number" id="phone_number" required><br>

            <label for="childId">Child ID:</label>
            <input type="number" name="childId" id="childId" required><br>

            <label for="question">Question:</label>
            <textarea name="question" id="question" required></textarea><br>

            <input type="submit" value="Submit">
        </form>
    </div>
    <script>
        function validateForm() {
            var username = document.getElementById('username').value;
            var email = document.getElementById('email').value;
            var phone_number = document.getElementById('phone_number').value;
            var childId = document.getElementById('childId').value;
            var question = document.getElementById('question').value;

            var isValid = true;

            // Username validation (cannot contain numbers)
            var usernameRegex = /^[a-zA-Z_]+$/;
            if (!usernameRegex.test(username)) {
                document.getElementById('usernameError').innerText = "Username cannot contain numbers.";
                isValid = false;
            } else {
                document.getElementById('usernameError').innerText = "";
            }

            // Email validation
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                document.getElementById('emailError').innerText = "Invalid email";
                isValid = false;
            } else {
                document.getElementById('emailError').innerText = "";
            }

            // Phone number validation (cannot contain letters)
            var phoneNumberRegex = /^[0-9]+$/;
            if (!phoneNumberRegex.test(phone_number)) {
                document.getElementById('phoneError').innerText = "Phone number cannot contain letters.";
                isValid = false;
            } else {
                document.getElementById('phoneError').innerText = "";
            }

            // Child ID validation
            if (isNaN(childId) || childId.trim() === "") {
                alert("Invalid Child ID");
                isValid = false;
            }

            // All fields required validation
            if (!username || !email || !phone_number || !childId || !question) {
                alert("All fields are required");
                isValid = false;
            }

            return isValid;
        }

    </script>
<?php include 'footer.php';
 ?>



</script>
</body>
</html>
