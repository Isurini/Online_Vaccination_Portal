<?php
// Database connection details
require 'AFD_DB.php';

$sql="select Child ID,Name,Email,Phone,Questions FROM ask_from_doc";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vaccinations";

$qs=$con->query($sql)

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle delete request
if (isset($_POST['delete'])) {
    $idToDelete = $_POST['id'];
    $deleteQuery = "DELETE FROM ask_from_doc WHERE 'Child ID' = ?";
    $stmt = $conn->prepare($deleteQuery);
    $stmt->bind_param("i", $idToDelete);
    $stmt->execute();
    $stmt->close();
}

// Handle edit request
if (isset($_POST['edit'])) {
    $idToEdit = $_POST['id'];
    $updatedQuestion = $_POST['updated_question'];
    $editQuery = "UPDATE ask_from_doc SET 'Questions' = ? WHERE 'Child ID' = ?";
    $stmt = $conn->prepare($editQuery);
    $stmt->bind_param("si", $updatedQuestion, $idToEdit);
    $stmt->execute();
    $stmt->close();
}

?>
