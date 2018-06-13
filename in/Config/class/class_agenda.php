<?php 
		class Agenda
		{

			public function GetAllCitas($id_clinica)
			{
				include("../Config/conexion.php");
			    $consult = mysqli_query($conn, "SELECT * FROM agenda_citas where id_clinica = '$id_clinica' ");
			    return mysqli_fetch_all($consult, MYSQLI_ASSOC);
			}

		}
 ?>