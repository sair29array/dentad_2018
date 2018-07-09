<?php  ?>




<!-- /Si se ve el recuadro grande:-->

            	<div  class="card card-info">
              <div  class="card-header" >
                
            <h3 class="card-title"><b>Derecha superior </b> </h3> 

              </div>
              <div  class="card-body content-center">
                <div class="chart">
                	 <p v-if="messageAddTragDiagPieza">{{messageAddTragDiagPieza }}</p>
                 <table class="table" border="0">
                    
                    <tr>
                      <td v-if="select_18" class="border border-info  bg-info " @click="select_18 = !select_18" style="cursor: pointer;">18</td>

                      <td v-if="!select_18"  @click="select_18 = !select_18" style="cursor: pointer;">18</td>


                      <td v-if="select_17" class="border border-info  bg-info " @click="select_17 = !select_17" style="cursor: pointer;">17</td>

                      <td v-if="!select_17"  @click="select_17 = !select_17" style="cursor: pointer;">17</td>


                      <td v-if="select_16" class="border border-info  bg-info " @click="select_16 = !select_16" style="cursor: pointer;">16</td>

                      <td v-if="!select_16"  @click="select_16 = !select_16" style="cursor: pointer;">16</td>


                      <td v-if="select_15" class="border border-info  bg-info " @click="select_15 = !select_15" style="cursor: pointer;">15</td>

                      <td v-if="!select_15"  @click="select_15 = !select_15" style="cursor: pointer;">15</td>


                      <td v-if="select_14" class="border border-info  bg-info " @click="select_14 = !select_14" style="cursor: pointer;">14</td>

                      <td v-if="!select_14"  @click="select_14 = !select_14" style="cursor: pointer;">14</td>


                      <td v-if="select_13" class="border border-info  bg-info " @click="select_13 = !select_13" style="cursor: pointer;">13</td>

                      <td v-if="!select_13"  @click="select_13 = !select_13" style="cursor: pointer;">13</td>



                      <td v-if="select_12" class="border border-info  bg-info " @click="select_12 = !select_12" style="cursor: pointer;">12</td>

                      <td v-if="!select_12"  @click="select_12 = !select_12" style="cursor: pointer;">12</td>


                      <td v-if="select_11" class="border border-info  bg-info " @click="select_11 = !select_11" style="cursor: pointer;">11</td>

                      <td v-if="!select_11"  @click="select_11 = !select_11" style="cursor: pointer;">11</td>


                     
                    </tr>


                    
                    <tr>
                      <td v-if="select_18" class="border border-info  border-bottom-0" @click="select_18 = !select_18"><img style="cursor: pointer; width: 50px; height: 60px;" src="dist/img/odontograma/11-18/18B.png" class="img-fluid"></td>

                      <td v-if="!select_18"  @click="select_18 = !select_18"><img style="cursor: pointer; width: 50px; height: 60px;" src="dist/img/odontograma/11-18/18B.png" class="img-fluid"></td>



                      <td v-if="select_17" class="border border-info  border-bottom-0" @click="select_17 = !select_17"><img style="cursor: pointer; width: 50px; height: 60px;" src="dist/img/odontograma/11-18/17B.png" class="img-fluid"></td>

                      <td v-if="!select_17"  @click="select_17 = !select_17"><img style="cursor: pointer; width: 50px; height: 60px;" src="dist/img/odontograma/11-18/17B.png" class="img-fluid"></td>



                      <td v-if="select_16" class="border border-info  border-bottom-0" @click="select_16 = !select_16"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/11-18/16B.png" class="img-fluid"></td>

                       <td v-if="!select_16"  @click="select_16 = !select_16"><img style="cursor: pointer; width: 50px; height: 60px;" src="dist/img/odontograma/11-18/16B.png" class="img-fluid"></td>



                      <td v-if="select_15" class="border border-info  border-bottom-0" @click="select_15 = !select_15"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/11-18/15B.png" class="img-fluid"></td>

                       <td v-if="!select_15"  @click="select_15 = !select_15"><img style="cursor: pointer; width: 50px; height: 60px;" src="dist/img/odontograma/11-18/15B.png" class="img-fluid"></td>



                      <td v-if="select_14" class="border border-info  border-bottom-0" @click="select_14 = !select_14"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/11-18/14B.png" class="img-fluid"></td>

                      <td v-if="!select_14"  @click="select_14 = !select_14"><img style="cursor: pointer; width: 50px; height: 60px;" src="dist/img/odontograma/11-18/14B.png" class="img-fluid"></td>



                      <td v-if="select_13" class="border border-info  border-bottom-0" @click="select_13 = !select_13"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/11-18/13B.png" class="img-fluid"></td>

                       <td v-if="!select_13"  @click="select_13 = !select_13"><img style="cursor: pointer; width: 50px; height: 60px;" src="dist/img/odontograma/11-18/13B.png" class="img-fluid"></td>



                       <td v-if="select_12" class="border border-info  border-bottom-0" @click="select_12 = !select_12"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/11-18/12B.png" class="img-fluid"></td>

                       <td v-if="!select_12"  @click="select_12 = !select_12"><img style="cursor: pointer; width: 50px; height: 60px;" src="dist/img/odontograma/11-18/12B.png" class="img-fluid"></td>


                     	<td v-if="select_11" class="border border-info border-bottom-0" @click="select_11 = !select_11"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/11-18/11B.png" class="img-fluid"></td>

                       <td v-if="!select_11"  @click="select_11 = !select_11"><img style="cursor: pointer; width: 50px; height: 60px;" src="dist/img/odontograma/11-18/11B.png" class="img-fluid"></td>


                    </tr>




                    <tr>
                      <td v-if="select_18" class="border border-info border-top-0" @click="select_18 = !select_18"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/11-18/18A.png" class="img-fluid"></td>

                      <td v-if="!select_18"  @click="select_18 = !select_18"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/11-18/18A.png" class="img-fluid"></td>




                      <td v-if="select_17" class="border border-info border-top-0" @click="select_17 = !select_17"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/11-18/17A.png" class="img-fluid"></td>

                      <td v-if="!select_17"  @click="select_17 = !select_17"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/11-18/17A.png" class="img-fluid"></td>


                      <td v-if="select_16" class="border border-info border-top-0" @click="select_16 = !select_16"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/11-18/16A.png" class="img-fluid"></td>

                      <td v-if="!select_16"  @click="select_16 = !select_16"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/11-18/16A.png" class="img-fluid"></td>



                       <td v-if="select_15" class="border border-info border-top-0" @click="select_15 = !select_15"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/11-18/15A.png" class="img-fluid"></td>

                      <td v-if="!select_15"  @click="select_15 = !select_15"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/11-18/15A.png" class="img-fluid"></td>



                      <td v-if="select_14" class="border border-info border-top-0" @click="select_14= !select_14"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/11-18/14A.png" class="img-fluid"></td>

                      <td v-if="!select_14"  @click="select_14 = !select_14"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/11-18/14A.png" class="img-fluid"></td>



                      <td v-if="select_13" class="border border-info border-top-0" @click="select_13 = !select_13"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/11-18/13A.png" class="img-fluid"></td>

                      <td v-if="!select_13"  @click="select_13 = !select_13"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/11-18/13A.png" class="img-fluid"></td>


                      <td v-if="select_12" class="border border-info border-top-0" @click="select_12 = !select_12"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/11-18/12A.png" class="img-fluid"></td>

                      <td v-if="!select_12"  @click="select_12 = !select_12"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/11-18/12A.png" class="img-fluid"></td>


                      <td v-if="select_11" class="border border-info border-top-0" @click="select_11 = !select_11"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/11-18/11A.png" class="img-fluid"></td>

                      <td v-if="!select_11"  @click="select_11 = !select_11"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/11-18/11A.png" class="img-fluid"></td>


                     
                    </tr>




                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td v-if="select_55" class="border border-info  bg-info " @click="select_55 = !select_55" style="cursor: pointer;">55</td>
                      <td v-if="!select_55"  @click="select_55 = !select_55" style="cursor: pointer;">55</td>

                       <td v-if="select_54" class="border border-info  bg-info " @click="select_54 = !select_54" style="cursor: pointer;">54</td>
                      <td v-if="!select_54"  @click="select_54 = !select_54" style="cursor: pointer;">54</td>

                      <td v-if="select_53" class="border border-info  bg-info " @click="select_53 = !select_53" style="cursor: pointer;">53</td>
                      <td v-if="!select_53"  @click="select_53 = !select_53" style="cursor: pointer;">53</td>

                      <td v-if="select_52" class="border border-info  bg-info " @click="select_52 = !select_52" style="cursor: pointer;">52</td>
                      <td v-if="!select_52"  @click="select_52 = !select_52" style="cursor: pointer;">52</td>

                       <td v-if="select_51" class="border border-info  bg-info " @click="select_51 = !select_51" style="cursor: pointer;">51</td>
                      <td v-if="!select_51"  @click="select_51 = !select_51" style="cursor: pointer;">51</td>


                    </tr>


                  
                  </table>
              		    

















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
                         <button v-if="!btn_loading"  @click="addTraDiagVariasPiezas(1)" onclick="addTraDiag_()" class="btn btn-info btn-block"><h5>Aceptar</h5></button>

                         <button v-if="btn_loading"  class="btn btn-info btn-block "><h5>Cargando...</h5></button>
                       </div>
                              <!----body   -->
                      </div>
                    </div>
                  </div>

             
              		<button class="btn btn-danger btn-block" @click="ShowAll_recuadros()"><h5>Volver</h5></button>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->





<?php include("recuadro_de_anotaciones_a_todos_los_dientes_de_un_recuadro.php"); ?>