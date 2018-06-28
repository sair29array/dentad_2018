<?php $pacientes = $super_pacientes->GetAllPacientes($id_clinica); ?>
<!-- Content Wrapper. Contains page content -->
<link rel="stylesheet" href="plugins/select2/select2.min.css">
  <div id="Odontograma" class="content-wrapper">
    <pre>{{$data}}</pre>
    <!-- Content Header (Page header) -->
    <?php if (!isset($_GET["id"]))  // paciente id
        { ?>
        <center>
          <section class="content-header content-center">
          <div class="container-fluid">
            <img width="40%" class="img img-fluid" src="dist/img/odontograma_icon.png">
            <br>
            <hr>
            <div class="row mb-2">
             
              <div class="col-sm-12 mt-1">
                  <transition name="slide-fade">
                    <h4 v-if = "!select_mal">Selecciona un paciente</h4>
                  <h4 v-if = "select_mal" class="text-danger">Selecciona un paciente</h4>
                  </transition>
                  <div  >
                      <select id="pacientes"  class="select2 form-control" @click="select_mal = false">
                    <option value="0">  </option>
                    <?php 
                        foreach ($pacientes as $paciente_) 
                        {
                          ?>
                          <option value="<?php echo $paciente_["num_identidad"]; ?>" ><?php echo $paciente_["tipo_identidad"].":". $paciente_["num_identidad"] ." - ".$paciente_["nombres"]." ". $paciente_["apellidos"]; ?></option>
                          <?php 
                        }
                      ?>
                    </select>
                  
                  </div>

                  

               
                
                 <button   onclick="seleccion_paciente();" @click="Seleccionar_paciente()" class="mt-3 btn btn-info">Abrir odontograma</button>
              </div>
              


            </div>
          </div><!-- /.container-fluid -->
        </section>
        </center>


<?php } ?>























    <!-- Main content -->
    <?php 
        if (isset($_GET["id"]))  // paciente id
        {

          $paciente_seleccionado = $super_pacientes->GetPacienteNumID($_GET["id"]);
          foreach ($paciente_seleccionado as $ps) {}


          ?>

    
    <div class="col-md-12 col-sm-6 col-12">
        <div class="info-box">
          <span class="info-box-icon bg-default"><img src="dist/img/odontograma_icon.png"></span>

           <div class="info-box-content">
              <h3>Odontograma</h3>
              <h5><b>Paciente: </b><a href="./?view=paciente&id=<?php echo $ps["num_identidad"]; ?>"> <?php echo $ps["tipo_identidad"].": ".$ps["num_identidad"]." - ".$ps["nombres"]. " " . $ps["apellidos"];  ?></a></h5>
              
           </div>
              <!-- /.info-box-content -->
        </div>
            <!-- /.info-box -->
    </div>



   <section class="content">
      <div class="container-fluid">
        <div class="row">
           
          
               <!-- /.col (LEFT) -->
              <div v-if="all_recuadros" class="col-md-6">
               
                  <?php 
                    include("recuadros_odontograma/recuadro1.php"); 
                    include("recuadros_odontograma/recuadro2.php");
                  ?>
              </div>


                <!-- /.col (RIGHT) -->    
              <div v-if="all_recuadros" class="col-md-6">
               <div v-if="!recuadro_4">
                 <?php
                    include("recuadros_odontograma/recuadro3.php");
                    include("recuadros_odontograma/recuadro4.php");
                ?>
               </div>
              </div>
          

            


            <!-- / si el user seleccionó a un recuadro en particular -->
               <div v-if="showRecuadroIndividual" class="col-md-12">
               
                 <div v-if="showRecuadroIndividual == 1">
                    <?php   include("recuadros_odontograma/recuadro1.php"); ?>
                 </div>

                  <div v-if="showRecuadroIndividual == 2">
                    <?php   include("recuadros_odontograma/recuadro2.php"); ?>
                 </div>


                 <div v-if="showRecuadroIndividual == 3">
                    <?php   include("recuadros_odontograma/recuadro3.php"); ?>
                 </div>

                 <div v-if="showRecuadroIndividual == 4">
                    <?php  include("recuadros_odontograma/recuadro4.php"); ?>
                 </div>


              </div>



















          <!-- /.col (RIGHT) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
          <?php 
        }
     ?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

















  <script type="text/javascript">
     $(function () {
    //Initialize Select2 Elements
    $('.select2').select2();
  });


     var id_paciente_seleccionado = 0;

    function seleccion_paciente()
    {
      id_paciente_seleccionado =  document.getElementById("pacientes").value;
    }
  </script>