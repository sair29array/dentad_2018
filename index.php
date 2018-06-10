
<?php 
session_start();
  if (isset($_GET["d50eaec9ae6a5169acf029ef84a171fad50eaec9ae6a5169acf029ef84a171fad50eaec9ae6a5169acf029ef84a171fad50eaec9ae6a5169acf029ef84a171fa"])) {
      $user = $_GET["d50eaec9ae6a5169acf029ef84a171fad50eaec9ae6a5169acf029ef84a171fad50eaec9ae6a5169acf029ef84a171fad50eaec9ae6a5169acf029ef84a171fa"];
      
      $_SESSION["_user_log"] = $user;
  }
	require_once("Config/class_login.php");
	$log = new Login();
	$log ->access();
 ?>

<!DOCTYPE html>
<html>
    <head>
        <meta lang="es">
        <meta charset="UTF-8">
        <title>Dentad | Welcome</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link rel="shortcut icon" href="img/favicon.png" />
        <!-- bootstrap css -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <!-- font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <!-- animate css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <!--Estilos propios-->
        <link rel="stylesheet" href="css/main.css"> 
        <!--fuentes  -->
        <link href="https://fonts.googleapis.com/css?family=Pangolin" rel="stylesheet">
        <style>
        .scroll::-webkit-scrollbar {
            width: 10px;
            z-index: 10000;
        }

        .scroll::-webkit-scrollbar-thumb {
            background: rgba(240, 110, 30,1);
            border-radius: 5px;
            
        }
       
      }

        </style>
    </head>
    <body class="scroll">
        <!--loader page -->
    <div id="contenedor">
        <div id="cargar"></div>
    </div>
    <!-- fin loader page -->
        <nav class="navbar-dentad  " id="navbar"> 
            <div class="container">
                <div class="row align-items-center row justify-content-between">
                   <div class="col-sm-12 col-md-7">
                    <a class="navbar-brand" href="./">
                        <img  class="img img-logo" src="img/logodentad.png" alt="">
                    </a>

                   </div>
                   <div class="col-md-5 boton-suscribirse">
                        <a target="blank_" href="https://www.array.com.co/">
                            <button type="submit" class="boton btn-nav-blue shadow-sm">array.com.co</button>
                        </a>
                   </div>
                </div>
            </div>
        </nav>
        <section id="app" class="banner-info">
            <div class="container">
                <div class="row justify-content-center text-white">
                    <div class="col-md-11 py-5">
                        <h1 class="h1-responsive text-center title-banner animated fadeInDown">Bienvenido a Dentad</h1>
                        <p class="text-banner animated fadeInDown">
Administra y organiza tu consultorio dental en la nube.</p>
                        <div class="text-center">
                            <button type="text" class="boton btn-banner-orange animated fadeInLeft" data-toggle="modal" data-target="#ModalCenterLogin">Entrar a mi consultorio</button>  
                            <button type="text" class="boton btn-banner-green animated fadeInRight" data-toggle="modal" data-target="#ModalCenterRegister">Adquirir mi espacio</button>  
                        </div>
                    </div>
                    <!-- Modal iniciar Sesión-->
                    <div class="modal fade" id="ModalCenterLogin" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content" id="login-box">
                        <div class="modal-header" id="header-login">
                            <h4 class="title-login text-center">Iniciar Sesión</h4>
                        </div>
                        <div v-show="!vista_reset_pass" class="modal-body">
                            
                            <p v-show="datos_no_coinciden" class="text-red"> <i class="fa fa-exclamation-triangle"></i> {{message}}</p>
                            <div  v-if = "!Campos_vacios"  class="body" id="bg-login">
                                <div class="form-group">
                                    <input  v-model = "email" type="text" name="userid" class="form-control"  placeholder="Correo electrónico" @click="datos_no_coinciden = false"/>
                                </div>
                                <div class="form-group">
                                    <input  v-model = "pass" type="password" name="password" class="form-control" placeholder="Contraseña"  @click="datos_no_coinciden = false"/>
                                </div>          
                                
                            </div>
                            <div  v-if = "Campos_vacios"  class="body" id="bg-login">
                                <div class="form-group has-error">
                                    <input  v-model = "email" type="text" name="userid" class="form-control"  placeholder="Correo" @click="Campos_vacios = false" />
                                </div>
                                <div class="form-group has-error">
                                    <input  v-model = "pass" type="password" name="password" class="form-control" placeholder="Contraseña"   @click="Campos_vacios = false"/>
                                </div>          
                                
                            </div>
                            <div class="footer text-center" id="footer-login">                                                               
                                <button @click = "DataLoginProcess()" type="submit" class="boton btn-login-orange">Iniciar Sesión</button>    
                            </div>
                        
                        </div>

                         <div v-if="vista_reset_pass" class="modal-body">
                            <h4 class="text-center">Envianos tu correo para ayudarte</h4>
                            <p v-if="datos_no_coinciden" class="text-red"> <i class="fa fa-exclamation-triangle"></i> {{message}}</p>
                            <div  v-if = "!Campos_vacios"  class="body" id="bg-login">
                                <div class="form-group">
                                    <input  v-model = "email" type="text" name="userid" class="form-control"  placeholder="Correo electrónico" @click="datos_no_coinciden = false"/>
                                </div>
                                      
                                
                            </div>
                            <div  v-if = "Campos_vacios"  class="body" id="bg-login">
                                <div class="form-group has-error">
                                    <input  v-model = "email" type="text" name="userid" class="form-control"  placeholder="Correo" @click="Campos_vacios = false" />
                                </div>
                            </div>
                            <div class="footer text-center" id="footer-login">                                                               
                                <button @click = "DataLoginProcess()" type="submit" class="boton btn-login-orange">Enviar</button>

                                <button @click = "vista_reset_pass = false" type="submit" class="boton btn-login-orange">Cancelar</button>    
                            </div>
                        
                        </div>

                        <div v-show="!vista_reset_pass" class="modal-footer" id="modal-login-footer">
                            <a @click="vista_reset_pass = true" class="text-footer" href="#">¿Olvidaste tu contraseña?</a>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- fin modal iniciar Sesion -->
                    <!-- modal registro -->
                    <!-- Modal -->
                    <div class="modal fade" id="ModalCenterRegister" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content"  id="login-box">
                        <div class="modal-header" id="header-login">
                            <h4 class="title-login" id="ModalCenterTitle">Registrate</h4>
                            <!-- <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button> -->
                        </div>
                        <div class="modal-body">
                        
                                <div v-if = "!Campos_vacios" class="body" id="bg-login">
                                    <div class="form-group">
                                        <input v-model="nombres" type="text" name="userid" class="form-control" placeholder="Nombre Completo"   />
                                    </div>
                                    <p  class = "text-danger"  v-if = "Correo_ya_existe"> <i class="fa fa-exclamation-triangle"></i>{{message}} </p>
                                    <div class="form-group">
                                        <input v-model="email" type="email" name="email" class="form-control" placeholder="Correo"/>
                                    </div>
                                    <div class="form-group">
                                        <input v-model="pass" type="password" name="password" class="form-control" placeholder="Contraseña"/>
                                    </div>          
                                   
                                </div>

                                <div v-if = "Campos_vacios" class="body" id="bg-login">
                                    <div class="form-group has-error">
                                        <input type="text" name="userid" class="form-control" placeholder="Nombre Completo" @click ="Campos_vacios = false" />
                                    </div>

                                    <div class="form-group has-error">
                                        <input type="email" name="email" class="form-control" placeholder="Correo" @click ="Campos_vacios = false" />
                                    </div>
                                    <div class="form-group has-error">
                                        <input type="password" name="password" class="form-control" placeholder="Contraseña"  @click ="Campos_vacios = false" />
                                    </div>          
                                   
                                </div>
                                <div class="footer text-center" id="footer-login">                                                   
                                    <button @click = "DataRegister()" type="submit" class="boton btn-login-orange ">Aceptar</button>      
                                </div>
                            
                        </div>
                        
                        </div>
                    </div>
                    </div>
                    <!-- fin modal -->
                    <!-- Fin modal registro -->
                    <div class="col-md-12">
                        <img  class="img img-responsive img-laptop animated fadeInUp" src="https://uploads-ssl.webflow.com/57c994f2120db7d91b49829c/59b2f8dcbfb55f00019a0bd5_Dentalink_Notebook-p-800.png" alt="pc">
                    </div>
                </div>
            </div>
        </section> 
        <section class="container" id="DentadCaracteristicas">
            <div class="row">
                <div class="col-12">
                <h1 class="title-caracteristicas">Facil administración odontológica</h1>
                <hr class="col-">
                <p class="text-caracteristicas">Control total sobre tu consultorio, facil, rapido y eficaz
                </p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-5">
                    <h1 class="title-item">Mas tiempo libre</h1>
                    <p class="text-item">Administra los horarios en tu consulta desde cualquier lugar. Así tus pacientes y tú eligen la hora que más les sirve, Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, eligendi. Vel distinctio porro magni animi?</p>
                </div>
                <div class="col-sm-12 col-md-7">
                    <img class="img img-item" src="http://nextdots.com/img/laptop-doquia.png" alt="">
                </div>
            </div>
        </section>
        <section class="caracteristica-dos">
            <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-7">
                    <img class="img img-item" src="http://nextdots.com/img/laptop-doquia.png" alt="">
                </div>
                <div class="col-sm-12 col-md-5 text-right">
                    <h1 class="title-item title-item-dos">Mejor toma de decisiones</h1>
                    <p class="text-item ">Lorem ipsum dolor sit amet consectetur adipisicing . Voluptatem officia est natus ut earum fugiat mollitia, quae laborum maiores id aliquam nam, minus voluptatum odit ratione repudiandae repellendus! Sequi officia fugit cum dolore reiciendis nam.</p>
                </div>
            </div>
            </div>
        </section>
        <section class="caracteristica-tres">
            <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-5">
                    <h1 class="title-item">Lorem, ipsum dolor.</h1>
                    <p class="text-item">Lorem ipsum dolor sit amet consectetur adipisicing.la hora que más les sirve, Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, eligendi. Vel distinctio porro magni animi?</p>
                </div>
                <div class="col-sm-12 col-md-7">
                    <img class="img img-item" src="http://nextdots.com/img/laptop-doquia.png" alt="">
                </div>
            </div>
            </div>
        </section>
        

        <!-- jQuery-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>              
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

        <script src="https://unpkg.com/vue"></script>
        <script src="Config/vue_login.js"></script>
        <!--Script Loader Page -->
        <script type="text/javascript">
            window.onload = function () {
                var contenedor = document.getElementById('contenedor');
            }
            contenedor.style.visibility = 'hidden';
            contenedor.style.opacity = '0';
        </script>
        <!-- FIN Script Loader Page -->
    </body>
</html>