<?php if ($deAlta == 0) {} 
use Carbon\Carbon;
$fecha_de_expiración_cuenta_gratuita = new Carbon($fechaExpire);
$dias_restantes = $fecha_de_expiración_cuenta_gratuita -> diffForHumans();

?>
 <!-- Content Wrapper. Contains page content -->
  <div id="activar-cuenta" class="content-wrapper">


    

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <?php 

                if ($deAlta == 0)  // que no ha comprado la licencia
                {
                  ?>
                         <div class="alert alert-info alert-dismissable col-sm-12">
              <i class="fa fa-warning"></i>
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <b>Esta demostración expira <?php echo $dias_restantes; ?>, </b> ¡Compra la licencia y usa dentad de por vida!
            </div>
             <!-- /.col-md-12 -->
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h5 class="m-0">Compra tu licencia de dentad.</h5>
              </div>
                  <div class="card-body">
                   
                    <div>
                          <h4>Ponte en contacto con nosotros (+57)321 807 0767 Colombia  </h4>
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

