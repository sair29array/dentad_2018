<?php  ?>

   <div  class="card card-info">
              <div  class="card-header" >
                <h3 class="card-title">Derecha inferior</h3>
              </div>
              
              <div class="card-body">
                <div class="chart">
                	<p v-if="messageAddTragDiagPieza">{{messageAddTragDiagPieza }}</p>
                 <table class="table" border="0">
                    
                    <tr>




                      <td v-if="select_48" class="border border-info bg-info" @click="select_48 = !select_48" style="cursor: pointer;">48</td>

                      <td v-if="!select_48" @click="select_48 = !select_48" style="cursor: pointer;">48</td>


                      <td v-if="select_47" class="border border-info bg-info" @click="select_47 = !select_47" style="cursor: pointer;">47</td>

                      <td v-if="!select_47" @click="select_47 = !select_47" style="cursor: pointer;">47</td>


                       <td v-if="select_46" class="border border-info bg-info" @click="select_46 = !select_46" style="cursor: pointer;">46</td>

                      <td v-if="!select_46" @click="select_46 = !select_46" style="cursor: pointer;">46</td>


                       <td v-if="select_45" class="border border-info bg-info" @click="select_45 = !select_45" style="cursor: pointer;">45</td>

                      <td v-if="!select_45" @click="select_45 = !select_45" style="cursor: pointer;">45</td>


                       <td v-if="select_44" class="border border-info bg-info" @click="select_44 = !select_44" style="cursor: pointer;">44</td>

                      <td v-if="!select_44" @click="select_44 = !select_44" style="cursor: pointer;">44</td>



                       <td v-if="select_43" class="border border-info bg-info" @click="select_43 = !select_43" style="cursor: pointer;">43</td>

                      <td v-if="!select_43" @click="select_43 = !select_43" style="cursor: pointer;">43</td>




                       <td v-if="select_42" class="border border-info bg-info" @click="select_42 = !select_42" style="cursor: pointer;">42</td>

                      <td v-if="!select_42" @click="select_42 = !select_42" style="cursor: pointer;">42</td>


                       <td v-if="select_41" class="border border-info bg-info" @click="select_41 = !select_41" style="cursor: pointer;">41</td>

                      <td v-if="!select_41" @click="select_41 = !select_41" style="cursor: pointer;">41</td>
                      
                    </tr>





                    <tr>

                      <td v-if="select_48" class="border border-info border-bottom-0" @click="select_48 = !select_48"><img style="cursor: pointer;   width: 50px; height: 60px;" src="dist/img/odontograma/41-48/48A.png" class="img-fluid"></td>

                      <td v-if="!select_48"  @click="select_48 = !select_48"><img style="cursor: pointer;   width: 50px; height: 60px;" src="dist/img/odontograma/41-48/48A.png" class="img-fluid"></td>


                      <td v-if="select_47" class="border border-info border-bottom-0" @click="select_47 = !select_47"><img style="cursor: pointer;   width: 50px; height: 60px;" src="dist/img/odontograma/41-48/47A.png" class="img-fluid"></td>

                      <td v-if="!select_47"  @click="select_47 = !select_47"><img style="cursor: pointer;   width: 50px; height: 60px;" src="dist/img/odontograma/41-48/47A.png" class="img-fluid"></td>


                      <td v-if="select_46" class="border border-info border-bottom-0" @click="select_46 = !select_46"><img style="cursor: pointer;   width: 50px; height: 60px;" src="dist/img/odontograma/41-48/46A.png" class="img-fluid"></td>

                      <td v-if="!select_46"  @click="select_46 = !select_46"><img style="cursor: pointer;   width: 50px; height: 60px;" src="dist/img/odontograma/41-48/46A.png" class="img-fluid"></td>


                      <td v-if="select_45" class="border border-info border-bottom-0" @click="select_45 = !select_45"><img style="cursor: pointer;   width: 50px; height: 60px;" src="dist/img/odontograma/41-48/45A.png" class="img-fluid"></td>

                      <td v-if="!select_45"  @click="select_45 = !select_45"><img style="cursor: pointer;   width: 50px; height: 60px;" src="dist/img/odontograma/41-48/45A.png" class="img-fluid"></td>


                      <td v-if="select_44" class="border border-info border-bottom-0" @click="select_44 = !select_44"><img style="cursor: pointer;   width: 50px; height: 60px;" src="dist/img/odontograma/41-48/44A.png" class="img-fluid"></td>

                      <td v-if="!select_44"  @click="select_44 = !select_44"><img style="cursor: pointer;   width: 50px; height: 60px;" src="dist/img/odontograma/41-48/44A.png" class="img-fluid"></td>


                      <td v-if="select_43" class="border border-info border-bottom-0" @click="select_43 = !select_43"><img style="cursor: pointer;   width: 50px; height: 60px;" src="dist/img/odontograma/41-48/43A.png" class="img-fluid"></td>

                      <td v-if="!select_43"  @click="select_43 = !select_43"><img style="cursor: pointer;   width: 50px; height: 60px;" src="dist/img/odontograma/41-48/43A.png" class="img-fluid"></td>


                      <td v-if="select_42" class="border border-info border-bottom-0" @click="select_42 = !select_42"><img style="cursor: pointer;   width: 50px; height: 60px;" src="dist/img/odontograma/41-48/42A.png" class="img-fluid"></td>

                      <td v-if="!select_42"  @click="select_42 = !select_42"><img style="cursor: pointer;   width: 50px; height: 60px;" src="dist/img/odontograma/41-48/42A.png" class="img-fluid"></td>


                      <td v-if="select_41" class="border border-info border-bottom-0" @click="select_41 = !select_41"><img style="cursor: pointer;   width: 50px; height: 60px;" src="dist/img/odontograma/41-48/41A.png" class="img-fluid"></td>

                      <td v-if="!select_41"  @click="select_41 = !select_41"><img style="cursor: pointer;   width: 50px; height: 60px;" src="dist/img/odontograma/41-48/41A.png" class="img-fluid"></td>







                     
                    </tr>

                     <tr>
                      <td v-if="select_48" class="border border-info border-top-0" @click="select_48 = !select_48"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/41-48/48B.png" class="img-fluid"></td>

                      <td v-if="!select_48" @click="select_48 = !select_48"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/41-48/48B.png" class="img-fluid"></td>


                       <td v-if="select_47" class="border border-info border-top-0" @click="select_47 = !select_47"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/41-48/47B.png" class="img-fluid"></td>

                      <td v-if="!select_47" @click="select_47 = !select_47"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/41-48/47B.png" class="img-fluid"></td>


                      <td v-if="select_46" class="border border-info border-top-0" @click="select_46 = !select_46"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/41-48/46B.png" class="img-fluid"></td>

                      <td v-if="!select_46" @click="select_46 = !select_46"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/41-48/46B.png" class="img-fluid"></td>


                      <td v-if="select_45" class="border border-info border-top-0" @click="select_45 = !select_45"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/41-48/45B.png" class="img-fluid"></td>

                      <td v-if="!select_45" @click="select_45 = !select_45"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/41-48/45B.png" class="img-fluid"></td>


                      <td v-if="select_44" class="border border-info border-top-0" @click="select_44 = !select_44"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/41-48/44B.png" class="img-fluid"></td>

                      <td v-if="!select_44" @click="select_44 = !select_44"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/41-48/44B.png" class="img-fluid"></td>


                      <td v-if="select_43" class="border border-info border-top-0" @click="select_43 = !select_43"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/41-48/43B.png" class="img-fluid"></td>

                      <td v-if="!select_43" @click="select_43 = !select_43"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/41-48/43B.png" class="img-fluid"></td>


                      <td v-if="select_42" class="border border-info border-top-0" @click="select_42 = !select_42"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/41-48/42B.png" class="img-fluid"></td>

                      <td v-if="!select_42" @click="select_42 = !select_42"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/41-48/42B.png" class="img-fluid"></td>


                      <td v-if="select_41" class="border border-info border-top-0" @click="select_41 = !select_41"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/41-48/41B.png" class="img-fluid"></td>

                      <td v-if="!select_41" @click="select_41 = !select_41"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/41-48/41B.png" class="img-fluid"></td>


                      

                    </tr>
                  	<tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td v-if="select_85" class="border border-info  bg-info " @click="select_85 = !select_85" style="cursor: pointer;">85</td>
                      <td v-if="!select_85"  @click="select_85 = !select_85" style="cursor: pointer;">85</td>

                       <td v-if="select_84" class="border border-info  bg-info " @click="select_84 = !select_84" style="cursor: pointer;">84</td>
                      <td v-if="!select_84"  @click="select_84 = !select_84" style="cursor: pointer;">84</td>

                      <td v-if="select_83" class="border border-info  bg-info " @click="select_83 = !select_83" style="cursor: pointer;">83</td>
                      <td v-if="!select_83"  @click="select_83 = !select_83" style="cursor: pointer;">83</td>

                      <td v-if="select_82" class="border border-info  bg-info " @click="select_82 = !select_82" style="cursor: pointer;">82</td>
                      <td v-if="!select_82"  @click="select_82 = !select_82" style="cursor: pointer;">82</td>

                       <td v-if="select_81" class="border border-info  bg-info " @click="select_81 = !select_81" style="cursor: pointer;">81</td>
                      <td v-if="!select_81"  @click="select_81 = !select_81" style="cursor: pointer;">81</td>


                    </tr>
                  </table>
                  






                  	<!--  ACORDEON -->
                  		 <div class="card card-info">
                    <div class="card-header">
                      <h4 class="card-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#AddAnotacion">
                          <i class="fa fa-plus"></i> Agregar un diagnóstico o un tratamiento a las piezas seleccionadas.
                        </a>
                      </h4>
                    </div>

                    <div id="AddAnotacion" class="panel-collapse collapse in">
                      <div class="card-body">
                              <!--bosyyyy--->
                            <p v-if = "messageAddTragDiag">{{messageAddTragDiag}}</p>
                        <select id="diagnostico" class="form-control select2 mt-2">
                          <option value="">Agregar diagnóstico</option>
                          <?php 

                            foreach ($diagnosticosDB as $diagnostico) 
                            {
                              ?> <option value="<?php echo $diagnostico["id"]; ?>" ><p class="text text-fluid"><?php echo $diagnostico["diagnostico"]; ?></p></option>
                          <?php 
                            }
                           ?>
                        </select>

                        
                        <br><br>
                        <select id="tratamiento" class="form-control select2 ">
                         <option value="">Agregar tratamiento</option>
                          <?php 
                            foreach ($tratamientosDB  as $tratamiento) 
                            {
                              ?>
                              <option value="<?php echo $tratamiento["id"] ?>"><?php echo $tratamiento["tratamiento"]; ?></option>
                              <?php 
                            }
                           ?>
                        </select>
                        <br><br>
                          <p v-if="messageEStadoTratamiento"> {{messageEStadoTratamiento}}</p>
                          <ul>
                            <li v-if="!tratamientoEnProceso" @click="tratamientoEnProceso = !tratamientoEnProceso" v-on:click="tratamientoFinalizado = false" style="cursor: pointer;">En proceso</li>
                            <li v-if="tratamientoEnProceso" @click="tratamientoEnProceso = !tratamientoEnProceso"  v-on:click="tratamientoFinalizado = false" style="cursor: pointer;" class="text-info">En proceso</li>

                            <li v-if="!tratamientoFinalizado" @click="tratamientoFinalizado = !tratamientoFinalizado" v-on:click="tratamientoEnProceso = false" style="cursor: pointer;">Finalizado</li>
                            <li v-if="tratamientoFinalizado" @click="tratamientoFinalizado = !tratamientoFinalizado" v-on:click="tratamientoEnProceso = false" style="cursor: pointer;" class="text-info">Finalizado</li>
                          </ul>
                       

                       
                       <div  class="mt-2 btn-group"><!--  indica el recudro 1 addTraDiagVariasPiezas(1)-->
                         <button v-if="!btn_loading"  @click="addTraDiagVariasPiezas(2)" onclick="addTraDiag_()" class="btn btn-info btn-block"><h5>Aceptar</h5></button>

                         <button v-if="btn_loading"  class="btn btn-info btn-block "><h5>Cargando...</h5></button>
                       </div>
                              <!----body   -->
                      </div>
                    </div>
                  </div>

             
              		<button class="btn btn-danger btn-block" @click="ShowAll_recuadros()"><h5>Volver</h5></button>
                  	<!-- ACORDEON -->







                  
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

 <?php include("recuadro_de_anotaciones_a_todos_los_dientes_de_un_recuadro.php"); ?>