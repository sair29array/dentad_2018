<?php 
  
use Carbon\Carbon;
  if ($isset_Clinica == 0) {
                    ?>
                    <div class="col-sm-12">
            <div class="alert alert-info alert-dismissable col-sm-12">
              <i class="fa fa-warning"></i>
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <b><a href="./Mi-Clínica">¿No tienes una clínica?</a>, </b> Configura tu clínica y controlar la atención hacia los pacientes que tienen cita agendada para el dia de hoy.
            </div>
        </div>
                    <?php 
	}else{
		$citas = $super_agenda -> GetAllCitas($id_clinica);
		$citas_en_espera = $super_agenda ->GetCitasEnEspera($id_clinica);
	}
 ?>


 <div class="content-wrapper" id="atencion_pacientes">
 	<pre>{{$data}}</pre>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Atención a los pacientes</h1>
          </div>
          <div class="col-sm-6">
            <!--ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Icons</li>
            </ol-->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title">{{fecha_actual}}</h3>
          </div> <!-- /.card-body -->
          <div class="card-body">
            <div>
              	

                <table id="example1" class="table table-bordered table-striped table-responsive ">
                <thead>
                <tr>
                  
                  
                  <th></th>
                  <th></th>
                  <th></th>
                 
                </tr>
                </thead>
                <tbody>

                	<?php 
                		foreach ($citas as $cita) 
                		{
                			$pacientedb = $super_pacientes -> GetPacienteIDin($cita["id_paciente"]);
                				foreach ($pacientedb as $paciente) {}
                			if ($cita["estado_de_la_cita"] == "atendiendo" ) 
                				{
                					if (date("Y-m-d") != substr($cita["start"] , 0, 10) ) 
                					{
                						$inicio = new Carbon(substr($cita["start"] , 0, 10));
                                		$cuando = $inicio -> diffForHumans() ;
                					}else{
                						$cuando = "HOY";
                					}
                				 ?> 
                				 <tr>
                				 	<td><h6 style="opacity: 0;">4</h6></td>
                                	<td>
                                	<div class="alert alert-success alert-dismissible">
					                  <h5><i class="icon fa fa-street-view"></i> Atendiendo</h5>
					                 Cita para <?php echo $cita["title"].", Agendada para ". $cuando." - " . substr($cita["start"] , 8, 2 ). " de ".$super_fecha->GetMesString(substr($cita["start"] , 5, 2 ))." / ".substr($cita["start"] ,0, 4 ) . "". substr($cita["start"],10)  ; ?>
					                 <br>
					                  Paciente: <?php echo $paciente["num_identidad"]. "-".$paciente["nombres"]." " .$paciente["apellidos"]; ?>
					                </div></td>
					                <td >
										<a style="cursor: pointer;"  @click="Finalizar_atencion_cita(<?php echo $cita["id_cita"]; ?>)">
											<div class="alert alert-info ">
											  <h3><i class="fa fa-user-check"></i></h3>
											  Finalizar atención
											</div>
										</a>
					                </td>
                                </tr>
                                <?php 
                            }
                		}
                		foreach ($citas_en_espera as $cita) 
                		{
                			$pacientedb = $super_pacientes -> GetPacienteIDin($cita["id_paciente"]);
                				foreach ($pacientedb as $paciente) {}
                			if ($cita["estado_de_la_cita"] == "en_espera" ) 
                				{
                					if (date("Y-m-d") != substr($cita["start"] , 0, 10) ) 
                					{
                						$inicio = new Carbon(substr($cita["start"] , 0, 10));
                                		$cuando = $inicio -> diffForHumans() ;
                					}else{
                						$cuando = "HOY";
                					}
                					?> 
	                				<tr>
	                					<td><h6 style="opacity: 0;">3</h6></td>
	                                 <td>
	                                 <div class="alert alert-warning ">
					                  <h5><i class="icon fa fa-user-clock"></i> En espera (T<?php echo $cita["turno_de_atencion"]; ?>)</h5>
					                 Cita para <?php echo $cita["title"].", Agendada para " . $cuando." - " . substr($cita["start"] , 8, 2 ). " de ".$super_fecha->GetMesString(substr($cita["start"] , 5, 2 ))." / ".substr($cita["start"] ,0, 4 ) . "". substr($cita["start"],10)  ; ?>
					                 <br>
					                 Paciente: <?php echo $paciente["num_identidad"]. "-".$paciente["nombres"]." " .$paciente["apellidos"]; ?>
								    
					                </div></td>
					                <td >
										<a style="cursor: pointer;"  @click="Atender_paciente(<?php echo $cita["id_cita"]; ?>)" >
											<div class="alert alert-success ">
											  <h3><i class="fa fa-street-view"></i></h3>
											  Atender paciente
											</div>
										</a>
					                </td>
	                                </tr>
                					<?php 
                				}
                		}


                		foreach ($citas as $cita) 
                		{
                			$pacientedb = $super_pacientes -> GetPacienteIDin($cita["id_paciente"]);
                				foreach ($pacientedb as $paciente) {}
                			if ($cita["estado_de_la_cita"] == "" &&  substr($cita["start"] , 0, 10)== date("Y-m-d")) 
                				{
                					if (date("Y-m-d") != substr($cita["start"] , 0, 10) ) 
                					{
                						$inicio = new Carbon(substr($cita["start"] , 0, 10));
                                		$cuando = $inicio -> diffForHumans() ;
                					}else{
                						$cuando = "HOY";
                					}
                				?>
                				<tr>
                					<td><h6 style="opacity: 0;">2</h6></td>
								   <td>
								   	<div class="alert alert-primary alert-dismissible">
								    <h5><i class="icon fa fa-user-slash"></i> Ausente</h5>
								  Cita para <?php echo $cita["title"].", Agendada para " . $cuando." - " . substr($cita["start"] , 8, 2 ). " de ".$super_fecha->GetMesString(substr($cita["start"] , 5, 2 ))." / ".substr($cita["start"] ,0, 4 ) . "". substr($cita["start"],10)  ; ?>
								   <br>
								    Paciente: <?php echo $paciente["num_identidad"]. "-".$paciente["nombres"]." " .$paciente["apellidos"]; ?>

								   </div></td>
								   <td >
										<a style="cursor: pointer;"  @click="poner_en_espera(<?php echo $cita["id_cita"]; ?>)">
											<div class="alert alert-warning ">
											  <h3><i class="fa fa-user-clock"></i></h3>
											  Poner en espera
											</div>
										</a>
					                </td>
                                </tr>
                				<?php 
                				}
                		}


                		foreach ($citas as $cita) 
                		{
                			
                				$pacientedb = $super_pacientes -> GetPacienteIDin($cita["id_paciente"]);
                				foreach ($pacientedb as $paciente) {}


                				if ($cita["estado_de_la_cita"]=="finalizada" && $cita["fecha_de_atencion"] == date("Y-m-d")) 
                				{
                					if (date("Y-m-d") != substr($cita["start"] , 0, 10) ) 
                					{
                						$inicio = new Carbon(substr($cita["start"] , 0, 10));
                                		$cuando = $inicio -> diffForHumans() ;
                					}else{
                						$cuando = "HOY";
                					}
                					?> 
                					<tr>
                						<td><h6 style="opacity: 0;">1</h6></td>
								   <td>
								   	<div class="alert alert-info alert-dismissible">
								     <h5><i class="icon fa fa-user-check"></i> Atención finalizada</h5>
								    Cita para <?php echo $cita["title"].", Agendada para " . $cuando." - " . substr($cita["start"] , 8, 2 ). " de ".$super_fecha->GetMesString(substr($cita["start"] , 5, 2 ))." / ".substr($cita["start"] ,0, 4 ) . "". substr($cita["start"],10)  ; ?>
								    <br>
								    Paciente: <?php echo $paciente["num_identidad"]. "-".$paciente["nombres"]." " .$paciente["apellidos"]; ?>
								    </div>
									</td>
									<td>

										<button class="btn btn-primary btn-block dissabled" disabled="true"><i class="fa fa-check"></i></button>
										<button class="btn btn-warning btn-block dissabled" disabled="true"><i class="fa fa-check"></i></button>
										<button class="btn btn-success btn-block dissabled" disabled="true"><i class="fa fa-check"></i></button>
										

									</td>
                                	</tr>
                					<?php 
                				}
                			
                		}
                	 ?>
                   
                               
                </tbody>
              </table>




            </div>
          </div><!-- /.card-body -->
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>


  <?php 
    /// control: 
  if (isset($_GET["CitaEnEspera"])) 
  {
      $super_agenda->PonerEnEspera($_GET["CitaEnEspera"], $id_clinica);
      ?><script >window.location="./Atención-a-pacientes"</script> <?php 
  }else if (isset($_GET["AtenderPacienteCita"])) 
  {
    $super_agenda->AtenderCita($_GET["AtenderPacienteCita"]);
      ?><script >window.location="./Atención-a-pacientes"</script> <?php 
  }else if (isset($_GET["FinalizarAtencionCita"])) 
  {
    $super_agenda->FinalizarAtencionCita($_GET["FinalizarAtencionCita"], date("Y-m-d"));
      ?><script >window.location="./Atención-a-pacientes"</script> <?php 
  }
 ?>