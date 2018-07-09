<?php 
		class diente
		{

			public function GetAllTratamientos($id_diente, $id_paciente)
			{ // EL ID DEL PACIENTE ES EL NUMERO DE IDENTIDAD (CC & TI)
				
				include("../Config/conexion.php");
				 $consult = mysqli_query($conn, "SELECT * FROM tratamiento_piezas where id_paciente = '$id_paciente' AND id_pieza_o_diente = '$id_diente'  ");
			    return mysqli_fetch_all($consult, MYSQLI_ASSOC);
			}


			public function GetAllDiagnosticos($id_diente, $id_paciente)
			{ // EL ID DEL PACIENTE ES EL NUMERO DE IDENTIDAD (CC & TI)
				
				include("../Config/conexion.php");
				 $consult = mysqli_query($conn, "SELECT * FROM diagnostico_piezas where id_paciente = '$id_paciente' AND id_pieza_o_diente = '$id_diente' ");
			    return mysqli_fetch_all($consult, MYSQLI_ASSOC);
			}



			public function GetNumNotes($id_diente, $id_paciente)
			{ // EL ID DEL PACIENTE ES EL NUMERO DE IDENTIDAD (CC & TI)
				// esta funcion devuelve el numero de anotaciones ((Tratamientos o diagnosticos agregados a un diente en especifico perteneciente a un paciente))
				$TotalNotes = 0; // arranca en 0 
				$Tratamientos = $this->GetAllTratamientos($id_diente, $id_paciente);
				$Diagnosticos = $this->GetAllDiagnosticos($id_diente, $id_paciente);

				foreach ($Tratamientos as $t) 
				{
						if ($t["papelera"] == 0) 
						{
							$TotalNotes++;
						}
				}
				foreach ($Diagnosticos as $d) 
				{
					if ($d["papelera"] == 0) 
					{
						$TotalNotes++;
					}
				}

				return $TotalNotes;
			}


			public function ShowTipoDenticion($pieza)
			{
				// nos permite ver a que tipo de dentición pertenece un diente
				if ( $pieza >= 11  && $pieza <= 48  ) 
				{
					# los dientes de dentición permanente van del 11 al 48 
					# es decir es un rango 
					return "DENTICIÓN PERMANENTE";
				}
				else if ( $pieza >= 51  && $pieza <= 85)
				{
					# los dientes de dentición temporal van del 51  al 85 
					# es decir es un rango 
					return "DENTICIÓN TEMPORAL";
				}
			}
		}
 ?>