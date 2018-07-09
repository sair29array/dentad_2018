var app = new Vue({
  el: '#diagnosticos',
  data: {
    message: '',
    id_clinica: id_clinica,
    view_add_diagnostico: false,
    diagnostico: "",
    diagnostico_null: false,


    //// actualizar diagnstico:
    Edit_ID: Edit_ID,
    Edit_diagnostico: Edit_diagnostico,
    Edit_diagnostico_null : false,
    message_edit: false,

    /// eliminar o mover a la papelera
    delete_id: delete_id
  },

  methods: 
  {
  	changeView(v)
  	{
  		if (v == "Form_registrar_diagnostico") {this.view_add_diagnostico = true;}
  	},

  	cerrarFormularioDiagnosticos()
  	{
  		this.view_add_diagnostico = false;
  	},

  	add_diagnostico()
  	{
  		if (this.diagnostico == "") {this.diagnostico_null = true}

  		else
  		{
  			 /// ****

				 // make ajax request and pass the data. I'm not certain how to do it with axios but something along the lines of this
			        var formData = new FormData();
			        formData.append('diagnostico', app.diagnostico);
			        formData.append('id_clinica', app.id_clinica);
			        
			                axios.post("Config/sql/sql_registrar_diagnostico.php?action=read",formData)
			                        .then(function(response) {
			            
			            console.log(response);
			                datos = response.data;
			                
			        if (datos.resul == 1 )
			          {
			           	app.message ="Se registró un nuevo diagnóstico.";
			          } 
			        
			                                
			                        })
			                        .catch(function (error) {
			                            console.log(error);
			                        });
  			 /// ****
  		}
  	},

  	reloadDB()
  	{
  		window.location="./Diagnósticos";
  	},

  	Edit_diagnostico_()
  	{
  		if (this.Edit_diagnostico == "") {this.Edit_diagnostico_null = true;}
  		else
  		{
  			/// ****

				 // make ajax request and pass the data. I'm not certain how to do it with axios but something along the lines of this
			        var formData = new FormData();
			        formData.append('Edit_ID', app.Edit_ID);
			        formData.append('Edit_diagnostico', app.Edit_diagnostico);
			        
			                axios.post("Config/sql/sql_Editar_diagnostico.php?action=read",formData)
			                        .then(function(response) {
			            
			            console.log(response);
			                datos = response.data;
			                
			        if (datos.resul == 1 )
			          {
			           	app.message_edit ="Se actualizó el diagnóstico.";
			          } 
			        
			                                
			                        })
			                        .catch(function (error) {
			                            console.log(error);
			                        });
  			 /// ****
  		}
  	},

  	DeleteDiagnostico()
  	{
  		// En realidad se movera a la papelera

  		/// ****

				 // make ajax request and pass the data. I'm not certain how to do it with axios but something along the lines of this
			        var formData = new FormData();
			        formData.append('delete_id', app.delete_id);
			        
			        
			                axios.post("Config/sql/sql_MoveraPapelera_diagnostico.php?action=read",formData)
			                        .then(function(response) {
			            
			            console.log(response);
			                datos = response.data;
			                
			        if (datos.resul == 1 )
			          {
			           	window.location="./Diagnósticos";
			          } 
			        
			                                
			                        })
			                        .catch(function (error) {
			                            console.log(error);
			                        });
  			 /// ****
  	}
  }
})