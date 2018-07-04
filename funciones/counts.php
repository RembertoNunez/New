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

?>