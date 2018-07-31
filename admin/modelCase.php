<?php
include '../funciones/getConnection.php';
$id = $_POST['id_case'];

$connect = getDBConnection();
  $sql = "SELECT case_identity.*, status_case.title AS estado FROM `case_identity` 
          JOIN status_case ON case_identity.id_status = status_case.id_status 
          WHERE id_case = ? ";
  $statement = $connect->prepare($sql);
  $statement->execute([$id]);
  
  if($statement->rowCount() > 0) {
    echo json_encode($statement->fetchObject());
  }else{
    echo "Se mamo el " . $_POST["id_case"];
  }

?>