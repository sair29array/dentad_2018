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
	 $pass = $_POST["pass"];
	 $email = $_POST["email"];
	

$camposVacios  = 0;
  if ($email !== "" && $pass !== ""  ) 
  {
       
      $respuesta = mysqli_query($conn, "SELECT count(*) FROM usuarios where email = '$email'  and pass = '$pass' ");
	 if( $fila = mysqli_fetch_row($respuesta) )
	 {
	  $valor = $fila[0];
	  $res['resul']=$valor; ///  0 || 1
	 }

	 if ($res['resul']==0) 
	 {
	 		 $respuesta_ = mysqli_query($conn, "SELECT count(*) FROM colaboradores where email = '$email'  and pass = '$pass' ");
			 if( $fila = mysqli_fetch_row($respuesta_) )
			 {
			  $valor = $fila[0];
			  $res['resul']=$valor; ///  0 || 1
			 }
	 }
	 	

  }    
        

  	  $r = $res['resul'];
	  if ($r == 1) 
	  {	
	  	$Log->CreateSession($email);
	  	$res['resultt']=$email;
	  }

	
}
 





header('Content-Type: application/json');
echo json_encode($res);
die();


?>