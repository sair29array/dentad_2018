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






   $id_tratamiento = $_POST["delete_id"]; //
  
 
  



     
	 
$super_tratamientos-> DeleteNewTratamiento($id_tratamiento);
	
  $res['resul']=1;
   
}



header('Content-Type: application/json');
echo json_encode($res);
die();


?>