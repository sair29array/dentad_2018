<?php 
		/// control_:
	
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
    			$('#showFecha').html(date.format());
    			 //$('#ModalAgendarCitas').modal();
    			window.location="./?view=AgendarCita&date="+date.format();
    		},

    		
    	    events: "http://dentad.online/in/Config/sql/sql_get_array_de_citas.php?id_clinica="+id_clinica_,

    		eventClick:function(calEvent,jsEvent,view){
    			
    			$('#TituloCita').html(calEvent.title);
    			$('#descripcionCita').html(calEvent.descripcion);
    			$('#id_cita').val(calEvent.id_cita)
    			$('#nombre_paciente').html(calEvent.nombre_paciente);
    			$('#valor_cita').html(calEvent.valor_cita);
    			$('#ModalInfoCitas').modal();}


    		
    });

  });

</script>

<div class="content-wrapper">
	<div class="row">
		<div class="col-12">
				<span style="background-color: #cee6fd;" class="badge">Paciente ausente</span>
				<span class="badge badge-warning">En espera</span>
				<span class="badge badge-success">Atendiendo</span>
				<span class="badge badge-info">Atención finalizada</span>
			</div>
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
		        <h2 class="modal-title" id="TituloCita"></h2>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <div class="form-group">
		        	<input id="id_cita" hidden="true"  type="" name="">
		        	
		        	
		        	
		        	<table class="table table-responsive" >
		        		<tr>
		        			<td><p>Paciente</p></td>
		        			<td><p id="nombre_paciente"></p></td>
		        		</tr>

		        		

		        		<tr>
		        			<td><p>Observaciones </p></td>
		        			<td><p id="descripcionCita"></p></td>
		        		</tr>

		        		<tr>
		        			<td><p>Total a pagar</p></td>
		        			<td><p id="valor_cita"></p></td>
		        		</tr>


		        	</table>
		        	<p id="resultado"></p>
		        </div>
		      </div>
		      <div class="modal-footer">
		         
		          <button type="button" class="btn btn-success" onclick="irAModificar();">Modificar</button>
		          <button onclick="GetIdCItaDelete($('#id_cita').val());" type="button" class="btn btn-danger">Eliminar</button>
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
			start: $("#txtFecha").val()+" "+$('#txtHora').val(),
			color: $("#txtColor").val(),
			descripcion: $('#txtDescripcion').val(),
			textColor: "#FFFFFF"
		};

		$('#calendar').fullCalendar('renderEvent', nuevaCita);
		$('#ModalAgendarCitas').modal("toggle");
	});



	/*$('#btnEliminar').click(function(){
		var id_cita =  document.getElementById("id_cita").value;

		var parametros = {
                "id_cita" : id_cita
                
        };
		
		enviarAJAX("delete", parametros);
	});





	function enviarAJAX(accion,parametros)
	{
		 $.ajax({
                data:  parametros, //datos que se envian a traves de ajax
                url:   'http://127.0.0.1:2145/dentad/in/Config/sql/sql_get_array_de_citas.php?delete='+accion, //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                        $("#resultado").html("Procesando, espere por favor...");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                	$("#resultado").html(response);
                        $("#calendar").fullCalendar("refetchEvents");
                        //$('#ModalInfoCitas').modal("toggle");
                }
        });

	}*/


	function GetIdCItaDelete(id_cita__)
	{
        var url = "./?view=EliminarCita&id="+id_cita__;
		window.location= url;
	}











	function irAModificar()
	{
		var id_cita_ = document.getElementById("id_cita").value;
		var url = "./?view=ModificarCita&id="+id_cita_;
		window.location= url;
	}
</script>





