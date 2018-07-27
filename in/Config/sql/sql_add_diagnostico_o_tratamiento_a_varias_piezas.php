<?php
//error_reporting(0);

require_once("../class/class_tratamientosANDpiezas.php");
require_once("../class/class_diagnosticosANDpiezas.php");
require_once("../class/class_Seguimiento_pacientes.php");
$super_tratp = new  tratamientosANDpiezas();
$super_diagp = new  diagnosticosANDpiezas();
$super_seguimientos = new SeguimientoPacientes();
$action = 'read';

if (isset($_POST['action']))
{

	$action = $_POST['action'];
}


if ($action == 'read')
{

		if ($_POST["recuadro"] == 1) 
		{
			   $arrayPiezasDiagR1 = array(); // ARRAY de diagnosticos aginados a las piezas
			   $CountDpiezasDIag = 0;
			   $arrayPiezasTratR1 = array(); // ARRAY de tratamientos asignados a las piezas
			   $CountDpiezasTrat = 0;


			   $id_paciente_seleccionado = $_POST["id_paciente_seleccionado"]; //
			   $id_tratamiento = $_POST["id_tratamiento"];
			   $id_diagnostico = $_POST["id_diagnostico"];

			 	if ($_POST["select_11"]== 1) 
			 	{
				 	/// agregar un diagnostico
			 		$pieza_diente = 11;
			 		
				   if ($id_diagnostico != "" && $id_diagnostico != 0)
				   {
				   	array_push($arrayPiezasDiagR1, $pieza_diente);
				   	$CountDpiezasDIag++;
				      $super_diagp -> SetDiagnosticoApieza($id_paciente_seleccionado, $id_diagnostico, $pieza_diente, $_POST["fecha_actual"]) ; }
				   
					/// agregar un tratamiento 
				  if ($id_tratamiento != "" && $id_tratamiento != 0)
				  {
				  	array_push($arrayPiezasTratR1, $pieza_diente);
				   	$CountDpiezasTrat++;
				    $super_tratp -> SetTratpApieza($id_paciente_seleccionado, $id_tratamiento, $pieza_diente, $_POST["estado_tratamiento"], $_POST["fecha_actual"]);
				  }

			 	}


			 	if ($_POST["select_12"]== 1) 
			 	{
				 	/// agregar un diagnostico
			 		$pieza_diente = 12;
			 		
				   if ($id_diagnostico != "" && $id_diagnostico != 0)
				   {
				   	array_push($arrayPiezasDiagR1, $pieza_diente);
				   	$CountDpiezasDIag++;
				      $super_diagp -> SetDiagnosticoApieza($id_paciente_seleccionado, $id_diagnostico, $pieza_diente, $_POST["fecha_actual"]) ; }
				   
					/// agregar un tratamiento 
				  if ($id_tratamiento != "" && $id_tratamiento != 0)
				  {
				  	array_push($arrayPiezasTratR1, $pieza_diente);
				   	$CountDpiezasTrat++;
				    $super_tratp -> SetTratpApieza($id_paciente_seleccionado, $id_tratamiento, $pieza_diente, $_POST["estado_tratamiento"], $_POST["fecha_actual"]);
				  }

			 	}

			 	if ($_POST["select_13"]== 1) 
			 	{
				 	/// agregar un diagnostico
			 		$pieza_diente = 13;
			 		
				   if ($id_diagnostico != "" && $id_diagnostico != 0)
				   {
				   	array_push($arrayPiezasDiagR1, $pieza_diente);
				   	$CountDpiezasDIag++;
				      $super_diagp -> SetDiagnosticoApieza($id_paciente_seleccionado, $id_diagnostico, $pieza_diente, $_POST["fecha_actual"]) ; }
				   
					/// agregar un tratamiento 
				  if ($id_tratamiento != "" && $id_tratamiento != 0)
				  {
				  	array_push($arrayPiezasTratR1, $pieza_diente);
				   	$CountDpiezasTrat++;
				    $super_tratp -> SetTratpApieza($id_paciente_seleccionado, $id_tratamiento, $pieza_diente, $_POST["estado_tratamiento"], $_POST["fecha_actual"]);
				  }

			 	}

			 	if ($_POST["select_14"]== 1) 
			 	{
				 	/// agregar un diagnostico
			 		$pieza_diente = 14;
			 		
				   if ($id_diagnostico != "" && $id_diagnostico != 0)
				   {
				   	array_push($arrayPiezasDiagR1, $pieza_diente);
				   	$CountDpiezasDIag++;
				      $super_diagp -> SetDiagnosticoApieza($id_paciente_seleccionado, $id_diagnostico, $pieza_diente, $_POST["fecha_actual"]) ; }
				   
					/// agregar un tratamiento 
				  if ($id_tratamiento != "" && $id_tratamiento != 0)
				  {
				  	array_push($arrayPiezasTratR1, $pieza_diente);
				   	$CountDpiezasTrat++;
				    $super_tratp -> SetTratpApieza($id_paciente_seleccionado, $id_tratamiento, $pieza_diente, $_POST["estado_tratamiento"], $_POST["fecha_actual"]);
				  }

			 	}

			 	if ($_POST["select_15"]== 1) 
			 	{
				 	/// agregar un diagnostico
			 		$pieza_diente = 15;
			 		
				   if ($id_diagnostico != "" && $id_diagnostico != 0)
				   {
				   	array_push($arrayPiezasDiagR1, $pieza_diente);
				   	$CountDpiezasDIag++;
				      $super_diagp -> SetDiagnosticoApieza($id_paciente_seleccionado, $id_diagnostico, $pieza_diente, $_POST["fecha_actual"]) ; }
				   
					/// agregar un tratamiento 
				  if ($id_tratamiento != "" && $id_tratamiento != 0)
				  {
				  	array_push($arrayPiezasTratR1, $pieza_diente);
				   	$CountDpiezasTrat++;
				    $super_tratp -> SetTratpApieza($id_paciente_seleccionado, $id_tratamiento, $pieza_diente, $_POST["estado_tratamiento"], $_POST["fecha_actual"]);
				  }

			 	}

			 	if ($_POST["select_16"]== 1) 
			 	{
				 	/// agregar un diagnostico
			 		$pieza_diente = 16;
			 		
				   if ($id_diagnostico != "" && $id_diagnostico != 0)
				   {
				   	array_push($arrayPiezasDiagR1, $pieza_diente);
				   	$CountDpiezasDIag++;
				      $super_diagp -> SetDiagnosticoApieza($id_paciente_seleccionado, $id_diagnostico, $pieza_diente, $_POST["fecha_actual"]) ; }
				   
					/// agregar un tratamiento 
				  if ($id_tratamiento != "" && $id_tratamiento != 0)
				  {
				  	array_push($arrayPiezasTratR1, $pieza_diente);
				   	$CountDpiezasTrat++;
				    $super_tratp -> SetTratpApieza($id_paciente_seleccionado, $id_tratamiento, $pieza_diente, $_POST["estado_tratamiento"], $_POST["fecha_actual"]);
				  }

			 	}

			 	if ($_POST["select_17"]== 1) 
			 	{
				 	/// agregar un diagnostico
			 		$pieza_diente = 17;
			 		
				   if ($id_diagnostico != "" && $id_diagnostico != 0)
				   {
				   	array_push($arrayPiezasDiagR1, $pieza_diente);
				   	$CountDpiezasDIag++;
				      $super_diagp -> SetDiagnosticoApieza($id_paciente_seleccionado, $id_diagnostico, $pieza_diente, $_POST["fecha_actual"]) ; }
				   
					/// agregar un tratamiento 
				  if ($id_tratamiento != "" && $id_tratamiento != 0)
				  {
				  	array_push($arrayPiezasTratR1, $pieza_diente);
				   	$CountDpiezasTrat++;
				    $super_tratp -> SetTratpApieza($id_paciente_seleccionado, $id_tratamiento, $pieza_diente, $_POST["estado_tratamiento"], $_POST["fecha_actual"]);
				  }

			 	}

			 	if ($_POST["select_18"]== 1) 
			 	{
				 	/// agregar un diagnostico
			 		$pieza_diente = 18;
			 		
				   if ($id_diagnostico != "" && $id_diagnostico != 0)
				   {
				   	array_push($arrayPiezasDiagR1, $pieza_diente);
				   	$CountDpiezasDIag++;
				      $super_diagp -> SetDiagnosticoApieza($id_paciente_seleccionado, $id_diagnostico, $pieza_diente, $_POST["fecha_actual"]) ; }
				   
					/// agregar un tratamiento 
				  if ($id_tratamiento != "" && $id_tratamiento != 0)
				  {
				  	array_push($arrayPiezasTratR1, $pieza_diente);
				   	$CountDpiezasTrat++;
				    $super_tratp -> SetTratpApieza($id_paciente_seleccionado, $id_tratamiento, $pieza_diente, $_POST["estado_tratamiento"], $_POST["fecha_actual"]);
				  }

			 	}


			 	if ($_POST["select_51"]== 1) 
			 	{
				 	/// agregar un diagnostico
			 		$pieza_diente = 51;
			 		
				   if ($id_diagnostico != "" && $id_diagnostico != 0)
				   {
				   	array_push($arrayPiezasDiagR1, $pieza_diente);
				   	$CountDpiezasDIag++;
				      $super_diagp -> SetDiagnosticoApieza($id_paciente_seleccionado, $id_diagnostico, $pieza_diente, $_POST["fecha_actual"]) ; }
				   
					/// agregar un tratamiento 
				  if ($id_tratamiento != "" && $id_tratamiento != 0)
				  {
				  	array_push($arrayPiezasTratR1, $pieza_diente);
				   	$CountDpiezasTrat++;
				    $super_tratp -> SetTratpApieza($id_paciente_seleccionado, $id_tratamiento, $pieza_diente, $_POST["estado_tratamiento"], $_POST["fecha_actual"]);
				  }

			 	}

			 	if ($_POST["select_52"]== 1) 
			 	{
				 	/// agregar un diagnostico
			 		$pieza_diente = 52;
			 		
				   if ($id_diagnostico != "" && $id_diagnostico != 0)
				   {
				   	array_push($arrayPiezasDiagR1, $pieza_diente);
				   	$CountDpiezasDIag++;
				      $super_diagp -> SetDiagnosticoApieza($id_paciente_seleccionado, $id_diagnostico, $pieza_diente, $_POST["fecha_actual"]) ; }
				   
					/// agregar un tratamiento 
				  if ($id_tratamiento != "" && $id_tratamiento != 0)
				  {
				  	array_push($arrayPiezasTratR1, $pieza_diente);
				   	$CountDpiezasTrat++;
				    $super_tratp -> SetTratpApieza($id_paciente_seleccionado, $id_tratamiento, $pieza_diente, $_POST["estado_tratamiento"], $_POST["fecha_actual"]);
				  }

			 	}

			 	if ($_POST["select_53"]== 1) 
			 	{
				 	/// agregar un diagnostico
			 		$pieza_diente = 53;
			 		
				   if ($id_diagnostico != "" && $id_diagnostico != 0)
				   {
				   	array_push($arrayPiezasDiagR1, $pieza_diente);
				   	$CountDpiezasDIag++;
				      $super_diagp -> SetDiagnosticoApieza($id_paciente_seleccionado, $id_diagnostico, $pieza_diente, $_POST["fecha_actual"]) ; }
				   
					/// agregar un tratamiento 
				  if ($id_tratamiento != "" && $id_tratamiento != 0)
				  {
				  	array_push($arrayPiezasTratR1, $pieza_diente);
				   	$CountDpiezasTrat++;
				    $super_tratp -> SetTratpApieza($id_paciente_seleccionado, $id_tratamiento, $pieza_diente, $_POST["estado_tratamiento"], $_POST["fecha_actual"]);
				  }

			 	}

			 	if ($_POST["select_54"]== 1) 
			 	{
				 	/// agregar un diagnostico
			 		$pieza_diente = 54;
			 		
				   if ($id_diagnostico != "" && $id_diagnostico != 0)
				   {
				   	array_push($arrayPiezasDiagR1, $pieza_diente);
				   	$CountDpiezasDIag++;
				      $super_diagp -> SetDiagnosticoApieza($id_paciente_seleccionado, $id_diagnostico, $pieza_diente, $_POST["fecha_actual"]) ; }
				   
					/// agregar un tratamiento 
				  if ($id_tratamiento != "" && $id_tratamiento != 0)
				  {
				  	array_push($arrayPiezasTratR1, $pieza_diente);
				   	$CountDpiezasTrat++;
				    $super_tratp -> SetTratpApieza($id_paciente_seleccionado, $id_tratamiento, $pieza_diente, $_POST["estado_tratamiento"], $_POST["fecha_actual"]);
				  }

			 	}

			 	if ($_POST["select_55"]== 1) 
			 	{
				 	/// agregar un diagnostico
			 		$pieza_diente = 55;
			 		
				   if ($id_diagnostico != "" && $id_diagnostico != 0)
				   {
				   	array_push($arrayPiezasDiagR1, $pieza_diente);
				   	$CountDpiezasDIag++;
				      $super_diagp -> SetDiagnosticoApieza($id_paciente_seleccionado, $id_diagnostico, $pieza_diente, $_POST["fecha_actual"]) ; }
				   
					/// agregar un tratamiento 
				  if ($id_tratamiento != "" && $id_tratamiento != 0)
				  {
				  	array_push($arrayPiezasTratR1, $pieza_diente);
				   	$CountDpiezasTrat++;
				    $super_tratp -> SetTratpApieza($id_paciente_seleccionado, $id_tratamiento, $pieza_diente, $_POST["estado_tratamiento"], $_POST["fecha_actual"]);
				  }

			 	}
				



				/// si hay diagnosticos asignados
			 	if ($CountDpiezasDIag > 0) /// contamos la cantidad de valores que tiene el array de diagnosticos
			 	{
			 		if ($CountDpiezasDIag > 1)
			 		{
			 			$descripcion_proceso_ = "Piezas:". json_encode( $arrayPiezasDiagR1);
			 		}else 
			 		{
			 			$descripcion_proceso_ = "Pieza: ".  $arrayPiezasDiagR1[0];
			 		}
			 		$proceso_ = "Diagnóstico_asignado";
			      
			      $super_seguimientos -> NewSeguimientoDiag_Trat($id_paciente_seleccionado,$_POST["id_clinica"],$proceso_, $descripcion_proceso_, $_POST["fecha_actual"],$_POST["email_admin_receptor"], $id_diagnostico);
			 	}
			 	/// add seguimiento si hay Tratamientos asignados
			 	if ($CountDpiezasTrat > 0) 
			 	{
			 		if ($CountDpiezasTrat > 1) 
			 		{
			 			 if ($_POST["estado_tratamiento"] == 1) 
			 			 {
			 			 	$descripcion_proceso_ = "Piezas:". json_encode( $arrayPiezasTratR1) . " Tratamiento_en_proceso";
			 			 }else
			 			 {
			 			 	$descripcion_proceso_ = "Piezas:". json_encode( $arrayPiezasTratR1) . " Tratamiento_finalizado";
			 			 }
			 			
			 		}else
			 		{
			 			if ($_POST["estado_tratamiento"] == 1) 
			 			 {
			 			 $descripcion_proceso_ = "Pieza: ". $arrayPiezasTratR1[0] . " Tratamiento_en_proceso";
			 			 }else
			 			 {
			 			 	$descripcion_proceso_ = "Pieza: ".  $arrayPiezasTratR1[0]. " Tratamiento_finalizado";
			 			 }
			 			
			 		}
			 		$proceso_ = "Tratamiento_asignado";
			 		 $super_seguimientos -> NewSeguimientoDiag_Trat($id_paciente_seleccionado,$_POST["id_clinica"],$proceso_, $descripcion_proceso_, $_POST["fecha_actual"],$_POST["email_admin_receptor"], $id_tratamiento);
			 	}
	

			  $res['resul']=1;	
		}























		else if ($_POST["recuadro"]==2) 
		{
			  
			   $id_paciente_seleccionado = $_POST["id_paciente_seleccionado"]; //
			   $id_tratamiento = $_POST["id_tratamiento"];
			   $id_diagnostico = $_POST["id_diagnostico"];

			 	if ($_POST["select_41"]== 1) 
			 	{
				 	/// agregar un diagnostico
			 		$pieza_diente = 41;
				   if ($id_diagnostico != "" && $id_diagnostico != 0)
				   {
				      $super_diagp -> SetDiagnosticoApieza($id_paciente_seleccionado, $id_diagnostico, $pieza_diente, $_POST["fecha_actual"]) ; }
				   
					/// agregar un tratamiento 
				  if ($id_tratamiento != "" && $id_tratamiento != 0)
				  {
				    $super_tratp -> SetTratpApieza($id_paciente_seleccionado, $id_tratamiento, $pieza_diente, $_POST["estado_tratamiento"], $_POST["fecha_actual"]);
				  }

			 	}


			 	if ($_POST["select_42"]== 1) 
			 	{
				 	/// agregar un diagnostico
			 		$pieza_diente = 42;
				   if ($id_diagnostico != "" && $id_diagnostico != 0)
				   {
				      $super_diagp -> SetDiagnosticoApieza($id_paciente_seleccionado, $id_diagnostico, $pieza_diente, $_POST["fecha_actual"]) ; }
				   
					/// agregar un tratamiento 
				  if ($id_tratamiento != "" && $id_tratamiento != 0)
				  {
				    $super_tratp -> SetTratpApieza($id_paciente_seleccionado, $id_tratamiento, $pieza_diente, $_POST["estado_tratamiento"], $_POST["fecha_actual"]);
				  }

			 	}

			 	if ($_POST["select_43"]== 1) 
			 	{
				 	/// agregar un diagnostico
			 		$pieza_diente = 43;
				   if ($id_diagnostico != "" && $id_diagnostico != 0)
				   {
				      $super_diagp -> SetDiagnosticoApieza($id_paciente_seleccionado, $id_diagnostico, $pieza_diente, $_POST["fecha_actual"]) ; }
				   
					/// agregar un tratamiento 
				  if ($id_tratamiento != "" && $id_tratamiento != 0)
				  {
				    $super_tratp -> SetTratpApieza($id_paciente_seleccionado, $id_tratamiento, $pieza_diente, $_POST["estado_tratamiento"], $_POST["fecha_actual"]);
				  }

			 	}

			 	if ($_POST["select_44"]== 1) 
			 	{
				 	/// agregar un diagnostico
			 		$pieza_diente = 44;
				   if ($id_diagnostico != "" && $id_diagnostico != 0)
				   {
				      $super_diagp -> SetDiagnosticoApieza($id_paciente_seleccionado, $id_diagnostico, $pieza_diente, $_POST["fecha_actual"]) ; }
				   
					/// agregar un tratamiento 
				  if ($id_tratamiento != "" && $id_tratamiento != 0)
				  {
				    $super_tratp -> SetTratpApieza($id_paciente_seleccionado, $id_tratamiento, $pieza_diente, $_POST["estado_tratamiento"], $_POST["fecha_actual"]);
				  }

			 	}

			 	if ($_POST["select_45"]== 1) 
			 	{
				 	/// agregar un diagnostico
			 		$pieza_diente = 45;
				   if ($id_diagnostico != "" && $id_diagnostico != 0)
				   {
				      $super_diagp -> SetDiagnosticoApieza($id_paciente_seleccionado, $id_diagnostico, $pieza_diente, $_POST["fecha_actual"]) ; }
				   
					/// agregar un tratamiento 
				  if ($id_tratamiento != "" && $id_tratamiento != 0)
				  {
				    $super_tratp -> SetTratpApieza($id_paciente_seleccionado, $id_tratamiento, $pieza_diente, $_POST["estado_tratamiento"], $_POST["fecha_actual"]);
				  }

			 	}

			 	if ($_POST["select_46"]== 1) 
			 	{
				 	/// agregar un diagnostico
			 		$pieza_diente = 46;
				   if ($id_diagnostico != "" && $id_diagnostico != 0)
				   {
				      $super_diagp -> SetDiagnosticoApieza($id_paciente_seleccionado, $id_diagnostico, $pieza_diente, $_POST["fecha_actual"]) ; }
				   
					/// agregar un tratamiento 
				  if ($id_tratamiento != "" && $id_tratamiento != 0)
				  {
				    $super_tratp -> SetTratpApieza($id_paciente_seleccionado, $id_tratamiento, $pieza_diente, $_POST["estado_tratamiento"], $_POST["fecha_actual"]);
				  }

			 	}

			 	if ($_POST["select_47"]== 1) 
			 	{
				 	/// agregar un diagnostico
			 		$pieza_diente = 47;
				   if ($id_diagnostico != "" && $id_diagnostico != 0)
				   {
				      $super_diagp -> SetDiagnosticoApieza($id_paciente_seleccionado, $id_diagnostico, $pieza_diente, $_POST["fecha_actual"]) ; }
				   
					/// agregar un tratamiento 
				  if ($id_tratamiento != "" && $id_tratamiento != 0)
				  {
				    $super_tratp -> SetTratpApieza($id_paciente_seleccionado, $id_tratamiento, $pieza_diente, $_POST["estado_tratamiento"], $_POST["fecha_actual"]);
				  }

			 	}

			 	if ($_POST["select_48"]== 1) 
			 	{
				 	/// agregar un diagnostico
			 		$pieza_diente = 48;
				   if ($id_diagnostico != "" && $id_diagnostico != 0)
				   {
				      $super_diagp -> SetDiagnosticoApieza($id_paciente_seleccionado, $id_diagnostico, $pieza_diente, $_POST["fecha_actual"]) ; }
				   
					/// agregar un tratamiento 
				  if ($id_tratamiento != "" && $id_tratamiento != 0)
				  {
				    $super_tratp -> SetTratpApieza($id_paciente_seleccionado, $id_tratamiento, $pieza_diente, $_POST["estado_tratamiento"], $_POST["fecha_actual"]);
				  }

			 	}


			 	if ($_POST["select_81"]== 1) 
			 	{
				 	/// agregar un diagnostico
			 		$pieza_diente = 81;
				   if ($id_diagnostico != "" && $id_diagnostico != 0)
				   {
				      $super_diagp -> SetDiagnosticoApieza($id_paciente_seleccionado, $id_diagnostico, $pieza_diente, $_POST["fecha_actual"]) ; }
				   
					/// agregar un tratamiento 
				  if ($id_tratamiento != "" && $id_tratamiento != 0)
				  {
				    $super_tratp -> SetTratpApieza($id_paciente_seleccionado, $id_tratamiento, $pieza_diente, $_POST["estado_tratamiento"], $_POST["fecha_actual"]);
				  }

			 	}

			 	if ($_POST["select_82"]== 1) 
			 	{
				 	/// agregar un diagnostico
			 		$pieza_diente = 82;
				   if ($id_diagnostico != "" && $id_diagnostico != 0)
				   {
				      $super_diagp -> SetDiagnosticoApieza($id_paciente_seleccionado, $id_diagnostico, $pieza_diente, $_POST["fecha_actual"]) ; }
				   
					/// agregar un tratamiento 
				  if ($id_tratamiento != "" && $id_tratamiento != 0)
				  {
				    $super_tratp -> SetTratpApieza($id_paciente_seleccionado, $id_tratamiento, $pieza_diente, $_POST["estado_tratamiento"], $_POST["fecha_actual"]);
				  }

			 	}

			 	if ($_POST["select_83"]== 1) 
			 	{
				 	/// agregar un diagnostico
			 		$pieza_diente = 83;
				   if ($id_diagnostico != "" && $id_diagnostico != 0)
				   {
				      $super_diagp -> SetDiagnosticoApieza($id_paciente_seleccionado, $id_diagnostico, $pieza_diente, $_POST["fecha_actual"]) ; }
				   
					/// agregar un tratamiento 
				  if ($id_tratamiento != "" && $id_tratamiento != 0)
				  {
				    $super_tratp -> SetTratpApieza($id_paciente_seleccionado, $id_tratamiento, $pieza_diente, $_POST["estado_tratamiento"], $_POST["fecha_actual"]);
				  }

			 	}

			 	if ($_POST["select_84"]== 1) 
			 	{
				 	/// agregar un diagnostico
			 		$pieza_diente = 84;
				   if ($id_diagnostico != "" && $id_diagnostico != 0)
				   {
				      $super_diagp -> SetDiagnosticoApieza($id_paciente_seleccionado, $id_diagnostico, $pieza_diente, $_POST["fecha_actual"]) ; }
				   
					/// agregar un tratamiento 
				  if ($id_tratamiento != "" && $id_tratamiento != 0)
				  {
				    $super_tratp -> SetTratpApieza($id_paciente_seleccionado, $id_tratamiento, $pieza_diente, $_POST["estado_tratamiento"], $_POST["fecha_actual"]);
				  }

			 	}

			 	if ($_POST["select_85"]== 1) 
			 	{
				 	/// agregar un diagnostico
			 		$pieza_diente = 85;
				   if ($id_diagnostico != "" && $id_diagnostico != 0)
				   {
				      $super_diagp -> SetDiagnosticoApieza($id_paciente_seleccionado, $id_diagnostico, $pieza_diente, $_POST["fecha_actual"]) ; }
				   
					/// agregar un tratamiento 
				  if ($id_tratamiento != "" && $id_tratamiento != 0)
				  {
				    $super_tratp -> SetTratpApieza($id_paciente_seleccionado, $id_tratamiento, $pieza_diente, $_POST["estado_tratamiento"], $_POST["fecha_actual"]);
				  }

			 	}
				
			  $res['resul']=1;	
		}






















		else if ($_POST["recuadro"]==3) 
		{
			  
			   $id_paciente_seleccionado = $_POST["id_paciente_seleccionado"]; //
			   $id_tratamiento = $_POST["id_tratamiento"];
			   $id_diagnostico = $_POST["id_diagnostico"];

			 	if ($_POST["select_21"]== 1) 
			 	{
				 	/// agregar un diagnostico
			 		$pieza_diente = 21;
				   if ($id_diagnostico != "" && $id_diagnostico != 0)
				   {
				      $super_diagp -> SetDiagnosticoApieza($id_paciente_seleccionado, $id_diagnostico, $pieza_diente, $_POST["fecha_actual"]) ; }
				   
					/// agregar un tratamiento 
				  if ($id_tratamiento != "" && $id_tratamiento != 0)
				  {
				    $super_tratp -> SetTratpApieza($id_paciente_seleccionado, $id_tratamiento, $pieza_diente, $_POST["estado_tratamiento"], $_POST["fecha_actual"]);
				  }

			 	}


			 	if ($_POST["select_22"]== 1) 
			 	{
				 	/// agregar un diagnostico
			 		$pieza_diente = 22;
				   if ($id_diagnostico != "" && $id_diagnostico != 0)
				   {
				      $super_diagp -> SetDiagnosticoApieza($id_paciente_seleccionado, $id_diagnostico, $pieza_diente, $_POST["fecha_actual"]) ; }
				   
					/// agregar un tratamiento 
				  if ($id_tratamiento != "" && $id_tratamiento != 0)
				  {
				    $super_tratp -> SetTratpApieza($id_paciente_seleccionado, $id_tratamiento, $pieza_diente, $_POST["estado_tratamiento"], $_POST["fecha_actual"]);
				  }

			 	}

			 	if ($_POST["select_23"]== 1) 
			 	{
				 	/// agregar un diagnostico
			 		$pieza_diente = 23;
				   if ($id_diagnostico != "" && $id_diagnostico != 0)
				   {
				      $super_diagp -> SetDiagnosticoApieza($id_paciente_seleccionado, $id_diagnostico, $pieza_diente, $_POST["fecha_actual"]) ; }
				   
					/// agregar un tratamiento 
				  if ($id_tratamiento != "" && $id_tratamiento != 0)
				  {
				    $super_tratp -> SetTratpApieza($id_paciente_seleccionado, $id_tratamiento, $pieza_diente, $_POST["estado_tratamiento"], $_POST["fecha_actual"]);
				  }

			 	}

			 	if ($_POST["select_24"]== 1) 
			 	{
				 	/// agregar un diagnostico
			 		$pieza_diente = 24;
				   if ($id_diagnostico != "" && $id_diagnostico != 0)
				   {
				      $super_diagp -> SetDiagnosticoApieza($id_paciente_seleccionado, $id_diagnostico, $pieza_diente, $_POST["fecha_actual"]) ; }
				   
					/// agregar un tratamiento 
				  if ($id_tratamiento != "" && $id_tratamiento != 0)
				  {
				    $super_tratp -> SetTratpApieza($id_paciente_seleccionado, $id_tratamiento, $pieza_diente, $_POST["estado_tratamiento"], $_POST["fecha_actual"]);
				  }

			 	}

			 	if ($_POST["select_25"]== 1) 
			 	{
				 	/// agregar un diagnostico
			 		$pieza_diente = 25;
				   if ($id_diagnostico != "" && $id_diagnostico != 0)
				   {
				      $super_diagp -> SetDiagnosticoApieza($id_paciente_seleccionado, $id_diagnostico, $pieza_diente, $_POST["fecha_actual"]) ; }
				   
					/// agregar un tratamiento 
				  if ($id_tratamiento != "" && $id_tratamiento != 0)
				  {
				    $super_tratp -> SetTratpApieza($id_paciente_seleccionado, $id_tratamiento, $pieza_diente, $_POST["estado_tratamiento"], $_POST["fecha_actual"]);
				  }

			 	}

			 	if ($_POST["select_26"]== 1) 
			 	{
				 	/// agregar un diagnostico
			 		$pieza_diente = 26;
				   if ($id_diagnostico != "" && $id_diagnostico != 0)
				   {
				      $super_diagp -> SetDiagnosticoApieza($id_paciente_seleccionado, $id_diagnostico, $pieza_diente, $_POST["fecha_actual"]) ; }
				   
					/// agregar un tratamiento 
				  if ($id_tratamiento != "" && $id_tratamiento != 0)
				  {
				    $super_tratp -> SetTratpApieza($id_paciente_seleccionado, $id_tratamiento, $pieza_diente, $_POST["estado_tratamiento"], $_POST["fecha_actual"]);
				  }

			 	}

			 	if ($_POST["select_27"]== 1) 
			 	{
				 	/// agregar un diagnostico
			 		$pieza_diente = 27;
				   if ($id_diagnostico != "" && $id_diagnostico != 0)
				   {
				      $super_diagp -> SetDiagnosticoApieza($id_paciente_seleccionado, $id_diagnostico, $pieza_diente, $_POST["fecha_actual"]) ; }
				   
					/// agregar un tratamiento 
				  if ($id_tratamiento != "" && $id_tratamiento != 0)
				  {
				    $super_tratp -> SetTratpApieza($id_paciente_seleccionado, $id_tratamiento, $pieza_diente, $_POST["estado_tratamiento"], $_POST["fecha_actual"]);
				  }

			 	}

			 	if ($_POST["select_28"]== 1) 
			 	{
				 	/// agregar un diagnostico
			 		$pieza_diente = 28;
				   if ($id_diagnostico != "" && $id_diagnostico != 0)
				   {
				      $super_diagp -> SetDiagnosticoApieza($id_paciente_seleccionado, $id_diagnostico, $pieza_diente, $_POST["fecha_actual"]) ; }
				   
					/// agregar un tratamiento 
				  if ($id_tratamiento != "" && $id_tratamiento != 0)
				  {
				    $super_tratp -> SetTratpApieza($id_paciente_seleccionado, $id_tratamiento, $pieza_diente, $_POST["estado_tratamiento"], $_POST["fecha_actual"]);
				  }

			 	}


			 	if ($_POST["select_61"]== 1) 
			 	{
				 	/// agregar un diagnostico
			 		$pieza_diente = 61;
				   if ($id_diagnostico != "" && $id_diagnostico != 0)
				   {
				      $super_diagp -> SetDiagnosticoApieza($id_paciente_seleccionado, $id_diagnostico, $pieza_diente, $_POST["fecha_actual"]) ; }
				   
					/// agregar un tratamiento 
				  if ($id_tratamiento != "" && $id_tratamiento != 0)
				  {
				    $super_tratp -> SetTratpApieza($id_paciente_seleccionado, $id_tratamiento, $pieza_diente, $_POST["estado_tratamiento"], $_POST["fecha_actual"]);
				  }

			 	}

			 	if ($_POST["select_62"]== 1) 
			 	{
				 	/// agregar un diagnostico
			 		$pieza_diente = 62;
				   if ($id_diagnostico != "" && $id_diagnostico != 0)
				   {
				      $super_diagp -> SetDiagnosticoApieza($id_paciente_seleccionado, $id_diagnostico, $pieza_diente, $_POST["fecha_actual"]) ; }
				   
					/// agregar un tratamiento 
				  if ($id_tratamiento != "" && $id_tratamiento != 0)
				  {
				    $super_tratp -> SetTratpApieza($id_paciente_seleccionado, $id_tratamiento, $pieza_diente, $_POST["estado_tratamiento"], $_POST["fecha_actual"]);
				  }

			 	}

			 	if ($_POST["select_63"]== 1) 
			 	{
				 	/// agregar un diagnostico
			 		$pieza_diente = 63;
				   if ($id_diagnostico != "" && $id_diagnostico != 0)
				   {
				      $super_diagp -> SetDiagnosticoApieza($id_paciente_seleccionado, $id_diagnostico, $pieza_diente, $_POST["fecha_actual"]) ; }
				   
					/// agregar un tratamiento 
				  if ($id_tratamiento != "" && $id_tratamiento != 0)
				  {
				    $super_tratp -> SetTratpApieza($id_paciente_seleccionado, $id_tratamiento, $pieza_diente, $_POST["estado_tratamiento"], $_POST["fecha_actual"]);
				  }

			 	}

			 	if ($_POST["select_64"]== 1) 
			 	{
				 	/// agregar un diagnostico
			 		$pieza_diente = 64;
				   if ($id_diagnostico != "" && $id_diagnostico != 0)
				   {
				      $super_diagp -> SetDiagnosticoApieza($id_paciente_seleccionado, $id_diagnostico, $pieza_diente, $_POST["fecha_actual"]) ; }
				   
					/// agregar un tratamiento 
				  if ($id_tratamiento != "" && $id_tratamiento != 0)
				  {
				    $super_tratp -> SetTratpApieza($id_paciente_seleccionado, $id_tratamiento, $pieza_diente, $_POST["estado_tratamiento"], $_POST["fecha_actual"]);
				  }

			 	}

			 	if ($_POST["select_65"]== 1) 
			 	{
				 	/// agregar un diagnostico
			 		$pieza_diente = 65;
				   if ($id_diagnostico != "" && $id_diagnostico != 0)
				   {
				      $super_diagp -> SetDiagnosticoApieza($id_paciente_seleccionado, $id_diagnostico, $pieza_diente, $_POST["fecha_actual"]) ; }
				   
					/// agregar un tratamiento 
				  if ($id_tratamiento != "" && $id_tratamiento != 0)
				  {
				    $super_tratp -> SetTratpApieza($id_paciente_seleccionado, $id_tratamiento, $pieza_diente, $_POST["estado_tratamiento"], $_POST["fecha_actual"]);
				  }

			 	}
				
			  $res['resul']=1;	
		}




















		else if ($_POST["recuadro"]==4) 
		{
			  
			   $id_paciente_seleccionado = $_POST["id_paciente_seleccionado"]; //
			   $id_tratamiento = $_POST["id_tratamiento"];
			   $id_diagnostico = $_POST["id_diagnostico"];

			 	if ($_POST["select_31"]== 1) 
			 	{
				 	/// agregar un diagnostico
			 		$pieza_diente = 31;
				   if ($id_diagnostico != "" && $id_diagnostico != 0)
				   {
				      $super_diagp -> SetDiagnosticoApieza($id_paciente_seleccionado, $id_diagnostico, $pieza_diente, $_POST["fecha_actual"]) ; }
				   
					/// agregar un tratamiento 
				  if ($id_tratamiento != "" && $id_tratamiento != 0)
				  {
				    $super_tratp -> SetTratpApieza($id_paciente_seleccionado, $id_tratamiento, $pieza_diente, $_POST["estado_tratamiento"], $_POST["fecha_actual"]);
				  }

			 	}


			 	if ($_POST["select_32"]== 1) 
			 	{
				 	/// agregar un diagnostico
			 		$pieza_diente = 32;
				   if ($id_diagnostico != "" && $id_diagnostico != 0)
				   {
				      $super_diagp -> SetDiagnosticoApieza($id_paciente_seleccionado, $id_diagnostico, $pieza_diente, $_POST["fecha_actual"]) ; }
				   
					/// agregar un tratamiento 
				  if ($id_tratamiento != "" && $id_tratamiento != 0)
				  {
				    $super_tratp -> SetTratpApieza($id_paciente_seleccionado, $id_tratamiento, $pieza_diente, $_POST["estado_tratamiento"], $_POST["fecha_actual"]);
				  }

			 	}

			 	if ($_POST["select_33"]== 1) 
			 	{
				 	/// agregar un diagnostico
			 		$pieza_diente = 33;
				   if ($id_diagnostico != "" && $id_diagnostico != 0)
				   {
				      $super_diagp -> SetDiagnosticoApieza($id_paciente_seleccionado, $id_diagnostico, $pieza_diente, $_POST["fecha_actual"]) ; }
				   
					/// agregar un tratamiento 
				  if ($id_tratamiento != "" && $id_tratamiento != 0)
				  {
				    $super_tratp -> SetTratpApieza($id_paciente_seleccionado, $id_tratamiento, $pieza_diente, $_POST["estado_tratamiento"], $_POST["fecha_actual"]);
				  }

			 	}

			 	if ($_POST["select_34"]== 1) 
			 	{
				 	/// agregar un diagnostico
			 		$pieza_diente = 34;
				   if ($id_diagnostico != "" && $id_diagnostico != 0)
				   {
				      $super_diagp -> SetDiagnosticoApieza($id_paciente_seleccionado, $id_diagnostico, $pieza_diente, $_POST["fecha_actual"]) ; }
				   
					/// agregar un tratamiento 
				  if ($id_tratamiento != "" && $id_tratamiento != 0)
				  {
				    $super_tratp -> SetTratpApieza($id_paciente_seleccionado, $id_tratamiento, $pieza_diente, $_POST["estado_tratamiento"], $_POST["fecha_actual"]);
				  }

			 	}

			 	if ($_POST["select_35"]== 1) 
			 	{
				 	/// agregar un diagnostico
			 		$pieza_diente = 35;
				   if ($id_diagnostico != "" && $id_diagnostico != 0)
				   {
				      $super_diagp -> SetDiagnosticoApieza($id_paciente_seleccionado, $id_diagnostico, $pieza_diente, $_POST["fecha_actual"]) ; }
				   
					/// agregar un tratamiento 
				  if ($id_tratamiento != "" && $id_tratamiento != 0)
				  {
				    $super_tratp -> SetTratpApieza($id_paciente_seleccionado, $id_tratamiento, $pieza_diente, $_POST["estado_tratamiento"], $_POST["fecha_actual"]);
				  }

			 	}

			 	if ($_POST["select_36"]== 1) 
			 	{
				 	/// agregar un diagnostico
			 		$pieza_diente = 36;
				   if ($id_diagnostico != "" && $id_diagnostico != 0)
				   {
				      $super_diagp -> SetDiagnosticoApieza($id_paciente_seleccionado, $id_diagnostico, $pieza_diente, $_POST["fecha_actual"]) ; }
				   
					/// agregar un tratamiento 
				  if ($id_tratamiento != "" && $id_tratamiento != 0)
				  {
				    $super_tratp -> SetTratpApieza($id_paciente_seleccionado, $id_tratamiento, $pieza_diente, $_POST["estado_tratamiento"], $_POST["fecha_actual"]);
				  }

			 	}

			 	if ($_POST["select_37"]== 1) 
			 	{
				 	/// agregar un diagnostico
			 		$pieza_diente = 37;
				   if ($id_diagnostico != "" && $id_diagnostico != 0)
				   {
				      $super_diagp -> SetDiagnosticoApieza($id_paciente_seleccionado, $id_diagnostico, $pieza_diente, $_POST["fecha_actual"]) ; }
				   
					/// agregar un tratamiento 
				  if ($id_tratamiento != "" && $id_tratamiento != 0)
				  {
				    $super_tratp -> SetTratpApieza($id_paciente_seleccionado, $id_tratamiento, $pieza_diente, $_POST["estado_tratamiento"], $_POST["fecha_actual"]);
				  }

			 	}

			 	if ($_POST["select_38"]== 1) 
			 	{
				 	/// agregar un diagnostico
			 		$pieza_diente = 38;
				   if ($id_diagnostico != "" && $id_diagnostico != 0)
				   {
				      $super_diagp -> SetDiagnosticoApieza($id_paciente_seleccionado, $id_diagnostico, $pieza_diente, $_POST["fecha_actual"]) ; }
				   
					/// agregar un tratamiento 
				  if ($id_tratamiento != "" && $id_tratamiento != 0)
				  {
				    $super_tratp -> SetTratpApieza($id_paciente_seleccionado, $id_tratamiento, $pieza_diente, $_POST["estado_tratamiento"], $_POST["fecha_actual"]);
				  }

			 	}


			 	if ($_POST["select_71"]== 1) 
			 	{
				 	/// agregar un diagnostico
			 		$pieza_diente = 71;
				   if ($id_diagnostico != "" && $id_diagnostico != 0)
				   {
				      $super_diagp -> SetDiagnosticoApieza($id_paciente_seleccionado, $id_diagnostico, $pieza_diente, $_POST["fecha_actual"]) ; }
				   
					/// agregar un tratamiento 
				  if ($id_tratamiento != "" && $id_tratamiento != 0)
				  {
				    $super_tratp -> SetTratpApieza($id_paciente_seleccionado, $id_tratamiento, $pieza_diente, $_POST["estado_tratamiento"], $_POST["fecha_actual"]);
				  }

			 	}

			 	if ($_POST["select_72"]== 1) 
			 	{
				 	/// agregar un diagnostico
			 		$pieza_diente = 72;
				   if ($id_diagnostico != "" && $id_diagnostico != 0)
				   {
				      $super_diagp -> SetDiagnosticoApieza($id_paciente_seleccionado, $id_diagnostico, $pieza_diente, $_POST["fecha_actual"]) ; }
				   
					/// agregar un tratamiento 
				  if ($id_tratamiento != "" && $id_tratamiento != 0)
				  {
				    $super_tratp -> SetTratpApieza($id_paciente_seleccionado, $id_tratamiento, $pieza_diente, $_POST["estado_tratamiento"], $_POST["fecha_actual"]);
				  }

			 	}

			 	if ($_POST["select_73"]== 1) 
			 	{
				 	/// agregar un diagnostico
			 		$pieza_diente = 73;
				   if ($id_diagnostico != "" && $id_diagnostico != 0)
				   {
				      $super_diagp -> SetDiagnosticoApieza($id_paciente_seleccionado, $id_diagnostico, $pieza_diente, $_POST["fecha_actual"]) ; }
				   
					/// agregar un tratamiento 
				  if ($id_tratamiento != "" && $id_tratamiento != 0)
				  {
				    $super_tratp -> SetTratpApieza($id_paciente_seleccionado, $id_tratamiento, $pieza_diente, $_POST["estado_tratamiento"], $_POST["fecha_actual"]);
				  }

			 	}

			 	if ($_POST["select_74"]== 1) 
			 	{
				 	/// agregar un diagnostico
			 		$pieza_diente = 74;
				   if ($id_diagnostico != "" && $id_diagnostico != 0)
				   {
				      $super_diagp -> SetDiagnosticoApieza($id_paciente_seleccionado, $id_diagnostico, $pieza_diente, $_POST["fecha_actual"]) ; }
				   
					/// agregar un tratamiento 
				  if ($id_tratamiento != "" && $id_tratamiento != 0)
				  {
				    $super_tratp -> SetTratpApieza($id_paciente_seleccionado, $id_tratamiento, $pieza_diente, $_POST["estado_tratamiento"], $_POST["fecha_actual"]);
				  }

			 	}

			 	if ($_POST["select_75"]== 1) 
			 	{
				 	/// agregar un diagnostico
			 		$pieza_diente = 75;
				   if ($id_diagnostico != "" && $id_diagnostico != 0)
				   {
				      $super_diagp -> SetDiagnosticoApieza($id_paciente_seleccionado, $id_diagnostico, $pieza_diente, $_POST["fecha_actual"]) ; }
				   
					/// agregar un tratamiento 
				  if ($id_tratamiento != "" && $id_tratamiento != 0)
				  {
				    $super_tratp -> SetTratpApieza($id_paciente_seleccionado, $id_tratamiento, $pieza_diente, $_POST["estado_tratamiento"], $_POST["fecha_actual"]);
				  }

			 	}
				
			  $res['resul']=1;	
		}
   
   
}



header('Content-Type: application/json');
echo json_encode($res);
die();


?>