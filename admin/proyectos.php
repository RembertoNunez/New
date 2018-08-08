<?php
session_start();
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
        <li class="breadcrumb-item active">Proyectos</li>
      </ol>
      <!-- Table de Proyectos -->
       <div class="card mb-3">
        <div class="card-header">
          <section style="float: left;"><i class="fa fa-table"></i> Administracion de Proyectos</section>
          <section style="float: right;">Crear Proyecto <a class='fa fa-fw fa-plus' data-toggle='modal' data-target='#proyectoCreateModal' href='#'></a></section>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Proyectos</th>
                  <th>Alcance</th>
                  <th>Fecha de Inicio</th>
                  <th>Fecha Final</th>
                  <th>Editar</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Proyectos</th>
                  <th>Alcance</th>
                  <th>Fecha de Inicio</th>
                  <th>Fecha Final</th>
                  <th>Editar</th>
                </tr>
              </tfoot>
              <tbody>
                <?php
                  proyectos();
                ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated at: <?php echo $_SESSION['projUpdate']; ?></div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <?php
    standar_footer();
    ?>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Caso ID -->
    <script type="text/javascript"> 
      function getCaseID(id) { 
        var proyectoid = id;
        proyectoid = proyectoid.substring(4);
        $.ajax({
          url: "modalProyecto.php",
          type: "POST",
          data: {id_proyecto : proyectoid},
          success: function(response){
            console.log(response);
          },
          error:function(){
            alert("ERROR");
          }
        });
      } 
    </script>
    <!-- Actualizar Modal -->
    <?php 
    proyectoCreate();
    proyectoUpdate();
    segProjecto();
    ?>
    <!-- Logout Modal-->
    <?php
    logoff();
    ?>
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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </div>
</body>

</html>
