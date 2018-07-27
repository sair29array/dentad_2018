<?php
session_start();
  if (isset($_GET["d50eaec9ae6a5169acf029ef84a171fad50eaec9ae6a5169acf029ef84a171fad50eaec9ae6a5169acf029ef84a171fad50eaec9ae6a5169acf029ef84a171fa"])) {
      $user = $_GET["d50eaec9ae6a5169acf029ef84a171fad50eaec9ae6a5169acf029ef84a171fad50eaec9ae6a5169acf029ef84a171fad50eaec9ae6a5169acf029ef84a171fa"];
      
      $_SESSION["_user_log"] = $user;
  }
    require_once("Config/class/class_login.php");
    $log = new Login();
    $log ->access();


    /// --- CARBON PHP/// 

    require_once("in/Config/vendor/autoload.php");
    use Carbon\Carbon;
    date_default_timezone_set("America/Bogota");
    Carbon::setLocale("es");

    $fechaActual = new Carbon(date("d-m-Y"));
    // si una persona se registra, aqui se calcula la fecha en que expira
    $f = $fechaActual ->addDay(7);
   $fechaExpire =  substr($f, 0, 10 );

 ?>
<script>
    var fechaExpire = "<?php echo $fechaExpire ?>";
</script>
<!doctype html>
<html class="no-js" lang="es">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Array | Expertos en TIC & AdminLTE.io">
    <meta name="description" content="Dentad es un software online para consultorios odontológicos. |
Administra y organiza tu clínica dental en la nube. | Sistema online para odontologos ">
    <meta name="keywords" content="Plataforma para odontologos,administrar consultorio odontologico,administrar clinica odontologica,sistema para odontologos">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Dentad | Home</title>
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="shortcut icon" type="image/ico" href="images/favicon.ico" />
    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/animate.css">
    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/style_transitions.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>

    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body data-spy="scroll" data-target="#primary-menu">

    <div class="preloader">
        <div class="sk-folding-cube">
            <div class="sk-cube1 sk-cube"></div>
            <div class="sk-cube2 sk-cube"></div>
            <div class="sk-cube4 sk-cube"></div>
            <div class="sk-cube3 sk-cube"></div>
        </div>
    </div>
    <!--Mainmenu-area-->
    <div class="mainmenu-area" data-spy="affix" data-offset-top="100">
        <div class="container">
            <!--Logo-->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="./" class="navbar-brand logo">
                    <h3><img width="40" class="img" src="images/logodentad.png"> Dentad</h3>
                </a>
            </div>
            <!--Logo/-->
            <nav class="collapse navbar-collapse" id="primary-menu">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#home-page">Home</a></li>
                    <li><a href="#service-page">Características</a></li>
                    <li><a href="#feature-page">¿Por qué Dentad?</a></li>
                    <li><a href="#price-page">Blog</a></li>
                    <!--li><a href="#faq-page">FAQ</a></li-->
                </ul>
            </nav>
        </div>
    </div>
    <!--Mainmenu-area/-->




    <!--Header-area-->
    <header  class="header-area overlay full-height relative v-center" id="home-page">

        <div class="absolute anlge-bg"></div>
        <div class="container">
            <div class="row v-center">

                <div id="login"  class="col-xs-12 col-md-7 header-text">
                    
                         

                         <div v-if="!form_login">
                             <div v-if="!form_register">
                                <h3>Dentad es un software online para clínicas odontológicas. </h3>
                                 <h2>Administra y organiza tu clínica dental en la nube.</h2>
                                
                                <a @click="changeView(1)" href="#" class="button white">Abrir clínica</a> 

                                <a  href="https://api.whatsapp.com/send?phone=573218070767" class="button white">(+57) 321 807 0787</a>
                             </div>
                         </div>

                        
                            <div v-if="form_login">
                                <div class="col-xs-12 col-sm-12">
                                    <div class="price-table active">
                                        <span class="price-info"><span class="ti-user"></span></span>
                                        <h3 class="text-uppercase price-title">Ingresa a tu clínica</h3>
                                        <hr>
                                        <p v-if="message" class="text-danger">{{message}}</p>
                                        <ul class="list-unstyled">
                                            <div class="form-group">
                                                <input v-if="!email_null" v-model= "email" @click="message =false"   v-on:keyup.enter="Login()" placeholder="Correo electrónico" class="col-md-810 form-control" type="email" name="">

                                                <input style="border-color: #f17a7a;" v-if="email_null" @click="email_null=false"  v-model= "email"   v-on:keyup.enter="Login()" placeholder="Escribe tu orreo electrónico" class="border border-danger col-md-810 form-control" type="email" name="">

                                                <input v-if="!pass_null" v-model="pass" @click="message =false" v-on:keyup.enter="Login()" placeholder="Contraseña" class="col-md-810 form-control" type="password" name="">

                                                <input style="border-color: #f17a7a;" v-if="pass_null"  @click="pass_null=false" v-model="pass"  v-on:keyup.enter="Login()" placeholder="Escribe tu contraseña" class="border border-danger col-md-810 form-control" type="password" name="">
                                            </div>
                                         
                                        </ul>
                                        <hr>
                                       <div v-if="!loading">
                                        <div v-if="!message_exito_login">
                                            <a  @click="Login()" href="#" class="button">Iniciar sesión</a>
                                        </div>
                                       </div>
                                        <div v-if="loading" >
                                             <a @click="Login()" href="#" class="button">Cargando...</a>
                                        </div>
                                        <div v-if="message_exito_login" >
                                             <a @click="Login()" href="#" class="button">Cargando...</a>
                                        </div>
                                        <br><br>

                                        

                                        <a style="color: #55A2BE;" href="#" @click="changeView(2)" class="text-info">¿No tienes una cuenta?</a> / 
                                        <a style="color: #55A2BE;" href="#" class="text-info">¿Olvidaste tu contraseña?</a>
                                    </div>
                                </div>
                            </div>
                        

                        
                            <div v-if="form_register">
                                <div class="col-xs-12 col-sm-12">
                                    <div class="price-table active">
                                        <span class="price-info"><span class="ti-user"></span></span>
                                        <h3 class="text-uppercase price-title">Crear una cuenta en Dentad</h3>
                                        <hr>
                                        <ul class="list-unstyled">
                                            <p v-if="message_r" class="text-danger">{{message_r}}</p>
                                            <div class="form-group">
                                                 <input v-if= "!name_register_null" v-model="name_register" v-on:keyup.enter="register()" placeholder="Nombre completo" class="col-md-810 form-control" type="text" name="">
                                                  <input v-if= "name_register_null" v-model="name_register" placeholder="Nombre completo" class="col-md-810 form-control" type="text" name="" style="border-color: #f17a7a" @click="name_register_null = false">

                                                <input v-if="!email_register_null" v-on:keyup.enter="register()" v-model="email_register" placeholder="Correo electrónico" class="col-md-810 form-control" type="email" name="">
                                                <input v-if="email_register_null" v-on:keyup.enter="register()" v-model="email_register" placeholder="Correo electrónico" class="col-md-810 form-control" type="email" name="" style="border-color: #f17a7a" @click="email_register_null = false" >

                                                <input v-if="!pass_register_null" v-on:keyup.enter="register()"  v-model="pass_register" placeholder="Contraseña" class="col-md-810 form-control" type="password" name="">
                                                <input v-if="pass_register_null" v-on:keyup.enter="register()"  v-model="pass_register" placeholder="Contraseña" class="col-md-810 form-control" type="password" name="" style="border-color: #f17a7a" @click="pass_register_null = false">
                                            </div>
                                         
                                        </ul>
                                        <hr>
                                        <a v-if="!message_exito_register" href="#" @click="register()" class="button">Crear cuenta</a>
                                        <a v-if="message_exito_register" href="#" @click="register()" class="button">Cargando..</a>
                                        <a href="#" @click="changeView(1)" class="button white">Iniciar sesión</a>
                                    </div>
                                </div>
                            </div>
                        
                   
                </div>

                <div class="hidden-xs hidden-sm col-md-5 text-right">
                    <div class="screen-box screen-slider">
                        <div class="item">
                            <img src="images/screenshots/recorte1.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="images/screenshots/recorte2.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="images/screenshots/recorte6.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="images/screenshots/recorte4.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="images/screenshots/recorte7.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--Header-area/-->











    <!--Feature-area-->
    <section class="gray-bg section-padding" id="service-page">
        <div class="container">
            <div class="row">
               
                <div class="col-xs-12 col-sm-4">
                    <div class="box">
                        <div class="box-icon">
                            <img src="images/service-icon-2.png" alt="">
                        </div>
                        <h4>GESTIÓN ADMINISTRATIVA</h4>
                        <p>Podrás realizar la gestión administrativa total de tu clínica odontológica. (Pacientes, asistentes, contabilidad)</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="box">
                        <div class="box-icon">
                            <img src="images/service-icon-3.png" alt="">
                        </div>
                        <h4>CONTROL FINANCIERO</h4>
                        <p>Tener el control financiero de tu clínica es indispensable, Dentad incluye un paquete contable completo.</p>
                    </div>
                </div>
                 <div class="col-xs-12 col-sm-4">
                    <div class="box">
                        <div class="box-icon">
                            <img src="images/service-icon-1.png" alt="">
                        </div>
                        <h4>FÁCIL DE USAR</h4>
                        <p>Dentad está diseñado para ser intuitivo y fácil de usar, gracias a la colaboración de odontógologos expertos.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Feature-area/-->







    <section class="angle-bg sky-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div id="caption_slide" class="carousel slide caption-slider" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="item active row">
                                <div class="v-center">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="caption-title" data-animation="animated fadeInUp">
                                            <h2>Odontograma</h2>
                                        </div>
                                        <div class="caption-desc" data-animation="animated fadeInUp">
                                            <h4>Identifica los trabajos realizados en la boca de tus pacientes y realiza comparaciones, registros de tratamientos y diagnósticos en los dientes.</h4>
                                        </div>
                                       
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <div class="one" data-animation="animated fadeInRight">
                                            <img  src="images/screenshots/pc.png" alt="">
                                        </div>
                                    </div>
                                     
                                  
                                </div>
                            </div>
                            <div class="item row">
                                <div class="v-center">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="caption-title" data-animation="animated fadeInUp">
                                            <h2>Pacientes</h2>
                                        </div>
                                        <div class="caption-desc" data-animation="animated fadeInUp">
                                            <h4>Dentad sabe que tus pacientes son lo más importante, por eso ofrece herramientas que permiten llevar el control en todos sus procesos.</h4>
                                        </div>
                                       
                                    </div>
                                    <div class="col-xs-6 col-md-6">
                                        <div class="one" data-animation="animated fadeInRight">
                                            <img src="images/screenshots/pacientes.png" alt="">
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="item row">
                                <div class="v-center">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="caption-title" data-animation="animated fadeInUp">
                                            <h2>Agenda</h2>
                                        </div>
                                        <div class="caption-desc" data-animation="animated fadeInUp">
                                            <h4>Podrás agendar las citas a tus pacientes y tener el control de llegada a las citas todos los días.</h4>
                                        </div>
                                       
                                    </div>
                                    <div class="col-xs-6 col-md-6">
                                        <div class="one" data-animation="animated fadeInRight">
                                            <img src="images/screenshots/agenda_pc.png" alt="">
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>

                             <div class="item row">
                                <div class="v-center">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="caption-title" data-animation="animated fadeInUp">
                                            <h2>Asistentes</h2>
                                        </div>
                                        <div class="caption-desc" data-animation="animated fadeInUp">
                                            <h4>Divide el trabajo de tu clínica, asigna roles y permisos a otras personas que trabajen contigo. <br>De esta manera será más productivo tu día a día.</h4>
                                        </div>
                                        
                                    </div>
                                    <div class="col-xs-6 col-md-6">
                                        <div class="one" data-animation="animated fadeInRight">
                                            <img src="images/screenshots/asistentes.png" alt="">
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>

                            <div class="item row">
                                <div class="v-center">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="caption-title" data-animation="animated fadeInUp">
                                            <h2>Diseño responsive</h2>
                                        </div>
                                        <div class="caption-desc" data-animation="animated fadeInUp">
                                            <h4>Podrás llevar tu clínica a todas partes, ya que Dentad se adapta a cualquier dispositivo, dándote así, la libertad de trabajar donde quieras. <br> Tendrás el control de tus pacientes, la contabilidad de tu clínica, tus asistentes etc, en tu bolsillo.</h4>
                                        </div>
                                        
                                    </div>
                                    <div class="col-xs-6 col-md-6">
                                        <div class="one" data-animation="animated fadeInRight">
                                            <img src="images/screenshots/rd.png" alt="">
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="item row">
                                <div class="v-center">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="caption-title" data-animation="animated fadeInUp">
                                            <h2>Seguridad</h2>
                                        </div>
                                        <div class="caption-desc" data-animation="animated fadeInUp">
                                            <h4>Tus datos son encriptados y copiados en servidores en diferentes partes del mundo. Copias de seguridad cada hora.</h4>
                                        </div>
                                       
                                    </div>
                                    <div class="col-xs-6 col-md-6">
                                        <div class="one" data-animation="animated fadeInRight">
                                            <img src="images/screenshots/cloud.png" alt="">
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            
                        </div>
                        <!-- Indicators -->
                        <ol class="carousel-indicators caption-indector">
                            <li data-target="#caption_slide" data-slide-to="0" class="active">
                                <strong>Odontograma</strong>
                            </li>
                            <li data-target="#caption_slide" data-slide-to="1">
                                <strong>Pacientes</strong>
                            </li>
                            <li data-target="#caption_slide" data-slide-to="2">
                                <strong>Agenda</strong>
                            </li>
                            <li data-target="#caption_slide" data-slide-to="3">
                                <strong>Asistentes</strong>
                            </li>
                            <li data-target="#caption_slide" data-slide-to="4">
                                <strong>Diseño responsive</strong>
                            </li>
                            <li data-target="#caption_slide" data-slide-to="5">
                                <strong>Seguridad</strong>
                            </li>
                            
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="gray-bg section-padding" id="feature-page">
        <div class="container">
        
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="box">
                        <div class="box-icon">
                            <img src="images/portfolio-icon-1.png" alt="">
                        </div>
                        <h3>Economía</h3>
                        <p>Solo pagas $30.000 COP/Mes Más el pago único de la licencia de software.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="box">
                        <div class="box-icon">
                            <img src="images/portfolio-icon-2.png" alt="">
                        </div>
                        <h3>Reportes</h3>
                        <p>Con dentad podrás crear reportes de la contabilidad de tu clínica dental.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="box">
                        <div class="box-icon">
                            <img src="images/portfolio-icon-3.png" alt="">
                        </div>
                        <h3>SMS</h3>
                        <p>Tus pacientes recibirán un recordatorio en su celular un día antes de su cita.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="box">
                        <div class="box-icon">
                            <img src="images/portfolio-icon-4.png" alt="">
                        </div>
                        <h3>Software Online</h3>
                        <p>Dentad funciona en la web, lo que hace posible, que puedas trabajar donde desees de manera segura.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="box">
                        <div class="box-icon">
                            <img src="images/portfolio-icon-5.png" alt="">
                        </div>
                        <h3>Soporte</h3>
                        <p>Soporte ilimitado, sin cobros extras. Con Dentad, siempre vas a tener alguien dispuesto a capacitar o resolver dudas cuando se necesite. </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="box">
                        <div class="box-icon">
                            <img src="images/portfolio-icon-6.png" alt="">
                        </div>
                        <h3>Actualizaciones</h3>
                        <p>Mejoramos constantemente, agregando nuevas secciones, y funcionalidades, sin cobrar nada extra por ellas.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="price-area overlay section-padding" id="price-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                    <!--div class="page-title">
                        <h2>Afortable Price</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit voluptates, temporibus at, facere harum fugiat!</p>
                    </div-->
                </div>
            </div>
            <div class="row">
                <!--div class="col-xs-12 col-sm-4">
                    <div class="price-table">
                        <h3 class="text-uppercase price-title">Basic</h3>
                        <hr>
                        <ul class="list-unstyled">
                            <li><strong class="amount">$ <span class="big">20</span></strong>/Month</li>
                            <li>100 MB Disk Space</li>
                            <li>2 Subdomains</li>
                            <li>5 Email Accounts</li>
                            <li>Webmail Support</li>
                            <li>Customer Support 24/7</li>
                        </ul>
                        <hr>
                        <a href="#" class="button">Purchase</a>
                    </div>
                </div-->
               
                <div class="col-xs-8 col-sm-12 embed-responsive embed-responsive-16by9">
                    
                        <iframe  class="embed-responsive-item" src="https://www.youtube.com/embed/qY-H05AGKvo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    
                </div>
                <!--div class="col-xs-12 col-sm-4">
                    <div class="price-table">
                        <h3 class="text-uppercase price-title">UNLIMITED</h3>
                        <hr>
                        <ul class="list-unstyled">
                            <li><strong class="amount">$ <span class="big">59</span></strong>/Month</li>
                            <li>100 MB Disk Space</li>
                            <li>2 Subdomains</li>
                            <li>5 Email Accounts</li>
                            <li>Webmail Support</li>
                            <li>Customer Support 24/7</li>
                        </ul>
                        <hr>
                        <a href="#" class="button">Purchase</a>
                    </div>
                </div-->
            </div>
        </div>
    </section>



    <!--section class="section-padding gray-bg" id="team-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                    <div class="page-title">
                        <h2>Special team</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit voluptates, temporibus at, facere harum fugiat!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="single-team">
                        <div class="team-photo">
                            <img src="images/team-section-1.png" alt="">
                        </div>
                        <h4>JEMY SEDONCE</h4>
                        <h6>Co. Founder</h6>
                        <ul class="social-menu">
                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                            <li><a href="#"><i class="ti-twitter"></i></a></li>
                            <li><a href="#"><i class="ti-linkedin"></i></a></li>
                            <li><a href="#"><i class="ti-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="single-team">
                        <div class="team-photo">
                            <img src="images/team-section-2.png" alt="">
                        </div>
                        <h4>DEBORAH BROWN</h4>
                        <h6>UX Designer</h6>
                        <ul class="social-menu">
                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                            <li><a href="#"><i class="ti-twitter"></i></a></li>
                            <li><a href="#"><i class="ti-linkedin"></i></a></li>
                            <li><a href="#"><i class="ti-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="single-team">
                        <div class="team-photo">
                            <img src="images/team-section-3.png" alt="">
                        </div>
                        <h4>HARRY BANKS</h4>
                        <h6>Founder</h6>
                        <ul class="social-menu">
                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                            <li><a href="#"><i class="ti-twitter"></i></a></li>
                            <li><a href="#"><i class="ti-linkedin"></i></a></li>
                            <li><a href="#"><i class="ti-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="single-team">
                        <div class="team-photo">
                            <img src="images/team-section-4.png" alt="">
                        </div>
                        <h4>VICTORIA CLARK</h4>
                        <h6>Creative Director</h6>
                        <ul class="social-menu">
                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                            <li><a href="#"><i class="ti-twitter"></i></a></li>
                            <li><a href="#"><i class="ti-linkedin"></i></a></li>
                            <li><a href="#"><i class="ti-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section-->




    <!--section class="testimonial-area section-padding gray-bg overlay">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                    <div class="page-title">
                        <h2>Client says</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit voluptates, temporibus at, facere harum fugiat!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                    <div class="testimonials">
                        <div class="testimonial">
                            <div class="testimonial-photo">
                                <img src="images/avatar-small-1.png" alt="">
                            </div>
                            <h3>AR Rahman</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel vero dolore officiis, velit id libero illum harum hic magni, quae repellendus adipisci possimus saepe nostrum doloribus repudiandae asperiores commodi voluptate.</p>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial-photo">
                                <img src="images/avatar-small-2.png" alt="">
                            </div>
                            <h3>AR Rahman</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel vero dolore officiis, velit id libero illum harum hic magni, quae repellendus adipisci possimus saepe nostrum doloribus repudiandae asperiores commodi voluptate.</p>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial-photo">
                                <img src="images/avatar-small-3.png" alt="">
                            </div>
                            <h3>AR Rahman</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel vero dolore officiis, velit id libero illum harum hic magni, quae repellendus adipisci possimus saepe nostrum doloribus repudiandae asperiores commodi voluptate.</p>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial-photo">
                                <img src="images/avatar-small-4.png" alt="">
                            </div>
                            <h3>AR Rahman</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel vero dolore officiis, velit id libero illum harum hic magni, quae repellendus adipisci possimus saepe nostrum doloribus repudiandae asperiores commodi voluptate.</p>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial-photo">
                                <img src="images/avatar-small-5.png" alt="">
                            </div>
                            <h3>AR Rahman</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel vero dolore officiis, velit id libero illum harum hic magni, quae repellendus adipisci possimus saepe nostrum doloribus repudiandae asperiores commodi voluptate.</p>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial-photo">
                                <img src="images/avatar-small-6.png" alt="">
                            </div>
                            <h3>AR Rahman</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel vero dolore officiis, velit id libero illum harum hic magni, quae repellendus adipisci possimus saepe nostrum doloribus repudiandae asperiores commodi voluptate.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section-->






    <!--section class="gray-bg section-padding" id="faq-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                    <div class="page-title">
                        <h2>Frequently Asked Questions</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit voluptates, temporibus at, facere harum fugiat!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                    <div class="panel-group" id="accordion">
                        <div class="panel">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true">Sedeiusmod tempor inccsetetur aliquatraiy?</a>
                            </h4>
                            <div id="collapse1" class="panel-collapse collapse in">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodas temporo incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrd exercitation ullamco laboris nisi ut aliquip ex comodo consequat. Duis aute dolor in reprehenderit.</p>
                            </div>
                        </div>
                        <div class="panel">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Tempor inccsetetur aliquatraiy?</a>
                            </h4>
                            <div id="collapse2" class="panel-collapse collapse">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodas temporo incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrd exercitation ullamco laboris nisi ut aliquip ex comodo consequat. Duis aute dolor in reprehenderit.</p>
                            </div>
                        </div>
                        <div class="panel">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Lorem ipsum dolor amet, consectetur adipisicing ?</a>
                            </h4>
                            <div id="collapse3" class="panel-collapse collapse">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodas temporo incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrd exercitation ullamco laboris nisi ut aliquip ex comodo consequat. Duis aute dolor in reprehenderit.</p>
                            </div>
                        </div>
                        <div class="panel">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Lorem ipsum dolor amet, consectetur adipisicing ?</a>
                            </h4>
                            <div id="collapse4" class="panel-collapse collapse">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodas temporo incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrd exercitation ullamco laboris nisi ut aliquip ex comodo consequat. Duis aute dolor in reprehenderit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section-->








    <!--section class="section-padding overlay client-area overlay" id="client-page">
        <div class="container">
            <div class="row text-center">
                <div class="col-xs-12">
                    <div class="clients">
                        <div class="item">
                            <img src="images/themeforest.gif" alt="">
                        </div>
                        <div class="item">
                            <img src="images/coadcanyon.gif" alt="">
                        </div>
                        <div class="item">
                            <img src="images/graphicriver.gif" alt="">
                        </div>
                        <div class="item">
                            <img src="images/docean.gif" alt="">
                        </div>
                        <div class="item">
                            <img src="images/audiojungle.gif" alt="">
                        </div>
                        <div class="item">
                            <img src="images/actividen.gif" alt="">
                        </div>
                        <div class="item">
                            <img src="images/photodone.gif" alt="">
                        </div>
                        <div class="item">
                            <img src="images/videgub.gif" alt="">
                        </div>
                        <div class="item">
                            <img src="images/themeforest.gif" alt="">
                        </div>
                        <div class="item">
                            <img src="images/coadcanyon.gif" alt="">
                        </div>
                        <div class="item">
                            <img src="images/graphicriver.gif" alt="">
                        </div>
                        <div class="item">
                            <img src="images/docean.gif" alt="">
                        </div>
                        <div class="item">
                            <img src="images/audiojungle.gif" alt="">
                        </div>
                        <div class="item">
                            <img src="images/actividen.gif" alt="">
                        </div>
                        <div class="item">
                            <img src="images/photodone.gif" alt="">
                        </div>
                        <div class="item">
                            <img src="images/videgub.gif" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section-->


    <!--section class="section-padding gray-bg" id="blog-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <div class="single-blog">
                        <div class="blog-photo">
                            <img src="images/small1.jpg" alt="">
                        </div>
                        <div class="blog-content">
                            <h3><a href="#">Beautiful Place for your Great Journey</a></h3>
                            <ul class="blog-meta">
                                <li><span class="ti-user"></span> <a href="#">Admin</a></li>
                                <li><span class="ti-calendar"></span> <a href="#">Feb 01, 2017</a></li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit nemo eaque expedita aliquid dolorem repellat perferendis, facilis aut fugit, impedit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="single-blog">
                        <div class="blog-photo">
                            <img src="images/small2.jpg" alt="">
                        </div>
                        <div class="blog-content">
                            <h3><a href="#">Beautiful Place for your Great Journey</a></h3>
                            <ul class="blog-meta">
                                <li><span class="ti-user"></span> <a href="#">Admin</a></li>
                                <li><span class="ti-calendar"></span> <a href="#">Feb 01, 2017</a></li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit nemo eaque expedita aliquid dolorem repellat perferendis, facilis aut fugit, impedit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="single-blog">
                        <div class="blog-photo">
                            <img src="images/small3.jpg" alt="">
                        </div>
                        <div class="blog-content">
                            <h3><a href="#">Beautiful Place for your Great Journey</a></h3>
                            <ul class="blog-meta">
                                <li><span class="ti-user"></span> <a href="#">Admin</a></li>
                                <li><span class="ti-calendar"></span> <a href="#">Feb 01, 2017</a></li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit nemo eaque expedita aliquid dolorem repellat perferendis, facilis aut fugit, impedit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section-->





    <footer class="footer-area relative sky-bg" id="contact-page">
        <div class="absolute footer-bg"></div>
        <div class="footer-top">
            
        </div>
        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 pull-right">
                       
                    </div>
                    <div class="col-xs-12 col-sm-6">
                       
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <p>&copy;Copyright 2018 All right resurved. <i class="ti-heart" aria-hidden="true"></i> by <a target="blank_" href="https://www.array.com.co">ARRAY | SAIR SÁNCHEZ</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>





    <!--Vendor-JS-->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <!--Plugin-JS-->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/contact-form.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="js/scrollUp.min.js"></script>
    <script src="js/magnific-popup.min.js"></script>
    <script src="js/wow.min.js"></script>
    <!--Main-active-JS-->
    <script src="js/main.js"></script>


    <!-- vue js y axios -->

    <script src="Config/js/vue.js"></script>
    <script src="Config/js/axios.js"></script>

    <script src="Config/js/login.js"></script>


</body>

</html>
