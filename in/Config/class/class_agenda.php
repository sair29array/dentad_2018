<?php 
		class Agenda
		{

			public function GetAllCitas($id_clinica)
			{
				include("../Config/conexion.php");
			    $consult = mysqli_query($conn, "SELECT * FROM agenda_citas where id_clinica = '$id_clinica' AND papelera = 0 ORDER BY id_cita ASC");
			    return mysqli_fetch_all($consult, MYSQLI_ASSOC);
			}


			public function GetCitasEnEspera($id_clinica)
			{
				include("../Config/conexion.php");
			    $consult = mysqli_query($conn, "SELECT * FROM agenda_citas where id_clinica = '$id_clinica' AND papelera = 0 ORDER BY turno_de_atencion ASC");
			    return mysqli_fetch_all($consult, MYSQLI_ASSOC);
			}




			public function AgendarCitaDB($id_paciente,$nombre_paciente, $motivo_consulta, $fecha_inicio, $fecha_fin, $hora_inicio, $hora_fin, $valor_cita, $observaciones,$id_clinica)
			{
				include("../../../Config/conexion.php");

				
				
				
				$title = $motivo_consulta;
				$descripcion = $observaciones;
				$color = "#cce5ff";
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
				$color = "#cce5ff";
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

			public function PonerEnEspera($id_cita, $id_clinica)
			{
				include("../Config/conexion.php");

				$all_citas = $this->GetAllCitas($id_clinica);
				$citas_en_espera = 0; // comienza en cero pero la idea es que esta variable valla contando y de como resultado el numero total de las citas en espera.
				foreach ($all_citas as $c) 
				{
				 if ($c["estado_de_la_cita"] == "en_espera") 
				 { 
				 $citas_en_espera = $c["turno_de_atencion"] + $citas_en_espera;
				 }
				}
			   $turno = $citas_en_espera + 1;
			   $consult = mysqli_query($conn, "UPDATE agenda_citas SET 
			   	estado_de_la_cita = 'en_espera', turno_de_atencion = '$turno', color = '#ffc107'  WHERE id_cita = '$id_cita' ");
			}
			
			public function AtenderCita($id_cita)
			{
				include("../Config/conexion.php");

			   $consult = mysqli_query($conn, "UPDATE agenda_citas SET 
			   	estado_de_la_cita = 'atendiendo', color='#2fca52'  WHERE id_cita = '$id_cita' ");
			}

			public function FinalizarAtencionCita($id_cita,$fecha_atencion)
			{
				include("../Config/conexion.php");

			   $consult = mysqli_query($conn, "UPDATE agenda_citas SET 
			   	estado_de_la_cita = 'finalizada' , fecha_de_atencion = '$fecha_atencion', color='#17a2b8' WHERE id_cita = '$id_cita' ");
			}

		}
 ?>



