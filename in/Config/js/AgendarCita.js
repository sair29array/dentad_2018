var app = new Vue({
  el: '#AgendarForm',
  data: {
    email_: email_,
    fecha_actual: fecha_actual,
    message: '',
    messageexito: false,
    id_clinica: id_clinica,
    id_paciente: id_paciente,
    motivo_consulta: motivo_consulta,
    fecha_inicio: fecha_inicio,
    hora_inicio: hora_inicio,

    fecha_fin: fecha_fin,
    hora_fin: hora_fin,
    valor_cita: "",
    observaciones: Observaciones, // las observaciones no son obligatorias en el form-


    // /campos vacios  o nulos:
    id_paciente_null: false,
    motivo_consulta_null: false,
    fecha_inicio_null: false,
    fecha_fin_null: false,
    hora_inicio_null: false,
    hora_fin_null: false,
    valor_cita_null: false,
    

  },
  methods: 
  {
  	SetDAtaCita()
  	{
  		this.id_paciente = id_paciente;
  		this.motivo_consulta = motivo_consulta;
  		this.fecha_inicio = fecha_inicio;
  		this.hora_inicio = hora_inicio;
  		this.fecha_fin = fecha_fin;
  		this.hora_fin = hora_fin;
  		this.observaciones = Observaciones;

  		// -----------

  		if (app.id_paciente == "0") {this.id_paciente_null = true; }else{this.id_paciente_null = false;}
  		if (app.motivo_consulta == "0") {this.motivo_consulta_null = true;}else{this.motivo_consulta_null = false;}
  		if (app.fecha_inicio == "") {this.fecha_inicio_null = true;}else{this.fecha_inicio_null = false;}
  		if (app.fecha_fin == "") {this.fecha_fin_null = true;}else{this.fecha_fin_null = false;}
  		if (app.hora_inicio == "") {this.hora_inicio_null = true;}else{this.hora_inicio_null = false;}
  		if (app.hora_fin == "") {this.hora_fin_null = true;}else{this.hora_fin_null = false;}
  		if (app.valor_cita == "") {this.valor_cita_null = true;}else{this.valor_cita_null = false;}


  		// ---------------------

  		if (app.id_paciente_null == false &&
  			app.motivo_consulta_null == false &&
  			app.fecha_inicio_null == false && 
  			app.fecha_fin_null == false && 
  			app.hora_fin_null == false &&
  			app.hora_inicio_null == false &&
  			app.valor_cita_null == false) 
  		{
  			// enviar a php para guardar en la DB: 
  			// make ajax request and pass the data. I'm not certain how to do it with axios but something along the lines of this
              var formData = new FormData();
              formData.append('id_paciente', this.id_paciente);
              formData.append('motivo_consulta', this.motivo_consulta);
              formData.append('fecha_inicio', this.fecha_inicio);
              formData.append('fecha_fin', this.fecha_fin);
              formData.append('hora_inicio', this.hora_inicio);
              formData.append('hora_fin', this.hora_fin);
              formData.append('valor_cita', this.valor_cita);
              formData.append('observaciones', this.observaciones);
              formData.append('id_clinica', this.id_clinica);
              formData.append('fecha_actual', this.fecha_actual);
              formData.append('email_', this.email_);

                      axios.post("Config/sql/sql_agendar_cita.php?action=read",formData)
                              .then(function(response) {
                  
                  console.log(response);
                      datos = response.data;
                      
              if (datos.resul == 1 )
                {
                 app.messageexito = "Se agendó una nueva cita para "+datos.paciente+" en la fecha: "+app.fecha_inicio+" a las " + app.hora_inicio ;
                }
              
                                      
                              })
                              .catch(function (error) {
                                  console.log(error);
                              });
  		}

  	},

  	Terminar()
  	{
  		 
  	}

  }
})
