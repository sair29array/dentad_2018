<?php
//error_reporting(0);

require_once("../class/class_colaboradores.php");
$super_colaboradores = new  colaboradores();
$action = 'read';

if (isset($_POST['action']))
{

	$action = $_POST['action'];
}


if ($action == 'read')
{



   $id_clinica = $_POST["id_clinica"];
   $name_user = $_POST["name_user"];
   $email_user = $_POST["email_user"];
   $pass = $_POST["pass"];


  // verificamos que la identidad del user que se esta intentando registrar no exista ya en la DB
  $validate_email = $super_colaboradores -> VerificarSiExisteUnColaborador_email($email_user);
  

  if ($validate_email == 1) // no hay correos iguales
  {
  	 
		  	$super_colaboradores -> RegistrarNuevoColaborador($id_clinica, $name_user, $email_user, $pass);
		  	$res['resul']=1;
  	
  }else{
  	$res["resul"] = 0 ; // email ya existe
  }

     
	 

	
}



header('Content-Type: application/json');
echo json_encode($res);
die();


?>