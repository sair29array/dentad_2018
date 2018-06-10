
var app = new Vue({
  el: '#activar-cuenta',
  data: {
    message: false,
    messageUpdateEmAil:false,
    show_form_edit_email: false,
    messageUpdateEmAiler: false,
    inputNUll: false,
    correoExistente: false,
    CorreoInvalido: false,
    /*Nuevo*/email_u:  /*email actual_*/email_
  },
  methods: 
  {
  	solicitud_de_activacion(email_user)
  	{


  		// make ajax request and pass the data. I'm not certain how to do it with axios but something along the lines of this
        var formData = new FormData();
        formData.append('email', email_user);
        
                axios.post("Config/sql/sql_activar_cuenta.php?action=read",formData)
                        .then(function(response) {
            
            console.log(response);
                datos = response.data;
                
        if (datos.resul == 1 )
          {
           app.message = "Ingresa a tu correo " + email_user + " y activa tu cuenta";
          }
        
                                
                        })
                        .catch(function (error) {
                            console.log(error);
                        });

  	},
    UpdateEmail()
    {
        if (app.email_u != "") 
        {
            if (app.email_u != email_) 
            {
                // make ajax request and pass the data. I'm not certain how to do it with axios but something along the lines of this
              var formData = new FormData();
              formData.append('EmailActual', email_);
              formData.append('EmailNuevo', this.email_u);
                      axios.post("Config/sql/sql_actualizar_correo_user.php?action=read",formData)
                              .then(function(response) {
                  
                  console.log(response);
                      datos = response.data;
                      
              if (datos.resul == 1 )
                {
                 app.messageUpdateEmAil = "Tu correo ha sido modificado " ;
                }else if (datos.resul == 0) 
                {
                  app.correoExistente = "Este correo ya le pertenece a otro usuario."
                }else if (datos.resul==2) 
                {
                  app.CorreoInvalido = "Este tipo de correo no es permitido."
                }
              
                                      
                              })
                              .catch(function (error) {
                                  console.log(error);
                              });
            }else //:
              {
              this.messageUpdateEmAiler = "Tu correo no presenta cambios";
              }
        }else{
          this.inputNUll = true;
        }
    },
    cancelarEDitEmail()
    {
      app.show_form_edit_email = false;
      app.email_u = email_;
      app.correoExistente = false;
      app.CorreoInvalido = false;
      app.messageUpdateEmAiler = false;
    },
    quitarMensajesDEerror()
    {
      app.correoExistente = false;
      app.CorreoInvalido = false;
      app.messageUpdateEmAiler = false;
    }




  }
})