var app = new Vue({
  el: '#tratamientos',
  data: {
    message: '',
    id_clinica: id_clinica,
    view_add_tratamiento: false,

    // datos de un tratamiento
    tratamiento: "",
    valor_total: "",
    cuota_inicial: "",
    duracion_dias:"",
    duracion_meses:"",
    duracion_anios: "",

    tratamiento_null: false,
    valor_total_null: false,
    cuota_inicial_null: false,
    duracion_null: false,


    // opciones de ELIMINAR Y EDITAR un TRATAMIENTO
    	edit_ID: edit_ID,

    	// DATOS A ACTUALIZAR: 
    	edit_tratamiento: edit_tratamiento,
    	edit_valor_total: edit_valor_total,
    	edit_cuota_inicial: edit_cuota_inicial,
    	edit_duracion_dias: edit_duracion_dias,
    	edit_duracion_meses: edit_duracion_meses,
    	edit_duracion_anios: edit_duracion_anios,

    	// nulos o vacios

    	edit_tratamiento_null: false,
    	edit_valor_total_null: false,
    	edit_duracion_null: false,
    	message_edit_exit : false,

    	delete_id: delete_id
    
    
  },

  methods: 
  {
  	changeView(v)
  	{
  		if (v == 'Form_registrar_tratamiento') 
  		{
  			this.view_add_tratamiento = true;
  		}
  	},
  	addTratamiento()
  	{
  		if (this.tratamiento == "") {this.tratamiento_null = true;}
  		if (this.valor_total == "") {this.valor_total_null = true;}
  		
  		if ((this.duracion_dias == "" ||  this.duracion_dias == 0) 
  			&& (this.duracion_meses == "" || this.duracion_meses == 0) 
  			&& (this.duracion_anios == "" || this.duracion_anios == 0) ) 
  			{this.duracion_null = true;}
  		


  		if (this.tratamiento_null  == false && this.valor_total_null == false && this.duracion_null == false) 
  		{
  			 /// ****

				 // make ajax request and pass the data. I'm not certain how to do it with axios but something along the lines of this
			        var formData = new FormData();
			        formData.append('tratamiento', app.tratamiento);
			        formData.append('valor_total', app.valor_total);
			        formData.append('cuota_inicial', app.cuota_inicial);
			        formData.append('duracion_anios', app.duracion_anios);
			        formData.append('duracion_meses', app.duracion_meses);
			        formData.append('duracion_dias', app.duracion_dias);
			        formData.append('id_clinica', app.id_clinica);
			                axios.post("Config/sql/sql_registrar_tratamiento.php?action=read",formData)
			                        .then(function(response) {
			            
			            console.log(response);
			                datos = response.data;
			                
			        if (datos.resul == 1 )
			          {
			           	app.message ="Nuevo tratamiento registrado.";
			          } 
			        
			                                
			                        })
			                        .catch(function (error) {
			                            console.log(error);
			                        });
  			 /// ****
  		}
  	},

  	cerrarFormularioTratamientos()
  	{
  		this.view_add_tratamiento = false;
  		this.tratamiento_null = false;
  		this.tratamiento = "";
  	},
  	reloadDB()
  	{
  		window.location="./Tratamientos";
  	},


  	EditTratamiento()
  	{
  		if (this.edit_tratamiento == "") {this.edit_tratamiento_null = true;}
  		if (this.edit_valor_total == "") {this.edit_valor_total_null = true;}
  		
  		if ((this.edit_duracion_dias == "" || this.edit_duracion_dias == 0 ) 
  			&& (this.edit_duracion_meses == "" || this.edit_duracion_meses == 0) 
  			&& (this.edit_duracion_anios == "" || this.edit_duracion_anios == 0) ) 
  			{this.edit_duracion_null = true;}
  		


  		if (this.edit_tratamiento_null  == false && this.edit_valor_total_null == false && this.edit_duracion_null == false) 
  		{
  			 /// ****

				 // make ajax request and pass the data. I'm not certain how to do it with axios but something along the lines of this
			        var formData = new FormData();
			        formData.append('tratamiento', app.edit_tratamiento);
			        formData.append('valor_total', app.edit_valor_total);
			        formData.append('cuota_inicial', app.edit_cuota_inicial);
			        formData.append('duracion_anios', app.edit_duracion_anios);
			        formData.append('duracion_meses', app.edit_duracion_meses);
			        formData.append('duracion_dias', app.edit_duracion_dias);
			        formData.append('id_clinica', app.id_clinica);
			        formData.append('edit_ID', app.edit_ID);
			                axios.post("Config/sql/sql_actualizar_tratamiento.php?action=read",formData)
			                        .then(function(response) {
			            
			            console.log(response);
			                datos = response.data;
			                
			        if (datos.resul == 1 )
			          {
			           	app.message_edit_exit ="La información del tratamiento ha sido actualizada.";
			          } 
			        
			                                
			                        })
			                        .catch(function (error) {
			                            console.log(error);
			                        });
  			 /// ****
  		}
  	},

  	DeleteTratamiento()
  	{
  		 /// ****

				 // make ajax request and pass the data. I'm not certain how to do it with axios but something along the lines of this
			        var formData = new FormData();
			        formData.append('delete_id', app.delete_id);
			                axios.post("Config/sql/sql_eliminar_tratamiento.php?action=read",formData)
			                        .then(function(response) {
			            
			            console.log(response);
			                datos = response.data;
			                
			        if (datos.resul == 1 )
			          {
			           	window.location="./Tratamientos";
			          } 
			        
			                                
			                        })
			                        .catch(function (error) {
			                            console.log(error);
			                        });
  			 /// ****
  	}
  }


})