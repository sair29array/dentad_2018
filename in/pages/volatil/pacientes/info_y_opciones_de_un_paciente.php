<?php 
	
	$paciente_ = $super_pacientes -> GetPacienteNumID($_GET["id"]);
	foreach ($paciente_ as $paciente) {}

	//// FECHA DE NACIMIENTO DEL PACIENTE PARA DETERMINAR LA EDAD CON CARBON::
	$dia= $paciente["dia_nacimiento"];
	$mes= $paciente["mes_nacimiento"];
	$anio= $paciente["anio_nacimiento"];
	use Carbon\Carbon;
	$nacimiento= Carbon::createFromDate($anio, $mes, $dia);
	$edad = $nacimiento->age;
 ?>
<script type="text/javascript">
	var nombre_paciente_DB = "<?php echo $paciente["nombres"] ?>";
	var apellidos_paciente_DB  = "<?php echo $paciente["apellidos"] ?>";
	var tipo_identidad_DB = "<?php echo $paciente["tipo_identidad"] ?>";
	var num_identidad_DB = "<?php echo $paciente["num_identidad"] ?>"
	var telefono_DB = "<?php echo $paciente["telefono"] ?>";
	var email_DB = "<?php echo $paciente["email"] ?>"
	var dia_nacimiento_DB = "<?php echo $paciente["dia_nacimiento"] ?>";
	var mes_nacimiento_DB = "<?php echo $paciente["mes_nacimiento"] ?>";
	var anio_nacimiento_DB = "<?php echo $paciente["anio_nacimiento"] ?>";
	var edad_DB = "<?php echo $edad; ?>";
	var sexo_DB = "<?php echo $paciente["sexo"] ?>";
</script>
 
<div id="paciente_" class="content-wrapper">
	
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4>Pacientes de <?php echo $nombre_clinica; ?></h4>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                
                	<img class='profile-user-img img-fluid img-circle'
                       src="dist/img/paciente.png" 
                       alt="img-clínica">

                </div>

                <h3 class="profile-username text-center">
                {{nombre_paciente_DB}} {{apellidos_paciente_DB}}
               </h3>

                <h6  class=" text-center">{{tipo_identidad_DB}} : {{num_identidad_DB}} </h6>
                <h6  class=" text-center">Edad: {{edad_DB}} </h6>
                <h6  class=" text-center">Sexo: {{sexo_DB}} </h6>


                <div class="text-muted text-group">
                	<h6  class=" text-center"><b>Contactos:</b></h6>
				<h6  class=" text-center"> {{telefono_DB}} </h6>
				<h6  class=" text-center">{{email_DB}} </h6>
                </div>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

        
          </div>
          <!-- /.col -->












          <div class="col-md-9">
            <div class="card">
	            <div class="card-header p-2">
	                
	                <ul class="nav nav-pills">
	                	<li class="nav-item"><a class="nav-link active" href="#info-clinica" data-toggle="tab">Opciones</a></li>
	                  
	                </ul>
	              </div><!-- /.card-header -->

	              <div class="card-body">
	                <div class="tab-content">

















	        <div class="col-md-12">
            <!-- Application buttons -->

              <div class="card-body">
                
                <a class="btn btn-app">
                  <i class="fa fa-calendar-alt"></i> Agendar
                </a>

                <a class="btn btn-app">
                  <i class="fa fa-hand-holding-usd"></i> Cobrar
                </a>

                <a class="btn btn-app">
                  <i class="fa fa-archive"></i> Historial pagos
                </a>
              
                <a class="btn btn-app">
                  <span class="badge bg-warning">0</span>
                  <i class="fa fa-bullhorn"></i> Enviar SMS
                </a>
                <a class="btn btn-app">
                  <i class="fa fa-id-card-alt"></i> Tratamiento
                </a>
                <a class="btn btn-app">
                  <i class="fa fa-project-diagram"></i> Odontograma
                </a>
               
                <a class="btn btn-app">
                  <i class="fa fa-edit"></i> Editar
                </a>
                <a class="btn btn-app">
                  <i class="fa fa-times"></i> Eliminar
                </a>
              </div>
              
          </div>







	                </div>
	                      
	              </div>      		

                    
           </div>
                  <!-- /.tab-pane -->
          </div>


        </div>
      </div>
    </section>

</div>















