<?php
session_start();

include 'getConnection.php';
$connect = getDBConnection();

$title = $_POST['title'];
$description = $_POST['description'];
$current_time = date('Y-m-d H:i:s');

$sql = "INSERT INTO `stage` (title, description_, created_at) VALUES ('$title', '$description', '$current_time');";

$statement = $connect->prepare($sql);
$statement->execute();

header('Location: ../admin/etapas.php');
?>