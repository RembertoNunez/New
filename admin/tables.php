<?php
include '../headers/admin_header.php';
include '../standar/standar.php';
session_start();
adminHead();
$_SESSION['casoId'] = $_GET['casoId']; 
?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="dashboard.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Casos</li>
      </ol>
      <!-- DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <section style="float: left;"><i class="fa fa-table"></i> Seguimiento de Casos</section>
          <section style="float: right;">Crear Caso <a class='fa fa-fw fa-plus' data-toggle='modal' data-target='#casosCreateModal' href='#'></a></section>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Casos</th>
                  <th>Inicio</th>
                  <th>Entrega</th>
                  <th>Dias</th>
                  <th>Estado</th>
                  <th>Porcetaje Avance</th>
                  <th>Editar</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Casos</th>
                  <th>Inicio</th>
                  <th>Entrega</th>
                  <th>Dias</th>
                  <th>Estado</th>
                  <th>Porcetaje Avance</th>
                  <th>Editar</th>
                </tr>
              </tfoot>
              <tbody>
                <?php
                  cases();
                ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at <?php echo $_SESSION['time']; ?></div>
      </div>
    </div>
    <div id="rslt">
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
      var casoid = id;
      casoid = casoid.substring(4);
      $.ajax({
        url: "modelCase.php",
        type: "POST",
        data: {id_case : casoid},
        success: function(response){
          console.log(response);
        },
        error:function(){
          alert("ERROR");
        }
      });
    } 
    </script>
    <!-- Modals -->
    <?php
    createCases();
    segCasos();
    updateCases();
    logoff();
    ?>
    <!-- Bootstrap core JavaScript-->
    <script src="../boost/jquery/jquery.min.js"></script>
    <script src="../boost/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../boost/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="../boost/chart.js/Chart.min.js"></script>
    <script src="../boost/datatables/jquery.dataTables.js"></script>
    <script src="../boost/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="../js/sb-admin-datatables.min.js"></script>
    <script src="../js/sb-admin-charts.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </div>
</body>

</html>
