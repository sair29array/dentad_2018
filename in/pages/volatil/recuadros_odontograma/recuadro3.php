<?php  ?>
 <!-- LINE CHART -->
            <div v-if="!recuadro_3"  class="card card-info">
              <div @click="VerRecuadroIndividual(3)" class="card-header" style="cursor:pointer;">
                <h3 class="card-title">Izquierda</h3>

               
              </div>
            
              <div class="card-body">
                <div class="chart">
                   <p v-if="messageAddTragDiagPiezar3">{{messageAddTragDiagPiezar3}}</p>
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
              <td><a <?php if ($super_dientes->GetNumNotes(21,$_GET["id"]) == 0) {
                     ?> href="#" <?php  }else{?> href="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&IdDent=21" <?php } ?> ><span class="badge badge-info">:<?php echo $super_dientes->GetNumNotes(21, $_GET["id"]); ?></span></a></td>

              <td><a <?php if ($super_dientes->GetNumNotes(22,$_GET["id"]) == 0) {
                     ?> href="#" <?php  }else{?> href="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&IdDent=22" <?php } ?> ><span class="badge badge-info">:<?php echo $super_dientes->GetNumNotes(22, $_GET["id"]); ?></span></a></td>

              <td><a <?php if ($super_dientes->GetNumNotes(23,$_GET["id"]) == 0) {
                     ?> href="#" <?php  }else{?> href="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&IdDent=23" <?php } ?> ><span class="badge badge-info">:<?php echo $super_dientes->GetNumNotes(23, $_GET["id"]); ?></span></a></td>

              <td><a <?php if ($super_dientes->GetNumNotes(24,$_GET["id"]) == 0) {
                     ?> href="#" <?php  }else{?> href="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&IdDent=24" <?php } ?> ><span class="badge badge-info">:<?php echo $super_dientes->GetNumNotes(24, $_GET["id"]); ?></span></a></td>

              <td><a <?php if ($super_dientes->GetNumNotes(25,$_GET["id"]) == 0) {
                     ?> href="#" <?php  }else{?> href="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&IdDent=25" <?php } ?> ><span class="badge badge-info">:<?php echo $super_dientes->GetNumNotes(25, $_GET["id"]); ?></span></a></td>

              <td><a <?php if ($super_dientes->GetNumNotes(26,$_GET["id"]) == 0) {
                     ?> href="#" <?php  }else{?> href="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&IdDent=26" <?php } ?> ><span class="badge badge-info">:<?php echo $super_dientes->GetNumNotes(26, $_GET["id"]); ?></span></a></td>

              <td><a <?php if ($super_dientes->GetNumNotes(27,$_GET["id"]) == 0) {
                     ?> href="#" <?php  }else{?> href="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&IdDent=27" <?php } ?> ><span class="badge badge-info">:<?php echo $super_dientes->GetNumNotes(27, $_GET["id"]); ?></span></a></td>

              <td><a <?php if ($super_dientes->GetNumNotes(28,$_GET["id"]) == 0) {
                     ?> href="#" <?php  }else{?> href="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&IdDent=28" <?php } ?> ><span class="badge badge-info">:<?php echo $super_dientes->GetNumNotes(28, $_GET["id"]); ?></span></a></td>
            </tr>


                <tr v-if="DenticionTemporal">
                   <td  @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 61" class="border border-info" style="cursor: pointer">61</td>
                  <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(61)" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 61"  style="cursor: pointer">61</td>


                  <td  @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 62" class="border border-info" style="cursor: pointer">62</td>
                  <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(62)" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 62"  style="cursor: pointer">62</td>


                  <td  @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 63" class="border border-info" style="cursor: pointer">63</td>
                  <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(63)" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 63"  style="cursor: pointer">63</td>


                  <td  @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 64" class="border border-info" style="cursor: pointer">64</td>
                  <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(64)" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 64"  style="cursor: pointer">64</td>


                  <td  @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 65" class="border border-info" style="cursor: pointer">65</td>
                  <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(65)" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 65"  style="cursor: pointer">65</td>
                 
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr v-if="DenticionTemporal">
                  <td><a <?php if ($super_dientes->GetNumNotes(61,$_GET["id"]) == 0) {
                     ?> href="#" <?php  }else{?> href="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&IdDent=61" <?php } ?> ><span class="badge badge-info">:<?php echo $super_dientes->GetNumNotes(61, $_GET["id"]); ?></span></a></td>


                    <td><a <?php if ($super_dientes->GetNumNotes(62,$_GET["id"]) == 0) {
                     ?> href="#" <?php  }else{?> href="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&IdDent=62" <?php } ?> ><span class="badge badge-info">:<?php echo $super_dientes->GetNumNotes(62, $_GET["id"]); ?></span></a></td>


                     <td><a <?php if ($super_dientes->GetNumNotes(63,$_GET["id"]) == 0) {
                     ?> href="#" <?php  }else{?> href="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&IdDent=63" <?php } ?> ><span class="badge badge-info">:<?php echo $super_dientes->GetNumNotes(63, $_GET["id"]); ?></span></a></td>


                      <td><a <?php if ($super_dientes->GetNumNotes(64,$_GET["id"]) == 0) {
                     ?> href="#" <?php  }else{?> href="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&IdDent=64" <?php } ?> ><span class="badge badge-info">:<?php echo $super_dientes->GetNumNotes(64, $_GET["id"]); ?></span></a></td>


                     <td><a <?php if ($super_dientes->GetNumNotes(65,$_GET["id"]) == 0) {
                     ?> href="#" <?php  }else{?> href="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&IdDent=65" <?php } ?> ><span class="badge badge-info">:<?php echo $super_dientes->GetNumNotes(65, $_GET["id"]); ?></span></a></td>
                  
                  
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>



                  </table>
                    







                     <div class="card card-info">
                    <div class="card-header">
                      <h4 class="card-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#AddAnotacionr3">
                          <i class="fa fa-plus"></i>
                        </a>
                      </h4>
                    </div>

                    <div id="AddAnotacionr3" class="panel-collapse collapse in">
                      <div class="card-body">
                              <!--bosyyyy--->
                            <p v-if = "messageAddTragDiagr3">{{messageAddTragDiagr3}}</p>
                        <select id="diagnosticor3" class="form-control select2 mt-2">
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
                        <select id="tratamientor3" class="form-control select2 ">
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
                          <p v-if="messageEStadoTratamientor3"> {{messageEStadoTratamientor3}}</p>
                          <ul>
                            <li v-if="!tratamientoEnProcesor3" @click="tratamientoEnProcesor3 = !tratamientoEnProcesor3" v-on:click="tratamientoFinalizador3 = false" style="cursor: pointer;">En proceso</li>
                            <li v-if="tratamientoEnProcesor3" @click="tratamientoEnProcesor3 = !tratamientoEnProcesor3"  v-on:click="tratamientoFinalizador3 = false" style="cursor: pointer;" class="text-info">En proceso</li>

                            <li v-if="!tratamientoFinalizador3" @click="tratamientoFinalizador3 = !tratamientoFinalizador3" v-on:click="tratamientoEnProcesor3 = false" style="cursor: pointer;">Finalizado</li>
                            <li v-if="tratamientoFinalizador3" @click="tratamientoFinalizador3 = !tratamientoFinalizador3" v-on:click="tratamientoEnProcesor3 = false" style="cursor: pointer;" class="text-info">Finalizado</li>
                          </ul>
                       

                       
                       <div  class="mt-2">
                         <button  @click="addTraDiagRecuadro3" onclick="addTraDiag_r3()" class="btn btn-info ">Aceptar</button>
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















