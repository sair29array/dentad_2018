<?php
//error_reporting(0);

require_once("../class/class_agenda.php");
require_once("../class/class_pacientes.php");

require_once("../class/class_Seguimiento_pacientes.php");
$super_agenda= new  Agenda();
$super_pacientes = new pacientes();
$super_SeguimientoP = new SeguimientoPacientes();
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
   $fecha_actual = $_POST["fecha_actual"];
   $email_admin_receptor = $_POST["email_"];
 

   $inicio_ = $fecha_inicio ." ".$hora_inicio;
  
  

  $pacientes = $super_pacientes  -> GetPacienteID($id_paciente);
  foreach ($pacientes as $key) 
  {
  		$nombre_paciente = $key["nombres"]. " ". $key["apellidos"];
      $num_identidad_paciente = $key["num_identidad"];
  }

     $res['resul']=1;
     $res["paciente"]=$nombre_paciente;
	 
$super_agenda-> AgendarCitaDB($id_paciente,$nombre_paciente, $motivo_consulta, $fecha_inicio, $fecha_fin, $hora_inicio, $hora_fin, $valor_cita, $observaciones, $id_clinica);

$proceso = "Agendamiento_de_cita";

$descripcion_proceso = "Cita para ".$_POST["motivo_consulta"].". Inicia: ". $_POST["fecha_inicio"]. " - ". $_POST["hora_inicio"]. " Termina: ". $_POST["fecha_fin"]. " - ". $_POST["hora_fin"];

$super_SeguimientoP -> NewSeguimiento($num_identidad_paciente,$id_clinica,$proceso, $descripcion_proceso, $fecha_actual,$inicio_,$email_admin_receptor);
	
}



header('Content-Type: application/json');
echo json_encode($res);
die();


?>