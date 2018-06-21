<?php  

  if ($isset_Clinica != 0) // si existe una clinica
   {
    // obbtenemos los asistentes de esa clinica
      $asistentes = $super_colaboradores -> GetInfoAsistentes($id_clinica);
  }

 ?>

  <!-- Content Wrapper. Contains page content -->
  <div id="colaboradores" class="content-wrapper">
    <pre>{{$data}}</pre>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
         
         
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <?php 
                if ($isset_Clinica == 0) {
                    ?>
                    <div class="col-sm-12">
            <div class="alert alert-info alert-dismissable col-sm-12">
              <i class="fa fa-warning"></i>
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <b><a href="./Mi-Clínica">¿No tienes una clínica?</a>, </b> Configura tu clínica y podrás registrar hasta 3 asistentes.
            </div>
        </div>
                    <?php 
                }
         ?>
        <div class="col-12">
          <div class="card">
            
          

          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><?php if ($isset_Clinica != 0) {
                  ?> Colaboradores de <b class="text-primary"> <?php echo $clinica["nombre"]; ?> 
              </b>

              <div v-if="num_Asistentes < 3">
                <a v-if="!view_add_colaborador" href="#" @click="changeView(1)" class="btn btn-default float-right" ><i class="fa fa-user-plus"></i></a>
              </div>

                    <!-- FORMULARIO PARA AGREGAR PACIENTES -->
                      <transition name="slide-fade">
                        <div v-if="view_add_colaborador">
                            

                        <div class="card card-default mt-4">
                          <div class="card-header">
                            <h3 class="card-title">Registra un nuevo colaborador</h3>

                            <div v-if="!messageexito" class="card-tools">
                              <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                              <button @click="cerrarFormularioColaboradores()" type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                            <div  v-if="!messageexito" class="row">
                              <div class="col-md-6">

                                <div  class="form-group">
                                  <label>Clínica</label>
                                  <input disabled="true" type="text" class="form-control" v-model="clinica">
                                </div>
                               

                                 <div v-if="!name_user_null" class="form-group">
                                  <label>Nombre de usuario</label>
                                  <input type="text" class="form-control" v-model="name_user"  v-on:keyup.enter="addColaborador()">
                                </div>
                                <div v-if="name_user_null" class="form-group">
                                  <label>Nombre de usuario</label>
                                  <input type="text" class="form-control border-danger"  @click="name_user_null = false">
                                </div>
                                
                              </div>
                              <!-- /.col -->
                              <div class="col-md-6">
                               <!-- /.form-group -->
                                <p v-if="message" class="text-danger">{{message}}</p>
                                 <div v-if="!email_user_null" class="form-group">
                                  <label>Correo electrónico</label>
                                  <input type="text" class="form-control" v-model="email_user" v-on:keyup.enter="addColaborador()" @click="message = false">
                                </div>
                                <div v-if="email_user_null" class="form-group">
                                  <label>Correo electrónico</label>
                                  <input type="text" class="form-control border-danger"  @click="email_user_null = false">
                                </div>
                                <!-- /.form-group -->
                                <!-- /.form-group -->
                                <div v-if="!pass_null" class="form-group">

                                  <label>Contraseña</label>
                                  <input type="password" class="form-control" v-model="pass" v-on:keyup.enter="addColaborador()" >
                                </div>
                                <div v-if="pass_null" class="form-group">
                                  <label>Contraseña</label>
                                  <input type="password" class="form-control border-danger"  @click="pass_null = false">
                                </div>
                                <!-- /.form-group -->
                              </div>
                              <!-- /.col -->


                              


















        <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Permisos de usuario</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div id="accordion">
                  <!-- we are adding the .class so bootstrap.js collapse plugin detects it -->
                  
                 
                  <div class="card card-info">
                    <div class="card-header">
                      <h4 class="card-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                            Control de pacientes
                        </a>
                      </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                      <div class="card-body">
                       <!-- -->
                         <!-- iCheck -->
                      
                            <!-- Minimal style -->

                            <!-- checkbox -->
                            <div class="form-group">
                              <label>
                                <input type="checkbox" class="minimal" checked>
                              </label>
                              <label>
                                <input type="checkbox" class="minimal">
                              </label>
                              <label>
                                <input type="checkbox" class="minimal" disabled>
                                Minimal skin checkbox
                              </label>
                            </div>

                          <!-- /.card-body -->
                          <div class="card-footer">
                            Many more skins available. <a href="http://fronteed.com/iCheck/">Documentation</a>
                          </div>
                        
                        <!-- /.card -->

                       <!-- -->
                      </div>
                    </div>
                  </div>

                   <div class="card card-info">
                    <div class="card-header">
                      <h4 class="card-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                           Agenda y control de citas
                        </a>
                      </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                      <div class="card-body">
                       <!-- -->
                        
                       <!-- -->
                      </div>
                    </div>
                  </div>


                   <div class="card card-info">
                    <div class="card-header">
                      <h4 class="card-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                          Control de reportes
                        </a>
                      </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                      <div class="card-body">
                       <!-- -->
                        
                       <!-- -->
                      </div>
                    </div>
                  </div>


                   <div class="card card-info">
                    <div class="card-header">
                      <h4 class="card-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                          Configuración de cuenta
                        </a>
                      </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                      <div class="card-body">
                       <!-- -->
                        
                       <!-- -->
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
                              <div class="col-md-12">
                                <div class="form-group">
                                  <button @click="addColaborador()" class="btn btn-primary Large btn-block btn-lg" >Registrar</button>
                                </div>
                              </div>
                              <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <transition>
                                <div v-if="messageexito" class="alert alert-info alert-dismissible">
                                     <button @click="reloadDB()" type="button" class="close" data-dismiss="alert" aria-hidden="true">Terminar</button>
                                  <h4><i class="icon fa fa-info"></i> listo!</h4>
                                  {{messageexito}}
                                </div>  
                            </transition>
                          </div>
                          <!-- /.card-body -->


                        </div>
                      </transition>
                    <!-- END FORMULARIO PARA AGREGAR PACIENTES -->


                  <?php 

              }else{
                echo "Tabla de asistentes";
              } ?></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped ">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Correo</th>
                  <th>Contraseña</th>
                 
                </tr>
                </thead>
                <tbody>

                    <?php 
                        if ($isset_Clinica != 0)  // si el user tiene una clinica a su
                        {
                          foreach ($asistentes as $asistente) 
                          {
                            ?>
                                <tr>
                                    <td>
                                        <i class="fa fa-user"></i>
                                        <a href="./?view=asistente&id=<?php echo $asistente["id"]; ?>" style="color: black">
                                            <?php 
                                        echo "#". $asistente["id"] ;
                                        ?>
                                        </a>    
                                    </td>

                                    <td>
                                        <a href="./?view=asistente&id=<?php echo $asistente["id"]; ?>" style="color: black">
                                        <?php  
                                        echo $asistente["nombre"]; 
                                        ?>
                                        </a>
                                    </td>

                                     <td>
                                        <a href="./?view=asistente&id=<?php echo $asistente["id"]; ?>" style="color: black">
                                        <?php  
                                        echo $asistente["email"]; 
                                        ?>
                                        </a>
                                    </td>

                                    <td>
                                        <a href="./?view=asistente&id=<?php echo $asistente["id"]; ?>" style="color: black">
                                        <?php  
                                        echo $asistente["pass"]; 
                                        ?>
                                        </a>
                                    </td>
                                </tr>
                            <?php 
                          }
                        }
                     ?>
                

                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Correo</th>
                  <th>Contraseña</th>
                
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

  
</div>
<!-- ./wrapper -->

<!-- page script -->

</body>
</html>
