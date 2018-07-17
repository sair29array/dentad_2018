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


	if (isset($_POST["delete_id"])) 
	{
		$super_motivosc-> DeleteMotivoDeConsulta($_POST["delete_id"]);
	}else if (isset($_POST["Edit_ID"])) 
	{
		$super_motivosc->UpdateMotivoConsulta($_POST["Edit_ID"], $_POST["Edit_motivoc"]);
	}

	 

	
  $res['resul']=1;
   
}



header('Content-Type: application/json');
echo json_encode($res);
die();


?>