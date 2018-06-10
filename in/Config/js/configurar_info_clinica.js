var app = new Vue({
  el: '#clinica_info',
  data: {
  	// los datos de acontinuación vienen desde la base de datos y son llamados con sql 
  	// y php a variables JS ubicadas en el NAV de la aplicación
  	id_user: id_user_, // esta variable la hice en el nav
  	nombre_clinica_DB: nombre_clinica_DB,
  	ubicacion_clinica_DB: ubicacion_clinica_DB,

  	nombre_clinica_a_actualizar: nombre_clinica_DB,
  	ubicacion_clinica_a_actualizar: ubicacion_clinica_DB,


  	///////DATA ADMINISTRADOR///
  	nombre_adminictrador_DB: nombre_adminictrador_DB,
  	email_administrador_DB: email_administrador_DB,

  	/// EDit datos del user admin
  	showFOrmEditDAtaAdmin: false,
  	nombre_admin_para_actualizar: this.nombre_adminictrador_DB,
  	email_admin_para_actualizar: this.email_administrador_DB,
  	UpdateImputDAtaUserAdminvACIOS: false,
  	correoInvalidoParaActualizar: false,
  	noHayCambiosQueREalizarDataAdmin: false,
  	messageSuccesADminUpdate: false,



  	//____________________________

  	
  	isset_clinica_: isset_clinica,
    message: false,
    nombre_clinica: '',
    ubicacion: "",
    //imagen: ""
    campos_info_clinica_vacios: false,
    clinica_registrada: false
  },
  methods: 
  	{
  		guardarInfoClinica()
  		{
  			if (app.nombre_clinica == '' || app.ubicacion == '') 
  			{
  				this.campos_info_clinica_vacios = true;
  			}else
  			{
  				   // make ajax request and pass the data. I'm not certain how to do it with axios but something along the lines of this
              var formData = new FormData();
              formData.append('nombre_clinica', app.nombre_clinica);
              formData.append('ubicacion', app.ubicacion );
              formData.append('id_user', app.id_user );
                      axios.post("Config/sql/sql_guardar_datos_nueva_clinica.php?action=read",formData)
                              .then(function(response) {
                  
                  console.log(response);
                      datos = response.data;
                      
              if (datos.resul == 1 )
                {
                 app.message = "Tu clínica ha sido registrada." ;
                }
              
                                      
                              })
                              .catch(function (error) {
                                  console.log(error);
                              });
  			}
  		},

  		reload_()
  		{
  			window.location="./";
  		},

  		ActualizarInfoClinica()
  		{
  			
  			if (app.nombre_clinica_a_actualizar == '' || app.ubicacion_clinica_a_actualizar == '') 
  			{
  				this.campos_info_clinica_vacios = true;
  			}else{ 
  			 // make ajax request and pass the data. I'm not certain how to do it with axios but something along the lines of this
              var formData = new FormData();
              formData.append('nombre_clinica', app.nombre_clinica_a_actualizar);
              formData.append('ubicacion', app.ubicacion_clinica_a_actualizar );
              formData.append('id_user', app.id_user );
                      axios.post("Config/sql/sql_actualizar_datos_nueva_clinica.php?action=read",formData)
                              .then(function(response) {
                  
                  console.log(response);
                      datos = response.data;
                      
              if (datos.resul == 11 )
                {
                 app.message = "Los datos de tu clinica han sido actualizados." ;
                }
              
                                      
                              })
                              .catch(function (error) {
                                  console.log(error);
                              });
            }
  		},



  		////////DATOS DEL USUARIO ADMINISTRADOR /////
  		UpdateDAtaUserAdmin()
  		{
  			if (this.nombre_admin_para_actualizar == "" || this.email_admin_para_actualizar == "") 
  			{
  				this.UpdateImputDAtaUserAdminvACIOS = true;
  			}else if (
  				this.nombre_admin_para_actualizar == this.nombre_adminictrador_DB &&
  				this.email_admin_para_actualizar == this.email_administrador_DB
  				) 
  			{
  				this.noHayCambiosQueREalizarDataAdmin = "No hay cambios para realizar";
  			}else
  			{
  				// make ajax request and pass the data. I'm not certain how to do it with axios but something along the lines of this
              var formData = new FormData();
              formData.append('nombre_admin_para_actualizar', app.nombre_admin_para_actualizar);
              formData.append('email_admin_para_actualizar', app.email_admin_para_actualizar );
              formData.append('id_user', app.id_user );
              formData.append('email_actual', email_ );
                      axios.post("Config/sql/sql_actualizar_datos_user_admin.php?action=read",formData)
                              .then(function(response) {
                  
                  console.log(response);
                      datos = response.data;
                      
              if (datos.resul == 1 )
                {
                 app.messageSuccesADminUpdate = "Tus datos han sido actualizados." ;
                }else if (datos.resul == 2) 
                {
                	app.correoInvalidoParaActualizar = "Este correo no es permitido";
                }else if (datos.resul == 0) 
                {
                	app.correoInvalidoParaActualizar = "Este correo le pertenece a otro usuario";
                }
              
                                      
                              })
                              .catch(function (error) {
                                  console.log(error);
                              });
  			}
  		},

  		CancelEDitDataAdmin(p)
  		{
  			if (p == 1) /// si es 1 solo hay que esconder el formulario
  			{this.showFOrmEditDAtaAdmin = false;}
  			else // sino hay que esconder todo -... fue porque todo fue cancelado
  			{this.showFOrmEditDAtaAdmin = false;
  			this.nombre_admin_para_actualizar = this.nombre_adminictrador_DB;
  			this.email_admin_para_actualizar = this.email_administrador_DB;}
  			
  			
  		},
  		QuitarMensajesDeErrorEditInputADmin()
  		{
  			this.noHayCambiosQueREalizarDataAdmin = false;
  			this.UpdateImputDAtaUserAdminvACIOS = false;
  			this.messageSuccesADminUpdate = false;

  		}
  	}
})