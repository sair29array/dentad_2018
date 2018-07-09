<?php  ?>



             <div  class="card card-info">
              <div  class="card-header">
                <h3 class="card-title">Izquierda superior</h3>

               
              </div>
            
              <div class="card-body">
                <div class="chart">
                	<p v-if="messageAddTragDiagPieza">{{messageAddTragDiagPieza }}</p>
                 <table class="table" border="0">
                    
                    <tr>

                      <td v-if="select_21" class="border border-info  bg-info " @click="select_21 = !select_21" style="cursor: pointer;">21</td>

                      <td v-if="!select_21"  @click="select_21 = !select_21" style="cursor: pointer;">21</td>


                      <td v-if="select_22" class="border border-info  bg-info " @click="select_22 = !select_22" style="cursor: pointer;">22</td>

                      <td v-if="!select_22"  @click="select_22 = !select_22" style="cursor: pointer;">22</td>


                      <td v-if="select_23" class="border border-info  bg-info " @click="select_23 = !select_23" style="cursor: pointer;">23</td>

                      <td v-if="!select_23"  @click="select_23 = !select_23" style="cursor: pointer;">23</td>


                      <td v-if="select_24" class="border border-info  bg-info " @click="select_24 = !select_24" style="cursor: pointer;">24</td>

                      <td v-if="!select_24"  @click="select_24 = !select_24" style="cursor: pointer;">24</td>


                      <td v-if="select_25" class="border border-info  bg-info " @click="select_25 = !select_25" style="cursor: pointer;">25</td>

                      <td v-if="!select_25"  @click="select_25 = !select_25" style="cursor: pointer;">25</td>


                      <td v-if="select_26" class="border border-info  bg-info " @click="select_26 = !select_26" style="cursor: pointer;">26</td>

                      <td v-if="!select_26"  @click="select_26 = !select_26" style="cursor: pointer;">26</td>


                      <td v-if="select_27" class="border border-info  bg-info " @click="select_27 = !select_27" style="cursor: pointer;">27</td>

                      <td v-if="!select_27"  @click="select_27 = !select_27" style="cursor: pointer;">27</td>



                      <td v-if="select_28" class="border border-info  bg-info " @click="select_28 = !select_28" style="cursor: pointer;">28</td>

                      <td v-if="!select_28"  @click="select_28 = !select_28" style="cursor: pointer;">28</td>
                      
                    </tr>


                     <tr>

                      <td v-if="select_21" class="border border-info  border-bottom-0" @click="select_21 = !select_21"><img style="cursor: pointer; width: 50px; height: 60px;" src="dist/img/odontograma/21-28/21B.png" class="img-fluid"></td>

                      <td v-if="!select_21"  @click="select_21 = !select_21"><img style="cursor: pointer; width: 50px; height: 60px;" src="dist/img/odontograma/21-28/21B.png" class="img-fluid"></td>


                      <td v-if="select_22" class="border border-info  border-bottom-0" @click="select_22 = !select_22"><img style="cursor: pointer; width: 50px; height: 60px;" src="dist/img/odontograma/21-28/22B.png" class="img-fluid"></td>

                      <td v-if="!select_22"  @click="select_22 = !select_22"><img style="cursor: pointer; width: 50px; height: 60px;" src="dist/img/odontograma/21-28/22B.png" class="img-fluid"></td>


                      <td v-if="select_23" class="border border-info  border-bottom-0" @click="select_23 = !select_23"><img style="cursor: pointer; width: 50px; height: 60px;" src="dist/img/odontograma/21-28/23B.png" class="img-fluid"></td>

                      <td v-if="!select_23"  @click="select_23 = !select_23"><img style="cursor: pointer; width: 50px; height: 60px;" src="dist/img/odontograma/21-28/23B.png" class="img-fluid"></td>


                      <td v-if="select_24" class="border border-info  border-bottom-0" @click="select_24 = !select_24"><img style="cursor: pointer; width: 50px; height: 60px;" src="dist/img/odontograma/21-28/24B.png" class="img-fluid"></td>

                      <td v-if="!select_24"  @click="select_24 = !select_24"><img style="cursor: pointer; width: 50px; height: 60px;" src="dist/img/odontograma/21-28/24B.png" class="img-fluid"></td>


                      <td v-if="select_25" class="border border-info  border-bottom-0" @click="select_25 = !select_25"><img style="cursor: pointer; width: 50px; height: 60px;" src="dist/img/odontograma/21-28/25B.png" class="img-fluid"></td>

                      <td v-if="!select_25"  @click="select_25 = !select_25"><img style="cursor: pointer; width: 50px; height: 60px;" src="dist/img/odontograma/21-28/25B.png" class="img-fluid"></td>


                      <td v-if="select_26" class="border border-info  border-bottom-0" @click="select_26 = !select_26"><img style="cursor: pointer; width: 50px; height: 60px;" src="dist/img/odontograma/21-28/26B.png" class="img-fluid"></td>

                      <td v-if="!select_26"  @click="select_26 = !select_26"><img style="cursor: pointer; width: 50px; height: 60px;" src="dist/img/odontograma/21-28/26B.png" class="img-fluid"></td>


                      <td v-if="select_27" class="border border-info  border-bottom-0" @click="select_27 = !select_27"><img style="cursor: pointer; width: 50px; height: 60px;" src="dist/img/odontograma/21-28/27B.png" class="img-fluid"></td>

                      <td v-if="!select_27"  @click="select_27 = !select_27"><img style="cursor: pointer; width: 50px; height: 60px;" src="dist/img/odontograma/21-28/27B.png" class="img-fluid"></td>


                      <td v-if="select_28" class="border border-info  border-bottom-0" @click="select_28 = !select_28"><img style="cursor: pointer; width: 50px; height: 60px;" src="dist/img/odontograma/21-28/28B.png" class="img-fluid"></td>

                      <td v-if="!select_28"  @click="select_28 = !select_28"><img style="cursor: pointer; width: 50px; height: 60px;" src="dist/img/odontograma/21-28/28B.png" class="img-fluid"></td>



                     
                    </tr>
                    <tr>
   
                      <td v-if="select_21" class="border border-info border-top-0" @click="select_21 = !select_21"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/21-28/21A.png" class="img-fluid"></td>

                      <td v-if="!select_21" @click="select_21 = !select_21"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/21-28/21A.png" class="img-fluid"></td>


                      <td v-if="select_22" class="border border-info border-top-0" @click="select_22 = !select_22"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/21-28/22A.png" class="img-fluid"></td>

                      <td v-if="!select_22" @click="select_22 = !select_22"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/21-28/22A.png" class="img-fluid"></td>


                      <td v-if="select_23" class="border border-info border-top-0" @click="select_23 = !select_23"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/21-28/23A.png" class="img-fluid"></td>

                      <td v-if="!select_23" @click="select_23 = !select_23"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/21-28/23A.png" class="img-fluid"></td>



                      <td v-if="select_24" class="border border-info border-top-0" @click="select_24 = !select_24"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/21-28/24A.png" class="img-fluid"></td>

                      <td v-if="!select_24" @click="select_24 = !select_24"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/21-28/24A.png" class="img-fluid"></td>


                      <td v-if="select_25" class="border border-info border-top-0" @click="select_25 = !select_25"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/21-28/25A.png" class="img-fluid"></td>

                      <td v-if="!select_25" @click="select_25 = !select_25"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/21-28/25A.png" class="img-fluid"></td>


                      <td v-if="select_26" class="border border-info border-top-0" @click="select_26 = !select_26"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/21-28/26A.png" class="img-fluid"></td>

                      <td v-if="!select_26" @click="select_26 = !select_26"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/21-28/26A.png" class="img-fluid"></td>


                      <td v-if="select_27" class="border border-info border-top-0" @click="select_27 = !select_27"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/21-28/27A.png" class="img-fluid"></td>

                      <td v-if="!select_27" @click="select_27 = !select_27"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/21-28/27A.png" class="img-fluid"></td>



                      <td v-if="select_28" class="border border-info border-top-0" @click="select_28 = !select_28"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/21-28/28A.png" class="img-fluid"></td>

                      <td v-if="!select_28" @click="select_28 = !select_28"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/21-28/28A.png" class="img-fluid"></td>


                     
                    </tr>

                    <tr>
                      
                      <td v-if="select_61" class="border border-info  bg-info " @click="select_61 = !select_61" style="cursor: pointer;">61</td>
                      <td v-if="!select_61"  @click="select_61 = !select_61" style="cursor: pointer;">61</td>

                      <td v-if="select_62" class="border border-info  bg-info " @click="select_62 = !select_62" style="cursor: pointer;">62</td>
                      <td v-if="!select_62"  @click="select_62 = !select_62" style="cursor: pointer;">62</td>

                      <td v-if="select_63" class="border border-info  bg-info " @click="select_63 = !select_63" style="cursor: pointer;">63</td>
                      <td v-if="!select_63"  @click="select_63 = !select_63" style="cursor: pointer;">63</td>

                      <td v-if="select_64" class="border border-info  bg-info " @click="select_64 = !select_64" style="cursor: pointer;">64</td>
                      <td v-if="!select_64"  @click="select_64 = !select_64" style="cursor: pointer;">64</td>


                      <td v-if="select_65" class="border border-info  bg-info " @click="select_65 = !select_65" style="cursor: pointer;">65</td>
                      <td v-if="!select_65"  @click="select_65 = !select_65" style="cursor: pointer;">65</td>

                      

                      <td></td>
                      <td></td>
                      <td></td>
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
                         <button v-if="!btn_loading"  @click="addTraDiagVariasPiezas(3)" onclick="addTraDiag_()" class="btn btn-info btn-block"><h5>Aceptar</h5></button>

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