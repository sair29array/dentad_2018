<?php if ($iuser["cuenta_activa"] != 0) {
  ?><script>window.location="./Mi-Clínica";</script><?php 
} ?>
 <!-- Content Wrapper. Contains page content -->
  <div id="activar-cuenta" class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">¡Es momento de activar tu cuenta!</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          
          <!-- /.col-md-6 -->
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h5 class="m-0"><?php echo "Es indispensable comprobar que en verdad eres ".  $iuser["nombre"]; ?></h5>
              </div>
              <div class="card-body">
               <div v-if="!show_form_edit_email">
               		 <h5 v-if="!message"  class="card-title">Te hemos enviado un E-mail</h5>

                	<p  v-if="!message" class="card-text">Visita tu correo {{email_u}}.</p>
               </div>
                
               <transition name= "slide-fade">
                <div v-if="message" class="alert alert-info alert-dismissible">
                 	 <button @click="message = false" type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h4><i class="icon fa fa-info"></i> listo!</h4>
                  {{message}}
                </div>	
               </transition>

               	 <div v-if="!show_form_edit_email">
                	<div  v-if="!message" >
                		<a href="#" @click="solicitud_de_activacion('<?php echo $_SESSION["_user_log"]; ?>')" class="btn btn-primary mt-3 ">Reenviar e-mail de activación</a>


                		<a  href="#" @click="show_form_edit_email = true" class="btn btn-primary mt-3 ">Modificar correo</a>
                	</div>
                </div>

                <transition name="slide-fade">
                	<div v-if="show_form_edit_email">
                		<transition name= "slide-fade">
			                <div v-if="messageUpdateEmAil" class="alert alert-info alert-dismissible">
			                 	 <button @click="show_form_edit_email = false" type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			                  <h4><i class="icon fa fa-info"></i> listo!</h4>
			                  {{messageUpdateEmAil}}
			                </div>	
               			</transition>

                		<div v-if="!messageUpdateEmAil">
                			<h5>Modifica tu correo</h5>

			                <div  class="form-group ">
			                	<p v-if="messageUpdateEmAiler" class="text-danger">{{messageUpdateEmAiler}}</p>

			                	<p v-if="correoExistente" class="text-danger">{{correoExistente}}</p>

			                	<p v-if="CorreoInvalido" class="text-danger">{{CorreoInvalido}}</p>
			                  <div class="input-group">

			                    <div class="input-group-prepend">
			                      <span class="input-group-text"><i class="fa fa-at"></i></span>
			                    </div>

			                    <input v-if="!inputNUll"  v-on:keyup.enter="UpdateEmail()" v-model="email_u" type="email" class="form-control"  @click="quitarMensajesDEerror()">

			                    <input v-if="inputNUll"  v-on:keyup.enter="UpdateEmail()" v-model="email_u" type="email" class="form-control border border-danger"  @click="inputNUll = false">
			                  </div>
			                </div>

				             <a href="#" @click="UpdateEmail()"  class="btn btn-primary mt-3 ">Aceptar</a>


	                		<a  href="#" @click="cancelarEDitEmail()" class="btn btn-danger mt-3 ">Cancelar</a>
                		</div>
                	</div>
                </transition>

               
              </div>
            </div>

          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

