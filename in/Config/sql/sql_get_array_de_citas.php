<?php 
// SUPER_AGENDA EN EL INDEX
	//$Citas = $super_agenda->GetAllCitas($id_clinica);
								// id_clinica está declarado en el 
								// NAV
	session_start();
	 $_SESSION["_user_log"];

	 $id_clinica = $_GET["id_clinica"];

	include("../../../Config/conexion.php");
			    $consult = mysqli_query($conn, "SELECT * FROM agenda_citas WHERE id_clinica = '$id_clinica' " );
			    $citas =  mysqli_fetch_all($consult, MYSQLI_ASSOC);

	echo json_encode($citas);

 ?>