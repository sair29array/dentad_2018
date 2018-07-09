
<?php  
	if ($isset_Clinica != 0)  // si existe una clinixa
	{
		$DiagnosticosDB = $super_diagnosticos -> GetAllDiagnosticos($id_clinica); 
	}
?>
 

  <!-- Content Wrapper. Contains page content -->
  <div id="diagnosticos" class="content-wrapper">
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
              <b><a href="./Mi-Clínica">¿No tienes una clínica?</a>, </b> Configura tu clínica y podrás registrar los diagnósticos que podrás usar más adelante.
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
                  ?> Diagnósticos de <b class="text-primary"> <?php echo $clinica["nombre"]; ?> 
              </b>
              	<div> <?php if (!isset($_GET["Edit"])) 
                {
                  ?><a v-if="!view_add_diagnostico" href="#" @click="changeView('Form_registrar_diagnostico')" class="btn btn-default float-right" > <i class="fa fa-file-medical"></i></a> <?php 
                } ?>
           
                <script>var delete_id = "";</script>
                <?php 
                  if (isset($_GET["Delete"])) 
                  {
                    ?>
                    <br><br>
                     <div class="alert alert-danger alert-dismissible">
                         <h4><i class="icon fa fa-info"></i>Confirmar</h4>Eliminar el diagnóstico seleccionado <b><?php echo "#". $_GET["Delete"].$id_clinica; ?></b> 
                         <b style="cursor: pointer;" @click="DeleteDiagnostico()" >Eliminar</b> / 
                         <a href="./Diagnósticos"><b>Cancelar</b></a>
                       </div>  
                       <script>
                        delete_id = "<?php echo $_GET["Delete"] ?>";
                       </script>
                    <?php 
                  }
                 ?>



                  <script>
                    var Edit_ID = "";
                    var Edit_diagnostico = "";
                  </script>
                    <?php 

                    if (isset($_GET["Edit"])) 
                    {
                      $d = $super_diagnosticos -> GetDiagnosticoId($_GET["Edit"]);
                      foreach ($d as $key ) {}
                        ?>

                        <script>
                         Edit_ID = "<?php echo $_GET["Edit"]  ?>";
                         Edit_diagnostico = "<?php echo $key["diagnostico"] ?>"
                        </script>
                    <!-- FORMULARIO PARA EDITAR DIAGNOSTICOS -->
                      <transition name="slide-fade">
                       <div v-if="Edit_ID">
                        <div class="card card-default mt-4">


                          <div class="card-header">
                            <h3 class="card-title">Actualizar diagnóstico</h3>

                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                            <div  v-if="!message_edit" class="row">
                              <div class="col-md-12">
                                <div v-if="!Edit_diagnostico_null" class="form-group">
                                  <label>Diagnóstico</label>
                                  <input type="text" class="form-control" v-model="Edit_diagnostico">
                                </div>
                                 <div v-if="Edit_diagnostico_null" class="form-group">
                                  <label>Diagnóstico</label>
                                  <input  type="text" class="form-control border-danger" v-model="Edit_diagnostico" @click="diagnostico_null = false">
                                 </div>
                              </div>

                              <!-- /.col -->
                              <div class="col-md-6">
                                <div class="form-group">
                                  <button @click="Edit_diagnostico_()" class="btn btn-primary Large btn-block btn-lg" >Actualizar</button>
                                </div>
                              </div>
                               <div class="col-md-6">
                                <div class="form-group">
                                  <a href="./Diagnósticos" class="btn btn-default Large btn-block btn-lg" >Cancelar</a>
                                </div>
                              </div>
                              <!-- /.col -->
                           </div>
                            <!-- /.row -->

                            <transition>
                                <div v-if="message_edit" class="alert alert-info alert-dismissible">
                                     <button @click="reloadDB()" type="button" class="close" data-dismiss="alert" aria-hidden="true">Terminar</button>
                                  <h4><i class="icon fa fa-info"></i> listo!</h4>
                                  {{message_edit}}
                                </div>  
                            </transition>


                         </div>
                          <!-- /.card-body -->
                        </div>
                      </transition>
                    <!-- END FORMULARIO PARA EDITAR DIAGNOSTICOS-->
                        <?php 
                     } ?>



















                    <!-- FORMULARIO PARA AGREGAR DIAGNOSTICOS -->
                      <transition name="slide-fade">
                       <div v-if="view_add_diagnostico">
                        <div class="card card-default mt-4">


                          <div class="card-header">
                            <h3 class="card-title">Registrar un nuevo diagnóstico</h3>

                            <div v-if="!message" class="card-tools">
                              <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                              <button @click="cerrarFormularioDiagnosticos()" type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                            <div  v-if="!message" class="row">
                              <div class="col-md-12">
                                <div v-if="!diagnostico_null" class="form-group">
                                  <label>Diagnóstico</label>
                                  <input type="text" class="form-control" v-model="diagnostico">
                                </div>
                                 <div v-if="diagnostico_null" class="form-group">
                                  <label>Diagnóstico</label>
                                  <input  type="text" class="form-control border-danger" v-model="diagnostico" @click="diagnostico_null = false">
                              	 </div>
                              </div>

                              <!-- /.col -->
                              <div class="col-md-12">
                                <div class="form-group">
                                  <button @click="add_diagnostico()" class="btn btn-primary Large btn-block btn-lg" >Registrar</button>
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
                    <!-- END FORMULARIO PARA AGREGAR DIAGNOSTICOS-->

























                  <?php 

              }else{
                echo "Tabla de Diagnóstico";
              } ?></h3>
            </div>


            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped table-responsive ">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Diagnóstico</th>
                  <th></th>
                 
                </tr>
                </thead>
                <tbody>

                    <?php 
                        if ($isset_Clinica != 0)  // si el user tiene una clinica a su
                        {
                          foreach ($DiagnosticosDB as $diag) 
                          {
                            ?>
                                <tr>
                                    <td>
                                        <i class="fa fa-briefcase"></i>
                                        
                                            <?php 
                                        echo "#". $diag["id"] .  $diag["id_clinica"];
                                        ?>
                                        
                                    </td>

                                    <td>
                                        <?php echo $diag["diagnostico"]; ?>
                                    </td>


                                   
                                     <td>
                                     	 <div class="btn-group">
                                     	 	<a href="./?view=Diagnósticos&Edit=<?php echo $diag["id"]; ?>" class="btn btn-info"><i class="fa fa-edit"></i></a >
                                     	 	<a href="./?view=Diagnósticos&Delete=<?php echo $diag["id"]; ?>" class="btn btn-danger"><i class="fa fa-trash-alt"></i></a>
                                     	 </div>
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
                  <th>Diagnóstico</th>
                  <th></th>
                
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

      