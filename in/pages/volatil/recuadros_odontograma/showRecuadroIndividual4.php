
            
<?php  ?>
  <!-- BAR CHART -->
            <div  class="card card-info">
              <div  class="card-header" >
                <h3 class="card-title">Izquierda inferior</h3>

                
              </div>
             
              <div class="card-body">
                <div class="chart">
                	<p v-if="messageAddTragDiagPieza">{{messageAddTragDiagPieza }}</p>
                 <table class="table" border="0">
                    
                    <tr>

                       <td v-if="select_31" class="border border-info  bg-info " @click="select_31 = !select_31" style="cursor: pointer;">31</td>

                      <td v-if="!select_31"  @click="select_31 = !select_31" style="cursor: pointer;">31</td>


                      <td v-if="select_32" class="border border-info  bg-info " @click="select_32 = !select_32" style="cursor: pointer;">32</td>

                      <td v-if="!select_32"  @click="select_32 = !select_32" style="cursor: pointer;">32</td>


                       <td v-if="select_33" class="border border-info  bg-info " @click="select_33 = !select_33" style="cursor: pointer;">33</td>

                      <td v-if="!select_33"  @click="select_33 = !select_33" style="cursor: pointer;">33</td>


                      <td v-if="select_34" class="border border-info  bg-info " @click="select_34 = !select_34" style="cursor: pointer;">34</td>

                      <td v-if="!select_34"  @click="select_34 = !select_34" style="cursor: pointer;">34</td>


                      <td v-if="select_35" class="border border-info  bg-info " @click="select_35 = !select_35" style="cursor: pointer;">35</td>

                      <td v-if="!select_35"  @click="select_35 = !select_35" style="cursor: pointer;">35</td>


                      <td v-if="select_36" class="border border-info  bg-info " @click="select_36 = !select_36" style="cursor: pointer;">36</td>

                      <td v-if="!select_36"  @click="select_36 = !select_36" style="cursor: pointer;">36</td>


                      <td v-if="select_37" class="border border-info  bg-info " @click="select_37 = !select_37" style="cursor: pointer;">37</td>

                      <td v-if="!select_37"  @click="select_37 = !select_37" style="cursor: pointer;">37</td>


                      <td v-if="select_38" class="border border-info  bg-info " @click="select_38 = !select_38" style="cursor: pointer;">38</td>

                      <td v-if="!select_38"  @click="select_38 = !select_38" style="cursor: pointer;">38</td>

                      
                     
                    </tr>
                    
                    <tr>
                     


                      <td v-if="select_31" class="border border-info  border-bottom-0" @click="select_31 = !select_31"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/31-38/31A.png" class="img-fluid"></td>

                      <td v-if="!select_31" @click="select_31 = !select_31"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/31-38/31A.png" class="img-fluid"></td>


                      <td v-if="select_32" class="border border-info  border-bottom-0" @click="select_32 = !select_32"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/31-38/32A.png" class="img-fluid"></td>

                      <td v-if="!select_32" @click="select_32 = !select_32"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/31-38/32A.png" class="img-fluid"></td>



                      <td v-if="select_33" class="border border-info  border-bottom-0" @click="select_33 = !select_33"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/31-38/33A.png" class="img-fluid"></td>

                      <td v-if="!select_33" @click="select_33 = !select_33"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/31-38/33A.png" class="img-fluid"></td>



                      <td v-if="select_34" class="border border-info  border-bottom-0" @click="select_34 = !select_34"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/31-38/34A.png" class="img-fluid"></td>

                      <td v-if="!select_34" @click="select_34 = !select_34"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/31-38/34A.png" class="img-fluid"></td>



                      <td v-if="select_35" class="border border-info  border-bottom-0" @click="select_35 = !select_35"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/31-38/35A.png" class="img-fluid"></td>

                      <td v-if="!select_35" @click="select_35 = !select_35"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/31-38/35A.png" class="img-fluid"></td>


                      <td v-if="select_36" class="border border-info  border-bottom-0" @click="select_36 = !select_36"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/31-38/36A.png" class="img-fluid"></td>

                      <td v-if="!select_36" @click="select_36 = !select_36"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/31-38/36A.png" class="img-fluid"></td>


                      
                      <td v-if="select_37" class="border border-info  border-bottom-0" @click="select_37 = !select_37"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/31-38/37A.png" class="img-fluid"></td>

                      <td v-if="!select_37" @click="select_37 = !select_37"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/31-38/37A.png" class="img-fluid"></td>


                      <td v-if="select_38" class="border border-info  border-bottom-0" @click="select_38 = !select_38"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/31-38/38A.png" class="img-fluid"></td>

                      <td v-if="!select_38" @click="select_38 = !select_38"><img style="cursor: pointer;  width: 50px; height: 60px;" src="dist/img/odontograma/31-38/38A.png" class="img-fluid"></td>


                    </tr>
                    <tr>


                      <td v-if="select_31" class="border border-info border-top-0" @click="select_31 = !select_31"><img style="cursor: pointer; width: 50px; height: 60px;" src="dist/img/odontograma/31-38/31B.png" class="img-fluid"></td>

                      <td v-if="!select_31" @click="select_31 = !select_31"><img style="cursor: pointer; width: 50px; height: 60px;" src="dist/img/odontograma/31-38/31B.png" class="img-fluid"></td>


                      <td v-if="select_32" class="border border-info border-top-0" @click="select_32 = !select_32"><img style="cursor: pointer; width: 50px; height: 60px;" src="dist/img/odontograma/31-38/32B.png" class="img-fluid"></td>

                      <td v-if="!select_32" @click="select_32 = !select_32"><img style="cursor: pointer; width: 50px; height: 60px;" src="dist/img/odontograma/31-38/32B.png" class="img-fluid"></td>


                      <td v-if="select_33" class="border border-info border-top-0" @click="select_33 = !select_33"><img style="cursor: pointer; width: 50px; height: 60px;" src="dist/img/odontograma/31-38/33B.png" class="img-fluid"></td>

                      <td v-if="!select_33" @click="select_33 = !select_33"><img style="cursor: pointer; width: 50px; height: 60px;" src="dist/img/odontograma/31-38/33B.png" class="img-fluid"></td>



                      <td v-if="select_34" class="border border-info border-top-0" @click="select_34 = !select_34"><img style="cursor: pointer; width: 50px; height: 60px;" src="dist/img/odontograma/31-38/34B.png" class="img-fluid"></td>

                      <td v-if="!select_34" @click="select_34 = !select_34"><img style="cursor: pointer; width: 50px; height: 60px;" src="dist/img/odontograma/31-38/34B.png" class="img-fluid"></td>



                      <td v-if="select_35" class="border border-info border-top-0" @click="select_35 = !select_35"><img style="cursor: pointer; width: 50px; height: 60px;" src="dist/img/odontograma/31-38/35B.png" class="img-fluid"></td>

                      <td v-if="!select_35" @click="select_35 = !select_35"><img style="cursor: pointer; width: 50px; height: 60px;" src="dist/img/odontograma/31-38/35B.png" class="img-fluid"></td>



                       <td v-if="select_36" class="border border-info border-top-0" @click="select_36 = !select_36"><img style="cursor: pointer; width: 50px; height: 60px;" src="dist/img/odontograma/31-38/36B.png" class="img-fluid"></td>

                      <td v-if="!select_36" @click="select_36 = !select_36"><img style="cursor: pointer; width: 50px; height: 60px;" src="dist/img/odontograma/31-38/36B.png" class="img-fluid"></td>



                      <td v-if="select_37" class="border border-info border-top-0" @click="select_37 = !select_37"><img style="cursor: pointer; width: 50px; height: 60px;" src="dist/img/odontograma/31-38/37B.png" class="img-fluid"></td>

                      <td v-if="!select_37" @click="select_37 = !select_37"><img style="cursor: pointer; width: 50px; height: 60px;" src="dist/img/odontograma/31-38/37B.png" class="img-fluid"></td>



                      <td v-if="select_38" class="border border-info border-top-0" @click="select_38 = !select_38"><img style="cursor: pointer; width: 50px; height: 60px;" src="dist/img/odontograma/31-38/38B.png" class="img-fluid"></td>

                      <td v-if="!select_38" @click="select_38 = !select_38"><img style="cursor: pointer; width: 50px; height: 60px;" src="dist/img/odontograma/31-38/38B.png" class="img-fluid"></td>
                    
                    </tr>

                    <tr>
                      
                      <td v-if="select_71" class="border border-info  bg-info " @click="select_71 = !select_71" style="cursor: pointer;">71</td>
                      <td v-if="!select_71"  @click="select_71 = !select_71" style="cursor: pointer;">71</td>

                      <td v-if="select_72" class="border border-info  bg-info " @click="select_72 = !select_72" style="cursor: pointer;">72</td>
                      <td v-if="!select_72"  @click="select_72 = !select_72" style="cursor: pointer;">72</td>

                      <td v-if="select_73" class="border border-info  bg-info " @click="select_73 = !select_73" style="cursor: pointer;">73</td>
                      <td v-if="!select_73"  @click="select_73 = !select_73" style="cursor: pointer;">73</td>

                      <td v-if="select_74" class="border border-info  bg-info " @click="select_74 = !select_74" style="cursor: pointer;">74</td>
                      <td v-if="!select_74"  @click="select_74 = !select_74" style="cursor: pointer;">74</td>


                      <td v-if="select_75" class="border border-info  bg-info " @click="select_75 = !select_75" style="cursor: pointer;">75</td>
                      <td v-if="!select_75"  @click="select_75 = !select_75" style="cursor: pointer;">75</td>

                      

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
                         <button v-if="!btn_loading"  @click="addTraDiagVariasPiezas(4)" onclick="addTraDiag_()" class="btn btn-info btn-block"><h5>Aceptar</h5></button>

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