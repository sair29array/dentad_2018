
<?php  ?>


  <!-- Content Wrapper. Contains page content -->
  <div id="pacientes" class="content-wrapper">
    
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
              <b><a href="./Mi-Clínica">¿No tienes una clínica?</a>, </b> Configura tu clínica y podrás registrar pacientes de forma ilimitada.
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
                  ?> Pacientes de <b class="text-primary"> <?php echo $clinica["nombre"]; ?> 
              </b><a v-if="!view_add_paciente" href="#" @click="changeView('Form_registrar_paciente')" class="btn btn-default float-right" ><i class="fa fa-user-plus"></i></a>

                    <!-- FORMULARIO PARA AGREGAR PACIENTES -->
                      <transition name="slide-fade">
                        <div v-if="view_add_paciente">
                            

                        <div class="card card-default mt-4">
                          <div class="card-header">
                            <h3 class="card-title">Registra un nuevo paciente</h3>

                            <div v-if="!message" class="card-tools">
                              <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                              <button @click="cerrarFormularioPacientes()" type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                            <div  v-if="!message" class="row">
                              <div class="col-md-6">

                                <div v-if="!nombre_paciente_null" class="form-group">
                                  <label>Nombre (s)</label>
                                  <input type="text" class="form-control" v-model="nombre_paciente">
                                </div>
                                <div v-if="nombre_paciente_null" class="form-group">
                                  <label>Nombre (s)</label>
                                  <input  type="text" class="form-control border-danger" v-model="nombre_paciente" @click="nombre_paciente_null = false">
                                </div>

                                 <div v-if="!apellidos_paciente_null" class="form-group">
                                  <label>Apellidos</label>
                                  <input type="text" class="form-control" v-model="apellidos_paciente">
                                </div>
                                <div v-if="apellidos_paciente_null" class="form-group">
                                  <label>Apellidos</label>
                                  <input type="text" class="form-control border-danger" v-model="apellidos_paciente" @click="apellidos_paciente_null = false">
                                </div>
                                
                              </div>
                              <!-- /.col -->
                              <div class="col-md-6">
                               <!-- /.form-group -->
                                <div v-if="!tipo_identidad_paciente_null" class="form-group">
                                  <label>Tipo de identidad</label>
                                  <select v-model="tipo_identidad_paciente" class="form-control select2" style="width: 100%;">
                                    <option selected="selected">TI</option>
                                    <option>CC</option>
                                  </select>
                                </div>
                                <div v-if="tipo_identidad_paciente_null" class="form-group">
                                  <label>Tipo de identidad</label>
                                  <select v-model="tipo_identidad_paciente" class="form-control select2 border-danger" style="width: 100%;" @click="tipo_identidad_paciente_null = false">
                                    <option selected="selected">TI</option>
                                    <option>CC</option>
                                  </select>
                                </div>
                                <!-- /.form-group -->
                                <!-- /.form-group -->
                                <div v-if="!numero_identidad_paciente_null" class="form-group">

                                  <label>Número de identidad</label>
                                  <input type="number" class="form-control" v-model="numero_identidad_paciente">
                                </div>
                                <div v-if="numero_identidad_paciente_null" class="form-group">
                                  <label>Número de identidad</label>
                                  <p v-if="message_num_null" class="text text-danger">{{message_num_null}}</p>
                                  <input type="number" class="form-control border-danger" v-model="numero_identidad_paciente" @click="numero_identidad_paciente_null = false">
                                </div>
                                <!-- /.form-group -->
                              </div>
                              <!-- /.col -->

                               <!-- /.col -->
                              <div class="col-md-6">
                                <div v-if="!telefono_paciente_null" class="form-group">
                                  <label>Celular</label>
                                  <input type="number" class="form-control" v-model="telefono_paciente">
                                </div>
                                 <div v-if="telefono_paciente_null" class="form-group">
                                  <label>Celular</label>
                                  <input type="number" class="form-control border-danger" v-model="telefono_paciente" @click="telefono_paciente_null = false">
                                </div>
                              </div>
                              <!-- /.col -->

                               <!-- /.col -->
                              <div class="col-md-6">
                                
                                <div v-if="!email_paciente_null" class="form-group">
                                  <label>Correo electrónico</label>
                                  <input type="email" class="form-control" v-model="email_paciente">
                                </div>
                                <div v-if="email_paciente_null" class="form-group">
                                  <label>Correo electrónico</label>
                                  
                                  <input type="email" class="form-control border-danger" v-model="email_paciente" @click="email_paciente_null = false">
                                </div>
                              </div>
                              <!-- /.col -->
                              <!-- /.col -->
                              <div class="col-md-6">
                                
                                <div  class="form-group">
                                  <label>Fecha de nacimiento</label>
                                 <div class="row">
                                    <p class="mr-2"></p>
                                    <input v-if="!dia_nacimiento_paciente_null" type="number" min="1" class="form-control col-md-2" v-model="dia_nacimiento_paciente" placeholder="día">
                                    <input v-if="dia_nacimiento_paciente_null" type="number" min="1" class="form-control col-md-2 border-danger" v-model="dia_nacimiento_paciente" placeholder="día" @click="dia_nacimiento_paciente_null = false">


                                  <input v-if="!mes_nacimiento_paciente_null" type="number" min="1" class="form-control col-md-2" v-model="mes_nacimiento_paciente" placeholder="mes">
                                   <input v-if="mes_nacimiento_paciente_null" type="number" min="1" class="form-control col-md-2 border-danger" v-model="mes_nacimiento_paciente" placeholder="mes" @click="mes_nacimiento_paciente_null = false">


                                  <input v-if="!anio_nacimiento_paciente_null" type="number" min="1" class="form-control col-md-2" v-model="anio_nacimiento_paciente" placeholder="año">
                                  <input v-if="anio_nacimiento_paciente_null" type="number" min="1" class="form-control col-md-2 border-danger" v-model="anio_nacimiento_paciente" placeholder="año" @click="anio_nacimiento_paciente_null = false">
                                 </div>
                                </div>
                                
                              </div>

                              <!-- /.col -->

                               <!-- /.col -->
                              <div class="col-md-6">
                                <label>Sexo</label>
                                  <select v-if="!sexo_paciente_null" v-model="sexo_paciente" class="form-control select2 " style="width: 100%;" >
                                    <option selected="selected">Femenino</option>
                                    <option>Masculino</option>
                                  </select>
                                   <select v-if="sexo_paciente_null" v-model="sexo_paciente" class="form-control select2 border-danger" style="width: 100%;" @click="sexo_paciente_null = false">
                                    <option selected="selected">Femenino</option>
                                    <option>Masculino</option>
                                  </select>
                                
                              </div>
                              
                              <!-- /.col -->

                              <!-- /.col -->
                              <div class="col-md-12">
                                <div class="form-group">
                                  <button @click="addPaciente()" class="btn btn-primary Large btn-block btn-lg" >Registrar</button>
                                </div>
                              </div>
                              <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <transition>
                                <div v-if="message" class="alert alert-info alert-dismissible">
                                     <button @click="reloadDB()" type="button" class="close" data-dismiss="alert" aria-hidden="true">Terminar</button>
                                  <h4><i class="icon fa fa-info"></i> listo!</h4>
                                  {{message}}
                                </div>  
                            </transition>
                          </div>
                          <!-- /.card-body -->


                        </div>
                      </transition>
                    <!-- END FORMULARIO PARA AGREGAR PACIENTES -->


                  <?php 

              }else{
                echo "Tabla de Pacientes";
              } ?></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped ">
                <thead>
                <tr>
                  <th>TI / CC</th>
                  <th>Nombre Completo</th>
                 
                </tr>
                </thead>
                <tbody>

                    <?php 
                        if ($isset_Clinica != 0)  // si el user tiene una clinica a su
                        {
                          foreach ($pacientes_DB as $paciente_) 
                          {
                            ?>
                                <tr>
                                    <td>
                                        <i class="fa fa-user"></i>
                                        <a href="./?view=paciente&id=<?php echo $paciente_["num_identidad"]; ?>" style="color: black">
                                            <?php 
                                        echo "#". $paciente_["id"] .  $paciente_["tipo_identidad"].": ".$paciente_["num_identidad"] ;
                                        ?>
                                        </a>    
                                    </td>

                                    <td>
                                        <a href="./?view=paciente&id=<?php echo $paciente_["num_identidad"]; ?>" style="color: black">
                                        <?php  
                                        echo $paciente_["nombres"]. " ". $paciente_["apellidos"]; 
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
                  <th>TI / CC</th>
                  <th>Nombre Completo</th>
                
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

      