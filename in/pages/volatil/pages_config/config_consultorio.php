<?php 
	$clinica_ = $super_clinica -> GetInfoClinicaUserId($iuser["id"]);
	$isset_Clinica = 0; // indica si ya el user tiene una clinica a su nombre
	foreach ($clinica_ as $clinica) {
		$isset_Clinica ++;
	}

	$n_pacientes = $super_pacientes ->GetNumeroPacientesIdUSer($iuser["id"]);
	$n_colaboradores = $super_colaboradores->GetNumeroColaboradoresIdUSer($iuser["id"]);
 ?>
 <script> var isset_clinica =  "<?php echo $isset_Clinica ?>"; </script>
<div id="clinica_info" class="content-wrapper">
	
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h2>Información de tu clínica</h2>
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
                       src="dist/img/pictures.png" 
                       alt="img-clínica">

                    
               
                  
                </div>

                <h3 v-if="nombre_clinica_a_actualizar == nombre_clinica_DB" class="profile-username text-center"><?php if ($isset_Clinica == 0) {
                	echo "Nombre de tu clínica";
                }else{
                	?> {{nombre_clinica_DB}} <?php 
                } ?> </h3>

                <h3 v-if="nombre_clinica_a_actualizar != nombre_clinica_DB " class="profile-username text-center">{{nombre_clinica_a_actualizar }} </h3>



                <p v-if="ubicacion_clinica_a_actualizar == ubicacion_clinica_DB" class="text text-center"><?php if ($isset_Clinica == 0) {
                	echo "Ubicación";
                }else{
                	?> {{ubicacion_clinica_DB}} <?php 
                } ?> </p>


                 <p v-if="ubicacion_clinica_a_actualizar != ubicacion_clinica_DB " class="text text-center"> {{ubicacion_clinica_a_actualizar}} </p>

                <p class="text-muted text-center">Dr. <?php echo $iuser["nombre"]; ?></p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Pacientes</b> <a class="float-right"><?php echo $n_pacientes; ?></a>
                  </li>
                  
                  <li class="list-group-item">
                    <b>Colaboradores</b> <a class="float-right"><?php echo $n_colaboradores; ?></a>
                  </li>
                </ul>

               
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
                	<li class="nav-item"><a class="nav-link active" href="#info-clinica" data-toggle="tab">Datos de la Clínica</a></li>
                  <li class="nav-item"><a class="nav-link " href="#admin-principal" data-toggle="tab">Administrador</a></li>
                  <li class="nav-item"><a class="nav-link" href="#permisos-administrador" data-toggle="tab">Permisos</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
























                	<div class="active tab-pane" id="info-clinica">
                    
                    	<div v-if="!message">
                    		
                      		 <div v-if="campos_info_clinica_vacios">
		                      <div class="form-group  ">
		                        <label for="inputName" class="col-sm-6 control-label">Nombre </label>

		                        <div class="col-sm-6">
		                          <input @click="campos_info_clinica_vacios = false" type="text" maxlength="18" class="form-control border border-danger" v-model="nombre_clinica" placeholder="max 18 caracteres" >
		                        </div>
		                      </div>
		                      
		                      <div class="form-group ">
		                        <label for="inputSkills" class="col-sm-6 control-label">Ubicación</label>

		                        <div class="col-sm-6">
		                          <input @click="campos_info_clinica_vacios = false" type="text" class="form-control border border-danger" v-model="ubicacion" maxlength="20" >
		                        </div>
		                      </div>
                      		 </div>
                      
                      
                     		 <div v-if="!campos_info_clinica_vacios">
		                      <div class="form-group">
		                        <label for="inputName" class="col-sm-6 control-label">Nombre</label>

		                        <div class="col-sm-6">
		                          <input type="text" maxlength="18" class="form-control" v-model="nombre_clinica_a_actualizar" placeholder="max 18 caracteres" >
		                        </div>
		                      </div>
		                      
		                      <div class="form-group">
		                        <label for="inputSkills" class="col-sm-6 control-label">Ubicación</label>

		                        <div class="col-sm-6">
		                          <input type="text" class="form-control" v-model="ubicacion_clinica_a_actualizar" maxlength="20" >
		                        </div>
		                      </div>
                      		 </div>
                      
	                     
                     
                    	<?php 
                    		if ($isset_Clinica == 0)  // si no existe una clinica
                    		{
                    			?>
                    			  <div class="form-group">
		                        <div class="col-sm-offset-2 col-sm-10">
		                          <button @click="guardarInfoClinica()" type="submit" class="btn btn-primary"> <i class="fa fa-save"></i> Guardar</button>
		                        </div>
                      			</div>
                    			<?php 
                    		}else
                    		{
                    			?>
                    			  <div class="form-group">
			                        <div class="col-sm-offset-2 col-sm-10">
			                          <button @click="ActualizarInfoClinica()" type="submit" class="btn btn-primary"> <i class="fa fa-save"></i> Actualizar</button>
			                        </div>
                     			 </div>
                    			<?php 
                    		}
                    	 ?>
                   </div>

                 <transition name= "slide-fade">
                <div v-if="message" class="alert alert-info alert-dismissible">
                 	 <button @click="reload_()" type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h4><i class="icon fa fa-info"></i> listo!</h4>
                  {{message}}
                </div>	
               </transition>
                      
                      		

                    
                  </div>
                  <!-- /.tab-pane -->
 






















                  <div class=" tab-pane" id="admin-principal">
                    <!-- Post -->
                    <div class="post">
                      <div v-if="!showFOrmEditDAtaAdmin" class="user-block">
                        <img class="img-circle img-bordered-sm" src="dist/img/admin.png" alt="user image">
                        <span class="username">
                          <a href="#">{{nombre_admin_para_actualizar}}</a>
                          
                        </span>
                        <span class="description">{{email_admin_para_actualizar}}</span>
                      </div>
                      <!-- /.user-block -->
                      
                      <div v-if="!messageSuccesADminUpdate">
                      		 <p v-if="!showFOrmEditDAtaAdmin" style="cursor: pointer;" @click="showFOrmEditDAtaAdmin = true" class="link-black text-sm mr-2"><i class="fa fa-edit mr-1"></i> Editar</p>
                      
                      

                     	<transition name="slide-fade">
                     		<div v-if="showFOrmEditDAtaAdmin" >

                     			<p v-if="noHayCambiosQueREalizarDataAdmin" class="text-danger">{{noHayCambiosQueREalizarDataAdmin}}</p>

                     			

                     			<div v-if="!UpdateImputDAtaUserAdminvACIOS">
                     				<label class="mt-2">Nombre</label> 
                     			 <input v-on:keyup.enter="UpdateDAtaUserAdmin" @click="QuitarMensajesDeErrorEditInputADmin()" v-model="nombre_admin_para_actualizar" class="form-control form-control-sm" type="text">

                     			 <label class="mt-2">Correo <p v-if="correoInvalidoParaActualizar" class="text-danger">{{correoInvalidoParaActualizar}}</p></label> 
                     			 <input v-on:keyup.enter="UpdateDAtaUserAdmin" @click="QuitarMensajesDeErrorEditInputADmin()" v-model="email_admin_para_actualizar" class="form-control form-control-sm" type="email">
                     			</div>

                     			<div v-if="UpdateImputDAtaUserAdminvACIOS">
                     				<label class="mt-2">Nombre</label> 
                     			 <input  @click="QuitarMensajesDeErrorEditInputADmin()" v-model="nombre_admin_para_actualizar" class="form-control form-control-sm border-danger" type="text">

                     			 <label class="mt-2">Correo</label> 
                     			 <input  @click="QuitarMensajesDeErrorEditInputADmin()" v-model="email_admin_para_actualizar" class="form-control form-control-sm border-danger" type="email">
                     			</div>

                     			  <button class="btn btn-primary mt-4" @click="UpdateDAtaUserAdmin()">Aceptar</button>

                     			 <button class="btn btn-danger mt-4" @click="CancelEDitDataAdmin(0)">Cancelar</button>
                     		</div>
                     	</transition>
                      </div>
                      <transition name= "slide-fade">
		                <div v-if="messageSuccesADminUpdate" class="alert alert-info alert-dismissible">
		                 	 <button v-on:click="CancelEDitDataAdmin(1)" @click="QuitarMensajesDeErrorEditInputADmin" type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		                  <h4><i class="icon fa fa-info"></i> listo!</h4>
		                  {{messageSuccesADminUpdate}}
		                </div>	
              		 </transition>
                     
                       
                    </div>
                    <!-- /.post -->























                   
                   
                     
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="permisos-administrador">
                    <!-- The timeline -->
                    <ul class="timeline timeline-inverse">
                      <!-- timeline time label -->
                      <li class="time-label">
                        <span class="bg-info">
                          Permisos de administrador
                        </span>
                      </li>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <li>
                        <i class="fa fa-edit bg-primary"></i>

                        <div class="timeline-item">
                          

                          <h3 class="timeline-header ">Modificar datos de la clínica </h3>

                          <div class="timeline-body text-justify">
                           El usuario administrador, puede modificar el nombre, la ubicación de la clinica y los datos principales de la cuenta a la cual se encuentra vinculada dicha clínica, como son el nombre de la persona encargada, el correo electrónico y la contraseña de acceso.
                          </div>
                          
                        </div>
                      </li>
                      <!-- END timeline item -->
                      <!-- timeline item -->
                      <li>
                        <i class="fa fa-user-plus bg-info"></i>

                        <div class="timeline-item">
                         

                          <h3 class="timeline-header ">Agregar colaboradores </h3>

                          <div class="timeline-body text-justify">
                           Dentad permite que el administrador agregue usuarios terceros titulados "Colaboradores", los cuales tendrán sus funciones dentro de la clínica.
                          </div>
                        </div>
                      </li>
                      <!-- END timeline item -->
                      <!-- timeline item -->

                      <li>
                        <i class="fa fa-hand-holding-usd bg-success"></i>

                        <div class="timeline-item">

                         <h3 class="timeline-header ">Supervisión y control de las finanzas de la clínica </h3>

                        </div>
                      </li>

                      <li>
                        <i class="fa fa-users bg-warning"></i>

                        <div class="timeline-item">

                         <h3 class="timeline-header ">Rgistrar y modificar los datos de los pacientes</h3>

                        </div>
                      </li>

                       <li>
                        <i class="fa fa-calendar-check bg-info"></i>

                        <div class="timeline-item">

                         <h3 class="timeline-header ">Agendar citas a pacientes</h3>

                        </div>
                      </li>
                      

                      <li>
                        <i class="fa fa-file-alt bg-success"></i>

                        <div class="timeline-item">

                         <h3 class="timeline-header ">Control de reportes</h3>

                        </div>
                      </li>

                      <li>
                        <i class="fa fa-folder bg-warning"></i>

                        <div class="timeline-item">

                         <h3 class="timeline-header ">Control de historial de los pacientes</h3>

                        </div>
                      </li>

                      
                     
                      <!-- END timeline item -->
                      <li>
                        <i class="fa fa-clock-o bg-gray"></i>
                      </li>
                    </ul>
                  </div>
                  <!-- /.tab-pane -->

                  
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>