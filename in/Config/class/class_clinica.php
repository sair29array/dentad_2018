<?php 

		class Clinica
		{
			public function GetInfoClinicaUserId($id_user)
			{
				 include("../Config/conexion.php");
			     $consult = mysqli_query($conn, "SELECT * FROM clinicas where id_user = '$id_user' ");
			     return mysqli_fetch_all($consult, MYSQLI_ASSOC);
			}


			public function SetDataCLinica($n,$u,$id_user)
			{
				// n = nombre clinica.  $u = ubicacion . 
				include("../../../Config/conexion.php");
			    $consulta = mysqli_query($conn, "INSERT INTO clinicas (nombre,direccion,id_user)  VALUES ('$n', '$u','$id_user')");
			}


			public function UpdateDataCLinica($n,$u,$id_user)
			{
				// n = nombre clinica.  $u = ubicacion .
				include("../../../Config/conexion.php");
				$consult = mysqli_query($conn, "UPDATE clinicas SET nombre = '$n', direccion = '$u'   WHERE id_user = '$id_user' ");
			}
		}
 ?>