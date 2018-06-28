<?php  ?>


            <!-- AREA CHART -->
            <div v-if="!recuadro_1" class="card card-info">
              <div @click="VerRecuadroIndividual(1)" class="card-header"  style="cursor:pointer;">
                <h3 class="card-title">Derecha</h3>

              </div>
              <div  class="card-body">
                <div class="chart">
                 <table class="table" border="0">
                    
                    <tr>
                      


                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 18" class="border border-info" style="cursor: pointer">18</td>

                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(18)" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 18"  style="cursor: pointer">18</td>


                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 17" class="border border-info" style="cursor: pointer">17</td>

                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(17)" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 17"  style="cursor: pointer">17</td>


                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 16" class="border border-info" style="cursor: pointer">16</td>

                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(16)" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 16"  style="cursor: pointer">16</td>


                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 15" class="border border-info" style="cursor: pointer">15</td>

                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(15)" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 15"  style="cursor: pointer">15</td>


                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 14" class="border border-info" style="cursor: pointer">14</td>

                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(14)" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 14"  style="cursor: pointer">14</td>


                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 13" class="border border-info" style="cursor: pointer">13</td>

                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(13)" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 13"  style="cursor: pointer">13</td>




                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 12" class="border border-info" style="cursor: pointer">12</td>

                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(12)" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 12"  style="cursor: pointer">12</td>



                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 11" class="border border-info" style="cursor: pointer">11</td>

                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(11)" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 11"  style="cursor: pointer">11</td>


                    </tr>






                    <tr>

                     <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 18" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(18)"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/11-18/18B.png" class="img-fluid"></td>

                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 18"  @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  class="border border-info border-bottom-0"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/11-18/18B.png" class="img-fluid"></td>




                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 17" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(17)"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/11-18/17B.png" class="img-fluid"></td>

                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 17" @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  class="border border-info border-bottom-0"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/11-18/17B.png" class="img-fluid"></td>




                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 16" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(16)"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/11-18/16B.png" class="img-fluid"></td>

                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 16" @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  class="border border-info border-bottom-0"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/11-18/16B.png" class="img-fluid"></td>





                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 15" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(15)"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/11-18/15B.png" class="img-fluid"></td>

                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 15"  @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false" class="border border-info border-bottom-0"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/11-18/15B.png" class="img-fluid"></td>



                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 14" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(14)"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/11-18/14B.png" class="img-fluid"></td>

                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 14"  @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false" class="border border-info border-bottom-0"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/11-18/14B.png" class="img-fluid"></td>




                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 13" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(13)"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/11-18/13B.png" class="img-fluid"></td>

                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 13" @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  class="border border-info border-bottom-0"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/11-18/13B.png" class="img-fluid"></td>
                      
                      


                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 12" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(12)"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/11-18/12B.png" class="img-fluid"></td>

                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 12"  @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false" class="border border-info border-bottom-0"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/11-18/12B.png" class="img-fluid"></td>



                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 11" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(11)"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/11-18/11B.png" class="img-fluid"></td>

                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 11" @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  class="border border-info border-bottom-0"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/11-18/11B.png" class="img-fluid"></td>


                    </tr>



                    
                    <tr>
                      
                     
                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 18" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(18)"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/11-18/18A.png" class="img-fluid"></td>

                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 18" class="border border-info border-top-0"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/11-18/18A.png" class="img-fluid"></td>




                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 17" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(17)"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/11-18/17A.png" class="img-fluid"></td>

                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 17" class="border border-info border-top-0"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/11-18/17A.png" class="img-fluid"></td>



                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 16" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(16)"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/11-18/16A.png" class="img-fluid"></td>

                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 16" class="border border-info border-top-0"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/11-18/16A.png" class="img-fluid"></td>



                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 15" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(15)"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/11-18/15A.png" class="img-fluid"></td>

                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 15" class="border border-info border-top-0"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/11-18/15A.png" class="img-fluid"></td>



                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 14" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(14)"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/11-18/14A.png" class="img-fluid"></td>

                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 14" class="border border-info border-top-0"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/11-18/14A.png" class="img-fluid"></td>



                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 13" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(13)"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/11-18/14A.png" class="img-fluid"></td>

                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 13" class="border border-info border-top-0"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/11-18/13A.png" class="img-fluid"></td>




                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 12" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(12)"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/11-18/12A.png" class="img-fluid"></td>

                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 12" class="border border-info border-top-0"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/11-18/12A.png" class="img-fluid"></td>



                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 11" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(11)"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/11-18/11A.png" class="img-fluid"></td>

                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 11" class="border border-info border-top-0"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/11-18/11A.png" class="img-fluid"></td>


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

                    

                  <div v-if="AgregarAnotacionOTratamientoAUndienteEnParticular > 10">
                    <div v-if="AgregarAnotacionOTratamientoAUndienteEnParticular < 19">
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




















<!-- /Si se ve el recuadro grande:-->

            	<div v-if="recuadro_1" class="card card-info">
              <div  class="card-header" >
                
            <h3 class="card-title"><b>Derecha superior </b> </h3> 

              </div>
              <div  class="card-body content-center">
                <div class="chart">
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
                  </table>
              		

                  	<button class="btn btn-primary" @click="ShowAll_recuadros()">Guardar</button>
              		<button class="btn btn-danger" @click="ShowAll_recuadros()">Cancelar</button>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
