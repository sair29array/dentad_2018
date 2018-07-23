<?php 

session_start();
require_once("Config/class/class_user_admin.php");
require_once("Config/class/class_config_acount.php");
require_once("Config/class/class_clinica.php");
require_once("Config/class/class_pacientes.php");
require_once("Config/class/class_colaboradores.php");
require_once("Config/class/class_fecha.php");
require_once("Config/class/class_agenda.php");
require_once("Config/class/class_tratamientos.php");
require_once("Config/class/class_diagnosticos.php");
require_once("Config/class/class_pieza_diente.php");
require_once("Config/class/class_diagnosticosANDpiezas.php");
require_once("Config/class/class_tratamientosANDpiezas.php");
require_once("Config/class/class_motivos_de_consulta.php");
require_once("Config/class/class_Seguimiento_pacientes.php");



//// CArbon libreria para fechas
//https://www.youtube.com/watch?v=CzyMmjLVXiM tutorial en youtube
require_once("Config/vendor/autoload.php");
use Carbon\Carbon;
date_default_timezone_set("America/Bogota");
Carbon::setLocale("es");
/// carbon libreria para fechas end


$useR = new useR();
$super_config = new config_acount();
$super_clinica = new Clinica();
$super_pacientes = new pacientes();
$super_colaboradores = new colaboradores();
$super_fecha = new fecha();
$super_agenda = new Agenda(); 
$super_tratamientos = new tratamientos();
$super_diagnosticos = new diagnosticos();
$super_dientes = new diente();
$superDiagDent = new diagnosticosANDpiezas();
$superTratDent = new tratamientosANDpiezas();
$superMotivosC = new MotivosConsulta();
$superSeguimientoP = new SeguimientoPacientes();

if (!isset($_SESSION["_user_log"])) 
  {
   header("location: ../ ");
}else
{
  $deAlta = $useR->VerificarDeAlta($_SESSION["_user_log"]); // debemos saber si el user ya pagó, el precio de esta aplicación


}

/// verificar si la versión de prueba o demostración gratuita de 7 dias venció///
  $useR->VerificarExpiracionDeLaDemostracionGRatis($_SESSION["_user_log"]);
////////////////////////////////////////////////////////////////////////////////

if (isset($_GET["ds"]/*DestroySession*/)) {
    $useR ->destroy_session();
}


/// ACTIVAR CUENTA
if (isset($_GET["activate"])) {
  $useR->ActivateAccount($_GET["activate"]);
}


////// saber la fecha de expiracion de la demostración :
$fechaExpire = $useR -> fechaExpire($_SESSION["_user_log"]);
 
 ?>

 <!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Dentad | Home</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/font-awesome/css/fontawesome-all.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.css">
  <link rel="stylesheet" href="dist/css/preloader.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="dist/css/style_transitions.css">
  
  <!-- REQUIRED SCRIPTS -->


<script src="plugins/jquery/jquery.js"></script>
<?php 
    if (@$_GET["view"]=="Agenda" || (!isset($_GET["view"]) && !isset($_GET["v-config"]))) 
    {
      ?>
      <link rel="stylesheet" type="text/css" href="dist/fullcalendar/fullcalendar.min.css">
      <!--PARA LA AGENDA: 
        TUTORIAL EN YOUTUBE DE CALENDAR:
        https://www.youtube.com/watch?v=TecU2RM61UY&index=2&list=PLSuKjujFoGJ3xqSJHnZUR-INEO71t1znq
       -->
        
        
        <script  src="dist/fullcalendar/moment.min.js" ></script>
        <script src="dist/fullcalendar/fullcalendar.min.js" ></script>
        <script src="dist/fullcalendar/es.js" ></script>
      <?php 
    }
 ?>
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to to the body tag
to get the desired effect
|---------------------------------------------------------|
|LAYOUT OPTIONS | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition sidebar-mini">

  <div class="preloader">
        <div class="sk-folding-cube">
            <div class="sk-cube1 sk-cube"></div>
            <div class="sk-cube2 sk-cube"></div>
            <div class="sk-cube4 sk-cube"></div>
            <div class="sk-cube3 sk-cube"></div>
        </div>
    </div >
<div class="wrapper">
  

  <!-- Main Sidebar Container -->
  <?php 
    
    
     require_once("pages/static/nav.php");
    require_once("pages/static/menu_nav_aside.php");
    if ($deAlta != 0) { /// SI YA ESTÁ DE ALTA
      

      if ( (!isset($_GET["v-config"]) && !isset($_GET["view"])) || @$_GET["view"]=="Agenda") {
        require_once("pages/volatil/admin/agenda/agenda.php");
      }else if (@$_GET["v-config"]=="Mi-Clínica") {
        include("pages/volatil/pages_config/config_consultorio.php");
      }else if (@$_GET["v-config"]=="LicenciaDentad") {
        include("pages/volatil/pages_config/LicenciaDentad.php");
      }else if (@$_GET["view"]=="Todos-mis-pacientes") {
        include("pages/volatil/pacientes/todos-los-pacientes.php");
      }else if (@$_GET["view"]=="AgendarCita") {
        include("pages/volatil/admin/agenda/AgendarCita.php");
      }else if (@$_GET["view"]=="paciente") {
        include("pages/volatil/pacientes/info_y_opciones_de_un_paciente.php");
      }else if (@$_GET["view"]=="ModificarCita") {
        include("pages/volatil/admin/agenda/ModificarCita.php");
      }else if (@$_GET["view"]=="EliminarCita") {
        include("pages/volatil/admin/agenda/EliminarCita.php");
      }else if (@$_GET["view"]=="cuenta-activa") {
        include("pages/volatil/cuenta-activa.php");
      }else if (@$_GET["view"]=="Colaboradores") {
        include("pages/volatil/pages_config/Colaboradores.php");
      }else if (@$_GET["view"]=="Odontograma") {
        include("pages/volatil/Odontograma.php");
      }else if (@$_GET["view"]=="Tratamientos") {
        include("pages/volatil/admin/tratamientosYdiagnosticos/tratamientos.php");
      }else if (@$_GET["view"]=="Diagnósticos") {
        include("pages/volatil/admin/tratamientosYdiagnosticos/diagnosticos.php");
      }else if (@$_GET["view"]=="AgendarCitaPaciente") {
        include("pages/volatil/admin/AgendarCitaApacienteSeleccionado.php");
      }else if (@$_GET["view"]=="Motivos-de-consulta") {
        include("pages/volatil/admin/Motivos-de-consulta.php");
      }else if (@$_GET["view"]=="Atención-a-pacientes") {
        include("pages/volatil/pacientes/atencionPacientes.php");
      }
    }else
    {
      //require_once("pages/volatil/user-no-de-alta/pagina-de-configuracion.php");
      

      if (@$_GET["v-config"]=="Activar-cuenta" || ( !isset($_GET["v-config"]) && !isset($_GET["view"]) ) ) {
        include("pages/volatil/user-no-de-alta/activar-cuenta.php");
      }else if (@$_GET["v-config"]=="Mi-Clínica") {
        include("pages/volatil/pages_config/config_consultorio.php");
      }else if (@$_GET["v-config"]=="LicenciaDentad") {
        include("pages/volatil/pages_config/LicenciaDentad.php");
      }else if (@$_GET["view"]=="Agenda") {
        require_once("pages/volatil/admin/agenda/agenda.php");
      }else if (@$_GET["view"]=="Todos-mis-pacientes") {
        include("pages/volatil/pacientes/todos-los-pacientes.php");
      }else if (@$_GET["view"]=="cuenta-activa") {
        include("pages/volatil/cuenta-activa.php");
      }else if (@$_GET["view"]=="AgendarCita") {
        include("pages/volatil/admin/agenda/AgendarCita.php");
      }else if (@$_GET["view"]=="Colaboradores") {
        include("pages/volatil/pages_config/Colaboradores.php");
      }else if (@$_GET["view"]=="Odontograma") {
        include("pages/volatil/Odontograma.php");
      }else if (@$_GET["view"]=="Tratamientos") {
        include("pages/volatil/admin/tratamientosYdiagnosticos/tratamientos.php");
      }else if (@$_GET["view"]=="Diagnósticos") {
        include("pages/volatil/admin/tratamientosYdiagnosticos/diagnosticos.php");
      }else if (@$_GET["view"]=="AgendarCitaPaciente") {
        include("pages/volatil/admin/AgendarCitaApacienteSeleccionado.php");
      }else if (@$_GET["view"]=="Motivos-de-consulta") {
        include("pages/volatil/admin/Motivos-de-consulta.php");
      }else if (@$_GET["view"]=="Atención-a-pacientes") {
        include("pages/volatil/pacientes/atencionPacientes.php");
      }
    }
    require_once("pages/static/footer.php");
   
      
    
   ?>


</div>
<!-- ./wrapper -->
<!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->



<!-- select con buscador -->
<script src="plugins/select2/select2.full.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.js"></script>
<script src="plugins/datatables/dataTables.bootstrap4.js"></script>

<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });

 
</script>







<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="dist/js/adminlte.js"></script>
<script>
    /* Preloader Js
    ===================*/
    window.onload = function() 
    {
           $('.preloader').fadeOut(500);
    }
        

   
</script>




<!-- OPTIONAL SCRIPTS -->
<!--script src="plugins/chart.js/Chart.min.js"></script>
<script src="dist/js/demo.js"></script>
<script src="dist/js/pages/dashboard3.js"></script-->

  

<!-- VUE Y AXIOS REQUIRED-->
<script src="Config/js/axios.js"></script>
<script src="Config/js/vue.js"></script>


<!-- VUE Y AXIOS OBJETOS REQUIREDS-->
<?php 
    if (@$_GET["v-config"]=="Activar-cuenta" || (!isset($_GET["view"]) && !isset($_GET["v-config"]))) {
      ?> <script src="Config/js/activar-cuenta.js"></script><?php 
    }

    if (@$_GET["v-config"]=="Mi-Clínica") {
      ?> <script src="Config/js/configurar_info_clinica.js"></script><?php 
    }

    if (@$_GET["view"]=="Todos-mis-pacientes") {
      ?>  <script src="Config/js/Pacientes.js" ></script> <?php 
    }

    if (@$_GET["view"]=="AgendarCita" || @$_GET["view"]=="AgendarCitaPaciente") {
      ?>  <script src="Config/js/AgendarCita.js" ></script> <?php 
    }

    if (@$_GET["view"]=="ModificarCita") {
      ?><script src="Config/js/ModificarCita.js"></script> <?php 
    }

    if (@$_GET["view"]=="EliminarCita") {
      ?><script src="Config/js/EliminarCita.js"></script> <?php 
    }

    if (@$_GET["view"]=="paciente") {
      ?><script src="Config/js/paciente_info.js"></script> <?php 
    }

    if (@$_GET["view"]=="Colaboradores") {
      ?><script src="Config/js/Colaboradores.js"></script> <?php 
    }

    if (@$_GET["view"]=="Odontograma") {
      ?><script src="Config/js/Odontograma.js"></script> <?php 
    }

    if (@$_GET["view"]=="Tratamientos") {
      ?><script src="Config/js/tratamientos.js"></script> <?php 
    }

    if (@$_GET["view"]=="Diagnósticos") {
      ?><script src="Config/js/Diagnosticos.js"></script> <?php 
    }

    if (@$_GET["view"]=="Motivos-de-consulta") {
      ?><script src="Config/js/MotivosConsulta.js"></script> <?php 
    }
    if (@$_GET["view"]=="Atención-a-pacientes") {
      ?><script src="Config/js/Atencion-a-pacientes.js"></script> <?php 
    }
 ?>





</body>
</html>
