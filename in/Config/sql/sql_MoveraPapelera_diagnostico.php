<?php
//error_reporting(0);

require_once("../class/class_diagnosticos.php");
$super_diagnosticos = new  diagnosticos();
$action = 'read';

if (isset($_POST['action']))
{

	$action = $_POST['action'];
}


if ($action == 'read')
{






   $delete_id = $_POST["delete_id"]; //
   
  
 
  



     
	 
$super_diagnosticos -> Mover_a_PapeleraDiagnostico($delete_id);
	
  $res['resul']=1;
   
}



header('Content-Type: application/json');
echo json_encode($res);
die();


?>