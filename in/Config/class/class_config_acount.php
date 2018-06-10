<?php 
	
	
	class config_acount
	{
		public function send_mail_activation($email)
		{
                        include("../../../Config/conexion.php");
                        $consult = mysqli_query($conn, "SELECT * FROM usuarios WHERE email = '$email' ");
                        return mysqli_fetch_all($consult, MYSQLI_ASSOC);
			

			foreach ($consult as $data_user) 
			{
				$name_user = $data_user["nombre"];
				/////////////////ENVIAR LINK DE ACTIVACIÓN DE CUENTA /////////////

                
                $link_activacion_dealta = "https://www.dentad.com/in/?981129=()//Sa9711&activate=".$email;
                $destino = $email;
                $titulo = "Activa tu cuenta de Dentad para empezar a trabajar";
                
                $contenido = '<html>'.
                '<head><title> '.$name_user.' Te damos la bienvenida a Dentad | abre el siguiente enlace para activar tu cuenta.</title></head>'.
                '<body><h3>  '.$name_user.' Te damos la bienvenida a Dentad | abre el siguiente enlace para activar tu cuenta.</h3> <br>'.
                '<body><h3> Usuario: '.$name_user.'</h3> <br>'.
                '<body><h3>'.$link_activacion_dealta.'</h3>'.
                
                '<hr>'.
                'Dentad, un software más de Array | Expertos en TIC | www.array.com.co'.
                '</body>'.
                '</html>';
                $cabeceras = 'MIME-Version: 1.0' . "\r\n";
                $cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
                $cabeceras .= 'From: Dentad <info@dentad.com>';
                mail($destino,$titulo,$contenido,$cabeceras);
		 
			}
		}
	}


 ?>
