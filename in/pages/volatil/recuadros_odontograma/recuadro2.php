<?php  ?>
<!-- DONUT CHART -->
            <div v-if="!recuadro_2" class="card card-info">
              <div @click="VerRecuadroIndividual(2)" class="card-header" style="cursor:pointer;">
                <h3 class="card-title">Derecha</h3>
              </div>
              
              <div class="card-body">
                <div class="chart">
                 <table class="table" border="0">
                    
                    <tr>

                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 48" class="border border-info" style="cursor: pointer">48</td>

                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(48)" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 48"  style="cursor: pointer">48</td>




                       <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 47" class="border border-info" style="cursor: pointer">47</td>

                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(47)" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 47"  style="cursor: pointer">47</td>



                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 46" class="border border-info" style="cursor: pointer">46</td>

                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(46)" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 46"  style="cursor: pointer">46</td>



                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 45" class="border border-info" style="cursor: pointer">45</td>

                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(45)" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 45"  style="cursor: pointer">45</td>


                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 44" class="border border-info" style="cursor: pointer">44</td>

                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(44)" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 44"  style="cursor: pointer">44</td>



                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 43" class="border border-info" style="cursor: pointer">43</td>

                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(43)" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 43"  style="cursor: pointer">43</td>



                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 42" class="border border-info" style="cursor: pointer">42</td>

                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(42)" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 42"  style="cursor: pointer">42</td>



                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 41" class="border border-info" style="cursor: pointer">41</td>

                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(41)" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 41"  style="cursor: pointer">41</td>

                    </tr>




                    <tr>

                      <td  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 48" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(48)"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/41-48/48A.png" class="img-fluid"></td>

                      <td  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 48"  @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  class="border border-info border-bottom-0"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/41-48/48A.png" class="img-fluid"></td>



                      <td  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 47" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(47)"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/41-48/47A.png" class="img-fluid"></td>

                      <td  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 47"  @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  class="border border-info border-bottom-0"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/41-48/47A.png" class="img-fluid"></td>



                      <td  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 46" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(46)"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/41-48/46A.png" class="img-fluid"></td>

                      <td  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 46"  @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  class="border border-info border-bottom-0"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/41-48/46A.png" class="img-fluid"></td>



                      <td  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 45" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(45)"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/41-48/45A.png" class="img-fluid"></td>

                      <td  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 45"  @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  class="border border-info border-bottom-0"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/41-48/45A.png" class="img-fluid"></td>



                      <td  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 44" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(44)"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/41-48/44A.png" class="img-fluid"></td>

                      <td  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 44"  @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  class="border border-info border-bottom-0"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/41-48/44A.png" class="img-fluid"></td>



                      <td  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 43" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(43)"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/41-48/43A.png" class="img-fluid"></td>

                      <td  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 43"  @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  class="border border-info border-bottom-0"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/41-48/43A.png" class="img-fluid"></td>



                      <td  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 42" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(42)"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/41-48/42A.png" class="img-fluid"></td>

                      <td  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 42"  @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  class="border border-info border-bottom-0"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/41-48/42A.png" class="img-fluid"></td>



                      <td  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 41" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(41)"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/41-48/41A.png" class="img-fluid"></td>

                      <td  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 41"  @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  class="border border-info border-bottom-0"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/41-48/41A.png" class="img-fluid"></td>


                      
                    </tr>

                     <tr>

                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 48" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(48)"><img style="cursor: pointer; width: 80px; height: 30px;" src="dist/img/odontograma/41-48/48B.png" class="img-fluid"></td>

                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 48" @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  class="border border-info border-top-0"><img style="cursor: pointer; width: 80px; height: 30px;" src="dist/img/odontograma/41-48/48B.png" class="img-fluid"></td>



                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 47" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(47)"><img style="cursor: pointer; width: 80px; height: 30px;" src="dist/img/odontograma/41-48/47B.png" class="img-fluid"></td>

                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 47" @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  class="border border-info border-top-0"><img style="cursor: pointer; width: 80px; height: 30px;" src="dist/img/odontograma/41-48/47B.png" class="img-fluid"></td>



                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 46" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(46)"><img style="cursor: pointer; width: 80px; height: 30px;" src="dist/img/odontograma/41-48/46B.png" class="img-fluid"></td>

                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 46" @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  class="border border-info border-top-0"><img style="cursor: pointer; width: 80px; height: 30px;" src="dist/img/odontograma/41-48/46B.png" class="img-fluid"></td>



                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 45" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(45)"><img style="cursor: pointer; width: 80px; height: 30px;" src="dist/img/odontograma/41-48/45B.png" class="img-fluid"></td>

                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 45" @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  class="border border-info border-top-0"><img style="cursor: pointer; width: 80px; height: 30px;" src="dist/img/odontograma/41-48/45B.png" class="img-fluid"></td>



                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 44" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(44)"><img style="cursor: pointer; width: 80px; height: 30px;" src="dist/img/odontograma/41-48/44B.png" class="img-fluid"></td>

                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 44" @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  class="border border-info border-top-0"><img style="cursor: pointer; width: 80px; height: 30px;" src="dist/img/odontograma/41-48/44B.png" class="img-fluid"></td>



                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 43" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(43)"><img style="cursor: pointer; width: 80px; height: 30px;" src="dist/img/odontograma/41-48/43B.png" class="img-fluid"></td>

                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 43" @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  class="border border-info border-top-0"><img style="cursor: pointer; width: 80px; height: 30px;" src="dist/img/odontograma/41-48/43B.png" class="img-fluid"></td>



                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 42" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(42)"><img style="cursor: pointer; width: 80px; height: 30px;" src="dist/img/odontograma/41-48/42B.png" class="img-fluid"></td>

                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 42" @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  class="border border-info border-top-0"><img style="cursor: pointer; width: 80px; height: 30px;" src="dist/img/odontograma/41-48/42B.png" class="img-fluid"></td>



                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 41" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(41)"><img style="cursor: pointer; width: 80px; height: 30px;" src="dist/img/odontograma/41-48/41B.png" class="img-fluid"></td>

                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 41" @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  class="border border-info border-top-0"><img style="cursor: pointer; width: 80px; height: 30px;" src="dist/img/odontograma/41-48/41B.png" class="img-fluid"></td>







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
                  <div v-if="AgregarAnotacionOTratamientoAUndienteEnParticular > 40">
                    <div v-if="AgregarAnotacionOTratamientoAUndienteEnParticular < 49">
                       
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
              <!-- /.card-body -->
            </div>
            <!-- /.card -->



























             <div v-if="recuadro_2" class="card card-info">
              <div  class="card-header" >
                <h3 class="card-title">Derecha inferior</h3>
              </div>
              
              <div class="card-body">
                <div class="chart">
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
                  
                  </table>
                  


                    <button class="btn btn-primary" @click="ShowAll_recuadros()">Guardar</button>
                  <button class="btn btn-danger" @click="ShowAll_recuadros()">Cancelar</button>

                  
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->