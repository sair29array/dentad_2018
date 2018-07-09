
<?php /// aqui se muestran los tratamientos y diagnosticos asignados a una pieza en particular  ?>

    <!-- Main content -->
    <section class="content">
      <div class="row">
       
        <div class="col-12">
        
          <div class="card">
            <div class="card-header">
            <h6>DIAGNÓSTICOS Y TRATAMIENTOS ASIGNADOS A LA PIEZA: <?php echo $_GET["IdDent"]. " - ". $super_dientes->ShowTipoDenticion($_GET["IdDent"]) ; ?>  <a  href="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>">  <i class="fa fa-angle-double-left"></i>Volver</a></h6>
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
                  <th>Fecha finalización</th>
                  <th></th>
                 
                </tr>
                </thead>
                <tbody>

                    <?php 
                         # Diagnosticos
                  
                          foreach ($super_dientes->GetAllDiagnosticos($_GET["IdDent"], $_GET["id"]) as $diag) 
                          {
                          	$consult_diagnostico = $super_diagnosticos -> GetDiagnosticoId($diag["id_diagnostico"]);
                          	foreach ($consult_diagnostico as $d) {}
                              if ($diag["papelera"] == 0) {
                            ?>
                                <tr>
                                    <td>
                                      #<?php echo $diag["id"].$diag["id_diagnostico"]; ?>
                                    </td>
                                    <td>Diagnóstico</td>
                                  	<td>
                                      <?php echo $d["diagnostico"]; ?>
                                    </td>

                                    <td>
                                      <?php echo $diag["fecha_asignacion"]; ?>
                                    </td>
                                   <td></td>
                                    <td><div class="btn-group">
                                      <a href="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&IdDent=<?php echo $_GET["IdDent"]; ?>&SendDiagnosticoTOPapelera=<?php echo $diag["id"]; ?>" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Quitar de esta pieza"><i class="fa fa-times" ></i></a>
                                    </div></td>
                                </tr>
                            <?php 
                              }

                          }

                          # tratamientos 


                          foreach ($super_dientes->GetAllTratamientos($_GET["IdDent"], $_GET["id"]) as $trat) 
                          {
                          	$consult_tratamiento = $super_tratamientos -> GetTratamientoID($trat["id_tratamiento"]);
                          	foreach ($consult_tratamiento as $t ) {}
                          	 
                            if ($trat["papelera"]== 0) {
                            ?>
                            
                            <tr>
                          		<td>#<?php echo $trat["id"].$trat["id_tratamiento"]; ?></td>

                          		<td>Tratamiento <?php if ($trat["tratamiento_finalizado"] == 1) {
                                  ?> <p class="text-danger">Finalizado</p> <?php 
                              }else { ?><p class="text-info">En proceso</p><?php } ?></td>


                          		<td><?php echo $t["tratamiento"]; ?></td>
                          		<td><?php echo $trat["fecha_asignacion"]; ?></td>
                              <td><?php echo $trat["fecha_finalizacion"]; ?></td>
                              <td><div class="btn-group">

                                <a href="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&IdDent=<?php echo $_GET["IdDent"]; ?>&SendTratamientoTOPapelera=<?php echo $trat["id"]; ?>" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Quitar de esta pieza"><i class="fa fa-times" ></i></a>

                                <?php if ($trat["tratamiento_finalizado"] == 0) {
                                  # si el tratamiento no esta finalizado mostraremos el boton de finalizar:
                                  ?>
                                  <a href="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&IdDent=<?php echo $_GET["IdDent"]; ?>&FinTratamiento=<?php echo $trat["id"]; ?>" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Finalizar tratamiento"><i class="fa fa-calendar-check" ></i></a>
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
                  <th>Fecha finalización</th>
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

        ?><script>window.location="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&IdDent=<?php echo $_GET["IdDent"]; ?>&aft";</script><?php 
    }


    if (isset($_GET["SendTratamientoTOPapelera"])) {
      $superTratDent -> MoverAlaPapelera($_GET["SendTratamientoTOPapelera"], $super_fecha->GetFechaActual());
      ?><script>window.location="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&IdDent=<?php echo $_GET["IdDent"]; ?>&adt";</script><?php 
    }


    if (isset($_GET["SendDiagnosticoTOPapelera"])) {
      $superDiagDent -> MoverAlaPapelera($_GET["SendDiagnosticoTOPapelera"], $super_fecha->GetFechaActual())
      ?><script>window.location="./?view=Odontograma&id=<?php echo $_GET["id"]; ?>&IdDent=<?php echo $_GET["IdDent"]; ?>&add";</script><?php 
    }
 ?>

<script>
  
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

</script>















































      
  

























      