<?php 
$clinica_ = $super_clinica -> GetInfoClinicaUserId($iuser["id"]);
  $isset_Clinica = 0; // indica si ya el user tiene una clinica a su nombre
  foreach ($clinica_ as $clinica) {
    $isset_Clinica ++;
  }
 ?>
<aside  class="main-sidebar sidebar-dark-info elevation-4">
    <!-- Brand Logo -->
    <a href="./" class="brand-link">
      <img src="dist/img/logodentad.png" alt="Dentad logo" class="brand-image  ">
      <h3 class=" font-weight-light profile-username "><b>
        <?php if ($isset_Clinica == 0) {
         echo "Dentad";
        }else{
          echo $clinica["nombre"];
        } ?>
      </b></h3>
    </a>

    <!-- Sidebar -->
    <div  class="sidebar">
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

         

          <?php 
            if ($deAlta == 0) 
            {


              ?>
              <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link ">
              <i class="nav-icon fa fa-cogs"></i>
              <p>
                Configuración
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <?php 
                if ($cuenta_activa == 0) 
                {
                  ?><li class="nav-item">
                    <a href="./Activar-cuenta" class="nav-link <?php if((@$_GET["v-config"]=='Activar-cuenta' || !isset($_GET["v-config"])) && !isset($_GET["view"]) ){?> active <?php } ?>" >
                      <i class="fa fa-circle-o nav-icon"></i>
                      <p>Activa tu cuenta</p>
                    </a>
                  </li> <?php 
                }
               ?>
              <li class="nav-item">
                <a href="./Mi-Clínica" class="nav-link <?php if($_GET["v-config"]=='Mi-Clínica'){?> active <?php } ?>">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Mi clínica</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./LicenciaDentad" class="nav-link <?php if($_GET["v-config"]=='LicenciaDentad'){?> active <?php } ?>">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Licencia de Software</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./Colaboradores" class="nav-link <?php if($_GET["view"]=='Colaboradores'){?> active <?php } ?>">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Asistentes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./Tratamientos" class="nav-link <?php if($_GET["view"]=='Tratamientos'){?> active <?php } ?>">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Tratamientos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./Diagnósticos" class="nav-link <?php if($_GET["view"]=='Diagnósticos'){?> active <?php } ?>">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Diagnósticos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./Motivos-de-consulta" class="nav-link <?php if($_GET["view"]=='Motivos-de-consulta'){?> active <?php } ?>">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Motivos de consulta</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item">
            <a href="./Agenda" class="nav-link <?php if(@$_GET["view"]=="Agenda" || @$_GET["view"]=="AgendarCita"){?> active <?php  } ?> ">
              <i class="nav-icon fa fa-calendar-alt"></i>
              <p>
                Agenda
                <!--span class="right badge badge-danger">Nuevo</span-->
              </p>
            </a>
          </li>
              <?php 
            }


            if ($deAlta!= 0) {
                          ?>
                           <li class="nav-item">
            <a href="./Agenda" class="nav-link <?php if((!isset($_GET["v-config"]) && !isset($_GET["view"])) || @$_GET["view"]=="Agenda" || @$_GET["view"]=="AgendarCita"){?> active <?php  } ?> ">
              <i class="nav-icon fa fa-calendar-alt"></i>
              <p>
                Agenda
                <!--span class="right badge badge-danger">Nuevo</span-->
              </p>
            </a>
          </li>
                          <?php 
                        }            
           ?>
         
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>
                Pacientes
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./Todos-mis-pacientes" class="nav-link <?php if(@$_GET["view"]=="Todos-mis-pacientes" || @$_GET["view"]=="paciente"){?> active <?php  } ?>">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Observación</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./Odontograma" class="nav-link <?php if(@$_GET["view"]=="Odontograma"){?> active <?php  } ?>">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Odontograma</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./Atención-a-pacientes" class="nav-link <?php if(@$_GET["view"]=="Atención-a-pacientes"){?> active <?php  } ?>">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Atención</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item has-treeview <?php if(@$_GET["reportes"]== "ingactivos" || @$_GET["reportes"]== "ingpasivos" || @$_GET["reportes"]== "egresos" || @$_GET["reportes"]=="repgeneral"){?>menu-open<?php } ?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-clipboard-list"></i>
              <p>
                Reportes
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Ingresos activos </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Ingresos pasivos </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/advanced.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Egresos </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/editors.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Reporte general</p>
                </a>
              </li>
            </ul>
          </li>
        
        <?php 
          if ($deAlta == 0) {
            ?>
               <li class="nav-item">
                <a href="./Colaboradores" class="nav-link <?php if(@$_GET["view"]=="Colaboradores"){?> active <?php } ?>">
                  <i class="nav-icon fa fa-users-cog"></i>
                  <p>
                    Asistentes
                    
                  </p>
                </a>
              </li>
            <?php 
            # code...
          }


          if ($deAlta != 0) {
             ?>
              <li class="nav-item has-treeview menu-open <?php if(isset($_GET["v-config"])){?> menu-open <?php  } ?>">
            <a href="#" class="nav-link ">
              <i class="nav-icon fa fa-cogs"></i>
              <p>
                Configuración
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             
              <li class="nav-item">
                <a href="./Mi-Clínica" class="nav-link <?php if($_GET["v-config"]=='Mi-Clínica'){?> active <?php } ?>">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Mi clínica</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./Colaboradores" class="nav-link <?php if($_GET["view"]=='Colaboradores'){?> active <?php } ?>">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Asistentes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./Tratamientos" class="nav-link <?php if($_GET["view"]=='Tratamientos'){?> active <?php } ?>">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Tratamientos</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="./Diagnósticos" class="nav-link <?php if($_GET["view"]=='Diagnósticos'){?> active <?php } ?>">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Diagnósticos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./Motivos-de-consulta" class="nav-link <?php if($_GET["view"]=='Motivos-de-consulta'){?> active <?php } ?>">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Motivos de consulta</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./LicenciaDentad" class="nav-link <?php if($_GET["v-config"]=='LicenciaDentad'){?> active <?php } ?>">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Licencia de Software</p>
                </a>
              </li>
            </ul>
          </li>
              <?php 
          }
         ?>
          <li class="nav-item">
            <a href="./Agenda" class="nav-link <?php if(@$_GET["view"]=="Papelera"){?> active <?php  } ?> ">
              <i class="nav-icon fa fa-trash-alt"></i>
              <p>
               Papelera
                <!--span class="right badge badge-danger">Nuevo</span-->
              </p>
            </a>
          </li>
        </ul>
         
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>