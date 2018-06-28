<?php  ?>

  <!-- BAR CHART -->
            <div v-if="!recuadro_4" class="card card-info">
              <div @click="VerRecuadroIndividual(4)" class="card-header" style="cursor:pointer;">
                <h3 class="card-title">Izquierda</h3>

                
              </div>
             
              <div class="card-body">
                <div class="chart">
                 <table class="table" border="0">
                    
                    <tr>
                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 31" class="border border-info" style="cursor: pointer">31</td>

                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(31)" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 31"  style="cursor: pointer">31</td>



                       <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 32" class="border border-info" style="cursor: pointer">32</td>

                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(32)" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 32"  style="cursor: pointer">32</td>


                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 33" class="border border-info" style="cursor: pointer">33</td>

                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(33)" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 33"  style="cursor: pointer">33</td>



                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 34" class="border border-info" style="cursor: pointer">34</td>

                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(34)" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 34"  style="cursor: pointer">34</td>



                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 35" class="border border-info" style="cursor: pointer">35</td>

                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(35)" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 35"  style="cursor: pointer">35</td>



                       <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 36" class="border border-info" style="cursor: pointer">36</td>

                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(36)" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 36"  style="cursor: pointer">36</td>


                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 37" class="border border-info" style="cursor: pointer">37</td>

                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(37)" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 37"  style="cursor: pointer">37</td>



                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 38" class="border border-info" style="cursor: pointer">38</td>

                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(38)" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 38"  style="cursor: pointer">38</td>
                      
                      
                    </tr>
                    
                    <tr>

                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 31" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(31)"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/31-38/31A.png" class="img-fluid"></td>

                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 31"  @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  class="border border-info border-bottom-0"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/31-38/31A.png" class="img-fluid"></td>



                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 32" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(32)"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/31-38/32A.png" class="img-fluid"></td>

                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 32"  @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  class="border border-info border-bottom-0"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/31-38/32A.png" class="img-fluid"></td>


                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 33" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(33)"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/31-38/33A.png" class="img-fluid"></td>

                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 33"  @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  class="border border-info border-bottom-0"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/31-38/33A.png" class="img-fluid"></td>



                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 34" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(34)"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/31-38/34A.png" class="img-fluid"></td>

                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 34"  @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  class="border border-info border-bottom-0"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/31-38/34A.png" class="img-fluid"></td>


                       <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 35" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(35)"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/31-38/35A.png" class="img-fluid"></td>

                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 35"  @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  class="border border-info border-bottom-0"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/31-38/35A.png" class="img-fluid"></td>


                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 36" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(36)"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/31-38/36A.png" class="img-fluid"></td>

                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 36"  @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  class="border border-info border-bottom-0"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/31-38/36A.png" class="img-fluid"></td>


                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 37" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(37)"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/31-38/37A.png" class="img-fluid"></td>

                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 37"  @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  class="border border-info border-bottom-0"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/31-38/37A.png" class="img-fluid"></td>


                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 38" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(38)"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/31-38/38A.png" class="img-fluid"></td>

                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 38"  @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  class="border border-info border-bottom-0"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/31-38/38A.png" class="img-fluid"></td>






                      
                    </tr>


                    <tr>

                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 31" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(31)"><img style="cursor: pointer; width: 80px; height: 30px;" src="dist/img/odontograma/31-38/31B.png" class="img-fluid"></td>

                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 31" class="border border-info border-top-0"><img style="cursor: pointer; width: 80px; height: 30px;" src="dist/img/odontograma/31-38/31B.png" class="img-fluid"></td>



                       <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 32" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(32)"><img style="cursor: pointer; width: 80px; height: 30px;" src="dist/img/odontograma/31-38/32B.png" class="img-fluid"></td>

                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 32" class="border border-info border-top-0"><img style="cursor: pointer; width: 80px; height: 30px;" src="dist/img/odontograma/31-38/32B.png" class="img-fluid"></td>


                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 33" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(33)"><img style="cursor: pointer; width: 80px; height: 30px;" src="dist/img/odontograma/31-38/33B.png" class="img-fluid"></td>

                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 33" class="border border-info border-top-0"><img style="cursor: pointer; width: 80px; height: 30px;" src="dist/img/odontograma/31-38/33B.png" class="img-fluid"></td>



                       <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 34" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(34)"><img style="cursor: pointer; width: 80px; height: 30px;" src="dist/img/odontograma/31-38/34B.png" class="img-fluid"></td>

                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 34" class="border border-info border-top-0"><img style="cursor: pointer; width: 80px; height: 30px;" src="dist/img/odontograma/31-38/34B.png" class="img-fluid"></td>



                       <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 35" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(35)"><img style="cursor: pointer; width: 80px; height: 30px;" src="dist/img/odontograma/31-38/35B.png" class="img-fluid"></td>

                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 35" class="border border-info border-top-0"><img style="cursor: pointer; width: 80px; height: 30px;" src="dist/img/odontograma/31-38/35B.png" class="img-fluid"></td>



                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 36" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(36)"><img style="cursor: pointer; width: 80px; height: 30px;" src="dist/img/odontograma/31-38/36B.png" class="img-fluid"></td>

                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 36" class="border border-info border-top-0"><img style="cursor: pointer; width: 80px; height: 30px;" src="dist/img/odontograma/31-38/36B.png" class="img-fluid"></td>



                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 37" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(37)"><img style="cursor: pointer; width: 80px; height: 30px;" src="dist/img/odontograma/31-38/37B.png" class="img-fluid"></td>

                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 37" class="border border-info border-top-0"><img style="cursor: pointer; width: 80px; height: 30px;" src="dist/img/odontograma/31-38/37B.png" class="img-fluid"></td>



                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 38" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(38)"><img style="cursor: pointer; width: 80px; height: 30px;" src="dist/img/odontograma/31-38/38B.png" class="img-fluid"></td>

                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 38" class="border border-info border-top-0"><img style="cursor: pointer; width: 80px; height: 30px;" src="dist/img/odontograma/31-38/38B.png" class="img-fluid"></td>


                    </tr>

                     <tr>
                      <td><span style="cursor: pointer;" class="badge badge-info">:0</span></td>
                      <td><span style="cursor: pointer;" class="badge badge-info">:0</span></td>
                      <td><span style="cursor: pointer;" class="badge badge-info">:0</span></td>
                      <td><span style="cursor: pointer;" class="badge badge-info">:0</span></td>
                      <td><span style="cursor: pointer;" class="badge badge-info">:0</span></td>
                      <td><span style="cursor: pointer;" class="badge badge-info">:0</span></td>
                      <td><span style="cursor: pointer;" class="badge badge-info">:0</span></td>
                      <td><span style="cursor: pointer;" class="badge badge-info">:0</span></td>
                    </tr>
                  </table>
                     <div v-if="AgregarAnotacionOTratamientoAUndienteEnParticular > 30">
                    <div v-if="AgregarAnotacionOTratamientoAUndienteEnParticular < 39">
                       
                        <select class="form-control">
                          <option>Agregar diagnóstico</option>
                        </select>
                      
                        <select class="form-control">
                         <option>Agregar tratamiento</option>
                       </select>
                     </div>  
                  </div>
                </div>
                </div>
              </div>
              <!-- /.card-body -->
                
            </div>
            <!-- /.card -->













            

  <!-- BAR CHART -->
            <div v-if="recuadro_4" class="card card-info">
              <div  class="card-header" >
                <h3 class="card-title">Izquierda inferior</h3>

                
              </div>
             
              <div class="card-body">
                <div class="chart">
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
                  </table>
                  <button class="btn btn-primary" @click="ShowAll_recuadros()">Guardar</button>
                  <button class="btn btn-danger" @click="ShowAll_recuadros()">Cancelar</button>
                </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->



