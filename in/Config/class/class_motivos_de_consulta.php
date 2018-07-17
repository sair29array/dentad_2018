<?php 
	class MotivosConsulta
	{	
		public function GetMotivosConsulta($id_clinica)
		{
			include("../Config/conexion.php");
				$consult_ = mysqli_query($conn, "SELECT * FROM motivos_consulta where id_clinica = '$id_clinica' AND papelera != 1 ORDER BY id DESC " );
				return mysqli_fetch_all($consult_, MYSQLI_ASSOC);
		}

		public function GetMotivoConsultaId($id_motivo)
		{
			include("../Config/conexion.php");
				$consult_ = mysqli_query($conn, "SELECT * FROM motivos_consulta where id = '$id_motivo' AND papelera != 1 ORDER BY id DESC " );
				return mysqli_fetch_all($consult_, MYSQLI_ASSOC);
		}

		public function SetNewMotivoDeConsulta($id_clinica, $motivo_consulta)
		{
			include("../../../Config/conexion.php");
			    $consulta = mysqli_query($conn, "INSERT INTO motivos_consulta (id_clinica, motivoc)  VALUES ('$id_clinica', '$motivo_consulta' )");
		}

		public function DeleteMotivoDeConsulta($delete_id)
		{
			
			include("../../../Config/conexion.php");
				$consult = mysqli_query($conn, "UPDATE  motivos_consulta SET papelera = 1 WHERE id = '$delete_id' ");
		
		}


		public function UpdateMotivoConsulta($id_edit, $new_motivoc)
		{
			include("../../../Config/conexion.php");
				$consult = mysqli_query($conn, "UPDATE  motivos_consulta SET motivoc = '$new_motivoc' WHERE id = '$id_edit' ");
		}
	}
 ?>