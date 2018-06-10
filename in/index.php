<?php 

session_start();
require_once("Config/class/class_user_admin.php");
require_once("Config/class/class_config_acount.php");
require_once("Config/class/class_clinica.php");
require_once("Config/class/class_pacientes.php");
require_once("Config/class/class_colaboradores.php");
$useR = new useR();
$super_config = new config_acount();
$super_clinica = new Clinica();
$super_pacientes = new pacientes();
$super_colaboradores = new colaboradores();
if (!isset($_SESSION["_user_log"])) 
  {
   header("location: ../ ");
}else
{
  $deAlta = $useR->VerificarDeAlta($_SESSION["_user_log"]); // debemos saber si el user ya pagó, el precio de esta aplicación


}
if (isset($_GET["ds"]/*DestroySession*/)) {
    $useR ->destroy_session();
}
 
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
    </div>
<div class="wrapper">
  

  <!-- Main Sidebar Container -->
  <?php 
    
    
     require_once("pages/static/nav.php");
    require_once("pages/static/menu_nav_aside.php");
    if ($deAlta != 0) {
      if ( (!isset($_GET["v-config"]) && !isset($_GET["view"])) || @$_GET["view"]=="Agenda") {
        require_once("pages/volatil/admin/agenda.php");
      }else if (@$_GET["v-config"]=="Mi-Clínica") {
        include("pages/volatil/pages_config/config_consultorio.php");
      }else if (@$_GET["v-config"]=="LicenciaDentad") {
        include("pages/volatil/pages_config/LicenciaDentad.php");
      }else if (@$_GET["view"]=="Todos-mis-pacientes") {
        include("pages/volatil/pacientes/todos-los-pacientes.php");
      }
    }else
    {
      //require_once("pages/volatil/user-no-de-alta/pagina-de-configuracion.php");

      if (@$_GET["v-config"]=="Activar-cuenta" || !isset($_GET["v-config"])) {
        include("pages/volatil/user-no-de-alta/activar-cuenta.php");
      }else if (@$_GET["v-config"]=="Mi-Clínica") {
        include("pages/volatil/pages_config/config_consultorio.php");
      }else if (@$_GET["v-config"]=="LicenciaDentad") {
        include("pages/volatil/pages_config/LicenciaDentad.php");
      }
    }
    require_once("pages/static/footer.php");
   
      
    
   ?>


</div>
<!-- ./wrapper -->
<!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->

<!-- REQUIRED SCRIPTS -->


<script src="plugins/jquery/jquery.js"></script>
<!-- Bootstrap 4 -->

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
<script src="Config/js/activar-cuenta.js"></script>
<script src="Config/js/configurar_info_clinica.js"></script>



</body>
</html>
