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






   
   $tratamiento = $_POST["tratamiento"];
   $valor_total = $_POST["valor_total"];
   $cuota_inicial = $_POST["cuota_inicial"];
   $duracion_dias = $_POST["duracion_dias"];
   $duracion_meses = $_POST["duracion_meses"];
   $duracion_anios = $_POST["duracion_anios"];
   $id_tratamiento = $_POST["edit_ID"];
 
  



     
	 
$super_tratamientos-> UpdateTratamiento($id_tratamiento, $tratamiento, $valor_total, $cuota_inicial, $duracion_anios, $duracion_meses, $duracion_dias);
	
  $res['resul']=1;
   
}



header('Content-Type: application/json');
echo json_encode($res);
die();


?>