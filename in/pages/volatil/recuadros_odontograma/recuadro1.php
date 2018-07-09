<?php  ?>


            <!-- AREA CHART -->
            <div v-if="!recuadro_1" class="card card-info ">
              <div @click="VerRecuadroIndividual(1)" class="card-header"  style="cursor:pointer;">
                <h3 class="card-title">Derecha</h3>

              </div>
              <div  class="card-body">

              


                <div class="chart">
                  <p v-if="messageAddTragDiagPieza ">{{messageAddTragDiagPieza }}</p>
                 <table class="table " border="0">
                    
                    <tr>
                      


                      <td  @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 18" class="border border-info" style="cursor: pointer">18</td>

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



                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 13" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(13)"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/11-18/13A.png" class="img-fluid"></td>

                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 13" class="border border-info border-top-0"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/11-18/13A.png" class="img-fluid"></td>




                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 12" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(12)"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/11-18/12A.png" class="img-fluid"></td>

                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 12" class="border border-info border-top-0"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/11-18/12A.png" class="img-fluid"></td>



                      <td v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 11" @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(11)"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/11-18/11A.png" class="img-fluid"></td>

                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 11" class="border border-info border-top-0"><img style="cursor: pointer;  width: 80px; height: 30px;" src="dist/img/odontograma/11-18/11A.png" class="img-fluid"></td>


                    </tr>
             <tr>
              <td><a <?php if ($super_dientes->GetNumNotes(18,$_GET["id"]) == 0) {
                     ?> href="#" <?php  }else{?> href="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&IdDent=18" <?php } ?> ><span class="badge badge-info">:<?php echo $super_dientes->GetNumNotes(18, $_GET["id"]); ?></span></a></td>

              <td><a <?php if ($super_dientes->GetNumNotes(17,$_GET["id"]) == 0) {
                     ?> href="#" <?php  }else{?> href="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&IdDent=17" <?php } ?> ><span class="badge badge-info">:<?php echo $super_dientes->GetNumNotes(17, $_GET["id"]); ?></span></a></td>

              <td><a <?php if ($super_dientes->GetNumNotes(16,$_GET["id"]) == 0) {
                     ?> href="#" <?php  }else{?> href="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&IdDent=16" <?php } ?> ><span class="badge badge-info">:<?php echo $super_dientes->GetNumNotes(16, $_GET["id"]); ?></span></a></td>

              <td><a <?php if ($super_dientes->GetNumNotes(15,$_GET["id"]) == 0) {
                     ?> href="#" <?php  }else{?> href="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&IdDent=15" <?php } ?> ><span class="badge badge-info">:<?php echo $super_dientes->GetNumNotes(15, $_GET["id"]); ?></span></a></td>

              <td><a <?php if ($super_dientes->GetNumNotes(14,$_GET["id"]) == 0) {
                     ?> href="#" <?php  }else{?> href="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&IdDent=14" <?php } ?> ><span class="badge badge-info">:<?php echo $super_dientes->GetNumNotes(14, $_GET["id"]); ?></span></a></td>

              <td><a <?php if ($super_dientes->GetNumNotes(13,$_GET["id"]) == 0) {
                     ?> href="#" <?php  }else{?> href="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&IdDent=13" <?php } ?> ><span class="badge badge-info">:<?php echo $super_dientes->GetNumNotes(13, $_GET["id"]); ?></span></a></td>

              <td><a <?php if ($super_dientes->GetNumNotes(12,$_GET["id"]) == 0) {
                     ?> href="#" <?php  }else{?> href="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&IdDent=12" <?php } ?> ><span class="badge badge-info">:<?php echo $super_dientes->GetNumNotes(12, $_GET["id"]); ?></span></a></td>

              <td><a <?php if ($super_dientes->GetNumNotes(11,$_GET["id"]) == 0) {
                     ?> href="#" <?php  }else{?> href="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&IdDent=11" <?php } ?> ><span class="badge badge-info">:<?php echo $super_dientes->GetNumNotes(11, $_GET["id"]); ?></span></a></td>
            </tr>



                    
              
                 <tr v-if="DenticionTemporal">
                  <td></td>
                  <td></td>
                  <td></td>
                  <td  @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 55" class="border border-info" style="cursor: pointer">55</td>
                  <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(55)" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 55"  style="cursor: pointer">55</td>


                   <td  @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 54" class="border border-info" style="cursor: pointer">54</td>
                  <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(54)" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 54"  style="cursor: pointer">54</td>


                  <td  @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 53" class="border border-info" style="cursor: pointer">53</td>
                  <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(53)" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 53"  style="cursor: pointer">53</td>


                  <td  @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 52" class="border border-info" style="cursor: pointer">52</td>
                  <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(52)" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 52"  style="cursor: pointer">52</td>


                   <td  @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 51" class="border border-info" style="cursor: pointer">51</td>
                  <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(51)" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 51"  style="cursor: pointer">51</td>


                  
                </tr>
                <tr v-if="DenticionTemporal">
                  <td></td>
                  <td></td>
                  <td></td>
                    <td><a <?php if ($super_dientes->GetNumNotes(55,$_GET["id"]) == 0) {
                     ?> href="#" <?php  }else{?> href="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&IdDent=55" <?php } ?> ><span class="badge badge-info">:<?php echo $super_dientes->GetNumNotes(55, $_GET["id"]); ?></span></a></td>

                      <td><a <?php if ($super_dientes->GetNumNotes(54,$_GET["id"]) == 0) {
                     ?> href="#" <?php  }else{?> href="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&IdDent=54" <?php } ?> ><span class="badge badge-info">:<?php echo $super_dientes->GetNumNotes(54, $_GET["id"]); ?></span></a></td>


                     <td><a <?php if ($super_dientes->GetNumNotes(53,$_GET["id"]) == 0) {
                     ?> href="#" <?php  }else{?> href="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&IdDent=53" <?php } ?> ><span class="badge badge-info">:<?php echo $super_dientes->GetNumNotes(53, $_GET["id"]); ?></span></a></td>


                     <td><a <?php if ($super_dientes->GetNumNotes(52,$_GET["id"]) == 0) {
                     ?> href="#" <?php  }else{?> href="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&IdDent=52" <?php } ?> ><span class="badge badge-info">:<?php echo $super_dientes->GetNumNotes(52, $_GET["id"]); ?></span></a></td>


                     <td><a <?php if ($super_dientes->GetNumNotes(51,$_GET["id"]) == 0) {
                     ?> href="#" <?php  }else{?> href="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&IdDent=51" <?php } ?> ><span class="badge badge-info">:<?php echo $super_dientes->GetNumNotes(51, $_GET["id"]); ?></span></a></td>
                </tr>
       


                  </table>



                  <div class="card card-info">
                    <div class="card-header">
                      <h4 class="card-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#AddAnotacion">
                          <i class="fa fa-plus"></i>
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
                       

                       
                       <div  class="mt-2">
                         <button  @click="addTraDiagRecuadro1()" onclick="addTraDiag_()" class="btn btn-info ">Aceptar</button>
                       </div>
                              <!----body   -->
                      </div>
                    </div>
                  </div>





                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->



































