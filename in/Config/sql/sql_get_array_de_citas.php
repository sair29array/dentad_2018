<?php 
// SUPER_AGENDA EN EL INDEX
	//$Citas = $super_agenda->GetAllCitas($id_clinica);
								// id_clinica está declarado en el 
								// NAV
	
		session_start();
	 $_SESSION["_user_log"];

	 $id_clinica = @$_GET["id_clinica"];

	include("../../../Config/conexion.php");
			    $consult = mysqli_query($conn, "SELECT * FROM agenda_citas WHERE id_clinica = '$id_clinica' AND papelera = 0 " );
			    $citas =  mysqli_fetch_all($consult, MYSQLI_ASSOC);

	echo json_encode($citas);
	




if (isset($_POST["delete"])) {
	include("../../../Config/conexion.php");
	$cita = $_POST["id_cita__"];
		    $consult = mysqli_query($conn, "DELETE  FROM agenda_citas WHERE id_cita = '$cita' " );


	 //echo json_encode($consult)
}
		
	

 ?>