<?php  ?>
<!-- DONUT CHART -->
            <div v-if="!recuadro_2" class="card card-info ">
              <div @click="VerRecuadroIndividual(2)" class="card-header" style="cursor:pointer;">
                <h3 class="card-title">Derecha</h3>
              </div>
              
              <div class="card-body">
                <div class="chart">
                   <p v-if="messageAddTragDiagPiezar2">{{messageAddTragDiagPiezar2}}</p>
                 <table class="table" border="0">
                    

                <tr v-if="DenticionTemporal">
                  <td></td>
                  <td></td>
                  <td></td>
                
                  <td  @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 85" class="border border-info" style="cursor: pointer">85</td>
                  <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(85)" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 85"  style="cursor: pointer">85</td>


                   <td  @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 84" class="border border-info" style="cursor: pointer">84</td>
                  <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(84)" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 84"  style="cursor: pointer">84</td>


                      <td  @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 83" class="border border-info" style="cursor: pointer">83</td>
                  <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(83)" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 83"  style="cursor: pointer">83</td>


                    <td  @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 82" class="border border-info" style="cursor: pointer">82</td>
                  <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(82)" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 82"  style="cursor: pointer">82</td>
                  

                    <td  @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 81" class="border border-info" style="cursor: pointer">81</td>
                  <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(81)" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 81"  style="cursor: pointer">81</td>

                </tr>

                <tr v-if="DenticionTemporal">
                  <td></td>
                  <td></td>
                  <td></td>
                  <td><a <?php if ($super_dientes->GetNumNotes(85,$_GET["id"]) == 0) {
                     ?> href="#" <?php  }else{?> href="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&IdDent=85" <?php } ?> ><span class="badge badge-info">:<?php echo $super_dientes->GetNumNotes(85, $_GET["id"]); ?></span></a></td>


                     <td><a <?php if ($super_dientes->GetNumNotes(84,$_GET["id"]) == 0) {
                     ?> href="#" <?php  }else{?> href="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&IdDent=84" <?php } ?> ><span class="badge badge-info">:<?php echo $super_dientes->GetNumNotes(84, $_GET["id"]); ?></span></a></td>


                       <td><a <?php if ($super_dientes->GetNumNotes(83,$_GET["id"]) == 0) {
                     ?> href="#" <?php  }else{?> href="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&IdDent=83" <?php } ?> ><span class="badge badge-info">:<?php echo $super_dientes->GetNumNotes(83, $_GET["id"]); ?></span></a></td>


                       <td><a <?php if ($super_dientes->GetNumNotes(82,$_GET["id"]) == 0) {
                     ?> href="#" <?php  }else{?> href="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&IdDent=82" <?php } ?> ><span class="badge badge-info">:<?php echo $super_dientes->GetNumNotes(82, $_GET["id"]); ?></span></a></td>


                     <td><a <?php if ($super_dientes->GetNumNotes(81,$_GET["id"]) == 0) {
                     ?> href="#" <?php  }else{?> href="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&IdDent=81" <?php } ?> ><span class="badge badge-info">:<?php echo $super_dientes->GetNumNotes(81, $_GET["id"]); ?></span></a></td>
                  
                </tr>






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
              <td><a <?php if ($super_dientes->GetNumNotes(48,$_GET["id"]) == 0) {
                     ?> href="#" <?php  }else{?> href="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&IdDent=48" <?php } ?> ><span class="badge badge-info">:<?php echo $super_dientes->GetNumNotes(48, $_GET["id"]); ?></span></a></td>

              <td><a <?php if ($super_dientes->GetNumNotes(47,$_GET["id"]) == 0) {
                     ?> href="#" <?php  }else{?> href="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&IdDent=47" <?php } ?> ><span class="badge badge-info">:<?php echo $super_dientes->GetNumNotes(47, $_GET["id"]); ?></span></a></td>

              <td><a <?php if ($super_dientes->GetNumNotes(46,$_GET["id"]) == 0) {
                     ?> href="#" <?php  }else{?> href="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&IdDent=46" <?php } ?> ><span class="badge badge-info">:<?php echo $super_dientes->GetNumNotes(46, $_GET["id"]); ?></span></a></td>

              <td><a <?php if ($super_dientes->GetNumNotes(45,$_GET["id"]) == 0) {
                     ?> href="#" <?php  }else{?> href="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&IdDent=45" <?php } ?> ><span class="badge badge-info">:<?php echo $super_dientes->GetNumNotes(45, $_GET["id"]); ?></span></a></td>

              <td><a <?php if ($super_dientes->GetNumNotes(44,$_GET["id"]) == 0) {
                     ?> href="#" <?php  }else{?> href="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&IdDent=44" <?php } ?> ><span class="badge badge-info">:<?php echo $super_dientes->GetNumNotes(44, $_GET["id"]); ?></span></a></td>

              <td><a <?php if ($super_dientes->GetNumNotes(43,$_GET["id"]) == 0) {
                     ?> href="#" <?php  }else{?> href="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&IdDent=43" <?php } ?> ><span class="badge badge-info">:<?php echo $super_dientes->GetNumNotes(43, $_GET["id"]); ?></span></a></td>

              <td><a <?php if ($super_dientes->GetNumNotes(42,$_GET["id"]) == 0) {
                     ?> href="#" <?php  }else{?> href="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&IdDent=42" <?php } ?> ><span class="badge badge-info">:<?php echo $super_dientes->GetNumNotes(42, $_GET["id"]); ?></span></a></td>

              <td><a <?php if ($super_dientes->GetNumNotes(41,$_GET["id"]) == 0) {
                     ?> href="#" <?php  }else{?> href="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&IdDent=41" <?php } ?> ><span class="badge badge-info">:<?php echo $super_dientes->GetNumNotes(41, $_GET["id"]); ?></span></a></td>
            </tr>



                  
                  
                  </table>
                  


                     <div class="card card-info">
                    <div class="card-header">
                      <h4 class="card-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#AddAnotacionr2">
                          <i class="fa fa-plus"></i>
                        </a>
                      </h4>
                    </div>

                    <div id="AddAnotacionr2" class="panel-collapse collapse in">
                      <div class="card-body">
                              <!--bosyyyy--->
                            <p v-if = "messageAddTragDiagr2">{{messageAddTragDiagr2}}</p>
                        <select id="diagnosticor2" class="form-control select2 mt-2">
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
                        <select id="tratamientor2" class="form-control select2 ">
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
                          <p v-if="messageEStadoTratamientor2"> {{messageEStadoTratamientor2}}</p>
                          <ul>
                            <li v-if="!tratamientoEnProcesor2" @click="tratamientoEnProcesor2 = !tratamientoEnProcesor2" v-on:click="tratamientoFinalizador2 = false" style="cursor: pointer;">En proceso</li>
                            <li v-if="tratamientoEnProcesor2" @click="tratamientoEnProcesor2 = !tratamientoEnProcesor2"  v-on:click="tratamientoFinalizador2 = false" style="cursor: pointer;" class="text-info">En proceso</li>

                            <li v-if="!tratamientoFinalizador2" @click="tratamientoFinalizador2 = !tratamientoFinalizador2" v-on:click="tratamientoEnProcesor2 = false" style="cursor: pointer;">Finalizado</li>
                            <li v-if="tratamientoFinalizador2" @click="tratamientoFinalizador2 = !tratamientoFinalizador2" v-on:click="tratamientoEnProcesor2 = false" style="cursor: pointer;" class="text-info">Finalizado</li>
                          </ul>
                       

                       
                       <div  class="mt-2">
                         <button  @click="addTraDiagRecuadro2" onclick="addTraDiag_r2()" class="btn btn-info ">Aceptar</button>
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



























          