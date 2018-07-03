<?php
include '../funciones/getConnection.php';

function standar_footer() {
?>
<footer class="sticky-footer">
  <div class="container">
    <div class="text-center">
      <small>© 2018 Banco Atlantida S.A.</small>
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
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="../funciones/logoff.php">Logout</a>
      </div>
    </div>
  </div>
</div>
<?php
}
?>

<?php
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
      echo "<td> <a href='#'>" .$case['title']."</a></td>";
      echo "<td>".$case['start_at']."</td>";
      echo "<td>".$case['finish_at']."</td>";
      echo "<td>".$case['']."</td>";
      echo "<td>".$case['status_case']."</td>";
      echo "<td><div class='progress'><div class='progress-bar' role='progressbar' style='width:".$case['percentage_Complete']."%'>".$case['percentage_Complete']."</div></div></td>";
      echo "</tr>";
    }
  }
}
?>