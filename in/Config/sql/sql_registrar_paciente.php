<?php
//error_reporting(0);

require_once("../class/class_pacientes.php");
$super_pacientes = new  pacientes();
$action = 'read';

if (isset($_POST['action']))
{

	$action = $_POST['action'];
}


if ($action == 'read')
{

   $n = $_POST["nombre_paciente"]; //
   $a = $_POST["apellidos_paciente"];
   $t = $_POST["tipo_identidad_paciente"];
   $i = $_POST["numero_identidad_paciente"];
   $e = $_POST["email_paciente"];
   $c = $_POST["telefono_paciente"];

   $id_user_admin = $_POST["id_user"];
   $id_clinica = $_POST["id_clinica"];
   $fecha_actual = $_POST["fecha_actual"];
   
  
   $dn = $_POST["dia_nacimiento_paciente"];
   $mn = $_POST["mes_nacimiento_paciente"];
   $an = $_POST["anio_nacimiento_paciente"];
   $sex = $_POST["sexo_paciente"];


  // verificamos que la identidad del user que se esta intentando registrar no exista ya en la DB
  $validate_id = $super_pacientes -> VerificarSiExisteUnPaciente_id($i);
  //$validate_email = $super_pacientes -> VerificarSiExisteUnPaciente_e($e);

  if ($validate_id == 1)
  {
  	 
		  	$super_pacientes -> RegistrarNuevoPaciente($n, $a, $t, $i, $e, $c, $id_user_admin, $id_clinica, $fecha_actual, $dn, $mn, $an, $sex);
		  	$res['resul']=1;
  	
  }else{
  	$res["resul"] = 0 ; // numero de identidad ya existe
  }

     
	 

	
}



header('Content-Type: application/json');
echo json_encode($res);
die();


?>