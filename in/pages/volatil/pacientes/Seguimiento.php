<?php 
  use Carbon\Carbon;


 $idc = $super_agenda-> GetAllCItasDeUnPaciente($paciente["id"]);
 ?>

    <!-- Main content -->
    <section class="content">
      <div class="row">
       
        <div class="col-12">
          
            
          

          <div class="card">
            <div class="card-header">
              <h3 class="card-title"> Seguimiento <b class="text-primary">
              </b>
            </div>


            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped table-responsive ">
                <thead>
                <tr>
                  
                  <th>Fecha</th>
                  <th>Proceso Realizado</th>
                  <th>Descripción del proceso</th>
                  <th>Receptor</th>
                  <th></th>
                 
                </tr>
                </thead>
                <tbody>

                    <?php 
                        
                          foreach ($superSeguimientoP->GetHistorial($id_clinica, $_GET["id"]) as $h) 
                          {
                            $cuando = "";
                            if ($h["fecha_en_que_se_ejecutara_el_proceso"] != "") 
                            {
                              $fecha_inicio = substr($h["fecha_en_que_se_ejecutara_el_proceso"], 0, 10 );
                              // un ejemplo de un proceso que lleva fecha de ejecuciín son las citas si es una cita debera tener una fecha de ejecucion que analizaremos para saber si el dia en que el admin revise al user, plataforma le pueda decir cuando se ejecutara esa cita (dentro de tantos dias o hoy)
                              if ( $fecha_inicio == date("Y-m-d")) {
                                $inicio = new Carbon($h["fecha_en_que_se_ejecutara_el_proceso"]);
                                $cuando = "HOY, ".$inicio -> diffForHumans() ;
                              }else
                              {
                                $inicio = new Carbon($h["fecha_en_que_se_ejecutara_el_proceso"]);
                              $cuando = $inicio -> diffForHumans();
                              }
                            }

                            /// SI EL SEGUIMIENTO ES AL PROCESO DE AGENDAMIENTO DE CITAS
                            $fechayhorainicio =  $h["fecha_en_que_se_ejecutara_el_proceso"];
                            if ($h["proceso"]== "Agendamiento_de_cita") 
                            {
                             
                               
                              foreach ($idc as $cita) 
                              {
                               if ($cita["start"] == $fechayhorainicio) 
                               {
                                  $id_de_la_cita_programada = $cita["id_cita"];
                               }
                              }
                            }
                         
                            ?>
                                <tr>
                                   <td> <p style="display: none;"><?php echo $h["id"]; ?></p><?php echo $h["fecha"]; ?></td>
                                   <td><?php echo "<b>".$h["proceso"]."</b> " ;?></td>
                                   <td><?php echo $h["descripcion_proceso"]; ?> <p class="text-primary"><?php echo $cuando; ?></p></td>
                                   <td><?php echo $h["id_user_admin_o_asistente"]; ?></td>
                                   <td><?php if ($h["proceso"]=="Agendamiento_de_cita") {
                                    
                                     ?> <div class="btn-group"> 
                                       
                                       <a href="./?view=paciente&id=<?php echo $_GET["id"]; ?>&CitaEnEspera=<?php echo $id_de_la_cita_programada; ?>" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Poner en espera"><i class="fa fa-user-clock"></i></a>

                                       <a href="./?view=paciente&id=<?php echo $_GET["id"]; ?>&AtenderPacienteCita=<?php echo $id_de_la_cita_programada; ?>" class="btn btn-success"  data-toggle="tooltip" data-placement="top" title="Atender este paciente"><i class="fa fa-street-view"></i></a>

                                       <a href="./?view=paciente&id=<?php echo $_GET["id"]; ?>&FinalizarAtencionCita=<?php echo $id_de_la_cita_programada; ?>" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Finalizar"><i class="fa fa-user-check"></i></a>
                                     </div> <?php 
                                   } ?></td>
                                   
                                </tr>
                            <?php 
                          }
                        
                     ?>
                

                </tbody>
                <tfoot>
                <tr>
                  
                  <th>Fecha</th>
                  <th>Proceso Realizado</th>
                  <th>Descripción del proceso</th>
                  <th>Receptor</th>
                  <th></th>
                
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
<script>
  
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

</script>


      