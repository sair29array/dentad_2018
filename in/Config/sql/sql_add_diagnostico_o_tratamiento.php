<?php
//error_reporting(0);

require_once("../class/class_tratamientosANDpiezas.php");
require_once("../class/class_diagnosticosANDpiezas.php");
require_once("../class/class_Seguimiento_pacientes.php");
$super_tratp = new  tratamientosANDpiezas();
$super_diagp = new  diagnosticosANDpiezas();
$super_seguimientos = new SeguimientoPacientes();
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
      /// creamos el historial de seguimiento:
      $proceso_ = "Diagnóstico_asignado";
      $descripcion_proceso_ = "Pieza: ". $pieza_diente;
      $super_seguimientos -> NewSeguimientoDiag_Trat($id_paciente_seleccionado,$_POST["id_clinica"],$proceso_, $descripcion_proceso_, $_POST["fecha_actual"],$_POST["email_admin_receptor"], $id_diagnostico);
   }
   
/// agregar un tratamiento 
  if ($id_tratamiento != "" && $id_tratamiento != 0)
  {
    $super_tratp -> SetTratpApieza($id_paciente_seleccionado, $id_tratamiento, $pieza_diente, $_POST["estado_tratamiento"], $_POST["fecha_actual"]);
      /// creamos el historial de seguimiento:
      $proceso = "Tratamiento_asignado";
      if ($_POST["estado_tratamiento"] == 1) 
      {
        $descripcion_proceso = "Pieza: ". $pieza_diente. " Tratamiento_en_proceso" ;
      }else{
        $descripcion_proceso = "Pieza: ". $pieza_diente. " Tratamiento_finalizado" ;
      }
      

      $super_seguimientos -> NewSeguimientoDiag_Trat($id_paciente_seleccionado,$_POST["id_clinica"],$proceso, $descripcion_proceso, $_POST["fecha_actual"],$_POST["email_admin_receptor"],$id_tratamiento);
  }



     

	
  $res['resul']=1;
   
}



header('Content-Type: application/json');
echo json_encode($res);
die();


?>