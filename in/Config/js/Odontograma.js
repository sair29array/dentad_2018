var app = new Vue({
  el: '#Odontograma',
  data: {
    message: '',
    id_paciente_seleccionado : id_paciente_seleccionado,
    select_bien: false,
    select_mal: false
  },

  methods:
  {
  	Seleccionar_paciente()
  	{
  		this.id_paciente_seleccionado = id_paciente_seleccionado;
  		if (this.id_paciente_seleccionado != 0) {this.select_bien = true; this.select_mal = false;}
  		else{this.select_mal = true; this.select_bien = false;}

  		// ---- 
  		if (this.select_bien) 
  		{
  			window.location="./?view=Odontograma&id="+this.id_paciente_seleccionado;
  		}
  	}
  }

})