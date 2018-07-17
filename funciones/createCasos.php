<?php
session_start();

include 'getConnection.php';
$connect = getDBConnection();

$title = $_POST['title'];
$code = $_POST['codigo'];
$analista = $_POST['analista'];
$inicio = $_POST['inicio'];
$final = $_POST['final'];
$estado = $_POST['estado'];
$prioridad = $_POST['prioridad'];
$description = $_POST['description'];
$ciclo = $_POST['ciclo'];
$proyecto = $_POST['proyecto'];
$systema = $_POST['systema'];
$etapa = $_POST['etapa'];
$lider = $_POST['lider'];
$contacto = $_POST['contacto'];
$area = $_POST['area'];
$solicitante = $_POST['solicitante'];
$avance = $_POST['avance'];
$current_time = date('Y-m-d H:i:s');

$sql = "INSERT INTO `cases_identity` (title, correlative, created_at, id_requester, id_analyst, id_programmer, id_leader, id_vp, id_system, id_stage, id_priority start_at, finish_at, id_cycle, id_project, id_status) VALUES ('$title', '$code', '$current_time', '$solicitante', '$analista', '$contacto', '$lider', '$area', '$systema', '$etapa', '$prioridad', '$inicio', '$final', '$ciclo', '$proyecto', '$estado')";

$statement = $connect->prepare($sql);
$statement->execute();

header('Location: ../admin/tables.php');
?>