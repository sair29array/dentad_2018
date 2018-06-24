var app = new Vue({
  el: '#colaboradores',
  data: {
    message: '',
    num_Asistentes : num_Asistentes,
    // -- // 
    view_add_colaborador: false ,

    // datos para registrar un nuevo colaborador //
    id_clinica: id_clinica,
    clinica: nombre_clinica_DB,
    name_user: "",
    email_user: "",
    pass: "",


      //// -------- permisos de los asistentes : 
      /////////GENERALES/////////////
      acordeon_control_pacientes: false,
      acordeon_control_agenda: false,
      acordeon_control_reportes: false,
      acordeon_control_configuracion_cuenta: false,

      permiso_ver_pacientes: false,
      permiso_registrar_pacientes: false,
      permiso_actualizar_pacientes: false,
      permiso_eliminar_pacientes: false,

      permiso_ver_agenda: false,
      permiso_registrar_en_agenda: false,
      permiso_actualizar_agenda: false,
      permiso_eliminar_agenda: false,

      permiso_ver_reportes: false,
      permiso_registrar_reportes: false,
      permiso_actualizar_reportes: false,
      permiso_eliminar_reportes: false,

      permiso_ver_configuracion_cuenta: false,
      permiso_registrar_configuracion_cuenta: false,
      permiso_actualizar_configuracion_cuenta: false,
      permiso_eliminar_configuracion_cuenta: false,

      NoSeEstablecieronPermisos : false,


    // -- si llegan vacios
    name_user_null: false,
    email_user_null:false,
    pass_null: false,

    // si se logra registrar: 
    messageexito: false
  },
  methods:
  	{
  		changeView(v)
  		{
  			if (v == 1) 
  			{
  				app.view_add_colaborador = true;
  			}
  		},

  		cerrarFormularioColaboradores()
  		{
  			app.view_add_colaborador = false;
  			this.name_user_null = false;
  			this.email_user_null = false;
  			this.pass_null = false;

  			/// --

  			this.name_user = "";
  			this.email_user = "";
  			this.pass = "";

        ///--- 
        this.permiso_ver_pacientes = false ;
        this.permiso_registrar_pacientes = false ;
        this.permiso_actualizar_pacientes = false ;
        this.permiso_eliminar_pacientes = false ;

        this.permiso_ver_agenda = false ;
        this.permiso_registrar_en_agenda = false ;
        this.permiso_actualizar_agenda = false ;
        this.permiso_eliminar_agenda = false ;

        this.permiso_ver_reportes = false ;
        this.permiso_registrar_reportes = false ;
        this.permiso_actualizar_reportes = false ;
        this.permiso_eliminar_reportes = false ;

        this.permiso_ver_configuracion_cuenta = false ;
        this.permiso_registrar_configuracion_cuenta = false ;
        this.permiso_actualizar_configuracion_cuenta = false ;
        this.permiso_eliminar_configuracion_cuenta = false ;

        this.NoSeEstablecieronPermisos = false;
  		},

  		addColaborador()
  		{
  			if (this.name_user == "") {this.name_user_null = true;}
  			if (this.email_user == "") {this.email_user_null = true;}
  			if (this.pass == "") {this.pass_null = true;}

  			if (this.name_user_null == false 
          && this.email_user_null == false 
          && this.pass_null == false
          && (this.permiso_ver_pacientes == true 
            || this.permiso_registrar_pacientes == true
            || this.permiso_actualizar_pacientes == true
            || this.permiso_eliminar_pacientes == true
            || this.permiso_ver_reportes == true
            || this.permiso_registrar_reportes == true
            || this.permiso_actualizar_reportes == true
            || this.permiso_eliminar_reportes == true
            || this.permiso_ver_agenda == true
            || this.permiso_registrar_en_agenda == true
            || this.permiso_actualizar_agenda == true
            || this.permiso_eliminar_agenda == true
            || this.permiso_ver_configuracion_cuenta == true
            || this.permiso_registrar_configuracion_cuenta == true
            || this.permiso_actualizar_configuracion_cuenta == true
            || this.permiso_eliminar_configuracion_cuenta == true)) 
  			{
  				///---
  					// make ajax request and pass the data. I'm not certain how to do it with axios but something along the lines of this
              var formData = new FormData();
           
              formData.append('id_clinica', this.id_clinica);
              formData.append('name_user', this.name_user);
              formData.append('email_user', this.email_user);
              formData.append('pass', this.pass);

              ///// VERIFICAMOS LOS PERMISOS SELECCIONADOS /////
                if (this.permiso_ver_pacientes == true) 
                {formData.append('permiso_ver_pacientes', 1);}
                else
                {formData.append('permiso_ver_pacientes', 0);}

                if (this.permiso_registrar_pacientes == true) 
                {formData.append('permiso_registrar_pacientes', 1);}
                else
                {formData.append('permiso_registrar_pacientes', 0);}

                if (this.permiso_actualizar_pacientes == true) 
                {formData.append('permiso_actualizar_pacientes', 1);}
                else
                {formData.append('permiso_actualizar_pacientes', 0);}

                if (this.permiso_eliminar_pacientes == true) 
                {formData.append('permiso_eliminar_pacientes', 1);}
                else
                {formData.append('permiso_eliminar_pacientes', 0);}

                if (this.permiso_ver_agenda == true) 
                {formData.append('permiso_ver_agenda', 1);}
                else
                {formData.append('permiso_ver_agenda', 0);}

                if (this.permiso_registrar_en_agenda == true) 
                {formData.append('permiso_registrar_en_agenda', 1);}
                else
                {formData.append('permiso_registrar_en_agenda', 0);}

                if (this.permiso_actualizar_agenda == true) 
                {formData.append('permiso_actualizar_agenda', 1);}
                else
                {formData.append('permiso_actualizar_agenda', 0);}

                if (this.permiso_eliminar_agenda == true) 
                {formData.append('permiso_eliminar_agenda', 1);}
                else
                {formData.append('permiso_eliminar_agenda', 0);}

                if (this.permiso_ver_reportes == true) 
                {formData.append('permiso_ver_reportes', 1);}
                else
                {formData.append('permiso_ver_reportes', 0);}

                if (this.permiso_registrar_reportes == true) 
                {formData.append('permiso_registrar_reportes', 1);}
                else
                {formData.append('permiso_registrar_reportes', 0);}

                if (this.permiso_actualizar_reportes == true) 
                {formData.append('permiso_actualizar_reportes', 1);}
                else
                {formData.append('permiso_actualizar_reportes', 0);}
                  
                if (this.permiso_eliminar_reportes == true) 
                {formData.append('permiso_eliminar_reportes', 1);}
                else
                {formData.append('permiso_eliminar_reportes', 0);}
                  
                if (this.permiso_ver_configuracion_cuenta == true) 
                {formData.append('permiso_ver_configuracion_cuenta', 1);}
                else
                {formData.append('permiso_ver_configuracion_cuenta', 0);}

                if (this.permiso_registrar_configuracion_cuenta == true) 
                {formData.append('permiso_registrar_configuracion_cuenta', 1);}
                else
                {formData.append('permiso_registrar_configuracion_cuenta', 0);}
                  
                if (this.permiso_actualizar_configuracion_cuenta == true) 
                {formData.append('permiso_actualizar_configuracion_cuenta', 1);}
                else
                {formData.append('permiso_actualizar_configuracion_cuenta', 0);}

                if (this.permiso_eliminar_configuracion_cuenta == true) 
                {formData.append('permiso_eliminar_configuracion_cuenta', 1);}
                else
                {formData.append('permiso_eliminar_configuracion_cuenta', 0);}
                  
                  
                  
                  
              //////////////////////////////////////////////////

                      axios.post("Config/sql/sql_RegistrarColaborador.php?action=read",formData)
                              .then(function(response) {
                  
                  console.log(response);
                      datos = response.data;
                      
              if (datos.resul == 1 )
                {
                
                 app.messageexito = "Ha sido agregado un nuevo asistente a tu clínica" ;
                }else if (datos.resul == 0 ) 
                {
                	app.message = "El correo electrónico ya se encuentra en uso" ;
                }
              
                                      
                              })
                              .catch(function (error) {
                                  console.log(error);
                              });
  				///---
  			}else
        {
          this.NoSeEstablecieronPermisos = true;
        }
  		},

  		reloadDB()
  		{
  			window.location="./Colaboradores";
  		}


  	}
})
