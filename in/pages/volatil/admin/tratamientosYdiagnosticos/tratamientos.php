
<?php  
	if ($isset_Clinica != 0)  // si existe una clinixa
	{
		$tratamientosDB = $super_tratamientos -> GetAllTratamientos($id_clinica); 
	}
?>
 <script>
 	var edit_ID = '';
 	var delete_id = '';
 	var edit_tratamiento = "";
 	var edit_valor_total = "";
 	var edit_cuota_inicial = "";
 	var edit_duracion_dias = "";
 	var edit_duracion_meses = "";
 	var edit_duracion_anios = "";
 	<?php 
 		if (isset($_GET["Edit"])) 
 		{
 			?> edit_ID = "<?php echo $_GET["Edit"] ?>"; <?php 
 			$Trat = $super_tratamientos->GetTratamientoID($_GET["Edit"]);
 			foreach ($Trat as $key) {}
 				// ESto lo hago para obtener los datos de la base de datos y editar 
 				// con vue de forma bonita 
 			?>
 			 edit_tratamiento = "<?php echo $key["tratamiento"] ?>";
 			 edit_valor_total = "<?php echo $key["valor_total"] ?>";
 			 edit_cuota_inicial = "<?php echo $key["cuota_inicial"] ?>";
 			 edit_duracion_anios = "<?php echo $key["duracion_anios"] ?>";
 			 edit_duracion_meses = "<?php echo $key["duracion_meses"] ?>";
 			 edit_duracion_dias = "<?php echo $key["duracion_dias"] ?>";
 			<?php 
 		}

 	 ?>
 </script>

  <!-- Content Wrapper. Contains page content -->
  <div id="tratamientos" class="content-wrapper">
    
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
              <b><a href="./Mi-Clínica">¿No tienes una clínica?</a>, </b> Configura tu clínica y podrás registrar los tratamientos que tu clínica ofrece a los pacientes.
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
                  ?> Tratamientos de <b class="text-primary"> <?php echo $clinica["nombre"]; ?> 
              </b><?php if (!isset($_GET["Delete"])) {
              	?><div v-if="!edit_ID"><a v-if="!view_add_tratamiento" href="#" @click="changeView('Form_registrar_tratamiento')" class="btn btn-default float-right" ><i class="fa fa-plus-square"></i> <i class="fa fa-briefcase"></i></a></div> <?php 
              } ?>









              <?php 


              		if (@$_GET["Delete"]) 
              		{
              		   ?>
              		   <br><br>
              		   <div class="alert alert-danger alert-dismissible">
                         <h4><i class="icon fa fa-info"></i>Confirmar</h4>Eliminar el tratamiento seleccionado <b><?php echo "#". $_GET["Delete"].$id_clinica; ?></b> 
                         <b style="cursor: pointer;" @click="DeleteTratamiento()" >Eliminar</b> / 
                         <a href="./Tratamientos"><b>Cancelar</b></a>
                       </div>  
                       <script>
                       	delete_id = "<?php echo $_GET["Delete"] ?>";
                       </script>
              		   <?php 
              		}



              		if (isset($_GET["Edit"])) 
              		{
              		   ?>


              	   <!-- FORMULARIO PARA Editar TRATAMIENTOS -->
                      <transition name="slide-fade">
                       <div v-if="edit_ID" >
                        <div class="card card-default mt-4">


                          <div class="card-header">
                            <h3 class="card-title">Actualizar información de tratamiento</h3>

                           
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                            <div  v-if="!message_edit_exit" class="row">
                              <div class="col-md-12">
                                <div v-if="!edit_tratamiento_null" class="form-group">
                                  <label>Tratamiento</label>
                                  <input type="text" class="form-control" v-model="edit_tratamiento">
                                </div>
                                 <div v-if="edit_tratamiento_null" class="form-group">
                                  <label>Tratamiento</label>
                                  <input  type="text" class="form-control border-danger" v-model="edit_tratamiento" @click="tratamiento_null = false">
                              	 </div>
                              </div>

                               
                               <div class="col-md-3">
                                <div v-if="!edit_valor_total_null" class="form-group">
                                  <label>Valor total</label>
                                  <input placeholder="$" type="text" class="form-control" v-model="edit_valor_total">
                                </div>
                                <div v-if="edit_valor_total_null" class="form-group">
                                  <label>Valor total</label>
                                  <input placeholder="$"  type="number" class="form-control border-danger" v-model="edit_valor_total" @click="valor_total_null = false">
                                </div>
                              </div>

                               <div class="col-md-3">
                                <div class="form-group">
                                  <label>Cuota inicial</label>
                                  <input placeholder="$" type="number" class="form-control" v-model="edit_cuota_inicial">
                                </div>
                                
                              </div>
							


                              
                              <div class="col-md-2">
                                <div class="form-group">
                                  <label>Duración (dias)</label>
                                  <input placeholder="Dias"  type="number" min="0" maxlength="3" class="form-control" v-model="edit_duracion_dias" @click="tratamiento_null = false">
                                </div>
                              </div>



                              <div class="col-md-2">
                               
                                <div  class="form-group">
                                	<label>Duración (meses)</label>
                                  <input placeholder="Meses"  type="number" min="0" maxlength="3" class="form-control" v-model="edit_duracion_meses" @click="tratamiento_null = false">
                                </div>
                              </div>



                              <div class="col-md-2">
                               
                                <div  class="form-group">
                                <label>Duración (años)</label>
                                  <input placeholder="Años"  type="number" min="0" maxlength="3" class="form-control" v-model="edit_duracion_anios" @click="tratamiento_null = false">
                                </div>
                              </div>

                              <div v-if="edit_duracion_null" class="col-md-12">
                              	<p class="text-danger text-right">Define la duración del tratamiento</p>
                              </div>
                           
                      

                             


                              <!-- /.col -->
                              <div class="col-md-6">
                                <div class="form-group">
                                  <button @click="EditTratamiento()" class="btn btn-primary Large btn-block btn-lg" >Actualizar tratamiento</button>
                                </div>
                              </div>
                              <!-- /.col -->
                              <!-- /.col -->
                              <div class="col-md-6">
                                <div class="form-group">
                                  <a href="./Tratamientos" class="btn btn-default Large btn-block btn-lg" >Cancelar</a>
                                </div>
                              </div>
                              <!-- /.col -->
                           </div>
                            <!-- /.row -->

                            <transition>
                                <div v-if="message_edit_exit" class="alert alert-info alert-dismissible">
                                     <button @click="reloadDB()" type="button" class="close" data-dismiss="alert" aria-hidden="true">Terminar</button>
                                  <h4><i class="icon fa fa-info"></i> listo!</h4>
                                  {{message_edit_exit}}
                                </div>  
                            </transition>


                         </div>
                          <!-- /.card-body -->
                        </div>
                      </transition>
                    <!-- END FORMULARIO PARA Editar  TRATAMIENTOS-->


              		   <?php 
              		}
               ?>



















                    <!-- FORMULARIO PARA AGREGAR TRATAMIENTOS -->
                      <transition name="slide-fade">
                       <div v-if="view_add_tratamiento">
                        <div class="card card-default mt-4">


                          <div class="card-header">
                            <h3 class="card-title">Registrar un nuevo tratamiento</h3>

                            <div v-if="!message" class="card-tools">
                              <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                              <button @click="cerrarFormularioTratamientos()" type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                            <div  v-if="!message" class="row">
                              <div class="col-md-12">
                                <div v-if="!tratamiento_null" class="form-group">
                                  <label>Tratamiento</label>
                                  <input type="text" class="form-control" v-model="tratamiento">
                                </div>
                                 <div v-if="tratamiento_null" class="form-group">
                                  <label>Tratamiento</label>
                                  <input  type="text" class="form-control border-danger" v-model="tratamiento" @click="tratamiento_null = false">
                              	 </div>
                              </div>

                               
                               <div class="col-md-3">
                                <div v-if="!valor_total_null" class="form-group">
                                  <label>Valor total</label>
                                  <input placeholder="$" type="text" class="form-control" v-model="valor_total">
                                </div>
                                <div v-if="valor_total_null" class="form-group">
                                  <label>Valor total</label>
                                  <input placeholder="$"  type="number" class="form-control border-danger" v-model="valor_total" @click="valor_total_null = false">
                                </div>
                              </div>

                               <div class="col-md-3">
                                <div class="form-group">
                                  <label>Cuota inicial</label>
                                  <input placeholder="$" type="number" class="form-control" v-model="cuota_inicial">
                                </div>
                                
                              </div>
							


                              
                              <div class="col-md-2">
                                <div class="form-group">
                                  <label>Duración</label>
                                  <input placeholder="Dias"  type="number" min="0" maxlength="3" class="form-control" v-model="duracion_dias" @click="tratamiento_null = false">
                                </div>
                              </div>



                              <div class="col-md-2">
                               
                                <div  class="form-group">
                                	<label>Duración</label>
                                  <input placeholder="Meses"  type="number" min="0" maxlength="3" class="form-control" v-model="duracion_meses" @click="tratamiento_null = false">
                                </div>
                              </div>



                              <div class="col-md-2">
                               
                                <div  class="form-group">
                                <label>Duración</label>
                                  <input placeholder="Años"  type="number" min="0" maxlength="3" class="form-control" v-model="duracion_anios" @click="tratamiento_null = false">
                                </div>
                              </div>

                              <div v-if="duracion_null" class="col-md-12">
                              	<p class="text-danger text-right">Define la duración del tratamiento</p>
                              </div>
                           
                      

                             


                              <!-- /.col -->
                              <div class="col-md-12">
                                <div class="form-group">
                                  <button @click="addTratamiento()" class="btn btn-primary Large btn-block btn-lg" >Registrar</button>
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
                    <!-- END FORMULARIO PARA AGREGAR TRATAMIENTOS-->

























                  <?php 

              }else{
                echo "Tabla de Tratamientos";
              } ?></h3>
            </div>


            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped table-responsive ">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Tratamiento</th>
                  <th>Valor Total</th>
                  <th>Cuota Inicial</th>
                  <th>Duración</th>
                  <th></th>
                 
                </tr>
                </thead>
                <tbody>

                    <?php 
                        if ($isset_Clinica != 0)  // si el user tiene una clinica a su
                        {
                          foreach ($tratamientosDB as $tratamiento_) 
                          {
                            ?>
                                <tr>
                                    <td>
                                        <i class="fa fa-briefcase"></i>
                                        
                                            <?php 
                                        echo "#". $tratamiento_["id"] .  $tratamiento_["id_clinica"];
                                        ?>
                                        
                                    </td>

                                    <td>
                                        <?php echo $tratamiento_["tratamiento"]; ?>
                                    </td>

                                    <td><?php echo "$ ". number_format($tratamiento_["valor_total"]);  ?></td>

                                    <td><?php echo "$ ". number_format($tratamiento_["cuota_inicial"]);  ?></td>

                                    <td> <?php 
                                    	echo "Dias: ". $tratamiento_["duracion_dias"].
                                    	" Meses: ". $tratamiento_["duracion_meses"].
                                    	" Años: ". $tratamiento_["duracion_anios"];
                                     ?></td>

                                     <td>
                                     	 <div class="btn-group">
                                     	 	<a href="./?view=Tratamientos&Edit=<?php echo $tratamiento_["id"]; ?>" class="btn btn-info"><i class="fa fa-edit"></i></a >
                                     	 	<a href="./?view=Tratamientos&Delete=<?php echo $tratamiento_["id"]; ?>" class="btn btn-danger"><i class="fa fa-trash-alt"></i></a>
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
                  <th>Tratamiento</th>
                  <th>Valor Total</th>
                  <th>Cuota Inicial</th>
                  <th>Duración</th>
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

      