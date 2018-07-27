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
            
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="col-sm-12">
                  <div class="row">
                        <div class="col-sm-6 ">
                
                  <!--img class='profile-user-img img-fluid img-circle'
                       src="dist/img/paciente.png" 
                       alt="img-clínica"-->

                      <img src="dist/img/profile.png" alt="..." class="img-thumbnail img-fluid">

                  </div>

                <div class="col-sm-6">  
                  <h3 class="profile-username">
                {{nombre_paciente_DB}} {{apellidos_paciente_DB}}
               </h3>

                <h6  class="">{{tipo_identidad_DB}} : {{num_identidad_DB}} </h6>
                <h6>Edad: {{edad_DB}} </h6>
                <h6>Sexo: {{sexo_DB}} </h6>


                <div class="text-muted text-group">
                  <h6><b>Contactos:</b></h6>
                  <h6> {{telefono_DB}} </h6>
                  <h6>{{email_DB}} </h6>
                </div>
                </div>
                  </div>
                </div>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

        
          </div>
          <!-- /.col -->












        <div class="col-md-6">
            <div class="card card-primary card-outline">
	            
	           <div class="card-body">

	        
            <!-- Application buttons -->

              
                
                <a @click="go_to_agendar()" class="btn btn-app">
                  <i class="fa fa-calendar-alt"></i> Agendar
                </a>

                <a class="btn btn-app">
                  <i class="fa fa-archive"></i>Pagos
                </a>
              
                <a class="btn btn-app">
                  <span class="badge bg-warning">0</span>
                  <i class="fa fa-bullhorn"></i> Enviar SMS
                </a>
                <a class="btn btn-app">
                  <i class="fa fa-id-card-alt"></i> Tratamiento
                </a>
                <a @click="go_to_odontograma()" class="btn btn-app">
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
                  <!-- /.tab-pane -->
          </div>


        </div>
        <?php include("Seguimiento.php"); ?>
      </div>


    </section>

</div>















