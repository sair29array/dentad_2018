<?php
//error_reporting(0);

require_once("../class/class_agenda.php");
$super_agenda= new  Agenda();
$action = 'read';

if (isset($_POST['action']))
{

	$action = $_POST['action'];
}


if ($action == 'read')
{



   $id_clinica = $_POST["id_clinica"]; //
   $id_cita = $_POST["id_cita"];
 
  



     
	 
$super_agenda-> MoverAlaPapelera($id_cita);
	
  $res['resul']=1;
   
}



header('Content-Type: application/json');
echo json_encode($res);
die();


?>