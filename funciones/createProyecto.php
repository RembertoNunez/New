<?php
session_start();

include 'getConnection.php';
$connect = getDBConnection();

$title = $_POST['title'];
$description = $_POST['descripcion'];
$alcance = $_POST['alcance'];
$inicio = $_POST['inicio'];
$final = $_POST['final'];
$estado = $_POST['estado'];
$current_time = date('Y-m-d H:i:s');

$sql = "INSERT INTO `project` (title, description_, observations, start_at, finalize_at, created_at)
						VALUES ('$title', '$description', '$alcance', '$inicio', '$final', '$estado', '$current_time');";

$statement = $connect->prepare($sql);
$statement->execute();

header('Location: ../admin/proyectos.php');
?>