<?php

function countCasos() {
    $connect = getDBConnection();
    $sql = "SELECT COUNT(*) FROM `case_identity`";
    $statement = $connect->prepare($sql);
    $statement->execute();
    $case = $statement->fetch(PDO::FETCH_ASSOC);
    echo $case['COUNT(*)'];
}

function countProject() {
  $connect = getDBConnection();
  $sql = "SELECT COUNT(*) FROM `project`";
  $statement = $connect->prepare($sql);
  $statement->execute();
  $project = $statement->fetch(PDO::FETCH_ASSOC);
  echo $project['COUNT(*)'];
}

function countSolicitante() {
  $connect = getDBConnection();
  $sql = "SELECT COUNT(*) FROM `users` WHERE id_profile = 4";
  $statement = $connect->prepare($sql);
  $statement->execute();
  $user = $statement->fetch(PDO::FETCH_ASSOC);
  echo $user['COUNT(*)'];
}

function countSystema() {
  $connect = getDBConnection();
  $sql = "SELECT COUNT(*) FROM `system_`";
  $statement = $connect->prepare($sql);
  $statement->execute();
  $user = $statement->fetch(PDO::FETCH_ASSOC);
  echo $user['COUNT(*)'];
}

?>