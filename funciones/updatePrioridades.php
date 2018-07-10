<?php
session_start();

include 'getConnection.php';
$connect = getDBConnection();

$first = $_SESSION['titleprior'];
$title = $_POST['title'];
$description = $_POST['description'];
$current_time = date('Y-m-d H:i:s');

$sql = "UPDATE `priority_case` SET `title`='$title', `description_`='$description', `updated_at`='$current_time' WHERE `priority_case`.`title`='$first';";
$statement = $connect->prepare($sql);
$statement->execute();
$_SESSION['priorUpdate'] = date("m/d/Y h:ia");

header('Location: ../admin/prioridades.php');
?>