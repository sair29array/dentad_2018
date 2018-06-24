<?php
//error_reporting(0);

require_once("../class/class_user_admin.php");
$action = 'read';

if (isset($_POST['action']))
{

	$action = $_POST['action'];
}


if ($action == 'read')
{


   $n = $_POST["nombre_admin_para_actualizar"]; //nombre
   $e = $_POST["email_admin_para_actualizar"];// email nuevo
   $id_user = $_POST["id_user"];
   $email_actual = $_POST["email_actual"];

   if (filter_var($e, FILTER_VALIDATE_EMAIL))
	{
		 $super_user = new  useR();

		 	 
		  $consult =  $super_user -> UpdateDataAdminUser($n,$e,$id_user,$email_actual);

		  if ($consult == 0) 
		  {
		  	$res['resul']=0; // no se pudo porque hay otro user que tiene el mismo email
		  }else{
		  	$res['resul']=1; // tpdp bien 
		  }
	}else
	{
		$res['resul']=2;
	}



 

     
	 

	
}

header('Content-Type: application/json');
echo json_encode($res);
die();


?>