<?php
function standar_footer() {
?>
<footer class="sticky-footer">
  <div class="container">
    <div class="text-center">
      <small>Copyright © Banco Atlantida 2018</small>
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
        <h5 class="modal-title" id="exampleModalLabel">Listo par Salir?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Selecione "Logout" abajo para terminar la seccion actual.</div>
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