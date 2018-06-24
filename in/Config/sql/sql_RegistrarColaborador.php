<?php
//error_reporting(0);

require_once("../class/class_colaboradores.php");
$super_colaboradores = new  colaboradores();
$action = 'read';

if (isset($_POST['action']))
{

	$action = $_POST['action'];
}


if ($action == 'read')
{

    /*
       formData.append('permiso_ver_pacientes', this.permiso_ver_pacientes);
                  formData.append('permiso_registrar_pacientes', this.permiso_registrar_pacientes);
                  formData.append('permiso_actualizar_pacientes', this.permiso_actualizar_pacientes);
                  formData.append('permiso_eliminar_pacientes', this.permiso_eliminar_pacientes);
                  
                  formData.append('permiso_ver_agenda', this.permiso_ver_agenda);
                  formData.append('permiso_registrar_en_agenda', this.permiso_registrar_en_agenda);
                  formData.append('permiso_actualizar_agenda', this.permiso_actualizar_agenda);
                  formData.append('permiso_eliminar_agenda', this.permiso_eliminar_agenda);

                  formData.append('permiso_ver_reportes', this.permiso_ver_reportes);
                  formData.append('permiso_registrar_reportes', this.permiso_registrar_reportes);
                  formData.append('permiso_actualizar_reportes', this.permiso_actualizar_reportes);
                  formData.append('permiso_eliminar_reportes', this.permiso_eliminar_reportes);

                  formData.append('permiso_ver_configuracion_cuenta', this.permiso_ver_configuracion_cuenta);
                  formData.append('permiso_registrar_configuracion_cuenta', this.permiso_registrar_configuracion_cuenta);
                  formData.append('permiso_actualizar_configuracion_cuenta', this.permiso_actualizar_configuracion_cuenta);
                  formData.append('permiso_eliminar_configuracion_cuenta', this.permiso_eliminar_configuracion_cuenta);
                  
    */

   $id_clinica = $_POST["id_clinica"];
   $name_user = $_POST["name_user"];
   $email_user = $_POST["email_user"];
   $pass = $_POST["pass"];

   /// permisos POST ///
   $permiso_ver_pacientes = $_POST["permiso_ver_pacientes"];
   $permiso_registrar_pacientes = $_POST["permiso_registrar_pacientes"];
   $permiso_actualizar_pacientes = $_POST["permiso_actualizar_pacientes"];
   $permiso_eliminar_pacientes = $_POST["permiso_eliminar_pacientes"];

   $permiso_ver_agenda = $_POST["permiso_ver_agenda"];
   $permiso_registrar_en_agenda = $_POST["permiso_registrar_en_agenda"];
   $permiso_actualizar_agenda = $_POST["permiso_actualizar_agenda"];
   $permiso_eliminar_agenda = $_POST["permiso_eliminar_agenda"];

   $permiso_ver_reportes = $_POST["permiso_ver_reportes"];
   $permiso_registrar_reportes = $_POST["permiso_registrar_reportes"];
   $permiso_actualizar_reportes = $_POST["permiso_actualizar_reportes"];
   $permiso_eliminar_reportes = $_POST["permiso_eliminar_reportes"];

   $permiso_ver_configuracion_cuenta = $_POST["permiso_ver_configuracion_cuenta"];
   $permiso_registrar_configuracion_cuenta = $_POST["permiso_registrar_configuracion_cuenta"];
   $permiso_actualizar_configuracion_cuenta = $_POST["permiso_actualizar_configuracion_cuenta"];
   $permiso_eliminar_configuracion_cuenta = $_POST["permiso_eliminar_configuracion_cuenta"];
   ////////////////


  // verificamos que la identidad del user que se esta intentando registrar no exista ya en la DB
  $validate_email = $super_colaboradores -> VerificarSiExisteUnColaborador_email($email_user);
  

  if ($validate_email == 1) // no hay correos iguales
  {
  	 
		  	$super_colaboradores -> RegistrarNuevoColaborador(
          $id_clinica, $name_user, $email_user, $pass,
          $permiso_ver_pacientes,
          $permiso_registrar_pacientes,
          $permiso_actualizar_pacientes,
          $permiso_eliminar_pacientes,
          $permiso_ver_agenda,
          $permiso_registrar_en_agenda,
          $permiso_actualizar_agenda,
          $permiso_eliminar_agenda,
          $permiso_ver_reportes,
          $permiso_registrar_reportes,
          $permiso_actualizar_reportes,
          $permiso_eliminar_reportes,
          $permiso_ver_configuracion_cuenta,
          $permiso_registrar_configuracion_cuenta,
          $permiso_actualizar_configuracion_cuenta,
          $permiso_eliminar_configuracion_cuenta
          );
		  	$res['resul']=1;
  	
  }else{
  	$res["resul"] = 0 ; // email ya existe
  }

     
	 

	
}



header('Content-Type: application/json');
echo json_encode($res);
die();


?>