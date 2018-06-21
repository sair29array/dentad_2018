<?php 

// /En el NAV VOY A LLAMAR CADA OBJ PARA SACAR LOS ATRIBUTOS DE CADA UNO 
//POR EJEMPLO LOS DATOS DE LOS USERS ADMINISTRADORES






// GET FECHA ACTUAL _:
$fecha_actual = $super_fecha ->GetFechaActual();
// Get DAtos del user admin:
$user = $useR->GetDatosUsuarioID($_SESSION["_user_log"]); // admin
foreach ($user as $iuser) {}


// ESTADO DE LA CUENTA:
  $cuenta_activa = $useR -> EstadoDeLacuenta($_SESSION["_user_log"]);

// acontinuacion nombrare a ciewrtas cvariables porque es necesaario que siempre esten listas para cualquier operacion ya sea desde js o php, y lo hago en este archivo debido a que es este unos de los que se mantiene presente en cada paginacion

$nombre_clinica = "";
$ubicacion_clinica = "";
$id_clinica = "";
//Get datos de la clinica
$clinica_ = $super_clinica -> GetInfoClinicaUserId($iuser["id"]);
  $isset_Clinica = 0; // indica si ya el user tiene una clinica a su nombre
  foreach ($clinica_ as $clinica) {
    $isset_Clinica ++;
  }

if ($isset_Clinica != 0) // quiere decir que el user si tiene ina clinica yua registrada
{
  // entonces: 
  $nombre_clinica = $clinica["nombre"];
  $ubicacion_clinica = $clinica["direccion"];
  $id_clinica = $clinica["id"];


// sacamos la info de todos sus pacientes
  $pacientes_DB = $super_pacientes ->GetAllPacientes($id_clinica);
  

}


///// colaboradores  o asistentes
$num_Asistentes = $super_colaboradores->GetNumeroColaboradoresIdUSer($iuser["id"]);




 ?>
<script> 
  var fecha_actual = "<?php echo $fecha_actual ?>";

  var email_ = "<?php echo $_SESSION["_user_log"]; ?>";
  var nombre_adminictrador_DB = "<?php echo $iuser["nombre"] ?>";
  var email_administrador_DB = "<?php echo $iuser["email"] ?>";
  var id_user_="<?php echo $iuser["id"] ?>"; 
  var nombre_clinica_DB = "<?php echo $nombre_clinica ?>";
  var ubicacion_clinica_DB = "<?php echo $ubicacion_clinica ?>";
  var id_clinica = "<?php echo $id_clinica ?>";
  var num_Asistentes = "<?php echo $num_Asistentes ?>";
</script>
<!-- Navbar -->
  <nav  class="  main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li style="" class="nav-item ">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      <!--li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li-->
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Buscar" aria-label="Buscar">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form>















    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->




      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
         <?php echo $iuser["nombre"]; ?> <i class="fa fa-caret-down"></i>
          <!--span class="badge badge-danger navbar-badge">3</span-->
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
             <i class="fa fa-cog "></i>
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  &nbsp; Configurar cuenta
                </h3>
              </div>
            </div>
            <!-- Message End -->
          </a>

          <a href="./?ds" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
             <i class="fa fa-sign-out "></i>
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  &nbsp; Cerrar sesión
                </h3>
              </div>
            </div>
            <!-- Message End -->
          </a>

          
      </li>



      <!-- Notifications Dropdown Menu -->
      <!--li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-bell-o"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fa fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fa fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fa fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li-->
      
    </ul>
  </nav>
  <!-- /.navbar -->