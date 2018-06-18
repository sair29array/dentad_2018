<?php
//error_reporting(0);

require_once("../class/class_config_acount.php");
$action = 'read';

if (isset($_POST['action']))
{

	$action = $_POST['action'];
}


if ($action == 'read')
{

   $e = $_POST["email"]; // get_email

  /*  $respuesta = mysqli_query($conn, "SELECT count(*) FROM usuarios where email = '$l'  and pass = '$p' ");*/

  $super_acount = new  config_acount();
  $r = $super_acount -> send_mail_activation($e);
	 

     $res['resul']=1;
     $res["ok"] = $r;
	 

	
}

header('Content-Type: application/json');
echo json_encode($res);
die();


?>