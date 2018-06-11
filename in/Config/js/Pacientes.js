var app = new Vue({
  el: '#pacientes',
  data: {
  	fecha_actual: fecha_actual,
    message: false,
    message_correo_null: false,
    message_num_null: false,
    view_add_paciente: false,

    // clinica donde se registran o mustran los users o pacientes
    id_clinica: id_clinica,
    id_admin_que_lo_esta_registrando: id_user_,

    // datos de los pacientes nuevos:
    nombre_paciente: "",
    apellidos_paciente: "",
    tipo_identidad_paciente: "",
   	numero_identidad_paciente:"",
   	email_paciente:"",
   	telefono_paciente: "",
   	dia_nacimiento_paciente: "",
   	mes_nacimiento_paciente: "",
   	anio_nacimiento_paciente: "",
   	sexo_paciente: "",


   	// Campos vacios (NO SE PERMITEN - todos los campos de este formulario son obligatorios)
	nombre_paciente_null: false,
    apellidos_paciente_null: false,
    tipo_identidad_paciente_null: false,
   	numero_identidad_paciente_null:false,
   	email_paciente_null:false,
   	telefono_paciente_null: false,
   	sexo_paciente_null: false,
   	dia_nacimiento_paciente_null: false,
   	mes_nacimiento_paciente_null: false,
   	anio_nacimiento_paciente_null: false	
  },

  methods:
  {
  	changeView(v)
  	{
  		if (v == "Form_registrar_paciente") 
  		{
  			app.view_add_paciente = true;
  		}
  	},
  	cerrarFormularioPacientes()
  	{
  		app.view_add_paciente = false;
  		app.nombre_paciente = "";
  		app.apellidos_paciente = "";
  		app.tipo_identidad_paciente = "";
   		app.numero_identidad_paciente ="";
   		app.email_paciente = "";
   		app.telefono_paciente =  "";
   		app.dia_nacimiento_paciente = "";
	   	app.mes_nacimiento_paciente = "";
	   	app.anio_nacimiento_paciente = "";
	   	app.sexo_paciente = "";

   		app.nombre_paciente_null =  false;
	    app.apellidos_paciente_null =  false;
	    app.tipo_identidad_paciente_null =  false;
	   	app.numero_identidad_paciente_null = false;
	   	app.email_paciente_null = false;
	   	app.telefono_paciente_null =  false ;
	   	sexo_paciente_null: false,
	   	appdia_nacimiento_paciente_null = false;
	   	appmes_nacimiento_paciente_null = false;
	   	appanio_nacimiento_paciente_null = false;
	   	app.sexo_paciente_null= false;
	   	app.message = false;
  	},
  	addPaciente()
  	{
  		if (this.nombre_paciente == "") {this.nombre_paciente_null = true;}
  		if (this.apellidos_paciente == "") {this.apellidos_paciente_null = true;}
  		if (this.tipo_identidad_paciente == "") {this.tipo_identidad_paciente_null = true;}
		if (this.numero_identidad_paciente == "") {this.numero_identidad_paciente_null = true;}  		
		if (this.telefono_paciente == "") {this.telefono_paciente_null = true;}		
		if (this.email_paciente == "") {this.email_paciente_null = true;}
		if (this.dia_nacimiento_paciente == "") {this.dia_nacimiento_paciente_null = true;}
		if (this.mes_nacimiento_paciente == "") {this.mes_nacimiento_paciente_null = true;}		
		if (this.anio_nacimiento_paciente == "") {this.anio_nacimiento_paciente_null = true;}	
		if (this.sexo_paciente == "") {this.sexo_paciente_null = true;}

		// global if
		if (this.nombre_paciente_null == false
			&& this.apellidos_paciente_null ==false
			&& this.tipo_identidad_paciente_null == false
			&& this.numero_identidad_paciente_null == false
			&& this.telefono_paciente_null == false
			&& this.email_paciente_null == false
			&& this.dia_nacimiento_paciente_null == false
			&& this.mes_nacimiento_paciente_null == false
			&& this.anio_nacimiento_paciente_null == false
			&& this.sexo_paciente_null == false
			)
			{
							// make ajax request and pass the data. I'm not certain how to do it with axios but something along the lines of this
			        var formData = new FormData();
			        formData.append('nombre_paciente', app.nombre_paciente);
			        formData.append('apellidos_paciente', app.apellidos_paciente);
			        formData.append('tipo_identidad_paciente', app.tipo_identidad_paciente);
			        formData.append('numero_identidad_paciente', app.numero_identidad_paciente);
			        formData.append('telefono_paciente', app.telefono_paciente);
			        formData.append('email_paciente', app.email_paciente);
			        formData.append('id_user', app.id_admin_que_lo_esta_registrando);
			        formData.append('id_clinica', app.id_clinica);
			        formData.append('fecha_actual', app.fecha_actual);
			        formData.append('dia_nacimiento_paciente', app.dia_nacimiento_paciente);
			        formData.append('mes_nacimiento_paciente', app.mes_nacimiento_paciente);
			        formData.append('anio_nacimiento_paciente', app.anio_nacimiento_paciente);
			        formData.append('sexo_paciente', app.sexo_paciente);
			        
			                axios.post("Config/sql/sql_registrar_paciente.php?action=read",formData)
			                        .then(function(response) {
			            
			            console.log(response);
			                datos = response.data;
			                
			        if (datos.resul == 1 )
			          {
			           	app.message = app.fecha_actual + ". Nuevo paciente registrado.";
			          } else if (datos.resul== 0) 
			          {
			          	app.message_num_null ="Este número de identidad le pertenece a otro paciente";
			          	app.numero_identidad_paciente_null = true;
			          }
			        
			                                
			                        })
			                        .catch(function (error) {
			                            console.log(error);
			                        });

			}
  	},

  	reloadDB()
  	{
  		window.location="./Todos-mis-pacientes";
  	}
  }
})