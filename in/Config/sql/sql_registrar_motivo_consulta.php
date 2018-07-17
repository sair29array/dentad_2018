<?php
//error_reporting(0);

require_once("../class/class_motivos_de_consulta.php");
$super_motivosc = new  MotivosConsulta();
$action = 'read';

if (isset($_POST['action']))
{

	$action = $_POST['action'];
}


if ($action == 'read')
{






   $id_clinica = $_POST["id_clinica"]; //
   $motivo_consulta = $_POST["motivo_consulta"];
  
 
  



     
	 
$super_motivosc-> SetNewMotivoDeConsulta($id_clinica, $motivo_consulta);
	
  $res['resul']=1;
   
}



header('Content-Type: application/json');
echo json_encode($res);
die();


?>