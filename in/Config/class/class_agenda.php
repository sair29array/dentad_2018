<?php 
		class Agenda
		{

			public function GetAllCitas($id_clinica)
			{
				include("../Config/conexion.php");
			    $consult = mysqli_query($conn, "SELECT * FROM agenda_citas where id_clinica = '$id_clinica' AND papelera = 0");
			    return mysqli_fetch_all($consult, MYSQLI_ASSOC);
			}




			public function AgendarCitaDB($id_paciente,$nombre_paciente, $motivo_consulta, $fecha_inicio, $fecha_fin, $hora_inicio, $hora_fin, $valor_cita, $observaciones,$id_clinica)
			{
				include("../../../Config/conexion.php");

				
				
				
				$title = $motivo_consulta;
				$descripcion = $observaciones;
				$color = "#fd7e14;";
				$textcolor = "#FFFFFF";
				$start = $fecha_inicio. " ". $hora_inicio;
				$end = $fecha_fin. " ". $hora_fin ;

			    $consulta = mysqli_query($conn, "INSERT INTO agenda_citas (id_clinica, id_paciente, nombre_paciente, valor_cita, title, descripcion, color, textcolor, start, end )  VALUES ('$id_clinica', '$id_paciente','$nombre_paciente', '$valor_cita', '$title', '$descripcion', '$color', '$textcolor', '$start', '$end' )");
			}


			public function GetCitaID($id_cita)
			{
				// traemos la info de una cita en particular
				include("../Config/conexion.php");
				 $consult = mysqli_query($conn, "SELECT * FROM agenda_citas where id_cita = '$id_cita' ");
			    return mysqli_fetch_all($consult, MYSQLI_ASSOC);
			}



			public function UpdateCitaDB($id_paciente,$nombre_paciente, $motivo_consulta, $fecha_inicio, $fecha_fin, $hora_inicio, $hora_fin, $valor_cita, $observaciones, $id_clinica,$id_cita)
			{
				include("../../../Config/conexion.php");

				
				
				
				$title = $motivo_consulta;
				$descripcion = $observaciones;
				$color = "#007bff";
				$textcolor = "#FFFFFF";
				$start = $fecha_inicio. " ". $hora_inicio;
				$end = $fecha_fin. " ". $hora_fin ;

			   $consult = mysqli_query($conn, "UPDATE agenda_citas SET 
			   	id_clinica = '$id_clinica',
			   	id_paciente = '$id_paciente',
			   	nombre_paciente = '$nombre_paciente',
			   	valor_cita = '$valor_cita',
			   	title = '$title',
			   	descripcion = '$descripcion',
			   	color = '$color',
			   	textcolor = '$textcolor',
			   	start = '$start',
			   	end = '$end'
			   	  WHERE id_cita = '$id_cita' ");
			}


			public function MoverAlaPapelera($id_cita)
			{
				include("../../../Config/conexion.php");

			   $consult = mysqli_query($conn, "UPDATE agenda_citas SET 
			   	papelera = 1  WHERE id_cita = '$id_cita' ");
			}



			public function GetAllCItasDeUnPaciente($id_paciente)
			{

				include("../Config/conexion.php");
				 $consult = mysqli_query($conn, "SELECT * FROM agenda_citas where id_paciente = '$id_paciente' ");
			    return mysqli_fetch_all($consult, MYSQLI_ASSOC);
			}
			
			

		}
 ?>



