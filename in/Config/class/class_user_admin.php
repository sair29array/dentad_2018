<?php 
 
	class useR
	{
		public function destroy_session()
		{
			session_destroy();
			header("location: ./");
		}

		public function create_session($email)
		{
			$s = $_SESSION["_user_log"] = $email;
			//header("location: ./");
			return  $s;
		}


		public function GetDatosUsuariosRegistrados() // sacamos todos los datos que se encuentran registrados y asociados a nuestros usuarios
     	{
        include("../Config/conexion.php");
        $consult = mysqli_query($conn, "SELECT * FROM usuarios ");
        return mysqli_fetch_all($consult, MYSQLI_ASSOC);
     	}

     	public function GetDatosUsuarioID($email) // sacamos todos los datos que se encuentran registrados y asociados a un usuario en especifico a través de su email
     	{
        include("../Config/conexion.php");
        $consult = mysqli_query($conn, "SELECT * FROM usuarios WHERE email = '$email' ");
        return mysqli_fetch_all($consult, MYSQLI_ASSOC);
     	}



		public function VerificarDeAlta($email)
		{
			$user = $this-> GetDatosUsuarioID($email);
			foreach ($user as $u) {
				$deAlta = $u["de_alta"];
			}

			return $deAlta;
		}

		public function GetAdminsSecundarios($id_user)
		{
			 include("../Config/conexion.php");
        $consult = mysqli_query($conn, "SELECT * FROM usuarios_secundarios WHERE id_usuario_principal = '$id_user' ");
        return mysqli_fetch_all($consult, MYSQLI_ASSOC);
		}




 	// actualizar correo cuando no se ha activado la cuenta:

		public function UpdateEmailUser($EmailActual,$EmailNuevo)
		{
			// consultamos la información del user con el email actual de ese user
			
			include("../../../Config/conexion.php");
        	$consult_id = mysqli_query($conn, "SELECT * FROM usuarios WHERE email = '$EmailActual' ");
        	


			foreach ($consult_id as $id_user_ ) 
			{
				$id_ = $id_user_["id"]; // entre ellos tenemos el id


			}

			// ahora preguntamos si el correo que se está queriendo actualizar no le pertenece a otro user:
			
			$allUser = mysqli_query($conn, "SELECT * FROM usuarios ");
       
			$ue = 0; //users encontrados
			foreach ($allUser as $u) 
			{
				if ($u["id"] != $id_) // que no verifique con el mismo user
				{
					if ($u["email"] == $EmailNuevo ) 
					{
						$ue = $ue  + 1;
					}
				}
			}

			
				if ($ue == 0) 
				{
					$consult = mysqli_query($conn, "UPDATE usuarios SET email = '$EmailNuevo' WHERE id = '$id_' ");
					session_start();
					$this->create_session($EmailNuevo);
					return 1;
				}else
				{
					return 0;
				}
				


				
		}

		public function UpdateDataAdminUser($n,$e,$id_user,$email_actual)
		{
			//n = nombre, $e = email nuevo
			
			include("../../../Config/conexion.php");
				
			// ahora preguntamos si el correo que se está queriendo actualizar no le pertenece a otro user:
			
			$allUser = mysqli_query($conn, "SELECT * FROM usuarios ");
       
			$ue = 0; //users encontrados
			foreach ($allUser as $u) 
			{
				if ($u["id"] != $id_user) // que no verifique con el mismo user
				{
					if ($u["email"] == $e ) 
					{
						$ue = $ue  + 1;
					}
				}
			}

			
				if ($ue == 0) 
				{
					$consult = mysqli_query($conn, "UPDATE usuarios SET email = '$e', nombre = '$n' WHERE id = '$id_user' ");
					session_start();
					$this->create_session($e);
					return 1;
				}else
				{
					return 0;
				}
				



			

				
			
		}


		
			
		
	
	}
 ?>