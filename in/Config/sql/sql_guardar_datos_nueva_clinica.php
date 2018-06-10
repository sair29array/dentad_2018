<?php
//error_reporting(0);

require_once("../class/class_clinica.php");
$super_clinica= new  Clinica();
$action = 'read';

if (isset($_POST['action']))
{

	$action = $_POST['action'];
}


if ($action == 'read')
{

   $n = $_POST["nombre_clinica"]; //
   $u = $_POST["ubicacion"];
   $id_user = $_POST["id_user"];


  
  $super_clinica-> SetDataCLinica($n,$u,$id_user); // mandamos a registrar la nueva clinica para este user
	 

     $res['resul']=1;
	 

	
}



header('Content-Type: application/json');
echo json_encode($res);
die();


?>