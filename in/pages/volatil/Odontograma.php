<?php $pacientes = $super_pacientes->GetAllPacientes($id_clinica); ?>
<!-- Content Wrapper. Contains page content -->
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
                          <option value="<?php echo $paciente_["id"]; ?>" ><?php echo $paciente_["tipo_identidad"].":". $paciente_["num_identidad"] ." - ".$paciente_["nombres"]." ". $paciente_["apellidos"]; ?></option>
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
          ?>
   <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <!-- AREA CHART -->
            <div class="card card-info">
              <div class="card-header"  style="cursor:pointer;">
                <h3 class="card-title">Derecha</h3>

              </div>
              <div class="card-body">
                <div class="chart">
                 <table class="table" border="0">
                    
                    <tr>
                      <td class="text-primary">18</td>
                      <td>17</td>
                      <td>16</td>
                      <td>15</td>
                      <td>14</td>
                      <td>13</td>
                      <td>12</td>
                      <td>11</td>
                    </tr>
                    <tr>
                      <td><img style="cursor: pointer;" src="df"></td>
                      <td><img style="cursor: pointer;" src="df"></td>
                      <td><img style="cursor: pointer;" src="df"></td>
                      <td><img style="cursor: pointer;" src="fg"></td>
                      <td><img style="cursor: pointer;" src="df"></td>
                      <td><img style="cursor: pointer;" src="df"></td>
                      <td><img style="cursor: pointer;" src="df"></td>
                      <td><img style="cursor: pointer;" src="df"></td>
                    </tr>
                    <tr>
                      <td><img style="cursor: pointer;" src="df"></td>
                      <td><img style="cursor: pointer;" src="df"></td>
                      <td><img style="cursor: pointer;" src="df"></td>
                      <td><img style="cursor: pointer;" src="fg"></td>
                      <td><img style="cursor: pointer;" src="df"></td>
                      <td><img style="cursor: pointer;" src="df"></td>
                      <td><img style="cursor: pointer;" src="df"></td>
                      <td><img style="cursor: pointer;" src="df"></td>
                    </tr>
                  </table>
              
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- DONUT CHART -->
            <div class="card card-info">
              <div class="card-header" style="cursor:pointer;">
                <h3 class="card-title">Derecha</h3>
              </div>
              
              <div class="card-body">
                <div class="chart">
                 <table class="table" border="0">
                    
                    <tr>
                      <td>48</td>
                      <td>47</td>
                      <td>46</td>
                      <td>45</td>
                      <td>44</td>
                      <td>43</td>
                      <td>42</td>
                      <td>41</td>
                    </tr>
                    <tr>
                      <td><img style="cursor: pointer;" src="df"></td>
                      <td><img style="cursor: pointer;" src="df"></td>
                      <td><img style="cursor: pointer;" src="df"></td>
                      <td><img style="cursor: pointer;" src="fg"></td>
                      <td><img style="cursor: pointer;" src="df"></td>
                      <td><img style="cursor: pointer;" src="df"></td>
                      <td><img style="cursor: pointer;" src="df"></td>
                      <td><img style="cursor: pointer;" src="df"></td>
                    </tr>
                    <tr>
                      <td><img style="cursor: pointer;" src="df"></td>
                      <td><img style="cursor: pointer;" src="df"></td>
                      <td><img style="cursor: pointer;" src="df"></td>
                      <td><img style="cursor: pointer;" src="fg"></td>
                      <td><img style="cursor: pointer;" src="df"></td>
                      <td><img style="cursor: pointer;" src="df"></td>
                      <td><img style="cursor: pointer;" src="df"></td>
                      <td><img style="cursor: pointer;" src="df"></td>
                    </tr>
                  </table>
              
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>

         

          <!-- /.col (LEFT) -->
          <div class="col-md-6">
            <!-- LINE CHART -->
            <div class="card card-info">
              <div class="card-header" style="cursor:pointer;">
                <h3 class="card-title">Izquierda</h3>

               
              </div>
            
              <div class="card-body">
                <div class="chart">
                 <table class="table" border="0">
                    
                    <tr>
                      <td>21</td>
                      <td>22</td>
                      <td>23</td>
                      <td>24</td>
                      <td>25</td>
                      <td>26</td>
                      <td>27</td>
                      <td>28</td>
                    </tr>
                    <tr>
                      <td><img style="cursor: pointer;" src="df"></td>
                      <td><img style="cursor: pointer;" src="df"></td>
                      <td><img style="cursor: pointer;" src="df"></td>
                      <td><img style="cursor: pointer;" src="fg"></td>
                      <td><img style="cursor: pointer;" src="df"></td>
                      <td><img style="cursor: pointer;" src="df"></td>
                      <td><img style="cursor: pointer;" src="df"></td>
                      <td><img style="cursor: pointer;" src="df"></td>
                    </tr>
                    <tr>
                      <td><img style="cursor: pointer;" src="df"></td>
                      <td><img style="cursor: pointer;" src="df"></td>
                      <td><img style="cursor: pointer;" src="df"></td>
                      <td><img style="cursor: pointer;" src="fg"></td>
                      <td><img style="cursor: pointer;" src="df"></td>
                      <td><img style="cursor: pointer;" src="df"></td>
                      <td><img style="cursor: pointer;" src="df"></td>
                      <td><img style="cursor: pointer;" src="df"></td>
                    </tr>
                  </table>
              
                </div>
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->




            <!-- BAR CHART -->
            <div class="card card-info">
              <div class="card-header" style="cursor:pointer;">
                <h3 class="card-title">Izquierda</h3>

                
              </div>
             
              <div class="card-body">
                <div class="chart">
                 <table class="table" border="0">
                    
                    <tr>
                      <td>31</td>
                      <td>32</td>
                      <td>33</td>
                      <td>34</td>
                      <td>35</td>
                      <td>36</td>
                      <td>37</td>
                      <td>38</td>
                    </tr>
                    <tr>
                      <td><img style="cursor: pointer;" src="df"></td>
                      <td><img style="cursor: pointer;" src="df"></td>
                      <td><img style="cursor: pointer;" src="df"></td>
                      <td><img style="cursor: pointer;" src="fg"></td>
                      <td><img style="cursor: pointer;" src="df"></td>
                      <td><img style="cursor: pointer;" src="df"></td>
                      <td><img style="cursor: pointer;" src="df"></td>
                      <td><img style="cursor: pointer;" src="df"></td>
                    </tr>
                    <tr>
                      <td><img style="cursor: pointer;" src="df"></td>
                      <td><img style="cursor: pointer;" src="df"></td>
                      <td><img style="cursor: pointer;" src="df"></td>
                      <td><img style="cursor: pointer;" src="fg"></td>
                      <td><img style="cursor: pointer;" src="df"></td>
                      <td><img style="cursor: pointer;" src="df"></td>
                      <td><img style="cursor: pointer;" src="df"></td>
                      <td><img style="cursor: pointer;" src="df"></td>
                    </tr>
                  </table>
              
                </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

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