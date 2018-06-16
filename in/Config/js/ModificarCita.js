var app = new Vue({
  el: '#modificadorDeCitas',
  data: {
  	id_clinica: id_clinica,
  	id_cita: id_cita,
    message: '',
    messageexito: false,
    // datos a actualizar //
    id_paciente: paciente,
    motivo_consulta: motivo_consulta,
    fecha_inicio: fecha_inicio,
    fecha_fin: fecha_fin,
    hora_inicio: hora_inicio,
    hora_fin: hora_fin,
    valor_cita: valor_cita,
    Observaciones: Observaciones,

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
  		app.id_paciente = paciente,
	    app.motivo_consulta = motivo_consulta,
	    app.fecha_inicio = fecha_inicio,
	    app.fecha_fin = fecha_fin,
	    app.hora_inicio = hora_inicio,
	   	app.hora_fin = hora_fin,
	    app.valor_cita = valor_cita,
	    app.Observaciones = Observaciones


	    // ----------------
	    if (this.id_paciente == "") {this.id_paciente_null = true; }
  		if (this.motivo_consulta == "") {this.motivo_consulta_null = true;}
  		if (this.fecha_inicio == "") {this.fecha_inicio_null = true;}
  		if (this.fecha_fin == "") {this.fecha_fin_null = true;}
  		if (this.hora_inicio == "") {this.hora_inicio_null = true;}
  		if (this.hora_fin == "") {this.hora_fin_null = true;}
  		if (this.valor_cita == "") {this.valor_cita_null = true;}

  		// --------------------
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
              formData.append('observaciones', this.Observaciones);
              formData.append('id_clinica', this.id_clinica);
              formData.append('id_cita', this.id_cita);

                      axios.post("Config/sql/sql_actualizar_cita.php?action=read",formData)
                              .then(function(response) {
                  
                  console.log(response);
                      datos = response.data;
                      
              if (datos.resul == 1 )
                {
                 app.messageexito = "Se ha actualizado esta cita de forma correcta, revise su agenda." ;
                }
              
                                      
                              })
                              .catch(function (error) {
                                  console.log(error);
                              });
  		}
  	}
  }
})

