<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Gerencia de Analisis</title>
  <!-- Bootstrap core CSS-->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Regristar Cuenta</div>
      <div class="card-body">
        <form>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="InputName">Primer Nombre</label>
                <input class="form-control" id="InputName" type="text" aria-describedby="nameHelp" placeholder="Enter Primer Nombre">
              </div>
              <div class="col-md-6">
                <label for="InputLastName">Apellido</label>
                <input class="form-control" id="InputLastName" type="text" aria-describedby="nameHelp" placeholder="Enter Apellido">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="InputEmail1">Correo Electronico</label>
            <input class="form-control" id="InputEmail1" type="email" aria-describedby="emailHelp" placeholder="Entre Correo">
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="eInputPassword1">Contraseña</label>
                <input class="form-control" id="InputPassword1" type="password" placeholder="Contraseña">
              </div>
              <div class="col-md-6">
                <label for="ConfirmPassword">Confirmar Contraseña</label>
                <input class="form-control" id="ConfirmPassword" type="password" placeholder="Confirme Contraseña">
              </div>
            </div>
          </div>
          <a class="btn btn-primary btn-block" href="../index.php">Registrar</a>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="../index.php">Pagina Login</a>
          <a class="d-block small" href="forgot-password.php">Olivdo su Constraseña?</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
