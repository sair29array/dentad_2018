<?php 
		   // SUPER_AGENDA EN EL INDEX
	$Citas = $super_agenda->GetAllCitas($id_clinica);
								// id_clinica está declarado en el 
								// NAV
	// json_encode($Citas);
 ?>





<script>

	var id_clinica_ = id_clinica ;
	
	 $(document).ready(function() {

    $('#calendar').fullCalendar({

    		header:
    		{
    		 left:   'today, prev,next',
  			 center: 'title',
  			 right:  'month,basicWeek,basicDay,agendaWeek,agendaDay'
    		},
    		dayClick:function(date, jsEvent, view)
    		{
    			// $(this).css('background-color', 'red');
    			$('#txtFecha').val(date.format());
    			 $('#ModalAgendarCitas').modal();
    		},

    		
    	    events: "http://127.0.0.1:2145/dentad/in/Config/sql/sql_get_array_de_citas.php?id_clinica="+id_clinica_,

    		eventClick:function(calEvent,jsEvent,view){
    			$('#TituloCita').html(calEvent.title);
    			$('#descripcionCita').html(calEvent.descripcion);
    			$('#ModalInfoCitas').modal();}


    		
    });

  });

</script>

<div class="content-wrapper">
	<div class="row">
		<div class="col-12"></div>
			<div class="col-md-11 ml-2">
				<div id="calendar"></div>
			</div>	
		<div class="col"></div>
		
	</div>


			<!-- Modal para info citas -->
		<div class="modal fade" id="ModalInfoCitas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="TituloCita"></h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <div id="descripcionCita"></div>
		      </div>
		      <div class="modal-footer">
		       
		        <button type="button" class="btn btn-primary">Agendar cita</button>
		         <button type="button" class="btn btn-danger">Borrar</button>
		          <button type="button" class="btn btn-success">Modificar</button>
		           <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
		      </div>
		    </div>
		  </div>
		</div>




			<!-- Modal para agendar  citas -->
		<div class="modal fade" id="ModalAgendarCitas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" >Agendar una cita para la fecha </h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        
		        <div class="form-group">
		        	<label>Fecha</label>
		        	<input class="form-control" id="txtFecha" name="txtFecha" type="text" >

		        	<label>Titulo</label>
		        	<input class="form-control" type="text" name="txtTitulo" id="txtTitulo">

		        	<label>Hora</label>
		        	<input class="form-control" type="text" id="txtHora" name="txtHora" value="10:30">

		        	<label>Descripción</label>
		        	<textarea rows="3" class="form-control" id="txtDescripcion"> </textarea>

		        	<label>Color:</label>
		        	<input type="color" name="txtColor" id="txtColor" value="#007bff">
		        </div>
		      </div>
		      <div class="modal-footer">
		       
		        <button type="button" class="btn btn-primary" id="btnAgregarCita">Agregar cita</button>
		         
		           <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
		      </div>
		    </div>
		  </div>
		</div>




</div>


<!--Agregar una nueva cita -->
<script>
	$('#btnAgregarCita').click(function(){
		var nuevaCita =  {
			title: $("#txtTitulo").val(),
			start: $("#txtFecha").val()+" "+$('txtHora').val(),
			color: $("#txtColor").val(),
			descripcion: $('#txtDescripcion').val(),
			textColor: "#FFFFFF"
		};

		$('#calendar').fullCalendar('renderEvent', nuevaCita);
		$('#ModalAgendarCitas').modal("toggle");
	});
</script>

