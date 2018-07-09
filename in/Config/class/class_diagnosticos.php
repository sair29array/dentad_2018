<?php 

	class diagnosticos
	{
		public function GetAllDiagnosticos($id_clinica)
		{
			include("../Config/conexion.php");
				$consult_ = mysqli_query($conn, "SELECT * FROM diagnosticos where id_clinica = '$id_clinica' AND papelera != 1 ORDER BY id DESC " );
				return mysqli_fetch_all($consult_, MYSQLI_ASSOC);
		}


		public function SetNewDiagnostico($id_clinica, $diagnostico)
		{
			include("../../../Config/conexion.php");
			    $consulta = mysqli_query($conn, "INSERT INTO diagnosticos (id_clinica, diagnostico)  VALUES ('$id_clinica', '$diagnostico' )");
		}

		public function GetDiagnosticoId($id)
		{
			include("../Config/conexion.php");
				$consult_ = mysqli_query($conn, "SELECT * FROM diagnosticos where id = '$id' ORDER BY id DESC " );
				return mysqli_fetch_all($consult_, MYSQLI_ASSOC);
		}
		public function UpdateDiagnostico($Edit_ID, $Edit_diagnostico)
		{
				include("../../../Config/conexion.php");
				$consult = mysqli_query($conn, "UPDATE  diagnosticos SET diagnostico = '$Edit_diagnostico'  WHERE id = '$Edit_ID' ");
		}

		public function Mover_a_PapeleraDiagnostico($delete_id)
		{
			include("../../../Config/conexion.php");
				$consult = mysqli_query($conn, "UPDATE  diagnosticos SET papelera = 1 WHERE id = '$delete_id' ");
		}


		


		
	}
 ?>