var app = new Vue({
  el: '#Odontograma',
  data: {
    message: '',
    id_paciente_seleccionado : id_paciente_seleccionado,
    select_bien: false,
    select_mal: false,


    // /show recuadros: 
    all_recuadros: true,  // todos los recuadros se ven
    showRecuadroIndividual: false, // indicará que recuadro se vera en particual (el que un user ha seleccionado)
    recuadro_1: false, // derecha superior
    recuadro_2: false, // derecha inferior
    recuadro_3: false, // izquierda superior
    recuadro_4: false, // izquierda inferior

    /// DIentes seleccionados: 
    select_11: false,
    select_12: false,
    select_13: false,
    select_14: false,
    select_15: false,
    select_16: false,
    select_17: false,
    select_18: false,

    select_41: false,
    select_42: false,
    select_43: false,
    select_44: false,
    select_45: false,
    select_46: false,
    select_47: false,
    select_48: false,

    select_21: false,
    select_22: false,
    select_23: false,
    select_24: false,
    select_25: false,
    select_26: false,
    select_27: false,
    select_28: false,

    select_31: false,
    select_32: false,
    select_33: false,
    select_34: false,
    select_35: false,
    select_36: false,
    select_37: false,
    select_38: false,

    /////// AgregarAnotacionOTratamientoAUndienteEnParticular:
    AgregarAnotacionOTratamientoAUndienteEnParticular: false
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
  	},

  	VerRecuadroIndividual(r)
  	{
  		if (r == 1) 
  		{
  			this.all_recuadros = false;
  			this.showRecuadroIndividual = 1;
  			this.recuadro_1 = true; // ponerse grande


  			// seleccionamos todos los dientes que pertenecen a este recuadro:
  			 this.select_11 =  true;
			 this.select_12 =  true;
			 this.select_13 =  true;
			 this.select_14 =  true;
			 this.select_15 =  true;
			 this.select_16 =  true;
			 this.select_17 =  true;
			 this.select_18 =  true;  		
		}else if (r == 2) 
		{
			this.all_recuadros = false;
  			this.showRecuadroIndividual = 2;
  			this.recuadro_2 = true; // ponerse grande


  			// seleccionamos todos los dientes que pertenecen a este recuadro:
  			 this.select_41 =  true;
			 this.select_42 =  true;
			 this.select_43 =  true;
			 this.select_44 =  true;
			 this.select_45 =  true;
			 this.select_46 =  true;
			 this.select_47 =  true;
			 this.select_48 =  true;  
		}else if (r == 3) 
		{
			this.all_recuadros = false;
  			this.showRecuadroIndividual = 3;
  			this.recuadro_3 = true; // ponerse grande


  			// seleccionamos todos los dientes que pertenecen a este recuadro:
  			 this.select_21 =  true;
			 this.select_22 =  true;
			 this.select_23 =  true;
			 this.select_24 =  true;
			 this.select_25 =  true;
			 this.select_26 =  true;
			 this.select_27 =  true;
			 this.select_28 =  true;  
		}else if (r == 4) 
		{
			this.all_recuadros = false;
  			this.showRecuadroIndividual = 4;
  			this.recuadro_4 = true; // ponerse grande


  			// seleccionamos todos los dientes que pertenecen a este recuadro:
  			 this.select_31 =  true;
			 this.select_32 =  true;
			 this.select_33 =  true;
			 this.select_34 =  true;
			 this.select_35 =  true;
			 this.select_36 =  true;
			 this.select_37 =  true;
			 this.select_38 =  true;  
		}
  	},

  	ShowAll_recuadros() // ver todos los recuadros
  	{
  		this.all_recuadros = true;
  			this.showRecuadroIndividual = false;
  			this.recuadro_1 = false; // poner pequeño
  			this.recuadro_2 = false; // poner pequeño
  			this.recuadro_3 = false; // poner pequeño
  			this.recuadro_4 = false; // poner pequeño


  			// seleccionamos todos los dientes que pertenecen a este recuadro:
  			 this.select_11 =  false;
			 this.select_12 =  false;
			 this.select_13 =  false;
			 this.select_14 =  false;
			 this.select_15 =  false;
			 this.select_16 =  false;
			 this.select_17 =  false;
			 this.select_18 =  false; 

			 this.select_41 =  false;
			 this.select_42 =  false;
			 this.select_43 =  false;
			 this.select_44 =  false;
			 this.select_45 =  false;
			 this.select_46 =  false;
			 this.select_47 =  false;
			 this.select_48 =  false;  		


			 this.select_21 =  false;
			 this.select_22 =  false;
			 this.select_23 =  false;
			 this.select_24 =  false;
			 this.select_25 =  false;
			 this.select_26 =  false;
			 this.select_27 =  false;
			 this.select_28 =  false;  

			 this.select_31 =  false;
			 this.select_32 =  false;
			 this.select_33 =  false;
			 this.select_34 =  false;
			 this.select_35 =  false;
			 this.select_36 =  false;
			 this.select_37 =  false;
			 this.select_38 =  false;  
  	},

  	AgregarAnotacionOTratamientoAUndienteEnParticular_(pieza)
  	{
  	  
  	  if (pieza == 11) {this.AgregarAnotacionOTratamientoAUndienteEnParticular = 11;}
  	  if (pieza == 12) {this.AgregarAnotacionOTratamientoAUndienteEnParticular = 12;}
  	  if (pieza == 13) {this.AgregarAnotacionOTratamientoAUndienteEnParticular = 13;}
  	  if (pieza == 14) {this.AgregarAnotacionOTratamientoAUndienteEnParticular = 14;}
  	  if (pieza == 15) {this.AgregarAnotacionOTratamientoAUndienteEnParticular = 15;}
  	  if (pieza == 16) {this.AgregarAnotacionOTratamientoAUndienteEnParticular = 16;}
  	  if (pieza == 17) {this.AgregarAnotacionOTratamientoAUndienteEnParticular = 17;}
  	  if (pieza == 18) {this.AgregarAnotacionOTratamientoAUndienteEnParticular = 18;}


  	  if (pieza == 41) {this.AgregarAnotacionOTratamientoAUndienteEnParticular = 41;}
  	  if (pieza == 42) {this.AgregarAnotacionOTratamientoAUndienteEnParticular = 42;}
  	  if (pieza == 43) {this.AgregarAnotacionOTratamientoAUndienteEnParticular = 43;}
  	  if (pieza == 44) {this.AgregarAnotacionOTratamientoAUndienteEnParticular = 44;}
  	  if (pieza == 45) {this.AgregarAnotacionOTratamientoAUndienteEnParticular = 45;}
  	  if (pieza == 46) {this.AgregarAnotacionOTratamientoAUndienteEnParticular = 46;}
  	  if (pieza == 47) {this.AgregarAnotacionOTratamientoAUndienteEnParticular = 47;}
  	  if (pieza == 48) {this.AgregarAnotacionOTratamientoAUndienteEnParticular = 48;}


  	  if (pieza == 21) {this.AgregarAnotacionOTratamientoAUndienteEnParticular = 21;}
  	  if (pieza == 22) {this.AgregarAnotacionOTratamientoAUndienteEnParticular = 22;}
  	  if (pieza == 23) {this.AgregarAnotacionOTratamientoAUndienteEnParticular = 23;}
  	  if (pieza == 24) {this.AgregarAnotacionOTratamientoAUndienteEnParticular = 24;}
  	  if (pieza == 25) {this.AgregarAnotacionOTratamientoAUndienteEnParticular = 25;}
  	  if (pieza == 26) {this.AgregarAnotacionOTratamientoAUndienteEnParticular = 26;}
  	  if (pieza == 27) {this.AgregarAnotacionOTratamientoAUndienteEnParticular = 27;}
  	  if (pieza == 28) {this.AgregarAnotacionOTratamientoAUndienteEnParticular = 28;}


  	  if (pieza == 31) {this.AgregarAnotacionOTratamientoAUndienteEnParticular = 31;}
  	  if (pieza == 32) {this.AgregarAnotacionOTratamientoAUndienteEnParticular = 32;}
  	  if (pieza == 33) {this.AgregarAnotacionOTratamientoAUndienteEnParticular = 33;}
  	  if (pieza == 34) {this.AgregarAnotacionOTratamientoAUndienteEnParticular = 34;}
  	  if (pieza == 35) {this.AgregarAnotacionOTratamientoAUndienteEnParticular = 35;}
  	  if (pieza == 36) {this.AgregarAnotacionOTratamientoAUndienteEnParticular = 36;}
  	  if (pieza == 37) {this.AgregarAnotacionOTratamientoAUndienteEnParticular = 37;}
  	  if (pieza == 38) {this.AgregarAnotacionOTratamientoAUndienteEnParticular = 38;}

  	}

  }

})