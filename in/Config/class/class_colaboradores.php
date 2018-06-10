<?php 

		class colaboradores
		{
			public function GetNumeroColaboradoresIdUSer($id_user)
			{
				 include("../Config/conexion.php");
                 $num_colaboradores  = 0;
                 $isset_clinica = 0; /// inidica si existe una clinica asociada a este user

				 $consult_clinica = mysqli_query($conn, "SELECT * FROM clinicas where id_user = '$id_user' ");

				 foreach ($consult_clinica as $cc) {
				 	$isset_clinica++;
				 	$id_clinica = $cc["id"];
				 }

				 if ($isset_clinica == 0)  // quiere decir que no existen una clinica registrada por este usuario aun 
				 {
				   return $num_colaboradores; // 0
				 }else
				 {

				    $consult = mysqli_query($conn, "SELECT * FROM colaboradores where id_clinica = '$id_clinica' ");
				     
				     foreach ($consult as $p) { $num_colaboradores++; }

				     return $num_colaboradores;
				 }


			}
		}

 ?>