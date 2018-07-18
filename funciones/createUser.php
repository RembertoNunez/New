<?php
session_start();

include 'getConnection.php';
$connect = getDBConnection();

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$username = $_POST['username'];
$perfil = $_POST['perfil'];
$area = $_POST['area'];
$estado = $_POST['estado'];
$current_time = date('Y-m-d H:i:s');

$sql = "INSERT INTO `users` (name, email, username, id_profile, id_vp, active, created_at) VALUES ('$nombre', '$correo', '$username', '$perfil', '$area', '$estado', '$current_time');";

$statement = $connect->prepare($sql);
$statement->execute();

header('Location: ../admin/usuarios.php');
?>