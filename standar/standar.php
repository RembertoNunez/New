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
<!-- Global site tag (gtag.js) - Google Analytics -->
<script src="https://www.googletagmanager.com/gtag/js?id=UA-121951606-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-121951606-1');
</script>
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
<div class="modal fade" id="proyectoUpModal" tabindex="-6" role="dialog" aria-labelledby="projUpModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="projUpModal">Actualizar Proyecto</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="../funciones/updateProyecto.php">
          <label class="text-muted">Titulo</label><br/>
          <?php
          $name = $_GET['name'];
          ?>
          <input class="form-control" type="text" name="title" value="<?php echo $_SESSION['titleproj']; ?>"> <br/>
          <label class="text-muted">Alcance</label><br/>
          <textarea class="form-control" name="alcance"><?php echo $_SESSION['observationsproj']; ?></textarea><br/>
          <div>
            <section style="float: left; width: 45%"><label class="text-muted">Fecha de Incio</label> <br/>
            <input class="form-control" type="date" name="inicio" value=<?php echo $_SESSION['start_atproj']; ?>> </section>
          </div>
          <div>
            <section style="float: right; width: 45%"><label class="text-muted">Fecha Final</label> <br/>
            <input class="form-control" type="date" name="final" value=<?php echo $_SESSION['finalize_atproj']; ?>> </section>
          </div>
          <label class="text-muted">Estado</label><br/>
          <select class="form-control" name="estado">
            <option value="">Seleccione un Estado</option>
            <option value="Activo">Activo</option>
            <option value="Inactivo">Inactivo</option>
          </select>
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

function proyectoCreate() {
?>
<div class="modal fade" id="proyectoCreateModal" tabindex="-6" role="dialog" aria-labelledby="projCreateModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="projCreateModal">Crear Proyecto</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="../funciones/createProyecto.php">
          <label class="text-muted">Titulo del Proyecto</label><br/>
          <input class="form-control" type="text" name="title"> <br/>
          <label class="text-muted">Descripcion</label><br/>
          <textarea class="form-control" name="descripcion"></textarea><br/>
          <label class="text-muted">Alcance</label><br/>
          <textarea class="form-control" name="alcance"></textarea><br/>
          <div>
            <section style="float: left; width: 45%"><label class="text-muted">Fecha de Incio</label> <br/>
            <input class="form-control" type="date" name="inicio"></section>
          </div>
          <div>
            <section style="float: right; width: 45%"><label class="text-muted">Fecha Final</label> <br/>
            <input class="form-control" type="date" name="final"></section>
          </div>
          <label class="text-muted">Estado</label><br/>
          <select class="form-control" name="estado">
            <option value="">Seleccione un Estado</option>
            <option value="Activo">Activo</option>
            <option value="Inactivo">Inactivo</option>
          </select>
      </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <input class="btn btn-primary" type="submit" name="submit" value="Crear">
            <!-- <a class="btn btn-primary">Actualizar</a> -->
          </div>
        </form>
    </div>
  </div>
</div>

<?php
}

function segProjecto() {
?>

<div class="modal fade" id="proyectoModal" tabindex="-6" role="dialog" aria-labelledby="projModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="projModal">Seguimiento del Projecto</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">x</span>
        </button>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" type="button" data-dismiss="modal">Salir</button>
        <!-- <input class="btn btn-primary" type="submit" name="submit" value="Ok"> -->
      </div>
    </div>
  </div>  
</div>

<?php
}

function priorityUpdate() {
?>
<div class="modal fade" id="priorityUpModal" tabindex="-6" role="dialog" aria-labelledby="priorUpModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="priorUpModal">Actualizar Prioridades</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="../funciones/updatePrioridades.php">
          <label class="text-muted">Titulo</label><br/>
          <input class="form-control" type="text" name="title" value="<?php echo $_SESSION['titleprior']; ?>"> <br/>
          <label class="text-muted">Descripcion</label><br/>
          <textarea class="form-control" name="description"><?php echo $_SESSION['descriptionprior']; ?></textarea><br/>
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

function priorityCreate() {
?>
<div class="modal fade" id="priorityCreateModal" tabindex="-6" role="dialog" aria-labelledby="priorCreateModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="priorCreateModal">Crear Una Prioridad</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="../funciones/createPriority.php">
          <label class="text-muted">Titulo de Prioridad</label><br/>
          <input class="form-control" type="text" name="title"> <br/>
          <label class="text-muted">Descripcion</label><br/>
          <textarea class="form-control" name="description"></textarea><br/>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <input class="btn btn-primary" type="submit" name="submit" value="Crear">
            <!-- <a class="btn btn-primary">Actualizar</a> -->
          </div>
        </form>
    </div>
  </div>
</div>

<?php
}

function userUpdate() {
?>
<div class="modal fade" id="userUpModal" tabindex="-6" role="dialog" aria-labelledby="useUpModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="useUpModal">Actualizar Usuario</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="../funciones/updatePrioridades.php">
          <label class="text-muted">Nombre</label><br/>
          <input class="form-control" type="text" name="title" value="<?php echo $_SESSION['titleprior']; ?>"> <br/>
          <label class="text-muted">Correo</label><br/>
          <input class="form-control" type="email" name="correo" value="<?php echo $_SESSION['titleprior']; ?>"> <br/>
          <label class="text-muted">Username</label><br/>
          <input class="form-control" type="text" name="username" value="<?php echo $_SESSION['titleprior']; ?>"> <br/>
          <label class="text-muted">Perfil</label><br/>
          <select class="form-control" name="perfil">
            <option value="">Seleccione un Perfil</option>
            <?php
            $connect = getDBConnection();
            $sql = "SELECT * FROM `profile`";
            $statement = $connect->prepare($sql);
            $statement->execute();
            if($statement->rowCount() > 0) {
              while ($prof = $statement->fetch(PDO::FETCH_ASSOC)) {
                echo "<option value=".$prof['id'].">".$prof['title']."</option>"; 
              }
            }
            ?>
          </select>
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

function userCreate() {
?>
<div class="modal fade" id="userCreateModal" tabindex="-6" role="dialog" aria-labelledby="useCreateModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="useCreateModal">Crear Usuario</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="../funciones/createUser.php">
          <section style="float: left; width: 45%"><label class="text-muted">Nombre</label>
          <input class="form-control" type="text" name="nombre"></section>
          <section style="float: right; width: 45%"><label class="text-muted">Correo</label>
          <input class="form-control" type="email" name="correo"></section>
          <section style="float: left; width: 45%"><label class="text-muted">Username</label>
          <input class="form-control" type="text" name="username"></section>
          <section style="float: right; width: 45%"><label class="text-muted">Perfil</label>
          <select class="form-control" name="perfil">
            <option value="">Seleccione un Perfil</option>
            <?php
            $connect = getDBConnection();
            $sql = "SELECT * FROM `profile`";
            $statement = $connect->prepare($sql);
            $statement->execute();
            if($statement->rowCount() > 0) {
              while ($prof = $statement->fetch(PDO::FETCH_ASSOC)) {
                echo "<option value=".$prof['id_profile'].">".$prof['title']."</option>"; 
              }
            }
            ?>
          </select></section>
          <section style="float: left; width: 45%"><label class="text-muted">Area</label>
          <select class="form-control" name="area">
            <option value="">Seleccione el Area</option>
            <?php
            $connect = getDBConnection();
            $sql = "SELECT * FROM `vp`";
            $statement = $connect->prepare($sql);
            $statement->execute();
            if($statement->rowCount() > 0) {
              while ($vp = $statement->fetch(PDO::FETCH_ASSOC)) {
                echo "<option value=".$vp['id_vp'].">".$vp['title']."</option>"; 
              }
            }
            ?>
          </select></section>
          <section style="float: right; width: 45%"><label class="text-muted">Estado</label>
          <select class="form-control" name="estado">
            <option value="">Seleccione Estado</option>
            <option value="1">Activo</option>
            <option value="0">Inactivo</option>
            ?>
          </select></section>
      </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <input class="btn btn-primary" type="submit" name="submit" value="Crear">
            <!-- <a class="btn btn-primary">Actualizar</a> -->
          </div>
        </form>
    </div>
  </div>
</div>

<?php
}

function ciclosUpdate() {
?>
<div class="modal fade" id="ciclosUpModal" tabindex="-6" role="dialog" aria-labelledby="cicUpModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="cicUpModal">Actualizar Ciclo</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="../funciones/updatePrioridades.php">
          <label class="text-muted">Ciclo</label><br/>
          <input class="form-control" type="text" name="title" value="<?php echo $_SESSION['titleprior']; ?>"> <br/>
          <label class="text-muted">Descripcion</label><br/>
          <textarea class="form-control" name="description"><?php echo $_SESSION['descriptionprior']; ?></textarea><br/>
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

function ciclosCreate() {
?>
<div class="modal fade" id="ciclosCreateModal" tabindex="-6" role="dialog" aria-labelledby="cicCreateModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="cicCreateModal">Crear Ciclo</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="../funciones/createCiclo.php">
          <label class="text-muted">Nombre del Ciclo</label><br/>
          <input class="form-control" type="text" name="title"> <br/>
          <label class="text-muted">Descripcion</label><br/>
          <textarea class="form-control" name="description"></textarea><br/>
          <section style="float: left; width: 45%"><label class="text-muted">Fecha Inicio</label>
          <input class="form-control" type="date" name="inicio"> </section>
          <section style="float: right; width: 45%"><label class="text-muted">Fecha Final</label>
          <input class="form-control" type="date" name="final"> </section>
          <label class="text-muted">Año de Ciclo</label><br/>
          <select class="form-control" name="year">
              <option value="">Seleccione un Año</option>
              <?php
              $connect = getDBConnection();
              $sql = "SELECT * FROM `year_cycle`";
              $statement = $connect->prepare($sql);
              $statement->execute();
              if($statement->rowCount() > 0) {
                while ($yr = $statement->fetch(PDO::FETCH_ASSOC)) {
                  echo "<option value=".$yr['id_yc'].">".$yr['title']."</option>"; 
                }
              }
              ?>
            </select>
      </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <input class="btn btn-primary" type="submit" name="submit" value="Crear">
            <!-- <a class="btn btn-primary">Actualizar</a> -->
          </div>
        </form>
    </div>
  </div>
</div>

<?php
}

function perfilesUpdate() {
?>
<div class="modal fade" id="perfilesUpModal" tabindex="-6" role="dialog" aria-labelledby="perUpModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="perUpModal">Actualizar Perfil</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="../funciones/updatePrioridades.php">
          <label class="text-muted">Perfil</label><br/>
          <input class="form-control" type="text" name="title" value="<?php echo $_SESSION['titleprior']; ?>"> <br/>
          <label class="text-muted">Descripcion</label><br/>
          <textarea class="form-control" name="description"><?php echo $_SESSION['descriptionprior']; ?></textarea><br/>
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

function perfilesCreate() {
?>
<div class="modal fade" id="perfilesCreateModal" tabindex="-6" role="dialog" aria-labelledby="perCreateModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="perCreateModal">Crear Perfil</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="../funciones/createPerfil.php">
          <label class="text-muted">Nombre del Perfil</label><br/>
          <input class="form-control" type="text" name="title"> <br/>
          <label class="text-muted">Descripcion</label><br/>
          <textarea class="form-control" name="description"></textarea><br/>
      </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <input class="btn btn-primary" type="submit" name="submit" value="Crear">
            <!-- <a class="btn btn-primary">Actualizar</a> -->
          </div>
        </form>
    </div>
  </div>
</div>

<?php
}

function etapasUpdate() {
?>
<div class="modal fade" id="etapasUpModal" tabindex="-6" role="dialog" aria-labelledby="etaUpModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="etaUpModal">Actualizar Etapa</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="../funciones/updatePrioridades.php">
          <label class="text-muted">Etapa</label><br/>
          <input class="form-control" type="text" name="title" value="<?php echo $_SESSION['titleprior']; ?>"> <br/>
          <label class="text-muted">Descripcion</label><br/>
          <textarea class="form-control" name="description"><?php echo $_SESSION['descriptionprior']; ?></textarea><br/>
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

function etapasCreate() {
?>
<div class="modal fade" id="etapasCreateModal" tabindex="-6" role="dialog" aria-labelledby="etaCreateModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="etaCreateModal">Crear Etapa</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="../funciones/createEtapas.php">
          <label class="text-muted">Etapa</label><br/>
          <input class="form-control" type="text" name="title"> <br/>
          <label class="text-muted">Descripcion</label><br/>
          <textarea class="form-control" name="description"></textarea><br/>
      </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <input class="btn btn-primary" type="submit" name="submit" value="Crear">
            <!-- <a class="btn btn-primary">Actualizar</a> -->
          </div>
        </form>
    </div>
  </div>
</div>

<?php
}

function areaUpdate() {
?>
<div class="modal fade" id="areaUpModal" tabindex="-6" role="dialog" aria-labelledby="etaUpModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="etaUpModal">Actualizar Etapa</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="../funciones/updatePrioridades.php">
          <label class="text-muted">Etapa</label><br/>
          <input class="form-control" type="text" name="title" value="<?php echo $_SESSION['titleprior']; ?>"> <br/>
          <label class="text-muted">Descripcion</label><br/>
          <textarea class="form-control" name="description"><?php echo $_SESSION['descriptionprior']; ?></textarea><br/>
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

function areaCreate() {
?>
<div class="modal fade" id="areaCreateModal" tabindex="-6" role="dialog" aria-labelledby="arCreateModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="arCreateModal">Crear Area</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="../funciones/createEtapas.php">
          <label class="text-muted">Area</label><br/>
          <input class="form-control" type="text" name="title"> <br/>
          <label class="text-muted">Descripcion</label><br/>
          <textarea class="form-control" name="description"></textarea><br/>
      </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <input class="btn btn-primary" type="submit" name="submit" value="Crear">
            <!-- <a class="btn btn-primary">Actualizar</a> -->
          </div>
        </form>
    </div>
  </div>
</div>

<?php
}

function sysUpdate() {
?>
<div class="modal fade" id="sistemaUpModal" tabindex="-6" role="dialog" aria-labelledby="sysUpModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="sysUpModal">Actualizar Systema</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="../funciones/updatePrioridades.php">
          <label class="text-muted">Systema</label><br/>
          <input class="form-control" type="text" name="title" value="<?php echo $_SESSION['titleprior']; ?>"> <br/>
          <label class="text-muted">Descripcion</label><br/>
          <textarea class="form-control" name="description"><?php echo $_SESSION['descriptionprior']; ?></textarea><br/>
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

function sysCreate() {
?>
<div class="modal fade" id="sistemaCreateModal" tabindex="-6" role="dialog" aria-labelledby="sysCreateModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="sysCreateModal">Crear Systema</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="../funciones/createSystema.php">
          <label class="text-muted">Systema</label><br/>
          <input class="form-control" type="text" name="title"> <br/>
          <label class="text-muted">Descripcion</label><br/>
          <textarea class="form-control" name="description"></textarea><br/>
      </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <input class="btn btn-primary" type="submit" name="submit" value="Crear">
            <!-- <a class="btn btn-primary">Actualizar</a> -->
          </div>
        </form>
    </div>
  </div>
</div>

<?php
}

function updateCases() {
?>
<div class="modal fade" id="casosUpdateModal" tabindex="-6" role="dialog" aria-labelledby="casoUpdateModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="casoUpdateModal">Actualizar Caso</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">x</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="../funciones/crearCasos.php">
          <label class="text-muted">Nombre del Caso</label>
          <input class="form-control" type="text" name="title" value="<?php echo $_SESSION['casoAcTitle']; ?>">
          
            <section style="float: left; width: 45%"><label class="text-muted">Codigo JIRA</label>
            <input class="form-control" type="text" name="codigo" value="<?php echo $_SESSION['casoAcCorr']; ?>"> </section>
            <section style="float: right; width: 45%"><label class="text-muted">Analista</label>
            <select class="form-control" name="analista">
              <?php
              $connect = getDBConnection();
              $sql = "SELECT * FROM `users` WHERE id_profile = 3";
              $statement = $connect->prepare($sql);
              $statement->execute();
              if($statement->rowCount() > 0) {
                echo "<option value=''>".$_SESSION['casoAcAnalyst']."</option>";
                while ($ana = $statement->fetch(PDO::FETCH_ASSOC)) {
                  echo "<option value=".$ana['id_user'].">".$ana['name']."</option>"; 
                }
              }
              ?>
            </select> </section>
          
            <section style="float: left; width: 45%"><label class="text-muted">Fecha Inicio</label>
            <input class="form-control" type="date" name="inico" value="<?php echo $_SESSION['casoAcStart']; ?>"> </section>
            <section style="float: right; width: 45%"><label class="text-muted">Fecha Final</label>
            <input class="form-control" type="date" name="final" value="<?php echo $_SESSION['casoAcFinish']; ?>"> </section>
          
            <section style="float: left; width: 45%"><label class="text-muted">Estado</label>
            <select class="form-control" name="estado">
              <?php
              $connect = getDBConnection();
              $sql = "SELECT * FROM `status_case`";
              $statement = $connect->prepare($sql);
              $statement->execute();
              if($statement->rowCount() > 0) {
                echo "<option value=''>".$_SESSION['casoAcStageC']."</option>";
                while ($status = $statement->fetch(PDO::FETCH_ASSOC)) {
                  echo "<option value=".$status['id_status'].">".$status['title']."</option>"; 
                }
              }
              ?>
            </select> </section>
            <section style="float: right; width: 45%"><label class="text-muted">Prioridad</label><br/>
            <select class="form-control" name="prioridad">
              <?php
              $connect = getDBConnection();
              $sql = "SELECT * FROM `priority_case`";
              $statement = $connect->prepare($sql);
              $statement->execute();
              if($statement->rowCount() > 0) {
                echo "<option value=''>".$_SESSION['casoAcPriority']."</option>";
                while ($prior = $statement->fetch(PDO::FETCH_ASSOC)) {
                  echo "<option value=".$prior['id_priority'].">".$prior['title']."</option>"; 
                }
              }
              ?>
            </select> </section>
          
          <section style="float: left; width: 50%"> <label class="text-muted">Descripcion</label> </section>
            <textarea class="form-control" name="description" placeholder="Escirba un fragmento de la descripcion del requerimiento"><?php echo $_SESSION['casoAcDescrip']; ?></textarea>

          <section style="float: left; width: 45%"> <label class="text-muted">Ciclo</label>
          <select class="form-control" name="ciclo">
            <?php
            $connect = getDBConnection();
            $sql = "SELECT * FROM `cycle`";
            $statement = $connect->prepare($sql);
            $statement->execute();
            if($statement->rowCount() > 0) {
              echo "<option value=''>".$_SESSION['casoAcCycle']."</option>";
              while ($cycle = $statement->fetch(PDO::FETCH_ASSOC)) {
                echo "<option value=".$cycle['id_cycle'].">".$cycle['title']."</option>"; 
              }
            }
            ?>
          </select> </section>

          <section style="float: right; width: 45%"> <label class="text-muted">Proyecto</label>
          <select class="form-control" name="proyecto">
            <?php
            $connect = getDBConnection();
            $sql = "SELECT * FROM `project`";
            $statement = $connect->prepare($sql);
            $statement->execute();
            if($statement->rowCount() > 0) {
              echo "<option value=''>".$_SESSION['casoAcProject']."</option>";
              while ($proj = $statement->fetch(PDO::FETCH_ASSOC)) {
                echo "<option value=".$proj['id_project'].">".$proj['title']."</option>"; 
              }
            }
            ?>
          </select> </section>

          <section style="float: left; width: 45%"><label class="text-muted">Systema</label>
          <select class="form-control" name="systema">
            <?php
            $connect = getDBConnection();
            $sql = "SELECT * FROM `system_`";
            $statement = $connect->prepare($sql);
            $statement->execute();
            if($statement->rowCount() > 0) {
              echo "<option value=''>".$_SESSION['casoAcSys']."</option>";
              while ($sys = $statement->fetch(PDO::FETCH_ASSOC)) {
                echo "<option value=".$sys['id_system'].">".$sys['title']."</option>"; 
              }
            }
            ?>
          </select> </section>
          <section style="float: right; width: 45%"><label class="text-muted">Etapa</label>
          <select class="form-control" name="etapa">
            <?php
            $connect = getDBConnection();
            $sql = "SELECT * FROM `stage`";
            $statement = $connect->prepare($sql);
            $statement->execute();
            if($statement->rowCount() > 0) {
              echo "<option value=''>".$_SESSION['casoAcStatus']."</option>";
              while ($stage = $statement->fetch(PDO::FETCH_ASSOC)) {
                echo "<option value=".$stage['id_stage'].">".$stage['title']."</option>"; 
              }
            }
            ?>
          </select> </section>

          <section style="float: left; width: 45%"><label class="text-muted">Seleccione Lider</label><br/>
          <select class="form-control" name="lider">
            <?php
            $connect = getDBConnection();
            $sql = "SELECT * FROM `users` WHERE id_profile = 8";
            $statement = $connect->prepare($sql);
            $statement->execute();
            if($statement->rowCount() > 0) {
              echo "<option value=''>".$_SESSION['casoAcLeader']."</option>";
              while ($lider = $statement->fetch(PDO::FETCH_ASSOC)) {
                echo "<option value=".$lider['id_user'].">".$lider['name']."</option>"; 
              }
            }
            ?>
          </select> </section>

          <section style="float: right; width: 45%"><label class="text-muted">Contacto Infatlan</label><br/>
          <select class="form-control" name="contacto">
            <?php
            $connect = getDBConnection();
            $sql = "SELECT * FROM `users` WHERE id_profile = 5";
            $statement = $connect->prepare($sql);
            $statement->execute();
            if($statement->rowCount() > 0) {
              echo "<option value=''>".$_SESSION['casoAcProgrammer']."</option>";
              while ($us = $statement->fetch(PDO::FETCH_ASSOC)) {
                echo "<option value=".$us['id_user'].">".$us['name']."</option>"; 
              }
            }
            ?>
          </select> </section>

          <section style="float: left; width: 45%"><label class="text-muted">Área Solicitante</label><br/>
          <select class="form-control" name="area">
            <?php
            $connect = getDBConnection();
            $sql = "SELECT * FROM `vp`";
            $statement = $connect->prepare($sql);
            $statement->execute();
            if($statement->rowCount() > 0) {
              echo "<option value=''>".$_SESSION['casoAcVp']."</option>";
              while ($vp = $statement->fetch(PDO::FETCH_ASSOC)) {
                echo "<option value=".$vp['id_vp'].">".$vp['title']."</option>"; 
              }
            }
            ?>
          </select> </section>

          <section style="float: right; width: 45%;"><label class="text-muted">Solicitante</label><br/>
          <select class="form-control" name="solicitante">
            <?php
            $connect = getDBConnection();
            $sql = "SELECT * FROM `users` WHERE id_profile = 4";
            $statement = $connect->prepare($sql);
            $statement->execute();
            if($statement->rowCount() > 0) {
              echo "<option value=''>".$_SESSION['casoAcRequester']."</option>";
              while ($stage = $statement->fetch(PDO::FETCH_ASSOC)) {
                echo "<option value=".$stage['id_stage'].">".$stage['title']."</option>"; 
              }
            }
            ?>
          </select> </section>
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

function createCases() {
?>

<div class="modal fade" id="casosCreateModal" tabindex="-50" role="dialog" aria-labelledby="casoCreatModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="casoCreatModal">Crear Caso</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">x</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="../funciones/createCasos.php">
          <label class="text-muted">Nombre del Caso</label>
          <input class="form-control" type="text" name="title">
          
            <section style="float: left; width: 45%"><label class="text-muted">Codigo JIRA</label>
            <input class="form-control" type="text" name="codigo"> </section>
            <section style="float: right; width: 45%"><label class="text-muted">Analista</label>
            <select class="form-control" name="analista">
              <option value="">Seleccione un Analista</option>
              <?php
              $connect = getDBConnection();
              $sql = "SELECT * FROM `users` WHERE id_profile = 3";
              $statement = $connect->prepare($sql);
              $statement->execute();
              if($statement->rowCount() > 0) {
                while ($ana = $statement->fetch(PDO::FETCH_ASSOC)) {
                  echo "<option value=".$ana['id_user'].">".$ana['name']."</option>"; 
                }
              }
              ?>
            </select> </section>
          
            <section style="float: left; width: 45%"><label class="text-muted">Fecha Inicio</label>
            <input class="form-control" type="date" name="inicio"> </section>
            <section style="float: right; width: 45%"><label class="text-muted">Fecha Final</label>
            <input class="form-control" type="date" name="final"> </section>
          
            <section style="float: left; width: 45%"><label class="text-muted">Estado</label>
            <select class="form-control" name="estado">
              <option value="">Seleccione un Estado</option>
              <?php
              $connect = getDBConnection();
              $sql = "SELECT * FROM `status_case`";
              $statement = $connect->prepare($sql);
              $statement->execute();
              if($statement->rowCount() > 0) {
                while ($status = $statement->fetch(PDO::FETCH_ASSOC)) {
                  echo "<option value=".$status['id_status'].">".$status['title']."</option>"; 
                }
              }
              ?>
            </select> </section>
            <section style="float: right; width: 45%"><label class="text-muted">Prioridad</label><br/>
            <select class="form-control" name="prioridad">
              <option value="">Seleccione un Prioridad</option>
              <?php
              $connect = getDBConnection();
              $sql = "SELECT * FROM `priority_case`";
              $statement = $connect->prepare($sql);
              $statement->execute();
              if($statement->rowCount() > 0) {
                while ($prior = $statement->fetch(PDO::FETCH_ASSOC)) {
                  echo "<option value=".$prior['id_priority'].">".$prior['title']."</option>"; 
                }
              }
              ?>
            </select> </section>
          
          <section style="float: left; width: 50%"> <label class="text-muted">Descripcion</label> </section>
            <textarea class="form-control" name="description" placeholder="Escirba un fragmento de la descripcion del requerimiento"></textarea>

          <section style="float: left; width: 45%"> <label class="text-muted">Ciclo</label>
          <select class="form-control" name="ciclo">
            <option value="">Seleccione un Ciclo</option>
            <?php
            $connect = getDBConnection();
            $sql = "SELECT * FROM `cycle`";
            $statement = $connect->prepare($sql);
            $statement->execute();
            if($statement->rowCount() > 0) {
              while ($cycle = $statement->fetch(PDO::FETCH_ASSOC)) {
                echo "<option value=".$cycle['id_cycle'].">".$cycle['title']."</option>"; 
              }
            }
            ?>
          </select> </section>

          <section style="float: right; width: 45%"> <label class="text-muted">Proyecto</label>
          <select class="form-control" name="proyecto">
            <option value="">Seleccione un Proyecto</option>
            <?php
            $connect = getDBConnection();
            $sql = "SELECT * FROM `project`";
            $statement = $connect->prepare($sql);
            $statement->execute();
            if($statement->rowCount() > 0) {
              while ($proj = $statement->fetch(PDO::FETCH_ASSOC)) {
                echo "<option value=".$proj['id_project'].">".$proj['title']."</option>"; 
              }
            }
            ?>
          </select> </section>

          <section style="float: left; width: 45%"><label class="text-muted">Systema</label>
          <select class="form-control" name="systema">
            <option value="">Seleccione un Systema</option>
            <?php
            $connect = getDBConnection();
            $sql = "SELECT * FROM `system_`";
            $statement = $connect->prepare($sql);
            $statement->execute();
            if($statement->rowCount() > 0) {
              while ($sys = $statement->fetch(PDO::FETCH_ASSOC)) {
                echo "<option value=".$sys['id_system'].">".$sys['title']."</option>"; 
              }
            }
            ?>
          </select> </section>
          <section style="float: right; width: 45%"><label class="text-muted">Etapa</label>
          <select class="form-control" name="etapa">
            <option value="">Seleccione una Etapa</option>
            <?php
            $connect = getDBConnection();
            $sql = "SELECT * FROM `stage`";
            $statement = $connect->prepare($sql);
            $statement->execute();
            if($statement->rowCount() > 0) {
              while ($stage = $statement->fetch(PDO::FETCH_ASSOC)) {
                echo "<option value=".$stage['id_stage'].">".$stage['title']."</option>"; 
              }
            }
            ?>
          </select> </section>

          <section style="float: left; width: 45%"><label class="text-muted">Seleccione Lider</label><br/>
          <select class="form-control" name="lider">
            <option value="">Seleccione un Lider</option>
            <?php
            $connect = getDBConnection();
            $sql = "SELECT * FROM `users` WHERE id_profile = 8";
            $statement = $connect->prepare($sql);
            $statement->execute();
            if($statement->rowCount() > 0) {
              while ($lider = $statement->fetch(PDO::FETCH_ASSOC)) {
                echo "<option value=".$lider['id_user'].">".$lider['name']."</option>"; 
              }
            }
            ?>
          </select> </section>

          <section style="float: right; width: 45%"><label class="text-muted">Contacto Infatlan</label><br/>
          <select class="form-control" name="contacto">
            <option value="">Seleccione un Contacto</option>
            <?php
            $connect = getDBConnection();
            $sql = "SELECT * FROM `users` WHERE id_profile = 5";
            $statement = $connect->prepare($sql);
            $statement->execute();
            if($statement->rowCount() > 0) {
              while ($us = $statement->fetch(PDO::FETCH_ASSOC)) {
                echo "<option value=".$us['id_user'].">".$us['name']."</option>"; 
              }
            }
            ?>
          </select> </section>

          <section style="float: left; width: 45%"><label class="text-muted">Área Solicitante</label><br/>
          <select class="form-control" name="area">
            <option value="">Seleccione un Area</option>
            <?php
            $connect = getDBConnection();
            $sql = "SELECT * FROM `vp`";
            $statement = $connect->prepare($sql);
            $statement->execute();
            if($statement->rowCount() > 0) {
              while ($vp = $statement->fetch(PDO::FETCH_ASSOC)) {
                echo "<option value=".$vp['id_vp'].">".$vp['title']."</option>"; 
              }
            }
            ?>
          </select> </section>

          <section style="float: right; width: 45%"><label class="text-muted">Solicitante</label><br/>
          <select class="form-control" name="solicitante">
            <option value="">Seleccione un Solicitante</option>
            <?php
            $connect = getDBConnection();
            $sql = "SELECT * FROM `users` WHERE id_profile = 4";
            $statement = $connect->prepare($sql);
            $statement->execute();
            if($statement->rowCount() > 0) {
              while ($us = $statement->fetch(PDO::FETCH_ASSOC)) {
                echo "<option value=".$us['id_user'].">".$us['name']."</option>"; 
              }
            }
            ?>
          </select> </section>
      </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <input class="btn btn-primary" type="submit" name="submit" value="Crear">
            <!-- <a class="btn btn-primary">Actualizar</a> -->
          </div>
        </form>
    </div>
  </div>
</div>

<?php
}

function segCasos() {
?>

<div class="modal fade" id="casosModal" tabindex="-6" role="dialog" aria-labelledby="casoModal" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="casoModal">Seguimiento del Caso</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">x</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Aqui empieza -->
        <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-area-chart"></i> Progresos</div>
        <div class="card-body">
          <canvas id="myAreaChart" width="100%" height="30"></canvas>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
      <div class="row">
        <div class="col-lg-8">
          <!-- Example Bar Chart Card-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-bar-chart"></i> Economia</div>
            <div class="card-body">
              <div class="row">
                <div class="col-sm-8 my-auto">
                  <canvas id="myBarChart" width="100" height="50"></canvas>
                </div>
                <div class="col-sm-4 text-center my-auto">
                  <div class="h4 mb-0 text-primary">$34,693</div>
                  <div class="small text-muted">Ganancias</div>
                  <hr>
                  <div class="h4 mb-0 text-warning">$18,474</div>
                  <div class="small text-muted">Gastos</div>
                  <hr>
                  <div class="h4 mb-0 text-success">$16,219</div>
                  <div class="small text-muted">Margen</div>
                </div>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>
          <!-- Card Columns Example Social Feed-->
          <div class="mb-0 mt-4">
            <i class="fa fa-newspaper-o"></i> Comentarios</div>
          <hr class="mt-2">
          <div class="card-columns">
            <!-- Example Social Card-->
            <div class="card mb-3">
              <a href="#">
                <img class="card-img-top img-fluid w-100" src="https://unsplash.it/700/450?image=610" alt="">
              </a>
              <div class="card-body">
                <h6 class="card-title mb-1"><a href="#">David Miller</a></h6>
                <p class="card-text small">These waves are looking pretty good today!
                  <a href="#">#surfsup</a>
                </p>
              </div>
              <hr class="my-0">
              <div class="card-body py-2 small">
                <a class="mr-3 d-inline-block" href="#">
                  <i class="fa fa-fw fa-thumbs-up"></i>Like</a>
                <a class="mr-3 d-inline-block" href="#">
                  <i class="fa fa-fw fa-comment"></i>Comment</a>
                <a class="d-inline-block" href="#">
                  <i class="fa fa-fw fa-share"></i>Share</a>
              </div>
              <hr class="my-0">
              <div class="card-body small bg-faded">
                <div class="media">
                  <img class="d-flex mr-3" src="http://placehold.it/45x45" alt="">
                  <div class="media-body">
                    <h6 class="mt-0 mb-1"><a href="#">John Smith</a></h6>Very nice! I wish I was there! That looks amazing!
                    <ul class="list-inline mb-0">
                      <li class="list-inline-item">
                        <a href="#">Like</a>
                      </li>
                      <li class="list-inline-item">·</li>
                      <li class="list-inline-item">
                        <a href="#">Reply</a>
                      </li>
                    </ul>
                    <div class="media mt-3">
                      <a class="d-flex pr-3" href="#">
                        <img src="http://placehold.it/45x45" alt="">
                      </a>
                      <div class="media-body">
                        <h6 class="mt-0 mb-1"><a href="#">David Miller</a></h6>Next time for sure!
                        <ul class="list-inline mb-0">
                          <li class="list-inline-item">
                            <a href="#">Like</a>
                          </li>
                          <li class="list-inline-item">·</li>
                          <li class="list-inline-item">
                            <a href="#">Reply</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer small text-muted">Posted 32 mins ago</div>
            </div>
            <!-- Example Social Card-->
            <div class="card mb-3">
              <a href="#">
                <img class="card-img-top img-fluid w-100" src="https://unsplash.it/700/450?image=180" alt="">
              </a>
              <div class="card-body">
                <h6 class="card-title mb-1"><a href="#">John Smith</a></h6>
                <p class="card-text small">Another day at the office...
                  <a href="#">#workinghardorhardlyworking</a>
                </p>
              </div>
              <hr class="my-0">
              <div class="card-body py-2 small">
                <a class="mr-3 d-inline-block" href="#">
                  <i class="fa fa-fw fa-thumbs-up"></i>Like</a>
                <a class="mr-3 d-inline-block" href="#">
                  <i class="fa fa-fw fa-comment"></i>Comment</a>
                <a class="d-inline-block" href="#">
                  <i class="fa fa-fw fa-share"></i>Share</a>
              </div>
              <hr class="my-0">
              <div class="card-body small bg-faded">
                <div class="media">
                  <img class="d-flex mr-3" src="http://placehold.it/45x45" alt="">
                  <div class="media-body">
                    <h6 class="mt-0 mb-1"><a href="#">Jessy Lucas</a></h6>Where did you get that camera?! I want one!
                    <ul class="list-inline mb-0">
                      <li class="list-inline-item">
                        <a href="#">Like</a>
                      </li>
                      <li class="list-inline-item">·</li>
                      <li class="list-inline-item">
                        <a href="#">Reply</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="card-footer small text-muted">Posted 46 mins ago</div>
            </div>
            <!-- Example Social Card-->
            <div class="card mb-3">
              <a href="#">
                <img class="card-img-top img-fluid w-100" src="https://unsplash.it/700/450?image=281" alt="">
              </a>
              <div class="card-body">
                <h6 class="card-title mb-1"><a href="#">Jeffery Wellings</a></h6>
                <p class="card-text small">Nice shot from the skate park!
                  <a href="#">#kickflip</a>
                  <a href="#">#holdmybeer</a>
                  <a href="#">#igotthis</a>
                </p>
              </div>
              <hr class="my-0">
              <div class="card-body py-2 small">
                <a class="mr-3 d-inline-block" href="#">
                  <i class="fa fa-fw fa-thumbs-up"></i>Like</a>
                <a class="mr-3 d-inline-block" href="#">
                  <i class="fa fa-fw fa-comment"></i>Comment</a>
                <a class="d-inline-block" href="#">
                  <i class="fa fa-fw fa-share"></i>Share</a>
              </div>
              <div class="card-footer small text-muted">Posted 1 hr ago</div>
            </div>
            <!-- Example Social Card-->
            <div class="card mb-3">
              <a href="#">
                <img class="card-img-top img-fluid w-100" src="https://unsplash.it/700/450?image=185" alt="">
              </a>
              <div class="card-body">
                <h6 class="card-title mb-1"><a href="#">David Miller</a></h6>
                <p class="card-text small">It's hot, and I might be lost...
                  <a href="#">#desert</a>
                  <a href="#">#water</a>
                  <a href="#">#anyonehavesomewater</a>
                  <a href="#">#noreally</a>
                  <a href="#">#thirsty</a>
                  <a href="#">#dehydration</a>
                </p>
              </div>
              <hr class="my-0">
              <div class="card-body py-2 small">
                <a class="mr-3 d-inline-block" href="#">
                  <i class="fa fa-fw fa-thumbs-up"></i>Like</a>
                <a class="mr-3 d-inline-block" href="#">
                  <i class="fa fa-fw fa-comment"></i>Comment</a>
                <a class="d-inline-block" href="#">
                  <i class="fa fa-fw fa-share"></i>Share</a>
              </div>
              <hr class="my-0">
              <div class="card-body small bg-faded">
                <div class="media">
                  <img class="d-flex mr-3" src="http://placehold.it/45x45" alt="">
                  <div class="media-body">
                    <h6 class="mt-0 mb-1"><a href="#">John Smith</a></h6>The oasis is a mile that way, or is that just a mirage?
                    <ul class="list-inline mb-0">
                      <li class="list-inline-item">
                        <a href="#">Like</a>
                      </li>
                      <li class="list-inline-item">·</li>
                      <li class="list-inline-item">
                        <a href="#">Reply</a>
                      </li>
                    </ul>
                    <div class="media mt-3">
                      <a class="d-flex pr-3" href="#">
                        <img src="http://placehold.it/45x45" alt="">
                      </a>
                      <div class="media-body">
                        <h6 class="mt-0 mb-1"><a href="#">David Miller</a></h6>
                        <img class="img-fluid w-100 mb-1" src="https://unsplash.it/700/450?image=789" alt="">I'm saved, I found a cactus. How do I open this thing?
                        <ul class="list-inline mb-0">
                          <li class="list-inline-item">
                            <a href="#">Like</a>
                          </li>
                          <li class="list-inline-item">·</li>
                          <li class="list-inline-item">
                            <a href="#">Reply</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer small text-muted">Posted yesterday</div>
            </div>
          </div>
          <!-- /Card Columns-->
        </div>
        <div class="col-lg-4">
          <!-- Example Pie Chart Card-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-pie-chart"></i> Avance</div>
            <div class="card-body">
              <canvas id="myPieChart" width="100%" height="100"></canvas>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>
          <!-- Example Notifications Card-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-bell-o"></i> Feed Example</div>
            <div class="list-group list-group-flush small">
              <a class="list-group-item list-group-item-action" href="#">
                <div class="media">
                  <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                  <div class="media-body">
                    <strong>David Miller</strong>posted a new article to
                    <strong>David Miller Website</strong>.
                    <div class="text-muted smaller">Today at 5:43 PM - 5m ago</div>
                  </div>
                </div>
              </a>
              <a class="list-group-item list-group-item-action" href="#">
                <div class="media">
                  <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                  <div class="media-body">
                    <strong>Samantha King</strong>sent you a new message!
                    <div class="text-muted smaller">Today at 4:37 PM - 1hr ago</div>
                  </div>
                </div>
              </a>
              <a class="list-group-item list-group-item-action" href="#">
                <div class="media">
                  <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                  <div class="media-body">
                    <strong>Jeffery Wellings</strong>added a new photo to the album
                    <strong>Beach</strong>.
                    <div class="text-muted smaller">Today at 4:31 PM - 1hr ago</div>
                  </div>
                </div>
              </a>
              <a class="list-group-item list-group-item-action" href="#">
                <div class="media">
                  <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                  <div class="media-body">
                    <i class="fa fa-code-fork"></i>
                    <strong>Monica Dennis</strong>forked the
                    <strong>startbootstrap-sb-admin</strong>repository on
                    <strong>GitHub</strong>.
                    <div class="text-muted smaller">Today at 3:54 PM - 2hrs ago</div>
                  </div>
                </div>
              </a>
              <a class="list-group-item list-group-item-action" href="#">View all activity...</a>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>
        </div>
      </div>
        <!-- Aqui termina -->
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" type="button" data-dismiss="modal">Salir</button>
        <!-- <input class="btn btn-primary" type="submit" name="submit" value="Ok"> -->
      </div>
    </div>
  </div>  
</div>

<?php
}

function cases() {
  $connect = getDBConnection();
  $sql = "SELECT case_identity.*, status_case.title AS estado FROM `case_identity` JOIN status_case ON case_identity.id_status = status_case.id_status";
  $statement = $connect->prepare($sql);
  $statement->execute();
  if($statement->rowCount() > 0) {
    while($case = $statement->fetch(PDO::FETCH_ASSOC)) {
      $diaIni = $case['start_at'];
      $diaInicio = strtotime($diaIni);
      $newInicio = date('m/d/Y', $diaInicio);
      $showInicio = date('Y-m-d', $diaInicio);
      $_SESSION['start_atcase'] = $showInicio;
      $diaFin = $case['finish_at'];
      $diaFinal = strtotime($diaFin);
      $newFinal = date('m/d/Y', $diaFinal);
      $showFinal = date('Y-m-d', $diaFinal);
      $_SESSION['finalize_atcase'] = $showFinal;

      $sec = $diaFinal-$diaInicio;
      $result = $sec /86400;
      if($result <= 0) {
        $result = "<p class='text-danger'>Error</p>";
      }
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
      echo "<td> <a id='"."case".$case['id_case']."' class='myClass' onClick='getCaseID(this.id)' data-toggle='modal' data-target='#casosModal' href='#'>" .$case['title']."</a></td>";
      echo "<td>".$newInicio."</td>";
      echo "<td>".$newFinal."</td>";
      echo "<td>".$result."</td>";
      echo "<td>".$case['estado']."</td>";
      echo "<td><div class='progress'><div class='progress-bar' role='progressbar' style='width:".$case['percentage_Complete']."%'></div></div>".$case['percentage_Complete']."%</td>";
      echo "<td><a id='"."case".$case['id_case']."' class='fa fa-fw fa-pencil' onClick='getCaseID(this.id)' data-toggle='modal' data-target='#casosUpdateModal' href='#'></a></td>";
      echo "</tr>";
    }
  }
  else {
    echo "No hay resultados";
  }
}

function proyectos() {
  $connect = getDBConnection();
  $sql = "SELECT * FROM `project`";
  $statement = $connect->prepare($sql);
  $statement->execute();
  if($statement->rowCount() > 0) {
    while($proj = $statement->fetch(PDO::FETCH_ASSOC)) {
      $_SESSION['proj'] = $proj;
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
      echo "<td> <a name='".$proj['id_project']."' data-toggle='modal' data-target='#proyectoModal' href='#'>" .$proj['title']."</a></td>";
      echo "<td>".$proj['observations']."</td>";
      echo "<td>".$newInicio."</td>";
      echo "<td>".$newFinal."</td>";
      echo "<td><a class='fa fa-fw fa-pencil' data-toggle='modal' data-target='#proyectoUpModal' href='#'></a></td>";
      echo "</tr>";
    }
  }
  else {
    echo "No hay resultados";
  }
}

function prioridades() {
  $connect = getDBConnection();
  $sql = "SELECT * FROM `priority_case`";
  $statement = $connect->prepare($sql);
  $statement->execute();
  if($statement->rowCount() > 0) {
    while($priority = $statement->fetch(PDO::FETCH_ASSOC)) {
      $_SESSION['titleprior'] = $priority['title'];
      $_SESSION['descriptionprior'] = $priority['description_'];
      if(empty($priority['title'])) {
        $priority['title'] = "N/A";
      }
      if(empty($priority['description_'])) {
        $priority['description_'] = "N/A";
      }
      echo "<tr>";
      echo "<td>".$priority['title']."</td>";
      echo "<td>".$priority['description_']."</td>";
      echo "<td><a class='fa fa-fw fa-pencil' data-toggle='modal' data-target='#priorityUpModal' href='#'></a></td>";
      echo "</tr>";
    }
  }
  else {
    echo "No hay resultados";
  }
}

function usuarios() {
  $connect = getDBConnection();
  $sql = "SELECT users.* ,profile.title AS profileTitle FROM users JOIN profile ON users.id_profile = profile.id_profile";
  $statement = $connect->prepare($sql);
  $statement->execute();
  if($statement->rowCount() > 0) {
    while($user = $statement->fetch(PDO::FETCH_ASSOC)) {
      if(empty($user['name'])) {
        $user['name'] = "N/A";
      }
      if(empty($user['email'])) {
        $user['email'] = "N/A";
      }
      if(empty($user['username'])) {
        $user['username'] = "N/A";
      }
      if(empty($user['profileTitle'])) {
        $user['profileTitle'] = "N/A";
      }

      echo "<tr>";
      echo "<td>".$user['name']."</td>";
      echo "<td>".$user['email']."</td>";
      echo "<td>".$user['username']."</td>";
      echo "<td>".$user['profileTitle']."</td>";
      echo "<td><a class='fa fa-fw fa-pencil' data-toggle='modal' data-target='#userUpModal' href='#'></a></td>";
      echo "</tr>";
    }
  }
  else {
    echo "No hay resultados";
  }
}

function perfiles() {
  $connect = getDBConnection();
  $sql = "SELECT * FROM `profile`";
  $statement = $connect->prepare($sql);
  $statement->execute();
  if($statement->rowCount() > 0) {
    while ($perfil = $statement->fetch(PDO::FETCH_ASSOC)) {
      echo "<tr>";
      echo "<td>".$perfil['title']."</td>";
      echo "<td>".$perfil['description_']."</td>";
      echo "<td><a class='fa fa-fw fa-pencil' data-toggle='modal' data-target='#perfilesUpModal' href='#'></a></td>";
      echo "</tr>";
    }
  }
  else {
    echo "No hay resultados";
  }
}

function ciclos() {
  $connect = getDBConnection();
  $sql = "SELECT * FROM `cycle`";
  $statement = $connect->prepare($sql);
  $statement->execute();
  if($statement->rowCount() > 0) {
    while ($ciclos = $statement->fetch(PDO::FETCH_ASSOC)) {
      echo "<tr>";
      echo "<td>".$ciclos['title']."</td>";
      echo "<td>".$ciclos['description_']."</td>";
      echo "<td><a class='fa fa-fw fa-pencil' data-toggle='modal' data-target='#ciclosUpModal' href='#'></a></td>";
      echo "</tr>";
    }
  }
  else {
    echo "No hay resultados";
  }
}

function sysAfectados() {
  $connect = getDBConnection();
  $sql = "SELECT * FROM `system_`";
  $statement = $connect->prepare($sql);
  $statement->execute();
  if($statement->rowCount() > 0) {
    while ($sys = $statement->fetch(PDO::FETCH_ASSOC)) {
      echo "<tr>";
      echo "<td>".$sys['title']."</td>";
      echo "<td>".$sys['description_']."</td>";
      echo "<td><a class='fa fa-fw fa-pencil' data-toggle='modal' data-target='#sistemaUpModal' href='#'></a></td>";
      echo "</tr>";
    }
  }
  else {
    echo "No hay resultados";
  }
}

function etapas() {
  $connect = getDBConnection();
  $sql = "SELECT * FROM `stage`";
  $statement = $connect->prepare($sql);
  $statement->execute();
  if($statement->rowCount() > 0) {
    while ($stages = $statement->fetch(PDO::FETCH_ASSOC)) {
      echo "<tr>";
      echo "<td>".$stages['title']."</td>";
      echo "<td>".$stages['description_']."</td>";
      echo "<td><a class='fa fa-fw fa-pencil' data-toggle='modal' data-target='#etapasUpModal' href='#'></a></td>";
      echo "</tr>";
    }
  }
  else {
    echo "No hay resultados";
  }
}

function areas() {
  $connect = getDBConnection();
  $sql = "SELECT * FROM `vp`";
  $statement = $connect->prepare($sql);
  $statement->execute();
  if($statement->rowCount() > 0) {
    while ($stages = $statement->fetch(PDO::FETCH_ASSOC)) {
      echo "<tr>";
      echo "<td>".$stages['title']."</td>";
      echo "<td>".$stages['description_']."</td>";
      echo "<td><a class='fa fa-fw fa-pencil' data-toggle='modal' data-target='#areaUpModal' href='#'></a></td>";
      echo "</tr>";
    }
  }
  else {
    echo "No hay resultados";
  }
}
?>