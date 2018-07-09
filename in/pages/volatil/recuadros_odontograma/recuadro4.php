<?php  ?>

  <!-- BAR CHART -->
            <div v-if="!recuadro_4" class="card card-info">
              <div @click="VerRecuadroIndividual(4)" class="card-header" style="cursor:pointer;">
                <h3 class="card-title">Izquierda</h3>

                
              </div>
             
              <div class="card-body">
                <div class="chart">
                  <p v-if="messageAddTragDiagPiezar4">{{messageAddTragDiagPiezar4}}</p>
                 <table class="table" border="0">
                    


                    <tr v-if="DenticionTemporal">
                       <td  @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 71" class="border border-info" style="cursor: pointer">71</td>
                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(71)" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 71"  style="cursor: pointer">71</td>

                       <td  @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 72" class="border border-info" style="cursor: pointer">72</td>
                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(72)" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 72"  style="cursor: pointer">72</td>

                      <td  @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 73" class="border border-info" style="cursor: pointer">73</td>
                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(73)" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 73"  style="cursor: pointer">73</td>

                      <td  @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 74" class="border border-info" style="cursor: pointer">74</td>
                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(74)" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 74"  style="cursor: pointer">74</td>

                      <td  @click="AgregarAnotacionOTratamientoAUndienteEnParticular = false"  v-if="AgregarAnotacionOTratamientoAUndienteEnParticular == 75" class="border border-info" style="cursor: pointer">75</td>
                      <td @click="AgregarAnotacionOTratamientoAUndienteEnParticular_(75)" v-if="AgregarAnotacionOTratamientoAUndienteEnParticular != 75"  style="cursor: pointer">75</td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr v-if="DenticionTemporal">
                     <td><a <?php if ($super_dientes->GetNumNotes(71,$_GET["id"]) == 0) {
                     ?> href="#" <?php  }else{?> href="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&IdDent=71" <?php } ?> ><span class="badge badge-info">:<?php echo $super_dientes->GetNumNotes(71, $_GET["id"]); ?></span></a></td>

                     <td><a <?php if ($super_dientes->GetNumNotes(72,$_GET["id"]) == 0) {
                     ?> href="#" <?php  }else{?> href="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&IdDent=72" <?php } ?> ><span class="badge badge-info">:<?php echo $super_dientes->GetNumNotes(72, $_GET["id"]); ?></span></a></td>

                     <td><a <?php if ($super_dientes->GetNumNotes(73,$_GET["id"]) == 0) {
                     ?> href="#" <?php  }else{?> href="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&IdDent=73" <?php } ?> ><span class="badge badge-info">:<?php echo $super_dientes->GetNumNotes(73, $_GET["id"]); ?></span></a></td>

                     <td><a <?php if ($super_dientes->GetNumNotes(74,$_GET["id"]) == 0) {
                     ?> href="#" <?php  }else{?> href="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&IdDent=74" <?php } ?> ><span class="badge badge-info">:<?php echo $super_dientes->GetNumNotes(74, $_GET["id"]); ?></span></a></td>

                     <td><a <?php if ($super_dientes->GetNumNotes(75,$_GET["id"]) == 0) {
                     ?> href="#" <?php  }else{?> href="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&IdDent=75" <?php } ?> ><span class="badge badge-info">:<?php echo $super_dientes->GetNumNotes(75, $_GET["id"]); ?></span></a></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>



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
              <td><a <?php if ($super_dientes->GetNumNotes(31,$_GET["id"]) == 0) {
                     ?> href="#" <?php  }else{?> href="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&IdDent=31" <?php } ?> ><span class="badge badge-info">:<?php echo $super_dientes->GetNumNotes(31, $_GET["id"]); ?></span></a></td>

              <td><a <?php if ($super_dientes->GetNumNotes(32,$_GET["id"]) == 0) {
                     ?> href="#" <?php  }else{?> href="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&IdDent=32" <?php } ?> ><span class="badge badge-info">:<?php echo $super_dientes->GetNumNotes(32, $_GET["id"]); ?></span></a></td>

              <td><a <?php if ($super_dientes->GetNumNotes(33,$_GET["id"]) == 0) {
                     ?> href="#" <?php  }else{?> href="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&IdDent=33" <?php } ?> ><span class="badge badge-info">:<?php echo $super_dientes->GetNumNotes(33, $_GET["id"]); ?></span></a></td>

              <td><a <?php if ($super_dientes->GetNumNotes(34,$_GET["id"]) == 0) {
                     ?> href="#" <?php  }else{?> href="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&IdDent=34" <?php } ?> ><span class="badge badge-info">:<?php echo $super_dientes->GetNumNotes(34, $_GET["id"]); ?></span></a></td>

              <td><a <?php if ($super_dientes->GetNumNotes(35,$_GET["id"]) == 0) {
                     ?> href="#" <?php  }else{?> href="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&IdDent=35" <?php } ?> ><span class="badge badge-info">:<?php echo $super_dientes->GetNumNotes(35, $_GET["id"]); ?></span></a></td>

              <td><a <?php if ($super_dientes->GetNumNotes(36,$_GET["id"]) == 0) {
                     ?> href="#" <?php  }else{?> href="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&IdDent=36" <?php } ?> ><span class="badge badge-info">:<?php echo $super_dientes->GetNumNotes(36, $_GET["id"]); ?></span></a></td>

              <td><a <?php if ($super_dientes->GetNumNotes(37,$_GET["id"]) == 0) {
                     ?> href="#" <?php  }else{?> href="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&IdDent=37" <?php } ?> ><span class="badge badge-info">:<?php echo $super_dientes->GetNumNotes(37, $_GET["id"]); ?></span></a></td>

              <td><a <?php if ($super_dientes->GetNumNotes(38,$_GET["id"]) == 0) {
                     ?> href="#" <?php  }else{?> href="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&IdDent=38" <?php } ?> ><span class="badge badge-info">:<?php echo $super_dientes->GetNumNotes(38, $_GET["id"]); ?></span></a></td>
            </tr>
                  </table>
                     











                     <div class="card card-info">
                    <div class="card-header">
                      <h4 class="card-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#AddAnotacionr4">
                          <i class="fa fa-plus"></i>
                        </a>
                      </h4>
                    </div>

                    <div id="AddAnotacionr4" class="panel-collapse collapse in">
                      <div class="card-body">
                              <!--bosyyyy--->
                            <p v-if = "messageAddTragDiagr4">{{messageAddTragDiagr4}}</p>
                        <select id="diagnosticor4" class="form-control select2 mt-2">
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
                        <select id="tratamientor4" class="form-control select2 ">
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
                          <p v-if="messageEStadoTratamientor4"> {{messageEStadoTratamientor4}}</p>
                          <ul>
                            <li v-if="!tratamientoEnProcesor4" @click="tratamientoEnProcesor4 = !tratamientoEnProcesor4" v-on:click="tratamientoFinalizador4 = false" style="cursor: pointer;">En proceso</li>
                            <li v-if="tratamientoEnProcesor4" @click="tratamientoEnProcesor4 = !tratamientoEnProcesor4"  v-on:click="tratamientoFinalizador4 = false" style="cursor: pointer;" class="text-info">En proceso</li>

                            <li v-if="!tratamientoFinalizador4" @click="tratamientoFinalizador4 = !tratamientoFinalizador4" v-on:click="tratamientoEnProcesor4 = false" style="cursor: pointer;">Finalizado</li>
                            <li v-if="tratamientoFinalizador4" @click="tratamientoFinalizador4 = !tratamientoFinalizador4" v-on:click="tratamientoEnProcesor4 = false" style="cursor: pointer;" class="text-info">Finalizado</li>
                          </ul>
                       

                       
                       <div  class="mt-2">
                         <button  @click="addTraDiagRecuadro4" onclick="addTraDiag_r4()" class="btn btn-info ">Aceptar</button>
                       </div>
                       
                              <!----body   -->
                      </div>
                    </div>
                  </div>










                </div>
                </div>
              </div>
              <!-- /.card-body -->
                
            </div>
            <!-- /.card -->










