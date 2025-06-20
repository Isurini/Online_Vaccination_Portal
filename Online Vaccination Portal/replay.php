<?php
include 'connection.my.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $answer = $_POST['answer'];

    $sql = "UPDATE questions SET answer = ? WHERE id = ?";
    $stmt= $conn->prepare($sql);
    $stmt->execute([$answer, $id]);

    header("Location: read.my.php");
    exit;
}

// Retrieve question based on ID
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT question FROM questions WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $question = $row['question'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reply to Question</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        

        /* Header Styles */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            background-color: #ffffff;
        }

        .logo-section {
            display: flex;
            align-items: center;
        }

        .logo {
            width: 100px;
            height: auto;
        }

        .cs-text {
            font-size: 24px;
            font-weight: bold;
            margin-left: 10px;
            color: #1f1f1f;
        }

        .log-dp {
            width: 50px;
        }

        .login-section {
            text-align: right;
        }

        .login-section span {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        /* Navigation Styles */
        .nav {
            background-color: #bfc5c7;
            padding: 0;
        }

        .nav-links {
            align-items: center;
            list-style: none;
            display: flex;
            gap: 20px;
            margin: 0;
            padding: 0;
            margin-left: auto;
        }

        .nav-links a {
            text-decoration: none;
            color: #000;
            font-weight: bold;
            padding: 5px 10px;
        }

        .nav-links .active {
            background-color: #f4a300;
            color: #fff;
            border-radius: 3px;
        }

        /* Button Styles */
        .new-question-btn {
            display: block;
            background-color: #d9534f;
            color: #fff;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            border-radius: 4px;
            margin: 20px auto;
            width: 200px;
            font-size: 16px;
            font-weight: bold;
        }

        .new-question-btn:hover {
            background-color: #c9302c;
        }

        /* Card View Styles */
        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
            gap: 20px;
        }

        .card {
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 20px;
            width: 320px;
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card h3 {
            font-size: 20px;
            color: #333;
            margin-bottom: 10px;
            text-align: center;
        }

        .card p {
            margin: 5px 0;
            font-size: 14px;
            color: #555;
        }

        .card strong {
            font-weight: bold;
            color: #333;
        }

        .options {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .options a {
            background-color: #007bff;
            color: white;
            text-decoration: none;
            padding: 8px 12px;
            border-radius: 4px;
            font-size: 14px;
            text-align: center;
        }

        .options a:hover {
            background-color: #0056b3;
        }

        /* Footer Styles */
        footer {
            background-color: #001c3e;
            color: white;
            padding: 1px;
            margin-top: auto;
        }

        .footer-content {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            max-width: 1200px;
            margin: 0 auto;
        }

        .footer-section {
            flex: 1;
            margin: 0 1rem;
            min-width: 200px;
        }

        .footer-section h3 {
            margin-bottom: 1rem;
        }

        .footer-section ul {
            list-style-type: none;
            padding: 0;
        }

        .footer-section ul li {
            margin-bottom: 0.5rem;
        }

        .footer-section a {
            color: white;
            text-decoration: none;
        }

        /* Social Icons */
        .social-icons a {
            font-size: 1.5rem;
            margin-right: 1rem;
            color: white;
            font-size: 18px;
            display: inline-block;
        }

        /* Footer Bottom */
        .footer-bottom {
            text-align: center;
            margin-top: 2rem;
            padding-top: 1px;
            padding-bottom: 0px;
            border-top: 1px solid rgba(255, 255, 255, 0.3);
            margin: 0px;
        }

        /* Calendar Section */
        .calendar-section {
            display: flex;
            justify-content: flex-end;
        }

        #calendar {
            background-color: white;
            border-radius: 5px;
            padding: 10px;
            color: var(--text-color);
            font-size: 0.9rem;
        }

        #calendar table {
            width: 100%;
        }

        #calendar th, #calendar td {
            text-align: center;
            padding: 5px;
        }

        #calendar .today {
            background-color: var(--secondary-color);
            border-radius: 50%;
        }

        /* Root Variables */
        :root {
            --primary-color: #5facf4;
            --secondary-color: #c2ff99;
            --text-color: #000000;
            --background-color: #fff5f5;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        form {
            margin-top: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        textarea {
            height: 150px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 4px;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <?php include 'header.php';
 ?>

    <div class="container">
        <h1>Reply to Question</h1>
        <!-- HTML form for replying to a question -->
        <form method="post" action="">
            <?php if (isset($question)) : ?>
                <label for="question">Question:</label>
                <textarea id="question" name="question" readonly><?php echo $question; ?></textarea><br>
                <input type="hidden" name="id" value="<?php echo $id; ?>">
            <?php else : ?>
                <label for="id">Question ID:</label>
                <input type="text" id="id" name="id"><br>
            <?php endif; ?>
            <label for="answer">Answer:</label>
            <textarea id="answer" name="answer"></textarea><br>
            <input type="submit" value="Submit">
        </form>
    </div>
    <?php include 'footer.php';
 ?>

</body>
</html>
