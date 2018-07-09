
<?php  ?>

    <!-- Main content -->
    <section class="content">
      <div class="row">
       
        <div class="col-12">
        
          <div class="card">
            <div class="card-header">
            <h6>DIAGNÓSTICOS Y TRATAMIENTOS ASIGNADOS A LAS PIEZAS </h6>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <?php 
              if (isset($_GET["add"])) {
                ?>  <div class="alert alert-info alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fa fa-info"></i> Listo!</h5>
                  El diagnóstico fue movido a la papelera.
                </div> <?php 
              }else if (isset($_GET["adt"])) {
                ?>  <div class="alert alert-info alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fa fa-info"></i> Listo!</h5>
                  El tratamiento fue movido a la papelera.
                </div> <?php 
              }else if (isset($_GET["aft"])) {
                ?>  <div class="alert alert-info alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fa fa-info"></i> Listo!</h5>
                  El tratamiento ha finalizado.
                </div> <?php 
              }
               ?>
              <table id="example1" class="table table-bordered table-striped table-responsive">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>tipo</th>
                  <th>D/T</th>
                  <th>Fecha asignación</th>
                  <th></th>
                 
                </tr>
                </thead>
                <tbody>

                    <?php 
                         # Diagnosticos
                  
                          foreach ($superDiagDent->GetAllDiagnosticosRecuadro($_GET["Idr"]) as $diag) 
                          {
                          	$consult_diagnostico = $super_diagnosticos -> GetDiagnosticoId($diag["id_diagnostico"]);
                          	foreach ($consult_diagnostico as $d) {}
                             if ($diag["papelera"] == 0 && $diag["id_paciente"] == $_GET["id"]) {
                            ?>
                                <tr>
                                    <td>
                                      #<?php echo $diag["id"]." Pieza:".$diag["id_pieza_o_diente"]; ?>
                                    </td>
                                    <td>Diagnóstico</td>
                                  	<td>
                                      <?php echo $d["diagnostico"]; ?>
                                    </td>

                                    <td>
                                      <?php echo $diag["fecha_asignacion"]; ?>
                                    </td>
                                    <td><div class="btn-group">
                                      <a href="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&Idr=<?php echo $_GET["Idr"];?>&SendDiagnosticoTOPapelera=<?php echo $diag["id"]; ?>" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Quitar de esta pieza"><i class="fa fa-times" ></i></a>
                                    </div></td>
                                </tr>
                            <?php 
                            }
                          }



                          # tratamientos 


                          foreach ($superTratDent->GetAllTratamientosRecuadro($_GET["Idr"]) as $trat) 
                          {
                          	$consult_tratamiento = $super_tratamientos -> GetTratamientoID($trat["id_tratamiento"]);
                          	foreach ($consult_tratamiento as $t ) {}
                              if ($trat["papelera"]== 0 && $trat["id_paciente"] == $_GET["id"]) {
                          	?>
                            <tr>
                          		<td>#<?php echo $trat["id"]." Pieza:". $trat["id_pieza_o_diente"]; ?></td>

                          		<td>Tratamiento <?php if ($trat["tratamiento_finalizado"] == 1) {
                                  ?> <p class="text-danger">Finalizado</p> <?php 
                              }else { ?><p class="text-info">En proceso</p><?php } ?></td>


                          		<td><?php echo $t["tratamiento"]; ?></td>
                          		<td><?php echo $trat["fecha_asignacion"]; ?></td>
                              <td><div class="btn-group">
                                
                                <a href="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&Idr=<?php echo $_GET["Idr"]; ?>&SendTratamientoTOPapelera=<?php echo $trat["id"]; ?>" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Quitar de esta pieza"><i class="fa fa-times" ></i></a>

                                <?php if ($trat["tratamiento_finalizado"] == 0) {
                                  # si el tratamiento no esta finalizado mostraremos el boton de finalizar:
                                  ?>
                                  <a href="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&Idr=<?php echo $_GET["Idr"]; ?>&FinTratamiento=<?php echo $trat["id"]; ?>" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Finalizar tratamiento"><i class="fa fa-calendar-check" ></i></a>
                                  <?php 
                                } ?>
                              </div></td>
                            </tr>
                          	<?php
                            } 
                          }
                        
                     ?>
                

                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>tipo</th>
                  <th>D/T</th>
                  <th>Fecha asignación</th>
                  <th></th>
                
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

<?php 
    if (isset($_GET["FinTratamiento"])) 
    {
        $superTratDent->FinalizarTratamiento($_GET["FinTratamiento"], $super_fecha->GetFechaActual());

        ?><script>window.location="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&Idr=<?php echo $_GET["Idr"]; ?>&aft";</script><?php 
    }


    if (isset($_GET["SendTratamientoTOPapelera"])) {
      $superTratDent -> MoverAlaPapelera($_GET["SendTratamientoTOPapelera"], $super_fecha->GetFechaActual());
      ?><script>window.location="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&Idr=<?php echo $_GET["Idr"]; ?>&adt";</script><?php 
    }


    if (isset($_GET["SendDiagnosticoTOPapelera"])) {
      $superDiagDent -> MoverAlaPapelera($_GET["SendDiagnosticoTOPapelera"], $super_fecha->GetFechaActual())
      ?><script>window.location="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&Idr=<?php echo $_GET["Idr"]; ?>&add";</script><?php 
    }
 ?>

<script>
  
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

</script>















































      
  

























      