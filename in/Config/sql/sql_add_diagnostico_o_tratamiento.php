<?php
//error_reporting(0);

require_once("../class/class_tratamientosANDpiezas.php");
require_once("../class/class_diagnosticosANDpiezas.php");
$super_tratp = new  tratamientosANDpiezas();
$super_diagp = new  diagnosticosANDpiezas();
$action = 'read';

if (isset($_POST['action']))
{

	$action = $_POST['action'];
}


if ($action == 'read')
{




   $pieza_diente = $_POST["piezaDIente"];
   $id_paciente_seleccionado = $_POST["id_paciente_seleccionado"]; //
   $id_tratamiento = $_POST["id_tratamiento"];
   $id_diagnostico = $_POST["id_diagnostico"];

 /// agregar un diagnostico

   if ($id_diagnostico != "" && $id_diagnostico != 0)
   {
      $super_diagp -> SetDiagnosticoApieza($id_paciente_seleccionado, $id_diagnostico, $pieza_diente, $_POST["fecha_actual"]) ;  
   }
   
/// agregar un tratamiento 
  if ($id_tratamiento != "" && $id_tratamiento != 0)
  {
    $super_tratp -> SetTratpApieza($id_paciente_seleccionado, $id_tratamiento, $pieza_diente, $_POST["estado_tratamiento"], $_POST["fecha_actual"]);
  }



     

	
  $res['resul']=1;
   
}



header('Content-Type: application/json');
echo json_encode($res);
die();


?>