<?php
include 'connection.my.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM questions WHERE id = ?";
    $stmt= $conn->prepare($sql);
    $stmt->execute([$id]);

    header("Location: read.my.php");
    exit;
}
?>
