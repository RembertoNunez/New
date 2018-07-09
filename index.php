<?php
include 'funciones/getConnection.php';
session_start();
?>
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
  <link href="boost/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="boost/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <link rel="shortcut icon" type="image/png" href="headers/icon.png">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="logo" >
        <img style="margin: 10%;" src="headers/logo.svg">
      </div>
      <div class="card-header">Iniciar Sesion</div>
      <div class="card-body">
        <form method="post" action="funciones/verify.php">
          <div class="form-group">
            <label for="exampleInputEmail1">Nombre de Usuario</label>
            <input class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese Username">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Contraseña</label>
            <input class="form-control" name="password" id="exampleInputPassword1" type="password" placeholder="Contraseña">
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Recordar Contraseña</label>
            </div>
          </div>
          <button type="submit" name="login" class="btn btn-primary">Login</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="admin/register.php">Registrar Cuenta</a>
          <a class="d-block small" href="admin/forgot-password.php">Olvido su Constraseña?</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="boost/jquery/jquery.min.js"></script>
  <script src="boost/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="boost/jquery-easing/jquery.easing.min.js"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-121951606-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-121951606-1');
  </script> -->
</body>
</html>
