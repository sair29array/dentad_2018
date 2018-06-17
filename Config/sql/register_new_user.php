<?php
//error_reporting(0);

require_once("../conexion.php");
require_once("../class/class_login.php");
$Log = new Login;
$action = 'read';

if (isset($_POST['action']))
{

	$action = $_POST['action'];
}


if ($action == 'read')
{

     $nombres = $_POST["name_register"];
	 $pass = $_POST["pass_register"];
	 $email = $_POST["email_register"];
	


  
       $ConfirmEmail = $Log->ConfirmEmail($email);

       ////////////////////////////////
       
       if ($ConfirmEmail == 0 ) 
		{
			$res['resul'] = 1; // esto quiere decir que todos los datos estan correctos y que se rehistrará al user
		}else {
			$res['resul'] = 0; // el email ya existe
		}
	 	

  
    
        

  	  $r = $res['resul'];
	  if ($r == 1) 
	  {	
	  	$Log -> register_user($nombres,$email,$pass);
	  	$res['resultt']=$email;
	  }

	
}
 





header('Content-Type: application/json');
echo json_encode($res);
die();


?>