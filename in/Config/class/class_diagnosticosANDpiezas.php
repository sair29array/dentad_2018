<?php 
	class diagnosticosANDpiezas
	{
		public function SetDiagnosticoApieza($id_paciente_seleccionado, $id_diagnostico, $pieza_diente,$fecha_actual)    
		{
			include("../../../Config/conexion.php");
			    $consulta = mysqli_query($conn, "INSERT INTO diagnostico_piezas (id_diagnostico, id_pieza_o_diente, id_paciente, fecha_asignacion)  VALUES ('$id_diagnostico', '$pieza_diente','$id_paciente_seleccionado', '$fecha_actual')");
		}


		public function GetAllDiagnosticosRecuadro($recuadro)
		{
			if ($recuadro == 1) 
			{
				// recuadro 1 denticion permanente (11-18) /
				// denticion temporal (51 - 55)
				include("../Config/conexion.php");
				$consult_ = mysqli_query($conn, "SELECT * FROM diagnostico_piezas where (id_pieza_o_diente >= 11 AND id_pieza_o_diente <= 18) || (id_pieza_o_diente >= 51 AND id_pieza_o_diente <= 55)  ORDER BY id DESC " );
				return mysqli_fetch_all($consult_, MYSQLI_ASSOC);

			}

			if ($recuadro == 2) 
			{
				// recuadro 1 denticion permanente (41-48) /
				// denticion temporal (81 - 85)
				include("../Config/conexion.php");
				$consult_ = mysqli_query($conn, "SELECT * FROM diagnostico_piezas where (id_pieza_o_diente >= 41 AND id_pieza_o_diente <= 48) || (id_pieza_o_diente >= 81 AND id_pieza_o_diente <= 85)  ORDER BY id DESC " );
				return mysqli_fetch_all($consult_, MYSQLI_ASSOC);

			}


			if ($recuadro == 3) 
			{
				// recuadro 1 denticion permanente (21-28) /
				// denticion temporal (61 - 65)
				include("../Config/conexion.php");
				$consult_ = mysqli_query($conn, "SELECT * FROM diagnostico_piezas where (id_pieza_o_diente >= 21 AND id_pieza_o_diente <= 28) || (id_pieza_o_diente >= 61 AND id_pieza_o_diente <= 65)    ORDER BY id DESC " );
				return mysqli_fetch_all($consult_, MYSQLI_ASSOC);

			}

			if ($recuadro == 4) 
			{
				// recuadro 1 denticion permanente (31-38) /
				// denticion temporal (71 - 75)
				include("../Config/conexion.php");
				$consult_ = mysqli_query($conn, "SELECT * FROM diagnostico_piezas where (id_pieza_o_diente >= 31 AND id_pieza_o_diente <= 38) || (id_pieza_o_diente >= 71 AND id_pieza_o_diente <= 75) ORDER BY id DESC " );
				return mysqli_fetch_all($consult_, MYSQLI_ASSOC);

			}
		}


	    public function	MoverAlaPapelera($id_tratamiento_pieza, $fecha)
	    {
	    	include("../Config/conexion.php");

			   $consult = mysqli_query($conn, "UPDATE diagnostico_piezas SET 
			   	papelera = 1 ,  fecha_eliminacion = '$fecha' WHERE id = '$id_tratamiento_pieza' ");
	    }
	}


 ?>