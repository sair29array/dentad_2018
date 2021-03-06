<?php 
$hora_inicio_seleccionada = "";
$fecha_seleccionada = substr($_GET["date"] , 0, 10 );
if (strlen($_GET["date"]) > 10) 
{
	$hora_inicio_seleccionada = substr($_GET["date"] , 11 );
}
?>
<!-- Select2 -->
          <link rel="stylesheet" href="plugins/select2/select2.min.css">
          <script  src="dist/fullcalendar/bootstrap-clockpicker.js" ></script>
          <link rel="stylesheet" type="text/css" href="dist/fullcalendar/bootstrap-clockpicker.css">
<div class="content-wrapper" id="AgendarForm">
			
			<?php 
		if ($isset_Clinica  != 0) 
			//////si existe una clinica registrada a nombre del user:
		{
			
			$num_pacientes = 0;
			foreach ($pacientes_DB as $num) {
				$num_pacientes ++;
			}
			if ($num_pacientes == 0) 
			{
				?>
			<div class="col-sm-12">
	            <div class="alert alert-info alert-dismissable col-sm-12">
	              <i class="fa fa-warning"></i>
	              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	              <b>¡Vaya!, </b> Aún no tienes pacientes registrados en tu clínica. Para agendar citas <a href="./Todos-mis-pacientes">necesitas pacientes</a>.
	            </div>
        	</div>
				<?php 
			}
		}else // si no tiene una clinica
		{
				?>
			<div class="col-sm-12">
	            <div class="alert alert-info alert-dismissable col-sm-12">
	              <i class="fa fa-warning"></i>
	              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	              <b>¡Vaya!, </b> Aún no has configurado tu clínica. Para agendar citas debes <a href="./Mi-Clínica">configurar tu clínica</a> y tener pacientes.
	            </div>
       		</div>
				<?php 
		}
			 ?>
				<!-- Modal para agendar  citas -->



		    <div class="card">
		      <div class="modal-header">
		        <h2 class="modal-title" >Agendar una cita para la fecha  <b ><?php echo $fecha_seleccionada; ?></b> </h2>
		        <button type="button" class="close"  >
		          <span > <a href="./Agenda"><h1><i class="fa fa-calendar-alt"></i></h1></a></span>
		        </button>
		      </div>
		      <div class="modal-body">




		        <div v-if="!messageexito">
		        	<div class="col-md-12">
		        		<div class="row">
		        			
		        	


			        	<div class="col-md-6">
			        		<p v-if="id_paciente_null" class="text-danger">Este campo es obligatorio (*)</p>
	                 
	                  	<select  id="id_paciente" class="form-control select2" style="width: 100%;">

	                  	<option value="0">Escojer un paciente </option>
	                  	<?php foreach ($pacientes_DB  as $pe ) 
	                  	{
	                  		?>
	                  			<option value="<?php echo $pe["id"]; ?>"><?php echo  "ID: ".$pe["num_identidad"]." - ".$pe["nombres"]." " . $pe["apellidos"]; ?></option>
	                  		<?php 
	                  	} 
	                  	?>
	                   
	                  </select>
			        	</div>
	                 

			        	<div class="col-md-6">

						<p v-if="motivo_consulta_null" class="text-danger">Este campo es obligatorio (*)</p>
			        		<select id="motivo_consulta" class="form-control select2" style="width: 100%;">

	                  	<option value="0">Escojer un motivo de consulta</option>
	                  	<?php 
	                  		foreach ($superMotivosC->GetMotivosConsulta($id_clinica) as $motivo) 
	                  		{
	                  			?> <option value="<?php echo $motivo["motivoc"] ; ?>"><?php echo $motivo["motivoc"] ;  ?></option> <?php 
	                  		}
	                  	 ?>

	                  	
	                 	</select>
			        	</div>
	                 




	                 <div class="col-md-6 mt-4">
	                 	<label class="mt-3">Fecha y hora de inicio</label>
	                  			
	                  				<p v-if="fecha_inicio_null" class="text-danger">Este campo es obligatorio (*)</p>
	                  			<input id="fecha_inicio" type="text" class="form-control" disabled="true" name="" value="<?php echo $fecha_seleccionada; ?>">
	                  			
				                  <br><br>
					     
					        	<?php 
					        		if ($hora_inicio_seleccionada == "") 
					        		{
					        		 ?><div class="input-group clockpicker" data-autoclose="true">
					        	<p v-if="hora_inicio_null" class="text-danger">Este campo es obligatorio (*)</p>
					        	<input placeholder="HH:MM" class="form-control" type="text" id="hora_inicio" name="txtHora">
					        	</div> <?php 
					        		}else{
					        			?> <div class="input-group clockpicker" data-autoclose="true">
					        	<p v-if="hora_inicio_null" class="text-danger">Este campo es obligatorio (*)</p>
					        	<input disabled="true"  class="form-control" type="text" id="hora_inicio" name="txtHora" value="<?php echo $hora_inicio_seleccionada; ?>">
					        	</div><?php 
					        		}
					        	 ?>
	                 </div>


	                 <div class="col-md-6 mt-4">
	                 	
					        	<label class="mt-3">Fecha y hora de finalización</label>
					        	<p v-if="fecha_fin_null" class="text-danger">Este campo es obligatorio (*)</p>
	                  			<input type="date" min="<?php echo $fecha_seleccionada; ?>" class="form-control" id="fecha_fin" >

	                  		
				                  <br><br>
					        	<div class="input-group clockpicker" data-autoclose="true">
					        		<p v-if="hora_fin_null" class="text-danger">Este campo es obligatorio (*)</p>
					        	<input  placeholder="HH:MM" class="form-control" type="text" id="hora_fin" >
					        	</div>

					        	
	                 </div>




	                 <div class="col-md-6 mt-4">
	                 	<label >Valor cita </label>
					        	<p v-if="valor_cita_null" class="text-danger">Este campo es obligatorio (*)</p>
					        	<input v-model="valor_cita" type="number" min="0" name="" class="form-control" placeholder="$">
	                 </div>
		        	

	                 <div class="col-md-6 mt-4">
	                 	<label  >Observaciones</label>
		        	<textarea rows="3" class="form-control" id="Observaciones"> </textarea>
	                 </div>
		        	
		        	
	                 

	                  		
	                  			
					    


	                  		
	                  	
	                  



		        	

		        	<!--label>Color:</label>
		        	<input  type="color" name="txtColor" id="txtColor" value="#007bff"-->
		        		</div>						
		        	</div>
		        </div>
		      

		      <div v-if="!messageexito" class="modal-footer">
		        <button type="button"  class="btn btn-primary btn-block" onclick="recolectar_data();"  @click="SetDAtaCita()"> <i class="fa fa-calendar-alt"></i> Agendar cita</button>
		      </div>
			</div>


		        	<transition name="slide-fade">
		        		<div v-if="messageexito" class="alert alert-info alert-dismissible text-center">
                                     
                                  <h4><i class="icon fa fa-info"></i> listo!</h4>
                                  {{messageexito}}
                         </div> 
		        	</transition>
		       
		    </div>


</div>

<!--Selec de pacientes-->
<script >
    $(function () {
    //Initialize Select2 Elements
    $('.select2').select2();
    $('.clockpicker').clockpicker();

  });


 var id_paciente = "";
 var motivo_consulta = "";
 var fecha_inicio = "";
 var hora_inicio = "";
 var fecha_fin = "";
 var hora_fin = "";
 var valor_cita = "";
 var Observaciones = "";



 function recolectar_data()
 {
 	id_paciente =  document.getElementById("id_paciente").value;
 	motivo_consulta = document.getElementById("motivo_consulta").value;
 	fecha_inicio = document.getElementById("fecha_inicio").value;
 	hora_inicio = document.getElementById("hora_inicio").value;
 	fecha_fin = document.getElementById("fecha_fin").value;
 	hora_fin = document.getElementById("hora_fin").value;
 	Observaciones = document.getElementById("Observaciones").value;
 	
 }

</script>


