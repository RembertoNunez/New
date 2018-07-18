<?php
session_start();

include 'getConnection.php';
$connect = getDBConnection();

$title = $_POST['title'];
$description = $_POST['description'];
$inicio = $_POST['inicio'];
$final = $_POST['final'];
$year = $_POST['year'];
$current_time = date('Y-m-d H:i:s');

$sql = "INSERT INTO `cycle` (title, description_, start_at, finalize_at, id_year, created_at) VALUES ('$title', '$description', '$inicio', '$final', '$year', '$current_time');";

$statement = $connect->prepare($sql);
$statement->execute();

header('Location: ../admin/ciclos.php');
?>
