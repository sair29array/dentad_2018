<?php
//error_reporting(0);

require_once("../class/class_tratamientos.php");
$super_tratamientos = new  tratamientos();
$action = 'read';

if (isset($_POST['action']))
{

	$action = $_POST['action'];
}


if ($action == 'read')
{






   $id_clinica = $_POST["id_clinica"]; //
   $tratamiento = $_POST["tratamiento"];
   $valor_total = $_POST["valor_total"];
   $cuota_inicial = $_POST["cuota_inicial"];
   $duracion_dias = $_POST["duracion_dias"];
   $duracion_meses = $_POST["duracion_meses"];
   $duracion_anios = $_POST["duracion_anios"];
 
  



     
	 
$super_tratamientos-> SetNewTratamiento($id_clinica, $tratamiento, $valor_total, $cuota_inicial, $duracion_anios, $duracion_meses, $duracion_dias);
	
  $res['resul']=1;
   
}



header('Content-Type: application/json');
echo json_encode($res);
die();


?>