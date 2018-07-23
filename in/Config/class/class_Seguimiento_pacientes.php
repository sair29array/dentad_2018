<?php 
	class SeguimientoPacientes
	{
		public function GetHistorial($id_clinica, $id_paciente)
		{
			include("../Config/conexion.php");
				$consult_ = mysqli_query($conn, "SELECT * FROM seguimiento_pacientes where id_clinica = '$id_clinica' AND id_paciente = '$id_paciente' ORDER BY id DESC " );
				return mysqli_fetch_all($consult_, MYSQLI_ASSOC);
		}


		public function NewSeguimiento($id_paciente,$id_clinica,$proceso, $descripcion_proceso, $fecha_actual,$fecha_de_ejecucion,$user_admin)
		{
			include("../../../Config/conexion.php");
			    $consulta = mysqli_query($conn, "INSERT INTO seguimiento_pacientes (id_clinica,id_paciente, proceso, descripcion_proceso, fecha,fecha_en_que_se_ejecutara_el_proceso, id_user_admin_o_asistente)  VALUES ('$id_clinica', '$id_paciente','$proceso', '$descripcion_proceso','$fecha_actual','$fecha_de_ejecucion','$user_admin')");
		}



		///En caso de que el seguimiento se le haga al proceso de agendar una cita, entonces existira la siguiente funcion
	public function GetIDcita($id_paciente, $fecha_y_hora_inicio)
		{
			include("../Config/conexion.php");
				$consult_ = mysqli_query($conn, "SELECT * FROM agenda_citas where id_paciente = '$id_paciente' AND start = '$fecha_y_hora_inicio'  ORDER BY id DESC " );
				return mysqli_fetch_all($consult_, MYSQLI_ASSOC);
		}

		
	}	
?>