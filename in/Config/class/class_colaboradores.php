<?php 

		class colaboradores
		{
			public function GetNumeroColaboradoresIdUSer($id_user)
			{
				 include("../Config/conexion.php");
                 $num_colaboradores  = 0;
                 $isset_clinica = 0; /// inidica si existe una clinica asociada a este user

				 $consult_clinica = mysqli_query($conn, "SELECT * FROM clinicas where id_user = '$id_user' ");

				 foreach ($consult_clinica as $cc) {
				 	$isset_clinica++;
				 	$id_clinica = $cc["id"];
				 }

				 if ($isset_clinica == 0)  // quiere decir que no existen una clinica registrada por este usuario aun 
				 {
				   return $num_colaboradores; // 0
				 }else
				 {

				    $consult = mysqli_query($conn, "SELECT * FROM colaboradores where id_clinica = '$id_clinica' ");
				     
				     foreach ($consult as $p) { $num_colaboradores++; }

				     return $num_colaboradores;
				 }


			}



			public function GetInfoAsistentes($id_clinica)
			{
				 include("../Config/conexion.php");
				   $consult = mysqli_query($conn, "SELECT * FROM colaboradores where id_clinica = '$id_clinica' ");
				   return $consult;
			}




			public function VerificarSiExisteUnColaborador_email($email_user)
			{
				include("../../../Config/conexion.php");
				$consult_ = mysqli_query($conn, "SELECT * FROM colaboradores where email = '$email_user' ");

				//// vERIFICAMOS TAMBIEN  LA TABLA DE USERS ADMIN
				$consultt = mysqli_query($conn, "SELECT * FROM usuarios where email = '$email_user' ");

				$colaboradores = 0; // esta variable indica si existe o no el paciente
				foreach ($consult_ as $u) {
					$colaboradores++;
				}

				foreach ($consultt as $uu) {
					$colaboradores++;
				}

				if ($colaboradores == 0) {
					return 1;
				}else 
				{
					return 0;
				}
			}




			public function RegistrarNuevoColaborador($id_clinica, $name_user, $email_user, $pass,$permiso_ver_pacientes,
		          $permiso_registrar_pacientes,
		          $permiso_actualizar_pacientes,
		          $permiso_eliminar_pacientes,
		          $permiso_ver_agenda,
		          $permiso_registrar_en_agenda,
		          $permiso_actualizar_agenda,
		          $permiso_eliminar_agenda,
		          $permiso_ver_reportes,
		          $permiso_registrar_reportes,
		          $permiso_actualizar_reportes,
		          $permiso_eliminar_reportes,
		          $permiso_ver_configuracion_cuenta,
		          $permiso_registrar_configuracion_cuenta,
		          $permiso_actualizar_configuracion_cuenta,
		          $permiso_eliminar_configuracion_cuenta)
			{
				


				include("../../../Config/conexion.php");
			    $consulta = mysqli_query($conn, "INSERT INTO colaboradores (id_clinica, nombre, email, pass )  VALUES ('$id_clinica', '$name_user', '$email_user', '$pass')");

			     $consulta = mysqli_query($conn, "INSERT INTO permiso_agenda_y_control_citas (email_colaborador_asistente, ver, registrar, actualizar, eliminar )  VALUES ('$email_user','$permiso_ver_agenda','$permiso_registrar_en_agenda','$permiso_actualizar_agenda','$permiso_eliminar_agenda')");

			     $consulta = mysqli_query($conn, "INSERT INTO permiso_control_pacientes (email_colaborador_asistente, ver, registrar, actualizar, eliminar )  VALUES ('$email_user','$permiso_ver_pacientes','$permiso_registrar_pacientes','$permiso_actualizar_pacientes','$permiso_eliminar_pacientes')");

			     $consulta = mysqli_query($conn, "INSERT INTO permiso_configuracion_cuenta (email_colaborador_asistente, ver, registrar, actualizar, eliminar )  VALUES ('$email_user','$permiso_ver_configuracion_cuenta','$permiso_registrar_configuracion_cuenta','$permiso_actualizar_configuracion_cuenta','$permiso_eliminar_configuracion_cuenta')");

			     $consulta = mysqli_query($conn, "INSERT INTO permiso_control_reportes (email_colaborador_asistente, ver, registrar, actualizar, eliminar )  VALUES ('$email_user','$permiso_ver_reportes','$permiso_registrar_reportes','$permiso_actualizar_reportes','$permiso_eliminar_reportes')");

			}

		}

 ?>