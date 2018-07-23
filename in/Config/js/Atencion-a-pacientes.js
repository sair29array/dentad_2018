var app = new Vue({
  el: '#atencion_pacientes',
  data: {
    message: '',
    fecha_actual: fecha_actual
  },
  methods:
  {
  	poner_en_espera(c)
  	{
  		window.location="./?view=Atención-a-pacientes&CitaEnEspera="+c;
 	},

 	Atender_paciente(c)
 	{
 		window.location="./?view=Atención-a-pacientes&AtenderPacienteCita="+c;
 	},

 	Finalizar_atencion_cita(c)
 	{
 		window.location="./?view=Atención-a-pacientes&FinalizarAtencionCita="+c;
 	}
  }
})