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






   $id_clinica = $_POST["id_clinica"]; //
   $diagnostico = $_POST["diagnostico"];
  
 
  



     
	 
$super_diagnosticos -> SetNewDiagnostico($id_clinica, $diagnostico);
	
  $res['resul']=1;
   
}



header('Content-Type: application/json');
echo json_encode($res);
die();


?>