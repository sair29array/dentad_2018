<?php 
                              // id_ de la cita
  $c = $super_agenda -> GetCitaID($_GET["id"]); 
  foreach ($c as $cita) {}

  ?>


<link rel="stylesheet" href="plugins/select2/select2.min.css">
          <script  src="dist/fullcalendar/bootstrap-clockpicker.js" ></script>
          <link rel="stylesheet" type="text/css" href="dist/fullcalendar/bootstrap-clockpicker.css">
<div class="content-wrapper" id="modificadorDeCitas">
	


			
				<!-- Modal para agendar  citas -->
		<div class="" id="ModalAgendarCitas" tabindex="-1"  >
		 
		    <div class="card">
		      <div class="modal-header">
		        <h2 class="modal-title" >Modificar cita</b> </h2>
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
			        	</div>
	                 


	                 

	                 

                      <div class="col-md-6">
                      	
		        	<label>Motivo de consulta</label>
		        	<select id="motivo_consulta" class="form-control select2" style="width: 100%;">

	                  
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
	                  			
	                  			<p v-if="fecha_inicio_null" class="text-danger">Este campo es obligatorio (*)</p>
	                  			<input @click="fecha_inicio_null = false" id="fecha_inicio" type="date" class="form-control"  name="" value="<?php echo $fecha_inicio; ?>">
						<br><br>
	                  	<div class="input-group clockpicker" data-autoclose="true">
					        <p v-if="hora_inicio_null" class="text-danger">Este campo es obligatorio (*)</p>
					        	<input @click = "hora_inicio_null = false" placeholder="HH:MM" class="form-control" type="text" id="hora_inicio" name="txtHora" value="<?php echo $hora_inicio; ?>">
					        	</div>
	                  </div>

	                  		
				      <div class="col-md-6"> 
				      	<label class="mt-5">Fecha y hora de finalización</label>
					        	<p v-if="fecha_fin_null" class="text-danger">Este campo es obligatorio (*)</p>
	                  			<input @click="fecha_fin_null = false" value="<?php echo $fecha_fin; ?>" type="date" min="<?php echo $fecha_inicio ; ?>" class="form-control" id="fecha_fin" >

	                  		<br><br>
				                  
					        	<div class="input-group clockpicker" data-autoclose="true">
					        		<p v-if="hora_fin_null" class="text-danger">Este campo es obligatorio (*)</p>
					        	<input @click="hora_fin_null = false" value="<?php echo $hora_fin; ?>" placeholder="HH:MM" class="form-control" type="text" id="hora_fin" >
					        	</div>
				      </div>
				      		
				          
					        


					        	
				      <div class="col-md-6">
				      	
					        	<label class="mt-4">Valor cita </label>
					        	<p v-if="valor_cita_null" class="text-danger">Este campo es obligatorio (*)</p>
					        	<input @click="valor_cita_null = false" value="<?php echo $cita["valor_cita"]; ?>" id="valor_cita" type="number" min="0" name="" class="form-control" placeholder="$">
				      </div>
	                  		
	                  	
	                	<div class="col-md-6">
	                		<label class="mt-4" >Observaciones</label>
		        	<textarea   rows="3" class="form-control" id="Observaciones"><?php echo $cita["descripcion"]; ?> </textarea>
	                	</div>  



		        	

		        	<!--label>Color:</label>
		        	<input  type="color" name="txtColor" id="txtColor" value="#007bff"-->
							</div>
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