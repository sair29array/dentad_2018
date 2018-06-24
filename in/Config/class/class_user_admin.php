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


		public function ActivateAccount($email)
		{
			include("../Config/conexion.php");
			$consult = mysqli_query($conn, "UPDATE usuarios SET cuenta_activa = 1 WHERE email = '$email' ");
			?><script>window.location="./?view=cuenta-activa"</script> <?php 
		}


		public function GetDatosUsuariosRegistrados() // sacamos todos los datos que se encuentran registrados y asociados a nuestros usuarios
     	{
        include("../Config/conexion.php");
        $consult = mysqli_query($conn, "SELECT * FROM usuarios ");
        return mysqli_fetch_all($consult, MYSQLI_ASSOC);
     	}


     	public function saberSIelUserEsAdmin($email)
     	{
     		include("../Config/conexion.php");
	        $consult = mysqli_query($conn, "SELECT * FROM usuarios WHERE email = '$email' ");
	       return mysqli_fetch_all($consult, MYSQLI_ASSOC);
     	}

     	public function saberSiElUserEsColaborador($email)
     	{
     			include("../Config/conexion.php");
	        $consult = mysqli_query($conn, "SELECT * FROM colaboradores WHERE email = '$email' ");
	       return mysqli_fetch_all($consult, MYSQLI_ASSOC);
     	}

     	public function GetDatosUsuarioID($email) // sacamos todos los datos que se encuentran registrados y asociados a un usuario en especifico a través de su email
     	{
     	  $issetAdmin = 0;
	      //$admin = $this->saberSIelUserEsAdmin($email)
	      foreach ($this->saberSIelUserEsAdmin($email) as $a) 
	      {
	      	$issetAdmin ++ ;
	      }

	      if ($issetAdmin != 0 ) {
	      	include("../Config/conexion.php");
	        $consult = mysqli_query($conn, "SELECT * FROM usuarios WHERE email = '$email' ");
	       return mysqli_fetch_all($consult, MYSQLI_ASSOC);
	      }

	      else
	      {

	      	$issetColaborador = 0;
	      	 foreach ($this->saberSiElUserEsColaborador($email) as $c) 
			      {
			      	$issetColaborador ++ ;
			      }
			       if ($issetColaborador != 0 ) {
			      	include("../Config/conexion.php");
			        $consult = mysqli_query($conn, "SELECT * FROM colaboradores WHERE email = '$email' ");
			       return mysqli_fetch_all($consult, MYSQLI_ASSOC);
			      }
	      }
	      
     	}



     	public function GetAdminUser($id_user)
     	{	
     		// el email es de un colaborador este colaborador tiene a un 
     		//id de la clinica que le pertenece a una clinica, esta clinica le pertenece
     		//a un user admin. y este user admin tiene un email al cual 
     		// le preguntaremos si está de alta o no
     		include("../Config/conexion.php");
			        $consult = mysqli_query($conn, "SELECT * FROM usuarios WHERE id = '$id_user' ");
			       return mysqli_fetch_all($consult, MYSQLI_ASSOC);
     	}




     	public function getClinicaColaborador($id_clinica)
     	{
     		/// obtenemos la clinica a la que se encuentra asociado el colaborador
     		include("../Config/conexion.php");
			        $consult = mysqli_query($conn, "SELECT * FROM clinicas WHERE id = '$id_clinica' ");
			       return mysqli_fetch_all($consult, MYSQLI_ASSOC);
     	}



		public function VerificarDeAlta($email)
		{

			 $issetAdmin = 0;
		      //$admin = $this->saberSIelUserEsAdmin($email)
		      foreach ($this->saberSIelUserEsAdmin($email) as $a) 
		      {
		      	$issetAdmin ++ ;
		      }

				if ($issetAdmin != 0)
				{
					$user = $this-> GetDatosUsuarioID($email);
					foreach ($user as $u) 
					{
						$deAlta = $u["de_alta"];
					}

					return $deAlta;
				}
				else // si no es un admin user:
				{
					//--
						$infoUserColaborador = $this->GetDatosUsuarioID($email);
						foreach ($infoUserColaborador as $colaborador) { }
						// obtengo la clinica con el id de la clinica
						$clinica = $this -> getClinicaColaborador($colaborador["id_clinica"]);
						foreach ($clinica as $infoclinica) {}
						// obtenemos el admin user
						$adminUser = $this -> GetAdminUser($infoclinica["id_user"]);
						foreach ($adminUser as $key) {}
						$de_alta_ = $key["de_alta"];
					//--
					return  $de_alta_ ;
				}
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

			$allAsistentes = mysqli_query($conn, "SELECT * FROM colaboradores ");
       
			$ue = 0; //users encontrados

			foreach ($allAsistentes as $uu) 
			{
				if ($uu["email"] == $EmailNuevo) // verificamos si el email no está dentro de los colaboradores
				{
					$ue++;
				}
			}

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

			$allAsistentes = mysqli_query($conn, "SELECT * FROM colaboradores ");
       
			$ue = 0; //users encontrados

			foreach ($allAsistentes as $uu) 
			{
				if ($uu["email"] == $e) // verificamos si el email no está dentro de los colaboradores
				{
					$ue++;
				}
			}

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



		public function fechaExpire($email_user)
		{
			/// sabremos la fecha en que expira la demostración:
			$issetAdmin = 0;
		      //$admin = $this->saberSIelUserEsAdmin($email)
		      foreach ($this->saberSIelUserEsAdmin($email_user) as $a) 
		      {
		      	$issetAdmin ++ ;
		      }

				if ($issetAdmin != 0)
				{
					//--
						return $a["fechaExpire"];
					//--
				}

			///////////////////////////
			else
			{
				//--
						$infoUserColaborador = $this->GetDatosUsuarioID($email_user);
						foreach ($infoUserColaborador as $colaborador) { }
						// obtengo la clinica con el id de la clinica
						$clinica = $this -> getClinicaColaborador($colaborador["id_clinica"]);
						foreach ($clinica as $infoclinica) {}
						// obtenemos el admin user
						$adminUser = $this -> GetAdminUser($infoclinica["id_user"]);
						foreach ($adminUser as $key) {}
						
					//--
							return $key["fechaExpire"];
			}

		}


		
		public function VerificarExpiracionDeLaDemostracionGRatis($email)
		{
			

			//////////////////////////////
			//////////////////////////////
			$issetAdmin = 0;
		      //$admin = $this->saberSIelUserEsAdmin($email)
		      foreach ($this->saberSIelUserEsAdmin($email) as $a) 
		      {
		      	$issetAdmin ++ ;
		      }

				if ($issetAdmin != 0)
				{
					///---
						// si la fecha de hoy coincide con la fecha de expiracion de la cuenta del user
						// entonces se mostrtara la pagina de expiración
						$user = $this->GetDatosUsuarioID($email);
						foreach ($user as $key) 
						{
						  //  $key["fechaExpire"]
						}

						if (date("Y-m-d") ==  $key["fechaExpire"] || date("Y-m-d") > $key["fechaExpire"]) 
						{
							include("../Config/conexion.php");
							$consult = mysqli_query($conn, "UPDATE usuarios SET expire = 1  WHERE email = '$email' ");
						}

						if ($key["expire"]== 1) {
							?> <script>window.location="../Expire"</script> <?php 
						}
					///---
				}
				else // si no es un admin user:
				{
					//--
						$infoUserColaborador = $this->GetDatosUsuarioID($email);
						foreach ($infoUserColaborador as $colaborador) { }
						// obtengo la clinica con el id de la clinica
						$clinica = $this -> getClinicaColaborador($colaborador["id_clinica"]);
						foreach ($clinica as $infoclinica) {}
						// obtenemos el admin user
						$adminUser = $this -> GetAdminUser($infoclinica["id_user"]);
						foreach ($adminUser as $key) {}
						
					//--
					

						if (date("Y-m-d") ==  $key["fechaExpire"] || date("Y-m-d") > $key["fechaExpire"]) 
						{
							include("../Config/conexion.php");
							$consult = mysqli_query($conn, "UPDATE usuarios SET expire = 1  WHERE email = '$email' ");
						}

						if ($key["expire"]== 1) {
							?> <script>window.location="../Expire"</script> <?php 
						}


				}
		}



		public function EstadoDeLacuenta($email_user)
		{
			$issetAdmin = 0;
		      //$admin = $this->saberSIelUserEsAdmin($email)
		      foreach ($this->saberSIelUserEsAdmin($email_user) as $a) 
		      {
		      	$issetAdmin ++ ;
		      }

				if ($issetAdmin != 0) // si el email es de un user admin:
				{
					$cuenta_activa = $a["cuenta_activa"];
				}else // si no: es de un colaborador
				{
							//--
					 $infoUserColaborador = $this->GetDatosUsuarioID($email_user);
					 foreach ($infoUserColaborador as $colaborador) { }
					 // obtengo la clinica con el id de la clinica
					 $clinica = $this -> getClinicaColaborador($colaborador["id_clinica"]);
					 foreach ($clinica as $infoclinica) {}
					 // obtenemos el admin user
					 $adminUser = $this -> GetAdminUser($infoclinica["id_user"]);
					 foreach ($adminUser as $key) {}
					 $cuenta_activa = $key["cuenta_activa"];
					//--
				}
			

			return $cuenta_activa;
		}






		
			
		
	
	}
 ?>