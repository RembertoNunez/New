<?php
function getDBConnection() {
    // Informacion de base de datos
    
    // $host = "us-cdbr-iron-east-04.cleardb.net";
    // $db = "heroku_91371adea50de1b";
    // $user = "bb3ac46965aa56";
    // $pass = "cadb2033";
    // $charset ="utf8mb4";

    $host = "localhost";
    $db = "sesc";
    $user = "root";
    $pass = "root";
    $charset ="utf8mb4";
    
    //Estableciendo Conexion
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    $pdo = new PDO($dsn, $user, $pass, $opt);
    return $pdo; 
}

?>