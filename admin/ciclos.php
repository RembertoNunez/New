<?php
include '../headers/admin_header.php';
include '../standar/standar.php';
adminHead();
?>
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="dashboard.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Ciclos</li>
      </ol>
  <div class="card mb-3">
        <div class="card-header">
          <section style="float: left;"><i class="fa fa-table"></i> Administracion de Ciclos</section>
          <section style="float: right;">Crear Ciclo <a class='fa fa-fw fa-plus' data-toggle='modal' data-target='#casosCreateModal' href='#'></a></section>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Ciclo</th>
                  <th>Descripcion</th>
                  <th>Editar</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Ciclo</th>
                  <th>Descripcion</th>
                  <th>Editar</th>
                </tr>
              </tfoot>
              <tbody>
                <?php
                  ciclos();              
                  ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated at: <?php echo $_SESSION['priorUpdate']; ?></div>
      </div>
  <?php
    standar_footer();
    ?>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Actualizar Modal -->
    <?php 
    ciclosUpdate(); 
    ?>
    <!-- Logout Modal-->
    <?php
    logoff();
    ?>
    <!-- Bootstrap core JavaScript-->
    <script src="../boost/jquery/jquery.min.js"></script>
    <script src="../boost/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../boost/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="../boost/datatables/jquery.dataTables.js"></script>
    <script src="../boost/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="../js/sb-admin-datatables.min.js"></script>
</div>
</body>

</html>