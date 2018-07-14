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
            <label class="text-muted">Fecha de Incio</label> <br/>
            <input class="form-control" type="date" name="inicio" value=<?php echo $_SESSION['start_atproj']; ?>>
          </div>
          <div>
            <label class="text-muted">Fecha Final</label> <br/>
            <input class="form-control" type="date" name="final" value=<?php echo $_SESSION['finalize_atproj']; ?>>
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
        <form method="POST" action="../funciones/updateProyecto.php">
          <label class="text-muted">Titulo del Proyecto</label><br/>
          <?php
          $name = $_GET['name'];
          ?>
          <input class="form-control" type="text" name="title"> <br/>
          <label class="text-muted">Alcance</label><br/>
          <textarea class="form-control" name="alcance"></textarea><br/>
          <div>
            <label class="text-muted">Fecha de Incio</label> <br/>
            <input class="form-control" type="date" name="inicio">
          </div>
          <div>
            <label class="text-muted">Fecha Final</label> <br/>
            <input class="form-control" type="date" name="final">
          </div>
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
        <form method="POST" action="../funciones/updatePrioridades.php">
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
        <form method="POST" action="../funciones/updatePrioridades.php">
          <label class="text-muted">Nombre</label><br/>
          <input class="form-control" type="text" name="title"> <br/>
          <label class="text-muted">Correo</label><br/>
          <input class="form-control" type="email" name="correo"> <br/>
          <label class="text-muted">Username</label><br/>
          <input class="form-control" type="text" name="username"> <br/>
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
        <form method="POST" action="../funciones/updatePrioridades.php">
          <label class="text-muted">Nombre del Ciclo</label><br/>
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
        <form method="POST" action="../funciones/updatePrioridades.php">
          <label class="text-muted">Nombre del Perfil</label><br/>
          <input class="form-control" type="text" name="title"> <br/>
          <label class="text-muted">Descripcion</label><br/>
          <textarea class="form-control" name="description"></textarea><br/>
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
        <form method="POST" action="../funciones/updatePrioridades.php">
          <label class="text-muted">Etapa</label><br/>
          <input class="form-control" type="text" name="title"> <br/>
          <label class="text-muted">Descripcion</label><br/>
          <textarea class="form-control" name="description"></textarea><br/>
      </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <input class="btn btn-primary" type="submit" name="submit" value="Crearß">
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
        <form method="POST" action="../funciones/updatePrioridades.php">
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
        <h5 class="modal-title" id="casoUpdateModal">Actualizar Casos</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">x</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="../funciones/updateCasos.php">
          <label class="text-muted">Caso</label><br/>
          <input class="form-control" type="text" name="title" value="<?php  ?>"> <br/>
          <label class="text-muted">Fecha Inicio</label><br/>
          <input class="form-control" type="date" name="inico">
          <label class="text-muted">Fecha Final</label><br/>
          <input class="form-control" type="date" name="final">
          <label class="text-muted">Estado</label><br/>
          <input class="form-control" type="text" name="estado" value="<?php ?>"> <br/>
          <label class="text-muted">Porcentaje de Avance</label><br/>
          <input class="form-control" type="range" id="slider" name="avance" min="0" max="100" value="<?php ?>" step="2" />
          <label>Value: <span id="demo"></span></label>
      </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <input class="btn btn-primary" type="submit" name="submit" value="Actualizar">
            <!-- <a class="btn btn-primary">Actualizar</a> -->
          </div>
        </form>
    <script>
    var slider = document.getElementById("slider");
    var output = document.getElementById("demo");
    output.innerHTML = slider.value;

    slider.oninput = function() {
      output.innerHTML = this.value;
    }
    </script>
    </div>
  </div>
</div>

<?php
}

function createCases() {
?>

<div class="modal fade" id="casosCreateModal" tabindex="-6" role="dialog" aria-labelledby="casoCreatModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="casoCreatModal">Crear Caso</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">x</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="../funciones/updateCasos.php">
          <label class="text-muted">Nombre del Caso</label><br/>
          <input class="form-control" type="text" name="title"> <br/>
          <label class="text-muted">Fecha Inicio</label><br/>
          <input class="form-control" type="date" name="inico">
          <label class="text-muted">Fecha Final</label><br/>
          <input class="form-control" type="date" name="final">
          <label class="text-muted">Estado</label><br/>
          <input class="form-control" type="text" name="estado"> <br/>
          <label class="text-muted">Porcentaje de Avance</label><br/>
          <input class="form-control" type="range" id="slider" name="avance" min="0" max="100" step="2" />
          <label>Value: <span id="demo"></span></label>
      </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <input class="btn btn-primary" type="submit" name="submit" value="Crear">
            <!-- <a class="btn btn-primary">Actualizar</a> -->
          </div>
        </form>
    <script>
    var slider = document.getElementById("slider");
    var output = document.getElementById("demo");
    output.innerHTML = slider.value;

    slider.oninput = function() {
      output.innerHTML = this.value;
    }
    </script>
    </div>
  </div>
</div>

<?php
}

function segCasos() {
?>

<div class="modal fade" id="casosModal" tabindex="-6" role="dialog" aria-labelledby="casoModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="casoModal">Seguimiento del Caso</h5>
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

function cases() {
  $connect = getDBConnection();
  $sql = "SELECT * FROM `case_identity`";
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
      echo "<td> <a name='casoslink' data-toggle='modal' data-target='#casosModal' href='#'>" .$case['title']."</a></td>";
      echo "<td>".$newInicio."</td>";
      echo "<td>".$newFinal."</td>";
      echo "<td>".$result."</td>";
      echo "<td>".$case['status_case']."</td>";
      echo "<td><div class='progress'><div class='progress-bar' role='progressbar' style='width:".$case['percentage_Complete']."%'></div></div>".$case['percentage_Complete']."%</td>";
      echo "<td><a class='fa fa-fw fa-pencil' data-toggle='modal' data-target='#casosUpdateModal' href='#'></a></td>";
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
      echo "<td> <a name='".$proj['title']."' data-toggle='modal' data-target='#proyectoModal' href='#'>" .$proj['title']."</a></td>";
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
?>