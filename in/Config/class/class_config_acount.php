<?php 
	
	
	class config_acount
	{
		public function send_mail_activation($email)
		{
                        include("../../../Config/conexion.php");
                        $consult = mysqli_query($conn, "SELECT * FROM usuarios WHERE email = '$email' ");
                        
			

			foreach ($consult as $data_user) 
			{
				$name_user = $data_user["nombre"];
				/////////////////ENVIAR LINK DE ACTIVACIÓN DE CUENTA /////////////
                        }
                        
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
        		 
                        $r = $email. " ".$name_user;

		return $r;
		}
	}









 ?>
