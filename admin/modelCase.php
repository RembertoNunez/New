<?php
session_start();
date_default_timezone_set("America/Tegucigalpa"); 
include '../funciones/getConnection.php';
$id = $_POST['id_case'];

$connect = getDBConnection();
$sql = "SELECT case_identity.*, 
        status_case.title 		AS stageCTitle, 
        vp.title 						  AS vpTitle, 
        system_.title 			  AS systemTitle, 
        stage.title 				  AS stageTitle, 
        priority_case.title 	AS priorityTitle, 
        requester.name		    AS requester,
        analyst.name 			    AS analyst,
        programmer.name 	    AS programmer, 
        leader.name 			    AS leader,
        cycle.title 				  AS cycleTitle, 
        project.title 				AS projectTitle 
        FROM `case_identity` 
        JOIN status_case 	        ON case_identity.id_status = status_case.id_status 
        JOIN vp 					        ON case_identity.id_vp = vp.id_vp 
        JOIN system_ 		          ON case_identity.id_system = system_.id_system 
        JOIN stage 				        ON case_identity.id_stage = stage.id_stage 
        JOIN priority_case 	      ON case_identity.id_priority = priority_case.id_priority 
        JOIN users AS requester		ON case_identity.id_requester = requester.id_user
        JOIN users AS analyst 		ON case_identity.id_analyst = analyst.id_user
        JOIN users AS programmer 	ON case_identity.id_programmer = programmer.id_user
        JOIN users AS leader			ON case_identity.id_leader = leader.id_user
        JOIN cycle 				        ON case_identity.id_cycle = cycle.id_cycle 
        JOIN project 			        ON case_identity.id_project = project.id_project
        WHERE id_case = $id ";
  $statement = $connect->prepare($sql);
  $statement->execute();
  if($caso = $statement->rowCount() > 0) {
    $_SESSION['casoAcCorr'] = $caso['correlative'];
    $_SESSION['casoAcTitle'] = $caso['title'];
    $_SESSION['casoAcDescrip'] = $caso['description_'];
    $_SESSION['casoAcCreate'] = $caso['created_at'];
    $_SESSION['casoAcStatus'] = $caso['status_case'];
    $_SESSION['casoAcPercentage'] = $caso['percentage_Complete'];
    $diaIni = $caso['start_at'];
    $diaInicio = strtotime($diaIni);
    $showInicio = date('Y-m-d', $diaInicio);
    $_SESSION['casoAcStart'] = $showInicio;
    $diaFin = $caso['finish_at'];
    $diaFinal = strtotime($diaFin);
    $showFinal = date('Y-m-d', $diaFinal);
    $_SESSION['casoAcFinish'] = $showFinal;
    $_SESSION['casoAcStageC'] = $caso['stageCTitle'];
    $_SESSION['casoAcVp'] = $caso['vpTitle'];
    $_SESSION['casoAcSys'] = $caso['systemTitle'];
    $_SESSION['casoAcStage'] = $caso['stageTitle'];
    $_SESSION['casoAcPriority'] = $caso['priorityTitle'];
    $_SESSION['casoAcRequester'] = $caso['requester'];
    $_SESSION['casoAcAnalyst'] = $caso['analyst'];
    $_SESSION['casoAcProgrammer'] = $caso['programmer'];
    $_SESSION['casoAcLeader'] = $caso['leader'];
    $_SESSION['casoAcCycle'] = $caso['cycleTitle'];
    $_SESSION['casoAcProject'] = $caso['projectTitle'];
    echo json_encode($statement->fetchObject());
  }else{
    echo "Se mamo el " . $_POST["id_case"];
  }

?>