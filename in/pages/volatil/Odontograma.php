<?php
 $pacientes = $super_pacientes->GetAllPacientes($id_clinica); 
 $diagnosticosDB = $super_diagnosticos -> GetAllDiagnosticos($id_clinica);
 $tratamientosDB = $super_tratamientos -> GetAllTratamientos($id_clinica);


?>
<!-- Content Wrapper. Contains page content -->
<script>
  var id_tratamiento = "";
  var id_diagnostico = "";

  var id_tratamientor2 = "";
  var id_diagnosticor2 = "";

  var id_tratamientor3 = "";
  var id_diagnosticor3 = "";

  var id_tratamientor4 = "";
  var id_diagnosticor4 = "";


  var fecha_Actual = "<?php echo $fecha_actual ?>";

</script>
<link rel="stylesheet" href="plugins/select2/select2.min.css">
  <div id="Odontograma" class="content-wrapper">
    
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


    <?php 
       if (!isset($_GET["IdDent"]) && !isset($_GET["Idr"])) 
        // si no se ha selñeccionado un diente en particular para ver sus anotaciones, entonces se mostraran los cuadrantes,. 
        /// Idr es el ide de un recuadro 
         {
            ?>
               <section class="content">
      <div class="container-fluid">
        <div class="row">
           
          
               <!-- /.col (LEFT) -->
              <div v-if="all_recuadros" class="col-md-6">
                     <?php 
                    include("recuadros_odontograma/recuadro1.php"); 
                  ?>
              </div>
              <div v-if="all_recuadros" class="col-md-6">
                     <?php 
                      include("recuadros_odontograma/recuadro3.php");
                  ?>
              </div>





              <!--- RECUADROS DE DENTICIÓN -->
                <div v-if="all_recuadros" class="col-md-12 text-center ">
                  <div class="btn-group">
                    <button @click="abrirDenticionTemporal()" class="btn btn-default">Dentición temporal</button>
                  </div>
                </div>
                  
              <!--- FIN RECUADROS DE DENTICIÓN -->







                <!-- /.col (RIGHT) -->    
              <div v-if="all_recuadros" class="col-md-6 mt-3">
                <?php
                     include("recuadros_odontograma/recuadro2.php");
                ?>
              </div>

              <div v-if="all_recuadros" class="col-md-6 mt-3">
               <div v-if="!recuadro_4">
                <?php
                    include("recuadros_odontograma/recuadro4.php");
                ?>
               </div>
              </div>
          

            


            

          <!-- /.col (RIGHT) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
          <?php 
        }else if (isset($_GET["IdDent"]))
        {
          include("recuadros_odontograma/recuadro_de_anotaciones_a_dientes.php");
        }else if (isset($_GET["Idr"])) 
        {
          //// se muestran individualmente los recuadros
          // alli se podra: agregar a varias píezas un diagnostico o un trata miento
          if ($_GET["Idr"] == 1) {
            include("recuadros_odontograma/showRecuadroIndividual1.php");
          }else if ($_GET["Idr"] == 2) {
            include("recuadros_odontograma/showRecuadroIndividual2.php");
          }else if ($_GET["Idr"] == 3) {
            include("recuadros_odontograma/showRecuadroIndividual3.php");
          }else if ($_GET["Idr"] == 4) {
            include("recuadros_odontograma/showRecuadroIndividual4.php");
          }

          
        }

      }
     ?>



















  <script type="text/javascript">
 

     var id_paciente_seleccionado = 0;

    function seleccion_paciente()
    {
      id_paciente_seleccionado =  document.getElementById("pacientes").value;
    }

    <?php if (isset($_GET["id"])) {?> id_paciente_seleccionado = "<?php echo @$_GET["id"] ?>"; <?php } ?>
  </script>

  <script>
      $(function () {
    //Initialize Select2 Elements
    $('.select2').select2();
  });

</script>

 <script>
   // para cuando se selecciona un diagnostico o un tratamiento 
  // para un diente en particular
  function addTraDiag_()  /// recuadro 1
                        {
    id_tratamiento = document.getElementById('tratamiento').value;
    id_diagnostico = document.getElementById('diagnostico').value;

  }


  function addTraDiag_r2() // recuadro 2
  {
    id_tratamientor2 = document.getElementById('tratamientor2').value;
    id_diagnosticor2 = document.getElementById('diagnosticor2').value;

  }


   function addTraDiag_r3() // recuadro 2
  {
    id_tratamientor3 = document.getElementById('tratamientor3').value;
    id_diagnosticor3 = document.getElementById('diagnosticor3').value;

  }


   function addTraDiag_r4() // recuadro 2
  {
    id_tratamientor4 = document.getElementById('tratamientor4').value;
    id_diagnosticor4 = document.getElementById('diagnosticor4').value;

  }


 </script>

</div>