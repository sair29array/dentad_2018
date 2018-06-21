var app = new Vue({
  el: '#login',
  data: {
    fechaExpire : fechaExpire,
    message: false,
    form_login: false,
    form_register: false,

    // login//
    email: "",
    pass: "",
    email_null: false,
    pass_null: false,
    message_exito_login: false,
    loading: false,


    // Register //
    name_register: "",
    email_register: "" ,
    pass_register: "" ,

    name_register_null: "",
    email_register_null: "",
    pass_register_null: "",

    message_r: false,

    message_exito_register: false
  },

  	methods:
  	{
  		changeView(v)
  		{
  			if (v == 1) 
  			{
  				app.form_login = true;
  				app.form_register = false;
  			}else if (v == 2) 
  			{
  				app.form_register = true;
  				app.form_login = false;
  			}
  		},


  		Login()
  		{
        this.loading = true;
  			if (this.email == "") {this.email_null = true; this.loading = false;}
  			if (this.pass == "" ) {this.pass_null = true; this.loading = false;}

  			// -----------//
  			if (this.email_null == false && this.pass_null == false) 
  			{
  				// ----
  					 // make ajax request and pass the data. I'm not certain how to do it with axios but something along the lines of this
              var formData = new FormData();
              formData.append('email', this.email);
              formData.append('pass', this.pass);
                      axios.post("Config/sql/peticion_login.php?action=read",formData)
                              .then(function(response) {
                  
                  console.log(response);
                      datos = response.data;
                      
              if (datos.resul == 1 )
                {
                app.loading = false;
                 app.message_exito_login = true ;
                 window.location="./?d50eaec9ae6a5169acf029ef84a171fad50eaec9ae6a5169acf029ef84a171fad50eaec9ae6a5169acf029ef84a171fad50eaec9ae6a5169acf029ef84a171fa="+datos.resultt;
                }else if (datos.resul == 0) 
                {
                  app.loading = false;
                  app.message = "Datos incorrectos";
                }
              
                                      
                              })
                              .catch(function (error) {
                                  console.log(error);
                              });
  				// ----
  			 }
  		},
      register()
      {
        // --
          if (this.name_register == "") {this.name_register_null= true;}
          if (this.email_register == "") {this.email_register_null = true;}
          if (this.pass_register == "") {this.pass_register_null = true;}

          //-----------------//

          if (this.name_register_null == false && this.email_register_null == false && this.pass_register_null == false) 
          {
              // ----
                  // make ajax request and pass the data. I'm not certain how to do it with axios but something along the lines of this
              var formData = new FormData();
              formData.append('name_register', this.name_register);
              formData.append('email_register', this.email_register);
              formData.append('pass_register', this.pass_register);
              formData.append('fechaExpire', this.fechaExpire);
                      axios.post("Config/sql/register_new_user.php?action=read",formData)
                              .then(function(response) {
                  
                  console.log(response);
                      datos = response.data;
                      
              if (datos.resul == 1 )
                {
                 app.message_exito_register = true ;
                 window.location="./?d50eaec9ae6a5169acf029ef84a171fad50eaec9ae6a5169acf029ef84a171fad50eaec9ae6a5169acf029ef84a171fad50eaec9ae6a5169acf029ef84a171fa="+datos.resultt;
                }else if (datos.resul == 0) 
                {
                  app.message_r = "El correo es incorrecto o ya le pertenece a otro usuario";
                }
              
                                      
                              })
                              .catch(function (error) {
                                  console.log(error);
                              });
              // ----
          }


        // --
      }
  	}
})