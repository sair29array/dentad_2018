<?php  ?>
 <!-- LINE CHART -->
            <div v-if="!recuadro_3"  class="card card-info">
              <div @click="VerRecuadroIndividual(3)" class="card-header" style="cursor:pointer;">
                <h3 class="card-title">Izquierda</h3>

               
              </div>
            
              <div class="card-body">
                <div class="chart">
                 <table class="table" border="0">
                    
                    <tr>

                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 21" class="border border-info" style="cursor: pointer">21</td>

                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(21)" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 21"  style="cursor: pointer">21</td>



                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 22" class="border border-info" style="cursor: pointer">22</td>

                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(22)" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 22"  style="cursor: pointer">22</td>



                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 23" class="border border-info" style="cursor: pointer">23</td>

                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(23)" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 23"  style="cursor: pointer">23</td>



                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 24" class="border border-info" style="cursor: pointer">24</td>

                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(24)" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 24"  style="cursor: pointer">24</td>



                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 25" class="border border-info" style="cursor: pointer">25</td>

                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(25)" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 25"  style="cursor: pointer">25</td>



                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 26" class="border border-info" style="cursor: pointer">26</td>

                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(26)" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 26"  style="cursor: pointer">26</td>



                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 27" class="border border-info" style="cursor: pointer">27</td>

                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(27)" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 27"  style="cursor: pointer">27</td>



                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 28" class="border border-info" style="cursor: pointer">28</td>

                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(28)" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 28"  style="cursor: pointer">28</td>

                      
                    </tr>
                     








                     <tr>

                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 21" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(21)"><img style="cursor: pointer; width: 80px; height: 30px;" src="dist/img/odontograma/21-28/21B.png" class="img-fluid"></td>

                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 21"  @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  class="border border-info border-bottom-0"><img style="cursor: pointer; width: 80px; height: 30px;" src="dist/img/odontograma/21-28/21B.png" class="img-fluid"></td>



                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 22" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(22)"><img style="cursor: pointer; width: 80px; height: 30px;" src="dist/img/odontograma/21-28/22B.png" class="img-fluid"></td>

                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 22"  @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  class="border border-info border-bottom-0"><img style="cursor: pointer; width: 80px; height: 30px;" src="dist/img/odontograma/21-28/22B.png" class="img-fluid"></td>



                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 23" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(23)"><img style="cursor: pointer; width: 80px; height: 30px;" src="dist/img/odontograma/21-28/23B.png" class="img-fluid"></td>

                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 23"  @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  class="border border-info border-bottom-0"><img style="cursor: pointer; width: 80px; height: 30px;" src="dist/img/odontograma/21-28/23B.png" class="img-fluid"></td>



                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 24" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(24)"><img style="cursor: pointer; width: 80px; height: 30px;" src="dist/img/odontograma/21-28/24B.png" class="img-fluid"></td>

                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 24"  @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  class="border border-info border-bottom-0"><img style="cursor: pointer; width: 80px; height: 30px;" src="dist/img/odontograma/21-28/24B.png" class="img-fluid"></td>



                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 25" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(25)"><img style="cursor: pointer; width: 80px; height: 30px;" src="dist/img/odontograma/21-28/25B.png" class="img-fluid"></td>

                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 25"  @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  class="border border-info border-bottom-0"><img style="cursor: pointer; width: 80px; height: 30px;" src="dist/img/odontograma/21-28/25B.png" class="img-fluid"></td>



                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 26" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(26)"><img style="cursor: pointer; width: 80px; height: 30px;" src="dist/img/odontograma/21-28/26B.png" class="img-fluid"></td>

                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 26"  @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  class="border border-info border-bottom-0"><img style="cursor: pointer; width: 80px; height: 30px;" src="dist/img/odontograma/21-28/26B.png" class="img-fluid"></td>



                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 27" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(27)"><img style="cursor: pointer; width: 80px; height: 30px;" src="dist/img/odontograma/21-28/27B.png" class="img-fluid"></td>

                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 27"  @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  class="border border-info border-bottom-0"><img style="cursor: pointer; width: 80px; height: 30px;" src="dist/img/odontograma/21-28/27B.png" class="img-fluid"></td>



                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 28" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(28)"><img style="cursor: pointer; width: 80px; height: 30px;" src="dist/img/odontograma/21-28/28B.png" class="img-fluid"></td>

                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 28"  @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  class="border border-info border-bottom-0"><img style="cursor: pointer; width: 80px; height: 30px;" src="dist/img/odontograma/21-28/28B.png" class="img-fluid"></td>

                    </tr>



                    <tr>
                      

                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 21" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(21)"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/21-28/21A.png" class="img-fluid"></td>

                      <td  @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 21" class="border border-info border-top-0"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/21-28/21A.png" class="img-fluid"></td>



                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 22" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(22)"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/21-28/22A.png" class="img-fluid"></td>

                      <td  @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 22" class="border border-info border-top-0"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/21-28/22A.png" class="img-fluid"></td>



                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 23" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(23)"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/21-28/23A.png" class="img-fluid"></td>

                      <td  @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 23" class="border border-info border-top-0"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/21-28/23A.png" class="img-fluid"></td>



                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 24" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(24)"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/21-28/24A.png" class="img-fluid"></td>

                      <td  @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 24" class="border border-info border-top-0"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/21-28/24A.png" class="img-fluid"></td>



                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 25" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(25)"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/21-28/25A.png" class="img-fluid"></td>

                      <td  @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 25" class="border border-info border-top-0"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/21-28/25A.png" class="img-fluid"></td>



                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 26" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(26)"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/21-28/26A.png" class="img-fluid"></td>

                      <td  @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 26" class="border border-info border-top-0"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/21-28/26A.png" class="img-fluid"></td>


                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 27" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(27)"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/21-28/27A.png" class="img-fluid"></td>

                      <td  @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 27" class="border border-info border-top-0"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/21-28/27A.png" class="img-fluid"></td>



                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 28" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(28)"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/21-28/28A.png" class="img-fluid"></td>

                      <td  @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 28" class="border border-info border-top-0"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/21-28/28A.png" class="img-fluid"></td>


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
                    <div v-if="AgregarAnotacionOTratamientoAUndienteEnParticular > 20">
                    <div v-if="AgregarAnotacionOTratamientoAUndienteEnParticular < 29">
                       
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

















             <div v-if="recuadro_3"  class="card card-info">
              <div @click="VerRecuadroIndividual(3)" class="card-header" style="cursor:pointer;">
                <h3 class="card-title">Izquierda superior</h3>

               
              </div>
            
              <div class="card-body">
                <div class="chart">
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
                  </table>
                    <button class="btn btn-primary" @click="ShowAll_recuadros()">Guardar</button>
                  <button class="btn btn-danger" @click="ShowAll_recuadros()">Cancelar</button>
                </div>
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->