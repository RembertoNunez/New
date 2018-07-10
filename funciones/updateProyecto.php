<?php
session_start();

include 'getConnection.php';
$connect = getDBConnection();

$first = $_SESSION['titleproj'];
$title = $_POST['title'];
$observations = $_POST['alcance'];
$start_at = $_POST['inicio'];
$finalize_at = $_POST['final'];
$current_time = date('Y-m-d H:i:s');

$sql = "UPDATE `project` SET `title`='$title', `observations`='$observations', `start_at`='$start_at', `finalize_at`='$finalize_at', `updated_at`='$current_time' WHERE `project`.`title`='$first';";
$statement = $connect->prepare($sql);
$statement->execute();
$_SESSION['projUpdate'] = date("m/d/Y h:ia");

header('Location: ../admin/proyectos.php');
?>