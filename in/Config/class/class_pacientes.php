<?php 

		class pacientes
		{
			public function GetNumeroPacientesIdUSer($id_user)
			{
				 include("../Config/conexion.php");
                 $num_pacientes  = 0;
                 $isset_clinica = 0; /// inidica si existe una clinica asociada a este user

				 $consult_clinica = mysqli_query($conn, "SELECT * FROM clinicas where id_user = '$id_user' ");

				 foreach ($consult_clinica as $cc) {
				 	$isset_clinica++;
				 	$id_clinica = $cc["id"];
				 }

				 if ($isset_clinica == 0)  // quiere decir que no existen una clinica registrada por este usuario aun 
				 {
				   return $num_pacientes; // 0
				 }else
				 {

				    $consult = mysqli_query($conn, "SELECT * FROM pacientes where id_clinica = '$id_clinica' ");
				     
				     foreach ($consult as $p) { $num_pacientes++; }

				     return $num_pacientes;
				 }


			}
			public function VerificarSiExisteUnPaciente_id($n_identidad)
			{
				include("../../../Config/conexion.php");
				$consult_ = mysqli_query($conn, "SELECT * FROM pacientes where num_identidad = '$n_identidad' ");
				$paciente = 0; // esta variable indica si existe o no el paciente
				foreach ($consult_ as $u) {
					$paciente++;
				}

				if ($paciente == 0) {
					return 1;
				}else 
				{
					return 0;
				}
			}

			public function VerificarSiExisteUnPaciente_e($email)
			{
				include("../../../Config/conexion.php");
				$consult_ = mysqli_query($conn, "SELECT * FROM pacientes where email = '$email' ");
				$email = 0; // esta variable indica si existe o no el email
				foreach ($consult_ as $u) {
					$email++;
				}

				if ($email == 0) {
					return 1;
				}else 
				{
					return 0;
				}
			}

			public function RegistrarNuevoPaciente($n, $a, $t, $i, $e, $c, $id_user_admin, $id_clinica, $fecha_actual, $dn, $mn, $an, $sex)
			{
				// n = nombre clinica.  $u = ubicacion . 
				include("../../../Config/conexion.php");
			    $consulta = mysqli_query($conn, "INSERT INTO pacientes (id_clinica, nombres,apellidos,tipo_identidad, num_identidad, sexo, dia_nacimiento, mes_nacimiento, anio_nacimiento, telefono, email, fecha_registro, quien_lo_registro )  VALUES ('$id_clinica', '$n', '$a', '$t', '$i','$sex','$dn','$mn','$an', '$c', '$e','$fecha_actual','$id_user_admin')");
			}


			public function GetAllPacientes($id_clinica)
			{
				include("../Config/conexion.php");
				$consult_ = mysqli_query($conn, "SELECT * FROM pacientes where id_clinica = '$id_clinica' ORDER BY id DESC " );
				return mysqli_fetch_all($consult_, MYSQLI_ASSOC);
			}



			public function GetPacienteID($id_paciente)
			{
				 // desde un objeto php con axios
				include("../../../Config/conexion.php");
				$consult_ = mysqli_query($conn, "SELECT * FROM pacientes where id = '$id_paciente' " );
				return mysqli_fetch_all($consult_, MYSQLI_ASSOC);
			}

			public function GetPacienteIDin($id_paciente)
			{
				// desde una archivo interno al index inluido
				include("../Config/conexion.php");
				$consult_ = mysqli_query($conn, "SELECT * FROM pacientes where id = '$id_paciente' " );
				return mysqli_fetch_all($consult_, MYSQLI_ASSOC);
			}

			public function GetPacienteNumID($nID)
			{
				// traer un paciente con el numero de identidad
				include("../Config/conexion.php");
				$consult_ = mysqli_query($conn, "SELECT * FROM pacientes where num_identidad = '$nID' " );
				return mysqli_fetch_all($consult_, MYSQLI_ASSOC);
			}
		}
 ?>