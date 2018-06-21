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
  		},

  		addColaborador()
  		{
  			if (this.name_user == "") {this.name_user_null = true;}
  			if (this.email_user == "") {this.email_user_null = true;}
  			if (this.pass == "") {this.pass_null = true;}

  			if (this.name_user_null == false && this.email_user_null == false && this.pass_null == false) 
  			{
  				///---
  					// make ajax request and pass the data. I'm not certain how to do it with axios but something along the lines of this
              var formData = new FormData();
           
              formData.append('id_clinica', this.id_clinica);
              formData.append('name_user', this.name_user);
              formData.append('email_user', this.email_user);
              formData.append('pass', this.pass);

                      axios.post("Config/sql/sql_RegistrarColaborador.php?action=read",formData)
                              .then(function(response) {
                  
                  console.log(response);
                      datos = response.data;
                      
              if (datos.resul == 1 )
                {
                
                 app.messageexito = "Ha sido agregado un nuevo colaborador a tu clínica" ;
                }else if (datos.resul == 0 ) 
                {
                	app.message = "El correo electrónico que ingresaste ya le pertenese a otro usuario colaborador" ;
                }
              
                                      
                              })
                              .catch(function (error) {
                                  console.log(error);
                              });
  				///---
  			}
  		},

  		reloadDB()
  		{
  			window.location="./Colaboradores";
  		}
  	}
})
