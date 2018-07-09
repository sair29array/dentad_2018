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






   $Edit_ID = $_POST["Edit_ID"]; //
   $Edit_diagnostico = $_POST["Edit_diagnostico"];
  
 
  



     
	 
$super_diagnosticos -> UpdateDiagnostico($Edit_ID, $Edit_diagnostico);
	
  $res['resul']=1;
   
}



header('Content-Type: application/json');
echo json_encode($res);
die();


?>