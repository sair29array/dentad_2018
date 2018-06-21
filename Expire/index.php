<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Lockscreen</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../in/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition lockscreen">
<!-- Automatic element centering -->
<div class="lockscreen-wrapper card">
 <div class="card-body">
 	 <div class="lockscreen-logo">
    <a href="#"><b>La demostración gratuita para tu cuenta en Dentad </b> <?php echo $_SESSION["_user_log"]; ?> <br><b> Ha expirado</b></a>
  </div>
 

  
  <div class="lockscreen-footer text-center">
  	<h3>Llámanos: (+57) 321 8070767  Colombia</h3>
    Copyright &copy; 2018 <br> <b><a href="https://www.array.com.co" class="text-black">Dentad - ARRAY | EXPERTOS EN TIC </a></b><br>
    All rights reserved
  </div>

 </div>

</div>
<!-- /.center -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
