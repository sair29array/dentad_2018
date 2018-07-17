<?php 
                              // id_ de la cita
  $c = $super_agenda -> GetCitaID($_GET["id"]); 
  foreach ($c as $cita) {}

  ?>


<link rel="stylesheet" href="plugins/select2/select2.min.css">
          <script  src="dist/fullcalendar/bootstrap-clockpicker.js" ></script>
          <link rel="stylesheet" type="text/css" href="dist/fullcalendar/bootstrap-clockpicker.css">
<div class="content-wrapper" id="EliminarCitas">
	

			
				<!-- Modal para agendar  citas -->
		<div class="" id="ModalAgendarCitas" tabindex="-1"  >
		  <div class="card">
		    <div class="">
		      <div class="modal-header">
		        <h3 class="modal-title" >Confirmación de proceso, eliminar cita</b> </h3>
		        <button type="button" class="close"  >
		          <span > <a href="./Agenda"><h1><i class="fa fa-calendar-alt"></i></h1></a></span>
		        </button>
		      </div>
		      <div class="modal-body">
		        	<div v-if="!messageexito">
		        		
		        	<div class="col-md-12">
		        		<div class="row">
		        			


			        	<div class="col-md-6">
			        		<label>Paciente</label>	
	                  	<select disabled="true"  id="id_paciente" class="form-control select2" style="width: 100%;">

	                  
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
			        	</div>

		        	
	                  <div class="col-md-6">
	                  	<label >Motivo de consulta</label>
		        	<select disabled="true" id="motivo_consulta" class="form-control select2 " style="width: 100%;">

	                  

	                 <?php 
	                  		foreach ($superMotivosC->GetMotivosConsulta($id_clinica) as $motivo) 
	                  		{
	                  			?> <option value="<?php echo $motivo["motivoc"] ; ?>" <?php if ($motivo["motivoc"] == $cita["title"]) {
	                  		?> selected="true" <?php  } ?>><?php echo $motivo["motivoc"] ;  ?></option> <?php 
	                  		}
	                  ?>


	                  	
	                  </select>
	                  </div>
						

	                  		<?php 
	                  		/// esto lo hago porque lo que viene desde la DB es una cadena complete
	                  		// donde semuestra la hora y la fecha en una sola entonmces hay que separarlos: 
	                  			$fecha_inicio = substr($cita["start"] , 0, 10 );
	                  			$hora_inicio = substr($cita["start"] , 11 );
	                  			$fecha_fin = substr($cita["end"] , 0, 10 );
	                  			$hora_fin = substr($cita["end"] , 11 );
	                  		 ?>
	                  	<div class="col-md-6">
	                  		<label class="mt-5">Fecha y hora de inicio</label>
	                  			
	                  			
	                  			<input disabled="true"id="fecha_inicio" type="date" class="form-control"  name="" value="<?php echo $fecha_inicio; ?>">

	                  		
				                  
					        	<div class="input-group clockpicker" data-autoclose="true">
					       
					        	<input disabled="true" placeholder="HH:MM" class="form-control" type="text" id="hora_inicio" name="txtHora" value="<?php echo $hora_inicio; ?>">
					        	</div>

	                  	</div>

					     
					    <div class="col-md-6">
					    	<label class="mt-5">Fecha y hora de finalización</label>
					       
	                  			<input disabled="true" value="<?php echo $fecha_fin; ?>" type="date" min="<?php echo $fecha_inicio ; ?>" class="form-control" id="fecha_fin" >

	                  		
				                  
					        	<div class="input-group clockpicker" data-autoclose="true">
					        		
					        	<input disabled="true" value="<?php echo $hora_fin; ?>" placeholder="HH:MM" class="form-control" type="text" id="hora_fin" >
					        	</div>
					    </div>

					     
					    <div class="col-md-6">
					    		<label class="mt-5">Valor cita </label>
					        	
					        	<input disabled="true" value="<?php echo $cita["valor_cita"]; ?>" id="valor_cita" type="number" min="0" name="" class="form-control" placeholder="$">
					    </div>
	                  		
	                  	
	                	<div class="col-md-6">
	                		<label class="mt-5" >Observaciones</label>
		        	<textarea disabled="true"  rows="3" class="form-control" id="Observaciones"><?php echo $cita["descripcion"]; ?> </textarea>
	                	</div>  



		        	

		        	<!--label>Color:</label>
		        	<input  type="color" name="txtColor" id="txtColor" value="#007bff"-->
		        		</div>
		        	</div>
		      
		      		</div>
			      <div v-if="!messageexito" class="modal-footer">
			        <button type="button"  class="btn btn-danger btn-block"   @click="EnviarApapelera()"> <i class="fa fa-trash-alt"></i> Eliminar cita</button>
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



<script >
	$(function () {
    //Initialize Select2 Elements
    $('.select2').select2();
    $('.clockpicker').clockpicker();

  });


	// obtener datos a actualizar
	var id_cita = "<?php echo $_GET["id"] ?>";
	


	
</script>