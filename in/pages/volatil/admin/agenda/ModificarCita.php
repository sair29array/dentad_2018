<?php 
                              // id_ de la cita
  $c = $super_agenda -> GetCitaID($_GET["id"]); 
  foreach ($c as $cita) {}

  ?>


<link rel="stylesheet" href="plugins/select2/select2.min.css">
          <script  src="dist/fullcalendar/bootstrap-clockpicker.js" ></script>
          <link rel="stylesheet" type="text/css" href="dist/fullcalendar/bootstrap-clockpicker.css">
<div class="content-wrapper" id="modificadorDeCitas">
	
	
	<div class="row">
		<div class="col-12">
			
				<!-- Modal para agendar  citas -->
		<div class="" id="ModalAgendarCitas" tabindex="-1"  >
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h2 class="modal-title" >Modificar cita</b> </h2>
		        <button type="button" class="close"  >
		          <span > <a href="./Agenda"><i class="fa fa-calendar-alt"></i></a></span>
		        </button>
		      </div>
		      <div class="modal-body">
		        	<div v-if="!messageexito">
		        		 <div class="form-group">
		        	


			        	<label>Paciente</label>	
	                  	<select  id="id_paciente" class="form-control select2" style="width: 100%;">

	                  
	                  	<?php foreach ($pacientes_DB  as $pe ) 
	                  	{
	                  		?>
	                  			<option <?php if ($pe["id"] == $cita["id_paciente"]) {
	                  				?> selected="true" <?php 
	                  			} ?> value="<?php echo $pe["id"]; ?>"><?php echo  "ID: ".$pe["num_identidad"]." - ".$pe["nombres"]." " . $pe["apellidos"]; ?></option>
	                  		<?php 
	                  	} 
	                  	?>
	                   
	                  </select>
	                 


	                  <?php 
	                  	$motivo_consulta = array('Control de tratamiento', 'Rutina de tratamiento', 'Limpieza', 'Consulta de valoración', 'Urgencia');
	                   ?>

	                 



		        	

		        	<label>Motivo de consulta</label>
		        	<select id="motivo_consulta" class="form-control mt-4" style="width: 100%;">

	                  
	                  <option  <?php if ($motivo_consulta[0] == $cita["title"]) {
	                  		?> selected="true" <?php 
	                  } ?> value="<?php echo $motivo_consulta[0]; ?>"><?php echo $motivo_consulta[0]; ?></option> 

	                  <option <?php if ($motivo_consulta[1] == $cita["title"]) {
	                  		?> selected="true" <?php 
	                  } ?>  value="<?php echo $motivo_consulta[1]; ?>"><?php echo $motivo_consulta[1]; ?></option> 

	                  <option <?php if ($motivo_consulta[2] == $cita["title"]) {
	                  		?> selected="true" <?php 
	                  } ?>  value="<?php echo $motivo_consulta[2]; ?>"><?php echo $motivo_consulta[2]; ?></option> 

	                  <option <?php if ($motivo_consulta[3] == $cita["title"]) {
	                  		?> selected="true" <?php 
	                  } ?>  value="<?php echo $motivo_consulta[3]; ?>"><?php echo $motivo_consulta[3]; ?></option> 

	                  <option <?php if ($motivo_consulta[4] == $cita["title"]) {
	                  		?> selected="true" <?php 
	                  } ?>  value="<?php echo $motivo_consulta[4]; ?>"><?php echo $motivo_consulta[4]; ?></option> 



	                  	
	                  </select>
	                  <br>
						

	                  		<?php 
	                  		/// esto lo hago porque lo que viene desde la DB es una cadena complete
	                  		// donde semuestra la hora y la fecha en una sola entonmces hay que separarlos: 
	                  			$fecha_inicio = substr($cita["start"] , 0, 10 );
	                  			$hora_inicio = substr($cita["start"] , 11 );
	                  			$fecha_fin = substr($cita["end"] , 0, 10 );
	                  			$hora_fin = substr($cita["end"] , 11 );
	                  		 ?>
	                  			<label class="mt-3">Fecha y hora de inicio</label>
	                  			
	                  			<p v-if="fecha_inicio_null" class="text-danger">Este campo es obligatorio (*)</p>
	                  			<input @click="fecha_inicio_null = false" id="fecha_inicio" type="date" class="form-control"  name="" value="<?php echo $fecha_inicio; ?>">

	                  		
				                  
					        	<div class="input-group clockpicker" data-autoclose="true">
					        <p v-if="hora_inicio_null" class="text-danger">Este campo es obligatorio (*)</p>
					        	<input @click = "hora_inicio_null = false" placeholder="HH:MM" class="form-control" type="text" id="hora_inicio" name="txtHora" value="<?php echo $hora_inicio; ?>">
					        	</div>


					        	<label class="mt-3">Fecha y hora de finalización</label>
					        	<p v-if="fecha_fin_null" class="text-danger">Este campo es obligatorio (*)</p>
	                  			<input @click="fecha_fin_null = false" value="<?php echo $fecha_fin; ?>" type="date" min="<?php echo $fecha_inicio ; ?>" class="form-control" id="fecha_fin" >

	                  		
				                  
					        	<div class="input-group clockpicker" data-autoclose="true">
					        		<p v-if="hora_fin_null" class="text-danger">Este campo es obligatorio (*)</p>
					        	<input @click="hora_fin_null = false" value="<?php echo $hora_fin; ?>" placeholder="HH:MM" class="form-control" type="text" id="hora_fin" >
					        	</div>

					        	<label class="mt-4">Valor cita </label>
					        	<p v-if="valor_cita_null" class="text-danger">Este campo es obligatorio (*)</p>
					        	<input @click="valor_cita_null = false" value="<?php echo $cita["valor_cita"]; ?>" id="valor_cita" type="number" min="0" name="" class="form-control" placeholder="$">
	                  		
	                  	
	                  



		        	<label class="mt-2" >Observaciones</label>
		        	<textarea   rows="3" class="form-control" id="Observaciones"><?php echo $cita["descripcion"]; ?> </textarea>

		        	<!--label>Color:</label>
		        	<input  type="color" name="txtColor" id="txtColor" value="#007bff"-->
		        </div>
		      </div>
		      <div v-if="!messageexito" class="modal-footer">
		       
		        <button type="button"  class="btn btn-primary btn-block" onclick="RecolectarDAtosAactualizar();"  @click="SetDAtaCita()"> <i class="fa fa-calendar-alt"></i> Actualizar cita</button>
		         
		           
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

			</div>
		</div>
	</div>
</div>


<script >
	$(function () {
    //Initialize Select2 Elements
    $('.select2').select2();
    $('.clockpicker').clockpicker();

  });


	// obtener datos a actualizar
	var id_cita = "<?php echo $_GET["id"] ?>";
	var paciente  = "";
	var motivo_consulta = "";
	var fecha_inicio = "";
	var fecha_fin = "";;
	var hora_inicio = "";
	var hora_fin = "";
	var valor_cita = "";
	var Observaciones = "";


	function RecolectarDAtosAactualizar()
		{
			paciente  = document.getElementById("id_paciente").value;
			motivo_consulta = document.getElementById("motivo_consulta").value;
			fecha_inicio = document.getElementById("fecha_inicio").value;
			fecha_fin = document.getElementById("fecha_fin").value;
			hora_inicio = document.getElementById("hora_inicio").value;
			hora_fin = document.getElementById("hora_fin").value;
			valor_cita = document.getElementById("valor_cita").value;
			Observaciones = document.getElementById("Observaciones").value;
		}
</script>