<?php 
	class fecha 
	{
		 public function GetFechaActual()
		 {
		 	$dia_actual_number = date("d");
		 	$mes_actual_number = date("m");
		 	$anio_actual_number = date("Y");
		 	$dia_semana = date("l");

		 	// meses en español:

		 	switch ($mes_actual_number) 
		 	{
		 		case "01":
		 			$mes_actual_string = "Enero";
		 			break;
		 		case "02":
	 				$mes_actual_string = "Febrero";
	 				break;

		 		case "03":
	 				$mes_actual_string = "Marzo";
	 				break;
	 			case "04":
	 				$mes_actual_string = "Abril";
	 				break;
	 			case "05":
	 				$mes_actual_string = "Mayo";
	 				break;
	 			case "06":
	 				$mes_actual_string = "Junio";
	 				break;
	 			case "07":
	 				$mes_actual_string = "Julio";
	 				break;
	 			case "08":
	 				$mes_actual_string = "Agosto";
	 				break;
	 			case "09":
	 				$mes_actual_string = "Septiembre";
	 				break;
	 			case "10":
	 				$mes_actual_string = "Octubre";
	 				break;
	 			case "11":
	 				$mes_actual_string = "Noviembre";
	 				break;
	 			case "12":
	 				$mes_actual_string = "Diciembre";
	 				break;
		 	}

		 	switch ($dia_semana) {
		 		case 'Monday':
		 			$dia_semana_string = "Lunes";
		 			break;
		 		case 'Tuesday':
		 			$dia_semana_string = "Martes";
		 			break;
		 		case 'Wednesday':
		 			$dia_semana_string = "Miércoles";
		 			break;
		 		case 'Thursday':
		 			$dia_semana_string = "Jueves";
		 			break;
		 		case 'Friday':
		 			$dia_semana_string = "Viernes";
		 			break;
		 		case 'Saturday':
		 			$dia_semana_string = "Sábado";
		 			break;
		 		case 'Sunday':
		 			$dia_semana_string = "Domingo";
		 			break;
		 		
		 	}

		 	$actual_date = $dia_semana_string.", ". $dia_actual_number ." de ". $mes_actual_string. " de ". $anio_actual_number;

		 	return $actual_date;
		 }




		 public function GetMesString($num_mes)
		 {
		 	$mes_String = "";
		 	switch ($num_mes) {
		 		case '01':
		 			$mes_String = "Enero";
		 			break;
		 	}switch ($num_mes) {
		 		case '02':
		 			$mes_String = "Febrero";
		 			break;
		 	}switch ($num_mes) {
		 		case '03':
		 			$mes_String = "Marzo";
		 			break;
		 	}switch ($num_mes) {
		 		case '04':
		 			$mes_String = "Abril";
		 			break;
		 	}switch ($num_mes) {
		 		case '05':
		 			$mes_String = "Mayo";
		 			break;
		 	}switch ($num_mes) {
		 		case '06':
		 			$mes_String = "Junio";
		 			break;
		 	}switch ($num_mes) {
		 		case '07':
		 			$mes_String = "Julio";
		 			break;
		 	}switch ($num_mes) {
		 		case '08':
		 			$mes_String = "Agosto";
		 			break;
		 	}switch ($num_mes) {
		 		case '09':
		 			$mes_String = "Septiembre";
		 			break;
		 	}switch ($num_mes) {
		 		case '10':
		 			$mes_String = "Octubre";
		 			break;
		 	}switch ($num_mes) {
		 		case '11':
		 			$mes_String = "Noviembre";
		 			break;
		 	}switch ($num_mes) {
		 		case '12':
		 			$mes_String = "Diciembre";
		 			break;
		 	}

		 	return $mes_String;
		 }
	}
 ?>