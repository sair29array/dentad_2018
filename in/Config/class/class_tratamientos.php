<?php 

	class tratamientos 
	{
		public function SetNewTratamiento($id_clinica, $tratamiento, $valor_total, $cuota_inicial, $duracion_anios, $duracion_meses, $duracion_dias)
		{
			include("../../../Config/conexion.php");
			    $consulta = mysqli_query($conn, "INSERT INTO tratamientos (id_clinica, tratamiento, valor_total, cuota_inicial, duracion_dias, duracion_meses, duracion_anios)  VALUES ('$id_clinica', '$tratamiento', '$valor_total', '$cuota_inicial', '$duracion_dias', '$duracion_meses', '$duracion_anios')");


		}



		public function GetAllTratamientos($id_clinica)
		{
			include("../Config/conexion.php");
				$consult_ = mysqli_query($conn, "SELECT * FROM tratamientos where id_clinica = '$id_clinica' AND papelera != 1 ORDER BY id DESC " );
				return mysqli_fetch_all($consult_, MYSQLI_ASSOC);
		}


		public function GetTratamientoID($id)
		{
			include("../Config/conexion.php");
				$consult_ = mysqli_query($conn, "SELECT * FROM tratamientos where id = '$id' ORDER BY id DESC " );
				return mysqli_fetch_all($consult_, MYSQLI_ASSOC);

		}

		public function UpdateTratamiento($id_tratamiento, $tratamiento, $valor_total, $cuota_inicial, $duracion_anios, $duracion_meses, $duracion_dias)
		{
			include("../../../Config/conexion.php");
				$consult = mysqli_query($conn, "UPDATE tratamientos SET tratamiento = '$tratamiento', valor_total = '$valor_total', cuota_inicial = '$cuota_inicial', duracion_dias = '$duracion_dias', duracion_meses = '$duracion_meses', duracion_anios = '$duracion_anios'   WHERE id = '$id_tratamiento' ");
		}

		public function DeleteNewTratamiento($id_tratamiento)
		{
			// realmente se cambia el valor de la papelera de 0 a 1 
			include("../../../Config/conexion.php");
				$consult = mysqli_query($conn, "UPDATE  tratamientos SET papelera = 1 WHERE id = '$id_tratamiento' ");
		}
	}

 ?>