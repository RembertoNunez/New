<?php
include '../funciones/getConnection.php';
$id = $_POST['id_case'];

$connect = getDBConnection();
  $sql = "SELECT case_identity.*, 
          status_case.title 	AS stageCTitle, 
          vp.title 					  AS vpTitle, 
          system_.title		    AS systemTitle, 
          stage.title				  AS stageTitle, 
          priority_case.title AS priorityTitle, 
          users.name			    AS userName, 
          cycle.title 			  AS cycleTitle, 
          project.title			  AS projectTitle 
          FROM `case_identity` 
          JOIN status_case 	  ON case_identity.id_status = status_case.id_status 
          JOIN vp 					  ON case_identity.id_vp = vp.id_vp
          JOIN system_ 		    ON case_identity.id_system = system_.id_system
          JOIN stage				  ON case_identity.id_stage = stage.id_stage
          JOIN priority_case	ON case_identity.id_priority = priority_case.id_priority
          JOIN users				  ON case_identity.id_analyst = users.id_user
          JOIN cycle				  ON case_identity.id_cycle = cycle.id_cycle
          JOIN project			  ON case_identity.id_project = project.id_project
          WHERE id_case = ? ";
  $statement = $connect->prepare($sql);
  $statement->execute([$id]);
  
  if($statement->rowCount() > 0) {
    echo json_encode($statement->fetchObject());
  }else{
    echo "Se mamo el " . $_POST["id_case"];
  }

?>