<?php 

	class Login
	{
		public function access() /// pregunta si hay o no una session construida
		{
			if (isset($_SESSION["_user_log"])) 
			{
				header("location: in/index.php ");
			}
		}
		public function CreateSession($email) // construye una sesión
		{
			$sess = $_SESSION["_user_log"] = $email;
			return $sess;
			header("location: in/index.php ");
		}

		public function login_($email, $pass)
		{
			include("conexion.php");
			
		}

		public function GetDatosUsuariosRegistrados() // sacamos todos los datos que se encuentran registrados y asociados a nuestros usuarios
     	{
        include("../conexion.php");
        $consult = mysqli_query($conn, "SELECT * FROM usuarios ");
        return mysqli_fetch_all($consult, MYSQLI_ASSOC);
     	}

		public function ConfirmEmail($email) // /sabemos si el user que se está registrando ya existe
		{
			//VERIFICAR SI EL CORREO QUE SE INGRESÓ ESTÁ O NO ESTÁ EN LA DB:
			$error = 0;
			$datos = $this->GetDatosUsuariosRegistrados();
			foreach ($datos as $datos_users) 
			{
			  if (filter_var($email, FILTER_VALIDATE_EMAIL))
			   { 
				$e = $datos_users['email'];
				if ($e == $email  ) 
				{
					$error = $error + 1;
				}
			   }else
			   {  $error = 1;  }
			}
			return $error;
		}


		public function register_user($n,$e,$p)
		{
			include("../conexion.php");
			$f = date("d-m-Y");
		$consulta = mysqli_query($conn, "INSERT INTO usuarios (nombre,email,pass,fecha_de_registro)  VALUES ('$n','$e','$p','$f')");
		/////////////////ENVIAR LINK DE ACTIVACIÓN DE CUENTA /////////////
 						$link_activacion_dealta = "https://www.dentad.online/in/?981129=()//Sa9711&activate=".$email;
                        $destino = $email;
                        $titulo = "Hola, activa tu cuenta de Dentad para empezar a trabajar";
                        
                        $contenido =  '<html>'.
                        '<head><title>Dentad te da la bienvenida...</title></head>'.
                        '<body><h1>'.$name_user.' ¡Es momento de activar tu cuenta!</h1>'.
                        'Haz clic en este enlace:'.$link_activacion_dealta.
                        '<hr>'.
                        'Array | Expertos en TIC, www.array.com.co'.
                        '</body>'.
                        '</html>';
                        $cabeceras = 'MIME-Version: 1.0' . "\r\n";
                        $cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
                        $cabeceras .= 'From: Dentad <info@dentad.online>';
                        mail($destino,$titulo,$contenido,$cabeceras);
		 
		return $consulta;
		}
	}



 ?>