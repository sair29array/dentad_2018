<?php
//error_reporting(0);

require_once("../class/class_agenda.php");
require_once("../class/class_pacientes.php");
$super_agenda= new  Agenda();
$super_pacientes = new pacientes();
$action = 'read';

if (isset($_POST['action']))
{

	$action = $_POST['action'];
}


if ($action == 'read')
{



   $id_paciente = $_POST["id_paciente"]; //
   $motivo_consulta = $_POST["motivo_consulta"]; //
   $fecha_inicio = $_POST["fecha_inicio"]; //
   $fecha_fin = $_POST["fecha_fin"]; //
   $hora_inicio = $_POST["hora_inicio"]; //
   $hora_fin = $_POST["hora_fin"]; //
   $valor_cita = $_POST["valor_cita"]; //
   $observaciones = $_POST["observaciones"]; //
   $id_clinica = $_POST["id_clinica"]; //
   $id_cita = $_POST["id_cita"];
 


  
  

  $pacientes = $super_pacientes  -> GetPacienteID($id_paciente);
  foreach ($pacientes as $key) 
  {
  		$nombre_paciente = $key["nombres"]. " ". $key["apellidos"];
  }

     
	 
$super_agenda-> UpdateCitaDB($id_paciente,$nombre_paciente, $motivo_consulta, $fecha_inicio, $fecha_fin, $hora_inicio, $hora_fin, $valor_cita, $observaciones, $id_clinica,$id_cita);
	
  $res['resul']=1;
     $res["paciente"]=$nombre_paciente;
}



header('Content-Type: application/json');
echo json_encode($res);
die();


?>