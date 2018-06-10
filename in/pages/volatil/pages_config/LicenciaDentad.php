<?php if ($iuser["de_alta"] != 0) {
  
} ?>
 <!-- Content Wrapper. Contains page content -->
  <div id="activar-cuenta" class="content-wrapper">


    

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <?php 

                if ($iuser["de_alta"]== 0)  // que no ha comprado la licencia
                {
                  ?>
                         <div class="alert alert-warning alert-dismissable col-sm-12">
              <i class="fa fa-warning"></i>
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <b>Te quedan 5 días, </b> ¡Compra la licencia y usa dentad de por vida!
            </div>
             <!-- /.col-md-12 -->
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h5 class="m-0">Compra tu licencia de dentad.</h5>
              </div>
                  <div class="card-body">
                   
                    <div>
                          <a mp-mode="dftl" href="https://www.mercadopago.com/mco/checkout/start?pref_id=267940501-20665784-d411-41b1-b3c5-a7544c98efed" name="MP-payButton" class='blue-tr-l-sq-none'>Comprar </a>
<script type="text/javascript">
(function(){function $MPC_load(){window.$MPC_loaded !== true && (function(){var s = document.createElement("script");s.type = "text/javascript";s.async = true;s.src = document.location.protocol+"//secure.mlstatic.com/mptools/render.js";var x = document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s, x);window.$MPC_loaded = true;})();}window.$MPC_loaded !== true ? (window.attachEvent ?window.attachEvent('onload', $MPC_load) : window.addEventListener('load', $MPC_load, false)) : null;})();
</script>
                    </div>

                 </div> 
            </div>

          </div>
                  <?php 
                }else
                {
                  ?>
                     <div class="alert alert-primary alert-dismissable col-sm-12">
              <i class="fa fa-primary"></i>
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <b> <i class="fa fa-check"></i> Licencia Dentad V-1.0. </b> Su licencia está activa desde: 05 de junio de 2018
            </div>
             <!-- /.col-md-12 -->
          <div class="col-lg-12">
            

          </div>
                  <?php 
                }
             ?>
          <!-- /.col-md-12 -->
          <div class="col-sm-6">
            
            <h1 class="m-0 text-dark mt-4">Licencia</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          

          <!-- /.col-md-12 -->
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h5 class="m-0">DENTAD</h5>
              </div>
              <div class="card-body">
               
                <p class="text text-justify">Dentad es un Software de código cerrado elaborado por <a target="blank_" href="https://www.array.com.co">ARRAY | EXPERTOS EN TIC </a> y <a target="blank_" href="https://adminlte.io/">AdminLTE.io.</a> Dentad se encuentra bajo la licencia de Shareware. El usuario podrá usar Este software Online con funciones o características limitadas o con un uso restringido a un límite de tiempo (7 días). Así, se le da al usuario la oportunidad de probar el producto antes de comprarlo y, más tarde, adquirir la versión completa del software. </p>
              
                <div class="text-justify">
                  <h4>Lo que se le <x class="text-success">permite</x> hacer con Dentad</h4>
                  <ul>
                    <li>Gestionar de manera perfecta tu clínica, desde cualquier dispositivo.</li>
                    <li>Generar reportes de las finanzas de la clínica.</li>
                    <li>Consultar y modificar agenda desde cualquier ligar o dispositivo.</li>
                    <li>Registrar pacientes de forma ilimitada.</li>
                    <li>Crear un grupo de trabajo para agilizar los diferentes procesos que se dan dentro de una clínica.</li>
                    <li>Revisar ficha clínica de los pacientes.</li>
                    <li>Diligenciar formatos de fichas clínicas por especialidad (Implantología, ortodoncia, endodoncia, entre otros).</li>
                    <li>Diligenciar odontogramas para cada paciente registrado.</li>


                  </ul>
                </div>

                <div class="text-justify">
                  <h4>Lo que <x class="text-danger"> no se permite</x> hacer con Dentad</h4>
                  <ul>
                    <li>El sistema interno de Dentad es seguro, sin embargo, no trate de modificarlo u obstruirlo.</li>

                  </ul>
                </div>
                 
              </div>
            </div>

          </div>
          <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

