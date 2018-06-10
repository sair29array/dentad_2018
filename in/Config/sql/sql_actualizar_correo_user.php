<?php
//error_reporting(0);

require_once("../class/class_user_admin.php");
require_once("../class/class_config_acount.php");
$action = 'read';

if (isset($_POST['action']))
{

	$action = $_POST['action'];
}


if ($action == 'read')
{

   $ea = $_POST["EmailActual"]; // get_email_ actual
   $en = $_POST["EmailNuevo"]; // get_email_ nuevo


if (filter_var($en, FILTER_VALIDATE_EMAIL))  // validamos el email nuevo
{
  // si en realidad es un email, procedemos a: 
 $super_user = new useR(); // crtear una instancia del objeto user
  $c = $super_user ->UpdateEmailUser($ea,$en); // consultar si es posible actualizar este correo 
   
       // osea: si este correo no le pertenence a otro user.
  if ($c == 1) { // si si es posible entonces
       $super_acount = new  config_acount();
        $super_acount -> send_mail_activation($en); // le mandamos el correo de activación a la nueva cuenta de email
       $res['resul']=1;// retornamos 1, lo que significa que se logró hacer lo requerido
  }else // sino: entonces
  {
       $res['resul']=0; // retornamos 0 
  }
}else
{
  $res['resul']=2; // si el correo nuevo no es un correo normal o creible retornamos 2 ... 
}
  
	 

	/*$res["actual"] = $ea;
	$res["nuevo"] = $en ;*/
}

header('Content-Type: application/json');
echo json_encode($res);
die();


?>