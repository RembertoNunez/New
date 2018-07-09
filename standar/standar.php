<?php
session_start();
date_default_timezone_set("America/Tegucigalpa"); 
$dia = date("h:ia");
$_SESSION['time'] = $dia;
include '../funciones/getConnection.php';

function standar_footer() {
?>
<footer class="sticky-footer">
  <div class="container">
    <div class="text-center">
      <small>© <?php echo date('Y'); ?> <strong>Banco Atlantida</strong> S.A.</small>
    </div>
  </div>
</footer>
<?php
}
?>


<?php
function logoff() {
?>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Listo para Salir?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Selecione el boton de "Logout" abajo para terminar la sesion actual.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
        <a class="btn btn-primary" href="../funciones/logoff.php">Logout</a>
      </div>
    </div>
  </div>
</div>
<?php
}

function proyectoUpdate() {
?>
<div class="modal fade" id="proyectoModal" tabindex="-6" role="dialog" aria-labelledby="projModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="projModal">Actualizar Proyecto</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="../funciones/updateProyecto.php">
          <label>Titulo</label><br/>
          <?php
          $name = $_GET['name'];
          var_dump($name); 
          ?>
          <input type="text" name="title" size="56" value=<?php echo $_SESSION['titleproj']; ?>> <br/>
          <label>Alcance</label><br/>
          <textarea name="alcance" rows="4" cols="55"><?php echo $_SESSION['observationsproj']; ?></textarea>
          <div>
            <label>Fecha de Incio</label> <br/>
            <input type="date" name="inicio" value=<?php echo $_SESSION['start_atproj']; ?>><br/>
          </div>
          <div>
            <label>Fecha Final</label> <br/>
            <input type="date" name="final" value=<?php echo $_SESSION['finalize_atproj']; ?>>
          </div>
      </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <input class="btn btn-primary" type="submit" name="submit" value="Actualizar">
            <!-- <a class="btn btn-primary">Actualizar</a> -->
          </div>
        </form>
    </div>
  </div>
</div>

<?php
}

function cases() {
  $connect = getDBConnection();
  $sql = "SELECT * FROM `case_identity`";
  $statement = $connect->prepare($sql);
  $statement->execute();
  if($statement->rowCount() > 0) {
    while($case = $statement->fetch(PDO::FETCH_ASSOC)) {
      if(empty($case['title'])) {
        $case['title'] = "N/A";
      }
      if(empty($case['start_at'])) {
        $case['start_at'] = "N/A";
      }
      if(empty($case['finish_at'])) {
        $case['finish_at'] = "N/A";
      }
      if(empty($case['status_case'])) {
        $case['status_case'] = "N/A";
      }
      if(empty($case['percentage_Complete'])) {
        $case['percentage_Complete'] = 0;
      }
      echo "<tr>";
      echo "<td> <a name='casoslink' href='#'>" .$case['title']."</a></td>";
      echo "<td>".$case['start_at']."</td>";
      echo "<td>".$case['finish_at']."</td>";
      echo "<td>".$case['']."</td>";
      echo "<td>".$case['status_case']."</td>";
      echo "<td><div class='progress'><div class='progress-bar' role='progressbar' style='width:".$case['percentage_Complete']."%'></div></div>".$case['percentage_Complete']."%</td>";
      echo "</tr>";
    }
  }
}

function proyectos() {
  $connect = getDBConnection();
  $sql = "SELECT * FROM `project`";
  $statement = $connect->prepare($sql);
  $statement->execute();
  if($statement->rowCount() > 0) {
    while($proj = $statement->fetch(PDO::FETCH_ASSOC)) {
      $_SESSION['titleproj'] = $proj['title'];
      $_SESSION['descriptionproj'] = $proj['description'];
      $_SESSION['observationsproj'] = $proj['observations'];
      $diaIni = $proj['start_at'];
      $diaInicio = strtotime($diaIni);
      $newInicio = date('m/d/Y', $diaInicio);
      $showInicio = date('Y-m-d', $diaInicio);
      $_SESSION['start_atproj'] = $showInicio;
      $diaFin = $proj['finalize_at'];
      $diaFinal = strtotime($diaFin);
      $newFinal = date('m/d/Y', $diaFinal);
      $showFinal = date('Y-m-d', $diaFinal);
      $_SESSION['finalize_atproj'] = $showFinal;
      if(empty($proj['title'])) {
        $proj['title'] = "N/A";
      }
      if(empty($proj['description'])) {
        $proj['description'] = "N/A";
      }
      if(empty($proj['observations'])) {
        $proj['observations'] = "N/A";
      }
      if(empty($proj['start_at'])) {
        $newInicio = "N/A";
      }
      if(empty($proj['finalize_at'])) {
        $newFinal = "N/A";
      }
      echo "<tr>";
      echo "<td> <a name='".$proj['title']."' data-toggle='modal' data-target='#proyectoModal' href='#'>" .$proj['title']."</a></td>";
      echo "<td>".$proj['observations']."</td>";
      echo "<td>".$newInicio."</td>";
      echo "<td>".$newFinal."</td>";
      echo "</tr>";
    }
  }
}
?>