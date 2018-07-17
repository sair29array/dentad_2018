var app = new Vue({
  el: '#MotivosConsulta',
  data: {
    id_clinica: id_clinica,
    message: '',
    view_add_motivo: false,
    motivo_consulta: "",
    motivoc_null:  false,
    delete_id: delete_id,
    Edit_motivoc: Edit_motivoc,
    Edit_ID : Edit_ID ,
    Edit_motivoc_null : false
  },

  methods:
  {
  	changeView(v)
  	{
  		if (v == "Form_registrar_motivo") 
  		{
  			this.view_add_motivo = true;
  		}
  	},


  	add_motivo()
  	{
  		if (this.motivo_consulta == "") {this.motivoc_null = true;}
  		else
  		{
  			  /////////////-----
           // make ajax request and pass the data. I'm not certain how to do it with axios but something along the lines of this
              var formData = new FormData();
              formData.append('motivo_consulta', app.motivo_consulta);
              formData.append('id_clinica', app.id_clinica);
              
                      axios.post("Config/sql/sql_registrar_motivo_consulta.php?action=read",formData)
                              .then(function(response) {
                  
                  console.log(response);
                      datos = response.data;
                      
              if (datos.resul == 1 )
                {
                  app.message ="Se registró un nuevo motivo de consulta.";
                } 
              
                                      
                              })
                              .catch(function (error) {
                                  console.log(error);
                              });
          ////////////*-----
  		}
  	},


  	cerrarFormularioMOtivos()
  	{
  		this.view_add_motivo = false;
  		this.motivo_consulta = "";
  		this.motivoc_null = false;
  	},

    reloadDB()
    {
      window.location="./Motivos-de-consulta";
    },

    DeleteMotivoc()
    {
         var formData = new FormData();
              formData.append('delete_id', app.delete_id);
              
                      axios.post("Config/sql/sql_eliminar_o_editar_motivo_consulta.php?action=read",formData)
                              .then(function(response) {
                  
                  console.log(response);
                      datos = response.data;
                      
              if (datos.resul == 1 )
                {
                   window.location="./Motivos-de-consulta";
                } 
              
                                      
                              })
                              .catch(function (error) {
                                  console.log(error);
                              });
    },

    Edit_motivoc_()
    {
      if (this.Edit_motivoc == "") {this.Edit_motivoc_null = true;}
      else
      {
           var formData = new FormData();
              formData.append('Edit_ID', app.Edit_ID);
              formData.append('Edit_motivoc', app.Edit_motivoc);
              
                      axios.post("Config/sql/sql_eliminar_o_editar_motivo_consulta.php?action=read",formData)
                              .then(function(response) {
                  
                  console.log(response);
                      datos = response.data;
                      
              if (datos.resul == 1 )
                {
                   window.location="./Motivos-de-consulta";
                } 
              
                                      
                              })
                              .catch(function (error) {
                                  console.log(error);
                              });
      }
    }
  }
})