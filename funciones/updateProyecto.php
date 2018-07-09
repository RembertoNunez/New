<?php
session_start();

include 'getConnection.php';
$connect = getDBConnection();
$first = $_SESSION['titleproj'];
$title = $_POST['title'];
$observations = $_POST['alcance'];
$start_at = $_POST['inicio'];
$finalize_at = $_POST['final'];
$sql = "UPDATE `project` SET `title`='$title', `observations`='$observations', `start_at`='$start_at', `finalize_at`='$finalize_at' WHERE `project`.`title`='$first';";
$statement = $connect->prepare($sql);
$statement->execute();

header('Location: ../admin/proyectos.php');
?>