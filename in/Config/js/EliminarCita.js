var app = new Vue({
  el: '#EliminarCitas',
  data: {
    message: '',
    messageexito: false,
    id_cita: id_cita,
    id_clinica: id_clinica
  },

  methods:
  	{
  		EnviarApapelera()
  		{
  			// enviar a php para guardar en la DB: 
  			// make ajax request and pass the data. I'm not certain how to do it with axios but something along the lines of this
              var formData = new FormData();
           
              formData.append('id_clinica', this.id_clinica);
              formData.append('id_cita', this.id_cita);

                      axios.post("Config/sql/sql_ELiminar_cita.php?action=read",formData)
                              .then(function(response) {
                  
                  console.log(response);
                      datos = response.data;
                      
              if (datos.resul == 1 )
                {
                
                 app.messageexito = "Se ha movido la cita "+this.id_clinica+this.id_cita+" a la papelera." ;
                }
              
                                      
                              })
                              .catch(function (error) {
                                  console.log(error);
                              });
  		}
  	}
})