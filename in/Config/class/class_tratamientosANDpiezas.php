<?php 

	class tratamientosANDpiezas
	{
		public function SetTratpApieza($id_paciente_seleccionado, $id_tratamiento, $pieza_diente, $estado_tratamiento, $fecha_actual)
		{
			include("../../../Config/conexion.php");
			if ($estado_tratamiento == 1) {
			    $consulta = mysqli_query($conn, "INSERT INTO tratamiento_piezas (id_tratamiento, id_pieza_o_diente, id_paciente, tratamiento_en_proceso, fecha_asignacion)  VALUES ('$id_tratamiento', '$pieza_diente','$id_paciente_seleccionado', 1, '$fecha_actual')");
			}else if ($estado_tratamiento == 2) {
				$consulta = mysqli_query($conn, "INSERT INTO tratamiento_piezas (id_tratamiento, id_pieza_o_diente, id_paciente, tratamiento_finalizado, fecha_asignacion, fecha_finalizacion)  VALUES ('$id_tratamiento', '$pieza_diente','$id_paciente_seleccionado', 1, '$fecha_actual', '$fecha_actual')");
			}
		}



		public function GetAllTratamientosRecuadro($recuadro)
		{
			if ($recuadro == 1) 
			{
				// recuadro 1 denticion permanente (11-18) /
				// denticion temporal (51 - 55)
				include("../Config/conexion.php");
				$consult_ = mysqli_query($conn, "SELECT * FROM tratamiento_piezas where (id_pieza_o_diente >= 11 AND id_pieza_o_diente <= 18) || (id_pieza_o_diente >= 51 AND id_pieza_o_diente <= 55)   ORDER BY id DESC " );
				return mysqli_fetch_all($consult_, MYSQLI_ASSOC);

			}

			if ($recuadro == 2) 
			{
				// recuadro 1 denticion permanente (41-48) /
				// denticion temporal (81 - 85)
				include("../Config/conexion.php");
				$consult_ = mysqli_query($conn, "SELECT * FROM tratamiento_piezas where  (id_pieza_o_diente >= 41 AND id_pieza_o_diente <= 48) || (id_pieza_o_diente >= 81 AND id_pieza_o_diente <= 85)   ORDER BY id DESC " );
				return mysqli_fetch_all($consult_, MYSQLI_ASSOC);

			}

			if ($recuadro == 3) 
			{
				// recuadro 1 denticion permanente (21-28) /
				// denticion temporal (61 - 65)
				include("../Config/conexion.php");
				$consult_ = mysqli_query($conn, "SELECT * FROM tratamiento_piezas where (id_pieza_o_diente >= 21 AND id_pieza_o_diente <= 28) || (id_pieza_o_diente >= 61 AND id_pieza_o_diente <= 65)  ORDER BY id DESC " );
				return mysqli_fetch_all($consult_, MYSQLI_ASSOC);

			}

			if ($recuadro == 4) 
			{
				// recuadro 1 denticion permanente (31-38) /
				// denticion temporal (71 - 75)
				include("../Config/conexion.php");
				$consult_ = mysqli_query($conn, "SELECT * FROM tratamiento_piezas where (id_pieza_o_diente >= 31 AND id_pieza_o_diente <= 38) || (id_pieza_o_diente >= 71 AND id_pieza_o_diente <= 75)   ORDER BY id DESC " );
				return mysqli_fetch_all($consult_, MYSQLI_ASSOC);

			}

		}



		public function FinalizarTratamiento($id_tratamiento_pieza, $fecha)
		{
			include("../Config/conexion.php");

			   $consult = mysqli_query($conn, "UPDATE tratamiento_piezas SET 
			   	tratamiento_en_proceso = 0 , tratamiento_finalizado = 1 , fecha_finalizacion = '$fecha' WHERE id = '$id_tratamiento_pieza' ");
		}


		public function MoverAlaPapelera($id_tratamiento_pieza, $fecha)
		{
			include("../Config/conexion.php");

			   $consult = mysqli_query($conn, "UPDATE tratamiento_piezas SET 
			   	papelera = 1 ,  fecha_eliminacion = '$fecha' WHERE id = '$id_tratamiento_pieza' ");
		}
	}
 ?>