var app = new Vue({
  el: '#Odontograma',
  data: {
    fecha_actual: fecha_actual,
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
    select1118: false,
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

    /// DENTICION TEMPORAL:_
    select_51: false,
    select_52: false,
    select_53: false,
    select_54: false,
    select_55: false,

    select_81: false,
    select_82: false,
    select_83: false,
    select_84: false,
    select_85: false,

    select_61: false,
    select_62: false,
    select_63: false,
    select_64: false,
    select_65: false,

    select_71: false,
    select_72: false,
    select_73: false,
    select_74: false,
    select_75: false,

    /////// AgregarAnotacionOTratamientoAUndienteEnParticular:
    AgregarAnotacionOTratamientoAUndienteEnParticular: false,


    /// -----Agregar un diagnostico o un tratamiento a un diente recuadro 1 :
      id_diagnostico: id_diagnostico,
      id_tratamiento: id_tratamiento,
      messageAddTragDiag: false,
      messageAddTragDiagPieza : false,

      // estados del tratamiento r1:
      tratamientoEnProceso: false,
      tratamientoFinalizado: false,
      messageEStadoTratamiento: false,

    /// -----Agregar un diagnostico o un tratamiento a un diente recuadro 2 :
      id_diagnosticor2: id_diagnosticor2,
      id_tratamientor2: id_tratamientor2,
      messageAddTragDiagr2: false,
      messageAddTragDiagPiezar2 : false,

      // estados del tratamiento r1:
      tratamientoEnProcesor2: false,
      tratamientoFinalizador2: false,
      messageEStadoTratamientor2: false,


    /// -----Agregar un diagnostico o un tratamiento a un diente recuadro 3 :
      id_diagnosticor3: id_diagnosticor3,
      id_tratamientor3: id_tratamientor3,
      messageAddTragDiagr3: false,
      messageAddTragDiagPiezar3 : false,

      // estados del tratamiento r1:
      tratamientoEnProcesor3: false,
      tratamientoFinalizador3: false,
      messageEStadoTratamientor3: false,



    /// -----Agregar un diagnostico o un tratamiento a un diente recuadro 3 :
      id_diagnosticor4: id_diagnosticor4,
      id_tratamientor4: id_tratamientor4,
      messageAddTragDiagr4: false,
      messageAddTragDiagPiezar4 : false,

      // estados del tratamiento r1:
      tratamientoEnProcesor4: false,
      tratamientoFinalizador4: false,
      messageEStadoTratamientor4: false,



  ////---------------------------////////////
  ////RECUADROS DE DENTICION///////////
      DenticionTemporal : false,
      DenticionPermanente : false,

    //////variables para cuando el user quiere agregar un diagnostico o un tratamiento a 
    /// varios dientes o piezas de un recuadro
    messageAddTragDiagVarios: false,
    btn_loading: false  // cuando se ejecute una accion debe aparecder este boton de !!cargando! para cuando la red o internet del user este lent



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
  			window.location="./?view=Odontograma&id="+this.id_paciente_seleccionado+"&Idr=1";
		}else if (r == 2) 
		{
			window.location="./?view=Odontograma&id="+this.id_paciente_seleccionado+"&Idr=2";
		}else if (r == 3) 
		{
			window.location="./?view=Odontograma&id="+this.id_paciente_seleccionado+"&Idr=3";
		}else if (r == 4) 
		{
			window.location="./?view=Odontograma&id="+this.id_paciente_seleccionado+"&Idr=4";
		}
  	},

  	ShowAll_recuadros() // ver todos los recuadros
  	{
      window.location="./?view=Odontograma&id="+this.id_paciente_seleccionado;  		
  	},

  	AgregarAnotacionOTratamientoAUndienteEnParticular_(pieza)
  	{
  	  
  	  if (pieza == 11) {this.AgregarAnotacionOTratamientoAUndienteEnParticular = 11; this.select1118 = true;}
  	  if (pieza == 12) {this.AgregarAnotacionOTratamientoAUndienteEnParticular = 12; this.select1118 = true;}
  	  if (pieza == 13) {this.AgregarAnotacionOTratamientoAUndienteEnParticular = 13; this.select1118 = true;}
  	  if (pieza == 14) {this.AgregarAnotacionOTratamientoAUndienteEnParticular = 14; this.select1118 = true;}
  	  if (pieza == 15) {this.AgregarAnotacionOTratamientoAUndienteEnParticular = 15; this.select1118 = true;}
  	  if (pieza == 16) {this.AgregarAnotacionOTratamientoAUndienteEnParticular = 16; this.select1118 = true;}
  	  if (pieza == 17) {this.AgregarAnotacionOTratamientoAUndienteEnParticular = 17; this.select1118 = true;}
  	  if (pieza == 18) {this.AgregarAnotacionOTratamientoAUndienteEnParticular = 18; this.select1118 = true;}


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

      // DEntición temporal__::
      if (pieza == 51) {this.AgregarAnotacionOTratamientoAUndienteEnParticular = 51;}
      if (pieza == 52) {this.AgregarAnotacionOTratamientoAUndienteEnParticular = 52;}
      if (pieza == 53) {this.AgregarAnotacionOTratamientoAUndienteEnParticular = 53;}
      if (pieza == 54) {this.AgregarAnotacionOTratamientoAUndienteEnParticular = 54;}
      if (pieza == 55) {this.AgregarAnotacionOTratamientoAUndienteEnParticular = 55;}

      if (pieza == 81) {this.AgregarAnotacionOTratamientoAUndienteEnParticular = 81;}
      if (pieza == 82) {this.AgregarAnotacionOTratamientoAUndienteEnParticular = 82;}
      if (pieza == 83) {this.AgregarAnotacionOTratamientoAUndienteEnParticular = 83;}
      if (pieza == 84) {this.AgregarAnotacionOTratamientoAUndienteEnParticular = 84;}
      if (pieza == 85) {this.AgregarAnotacionOTratamientoAUndienteEnParticular = 85;}

      if (pieza == 61) {this.AgregarAnotacionOTratamientoAUndienteEnParticular = 61;}
      if (pieza == 62) {this.AgregarAnotacionOTratamientoAUndienteEnParticular = 62;}
      if (pieza == 63) {this.AgregarAnotacionOTratamientoAUndienteEnParticular = 63;}
      if (pieza == 64) {this.AgregarAnotacionOTratamientoAUndienteEnParticular = 64;}
      if (pieza == 65) {this.AgregarAnotacionOTratamientoAUndienteEnParticular = 65;}

      if (pieza == 71) {this.AgregarAnotacionOTratamientoAUndienteEnParticular = 71;}
      if (pieza == 72) {this.AgregarAnotacionOTratamientoAUndienteEnParticular = 72;}
      if (pieza == 73) {this.AgregarAnotacionOTratamientoAUndienteEnParticular = 73;}
      if (pieza == 74) {this.AgregarAnotacionOTratamientoAUndienteEnParticular = 74;}
      if (pieza == 75) {this.AgregarAnotacionOTratamientoAUndienteEnParticular = 75;}
  	},
  

    addTraDiagRecuadro1() // add diagnostico o tratamiento a un diente del recuadro 1
    {

      this.id_diagnostico = id_diagnostico;
      this.id_tratamiento = id_tratamiento;
      /// esta función permitirá agregar un tratatamiento o un diagnostico a un diente
      var er = 0;
      if (this.id_tratamiento == "" && this.id_diagnostico == "") 
        {this.messageAddTragDiag = "2. ¿Qué quieres hacer?"; er++;}
      
      if (this.AgregarAnotacionOTratamientoAUndienteEnParticular == false) 
      {
        this.messageAddTragDiagPieza = "1. Elige la pieza a la que le deseas agregar un diagnóstico o un tratamiento:";
        er++;        
      }
      if (er == 0) 
      {

        if (this.id_tratamiento != "") 
        {
          if (this.tratamientoFinalizado == false && this.tratamientoEnProceso == false) 
            {this.messageEStadoTratamiento = "Define en que estado se encuentra el tratamiento:";}
            else {this.messageEStadoTratamiento = false;}
        }
        
            if (this.messageEStadoTratamiento == false) 
            {
              // enviar a php para guardar en la DB: 
        // make ajax request and pass the data. I'm not certain how to do it with axios but something along the lines of this
                 var formData = new FormData();
              formData.append('piezaDIente',this.AgregarAnotacionOTratamientoAUndienteEnParticular);
              formData.append('id_paciente_seleccionado', this.id_paciente_seleccionado);
              formData.append('id_tratamiento', this.id_tratamiento);
              formData.append('id_diagnostico', this.id_diagnostico);
              formData.append('fecha_actual', this.fecha_actual);
              if (this.tratamientoFinalizado) 
              {
                 formData.append('estado_tratamiento', 2);
              }else if (this.tratamientoEnProceso) 
              {
                formData.append('estado_tratamiento', 1);
              }
             


            

                      axios.post("Config/sql/sql_add_diagnostico_o_tratamiento.php?action=read",formData)
                              .then(function(response) {
                  
                  console.log(response);
                      datos = response.data;
                      
              if (datos.resul == 1 )
                {
                  window.location="./?view=Odontograma&id="+this.id_paciente_seleccionado;
                }
              
                                      
                              })
                              .catch(function (error) {
                                  console.log(error);
                              });
            }   
             
      }
    },










    addTraDiagRecuadro2() // add diagnostico o tratamiento a un diente del recuadro 2
    {

      this.id_diagnosticor2 = id_diagnosticor2;
      this.id_tratamientor2 = id_tratamientor2;
      /// esta función permitirá agregar un tratatamiento o un diagnostico a un diente
      var err = 0;
      if (this.id_tratamientor2 == "" && this.id_diagnosticor2 == "") 
        {this.messageAddTragDiagr2 = "2. ¿Qué quieres hacer?"; err++;}
      
      if (this.AgregarAnotacionOTratamientoAUndienteEnParticular == false) 
      {
        this.messageAddTragDiagPiezar2 = "1. Elige la pieza a la que le deseas agregar un diagnóstico o un tratamiento:";
        err++;        
      }
      if (err == 0) 
      {

        if (this.id_tratamientor2 != "") 
        {
          if (this.tratamientoFinalizador2 == false && this.tratamientoEnProcesor2 == false) 
            {this.messageEStadoTratamientor2 = "Define en que estado se encuentra el tratamiento:";}
            else {this.messageEStadoTratamientor2 = false;}
        }
        
            if (this.messageEStadoTratamientor2 == false) 
            {
              // enviar a php para guardar en la DB: 
        // make ajax request and pass the data. I'm not certain how to do it with axios but something along the lines of this
                 var formData = new FormData();
              formData.append('piezaDIente',this.AgregarAnotacionOTratamientoAUndienteEnParticular);
              formData.append('id_paciente_seleccionado', this.id_paciente_seleccionado);
              formData.append('id_tratamiento', this.id_tratamientor2);
              formData.append('id_diagnostico', this.id_diagnosticor2);
              formData.append('fecha_actual', this.fecha_actual);
              if (this.tratamientoFinalizador2) 
              {
                 formData.append('estado_tratamiento', 2);
              }else if (this.tratamientoEnProcesor2) 
              {
                formData.append('estado_tratamiento', 1);
              }
             


            

                      axios.post("Config/sql/sql_add_diagnostico_o_tratamiento.php?action=read",formData)
                              .then(function(response) {
                  
                  console.log(response);
                      datos = response.data;
                      
              if (datos.resul == 1 )
                {
                  window.location="./?view=Odontograma&id="+this.id_paciente_seleccionado;
                }
              
                                      
                              })
                              .catch(function (error) {
                                  console.log(error);
                              });
            }   
             
      }
    },









    addTraDiagRecuadro3() // add diagnostico o tratamiento a un diente del recuadro 3
    {

      this.id_diagnosticor3 = id_diagnosticor3;
      this.id_tratamientor3 = id_tratamientor3;
      /// esta función permitirá agregar un tratatamiento o un diagnostico a un diente
      var errr = 0;
      if (this.id_tratamientor3 == "" && this.id_diagnosticor3 == "") 
        {this.messageAddTragDiagr3 = "2. ¿Qué quieres hacer?"; errr++;}
      
      if (this.AgregarAnotacionOTratamientoAUndienteEnParticular == false) 
      {
        this.messageAddTragDiagPiezar3 = "1. Elige la pieza a la que le deseas agregar un diagnóstico o un tratamiento:";
        errr++;        
      }
      if (errr == 0) 
      {

        if (this.id_tratamientor3 != "") 
        {
          if (this.tratamientoFinalizador3 == false && this.tratamientoEnProcesor3 == false) 
            {this.messageEStadoTratamientor3 = "Define en que estado se encuentra el tratamiento:";}
            else {this.messageEStadoTratamientor3 = false;}
        }
        
            if (this.messageEStadoTratamientor3 == false) 
            {
              // enviar a php para guardar en la DB: 
        // make ajax request and pass the data. I'm not certain how to do it with axios but something along the lines of this
                 var formData = new FormData();
              formData.append('piezaDIente',this.AgregarAnotacionOTratamientoAUndienteEnParticular);
              formData.append('id_paciente_seleccionado', this.id_paciente_seleccionado);
              formData.append('id_tratamiento', this.id_tratamientor3);
              formData.append('id_diagnostico', this.id_diagnosticor3);
              formData.append('fecha_actual', this.fecha_actual);
              if (this.tratamientoFinalizador3) 
              {
                 formData.append('estado_tratamiento', 2);
              }else if (this.tratamientoEnProcesor3) 
              {
                formData.append('estado_tratamiento', 1);
              }
             


            

                      axios.post("Config/sql/sql_add_diagnostico_o_tratamiento.php?action=read",formData)
                              .then(function(response) {
                  
                  console.log(response);
                      datos = response.data;
                      
              if (datos.resul == 1 )
                {
                  window.location="./?view=Odontograma&id="+this.id_paciente_seleccionado;
                }
              
                                      
                              })
                              .catch(function (error) {
                                  console.log(error);
                              });
            }   
             
      }
    },







    addTraDiagRecuadro4() // add diagnostico o tratamiento a un diente del recuadro 3
    {

      this.id_diagnosticor4 = id_diagnosticor4;
      this.id_tratamientor4 = id_tratamientor4;
      /// esta función permitirá agregar un tratatamiento o un diagnostico a un diente
      var errrr = 0;
      if (this.id_tratamientor4 == "" && this.id_diagnosticor4 == "") 
        {this.messageAddTragDiagr4 = "2. ¿Qué quieres hacer?"; errrr++;}
      
      if (this.AgregarAnotacionOTratamientoAUndienteEnParticular == false) 
      {
        this.messageAddTragDiagPiezar4 = "1. Elige la pieza a la que le deseas agregar un diagnóstico o un tratamiento:";
        errrr++;        
      }
      if (errrr == 0) 
      {

        if (this.id_tratamientor4 != "") 
        {
          if (this.tratamientoFinalizador4 == false && this.tratamientoEnProcesor4 == false) 
            {this.messageEStadoTratamientor4 = "Define en que estado se encuentra el tratamiento:";}
            else {this.messageEStadoTratamientor4 = false;}
        }
        
            if (this.messageEStadoTratamientor4 == false) 
            {
              // enviar a php para guardar en la DB: 
        // make ajax request and pass the data. I'm not certain how to do it with axios but something along the lines of this
                 var formData = new FormData();
              formData.append('piezaDIente',this.AgregarAnotacionOTratamientoAUndienteEnParticular);
              formData.append('id_paciente_seleccionado', this.id_paciente_seleccionado);
              formData.append('id_tratamiento', this.id_tratamientor4);
              formData.append('id_diagnostico', this.id_diagnosticor4);
              formData.append('fecha_actual', this.fecha_actual);
              if (this.tratamientoFinalizador4) 
              {
                 formData.append('estado_tratamiento', 2);
              }else if (this.tratamientoEnProcesor4) 
              {
                formData.append('estado_tratamiento', 1);
              }
             


            

                      axios.post("Config/sql/sql_add_diagnostico_o_tratamiento.php?action=read",formData)
                              .then(function(response) {
                  
                  console.log(response);
                      datos = response.data;
                      
              if (datos.resul == 1 )
                {
                  window.location="./?view=Odontograma&id="+this.id_paciente_seleccionado;
                }
              
                                      
                              })
                              .catch(function (error) {
                                  console.log(error);
                              });
            }   
             
      }
    },



    abrirDenticionTemporal()
    {
      this.DenticionTemporal = !this.DenticionTemporal;
    },


    abrirDenticionPermanente()
    {
      this.DenticionPermanente = true;
    },




    cerrarRecuadroDenticion()
    {
      this.DenticionPermanente = false;
      this.DenticionTemporal = false;
    },


















    ////////// Cuando el user desea registrar diagnosticos o tratamientos a varios
    // dientes de un recuadro :

    addTraDiagVariasPiezas(recuadro)
    {   
      
        // defino el diagnostico y el trata miento que probablemente haya seldcccionado el user
        this.id_diagnostico = id_diagnostico;
        this.id_tratamiento = id_tratamiento;
       

      

          if (recuadro == 1) 
          {
             var x = 0; // indica si hubo o no la selecion de un diag o uin trat
             /// si ninguna de las piezas due seleccionada entonces no será
            // posible cumplir con la misión
             if (this.select_11 == false && this.select_12 == false &&
            this.select_13 == false && this.select_14 == false &&
            this.select_15 == false && this.select_16 == false &&
            this.select_17 == false && this.select_18 == false &&
            this.select_51 == false && this.select_52 == false &&
            this.select_53 == false && this.select_54 == false &&
            this.select_55 == false) 
            {x++; this.messageAddTragDiagPieza ="1. selecciona las piezas a las que deseas agregar un diagnóstico o un tratamiento: ";}
           

               
               if (this.id_diagnostico == "" && this.id_tratamiento == "") 
                {
                  this.messageAddTragDiag = "2. ¿Qué quieres hacer?";
                  x++;
                }



                if (this.id_tratamiento != "") 
                {
                  if (this.tratamientoFinalizado == false && this.tratamientoEnProceso == false) 
                    {x++; this.messageEStadoTratamiento = "Define en que estado se encuentra el tratamiento:";}
                    else {this.messageEStadoTratamiento = false;}
                }

                if (x == 0) 
                {
                  this.btn_loading = true;
                    // enviar a php para guardar en la DB: 
                  // make ajax request and pass the data. I'm not certain how to do it with axios but something along the lines of this
                    var formData = new FormData();
                  // indicamos el recuadro que el user selecciono:
                  formData.append('recuadro', 1); // recuadro 1

                  formData.append('id_paciente_seleccionado', this.id_paciente_seleccionado);
                  formData.append('id_tratamiento', this.id_tratamiento);
                  formData.append('id_diagnostico', this.id_diagnostico);
                  formData.append('fecha_actual', this.fecha_actual);
                  if (this.tratamientoFinalizado) 
                  {
                     formData.append('estado_tratamiento', 2);
                  }else if (this.tratamientoEnProceso) 
                  {
                    formData.append('estado_tratamiento', 1);
                  }
                  
                  // enviar piezas 
                  if (this.select_11 == true) {formData.append('select_11', 1);} /// el 1 indica que si se le va a agregar el diagnostico o el taratamiento
                  else {formData.append('select_11', 0);}

                  if (this.select_12 == true) {formData.append('select_12', 1);} /// el 1 indica que si se le va a agregar el diagnostico o el taratamiento
                  else {formData.append('select_12', 0);}

                  if (this.select_13 == true) {formData.append('select_13', 1);} /// el 1 indica que si se le va a agregar el diagnostico o el taratamiento
                  else {formData.append('select_13', 0);}

                  if (this.select_14 == true) {formData.append('select_14', 1);} /// el 1 indica que si se le va a agregar el diagnostico o el taratamiento
                  else {formData.append('select_14', 0);}

                  if (this.select_15 == true) {formData.append('select_15', 1);} /// el 1 indica que si se le va a agregar el diagnostico o el taratamiento
                  else {formData.append('select_15', 0);}

                  if (this.select_16 == true) {formData.append('select_16', 1);} /// el 1 indica que si se le va a agregar el diagnostico o el taratamiento
                  else {formData.append('select_16', 0);}

                  if (this.select_17 == true) {formData.append('select_17', 1);} /// el 1 indica que si se le va a agregar el diagnostico o el taratamiento
                  else {formData.append('select_17', 0);}

                  if (this.select_18 == true) {formData.append('select_18', 1);} /// el 1 indica que si se le va a agregar el diagnostico o el taratamiento
                  else {formData.append('select_18', 0);}

                  // denticion temporal:
                  if (this.select_51 == true) {formData.append('select_51', 1);} /// el 1 indica que si se le va a agregar el diagnostico o el taratamiento
                  else {formData.append('select_51', 0);}
                  if (this.select_52 == true) {formData.append('select_52', 1);} /// el 1 indica que si se le va a agregar el diagnostico o el taratamiento
                  else {formData.append('select_52', 0);}
                  if (this.select_53 == true) {formData.append('select_53', 1);} /// el 1 indica que si se le va a agregar el diagnostico o el taratamiento
                  else {formData.append('select_53', 0);}
                  if (this.select_54 == true) {formData.append('select_54', 1);} /// el 1 indica que si se le va a agregar el diagnostico o el taratamiento
                  else {formData.append('select_54', 0);}
                  if (this.select_55 == true) {formData.append('select_55', 1);} /// el 1 indica que si se le va a agregar el diagnostico o el taratamiento
                  else {formData.append('select_55', 0);}




                  axios.post("Config/sql/sql_add_diagnostico_o_tratamiento_a_varias_piezas.php?action=read",formData)
                                  .then(function(response) {
                      
                      console.log(response);
                          datos = response.data;
                          
                  if (datos.resul == 1 )
                    {
                      window.location="./?view=Odontograma&id="+this.id_paciente_seleccionado;
                    }
                  
                                          
                                  })
                                  .catch(function (error) {
                                      console.log(error);
                                  });

                                  
                }
            
          }


          else if (recuadro == 2) 
          {
             var xx = 0; // indica si hubo o no la selecion de un diag o uin trat
             /// si ninguna de las piezas due seleccionada entonces no será
            // posible cumplir con la misión
             if (this.select_41 == false && this.select_42 == false &&
            this.select_43 == false && this.select_44 == false &&
            this.select_45 == false && this.select_46 == false &&
            this.select_47 == false && this.select_48 == false &&
            this.select_81 == false && this.select_82 == false &&
            this.select_83 == false && this.select_84 == false &&
            this.select_85 == false) 
            {xx++; this.messageAddTragDiagPieza ="1. selecciona las piezas a las que deseas agregar un diagnóstico o un tratamiento: ";}
            


                if (this.id_diagnostico == "" && this.id_tratamiento == "") 
                {
                  this.messageAddTragDiag = "2. ¿Qué quieres hacer?";
                  xx++;
                }



                if (this.id_tratamiento != "") 
                {
                  if (this.tratamientoFinalizado == false && this.tratamientoEnProceso == false) 
                    {xx++; this.messageEStadoTratamiento = "Define en que estado se encuentra el tratamiento:";}
                    else {this.messageEStadoTratamiento = false;}
                }

              if (xx == 0) 
              {
                    this.btn_loading = true;
                    // enviar a php para guardar en la DB: 
                  // make ajax request and pass the data. I'm not certain how to do it with axios but something along the lines of this
                    var formData = new FormData();
                  // indicamos el recuadro que el user selecciono:
                  formData.append('recuadro', 2); // recuadro 2

                  formData.append('id_paciente_seleccionado', this.id_paciente_seleccionado);
                  formData.append('id_tratamiento', this.id_tratamiento);
                  formData.append('id_diagnostico', this.id_diagnostico);
                  formData.append('fecha_actual', this.fecha_actual);
                  if (this.tratamientoFinalizado) 
                  {
                     formData.append('estado_tratamiento', 2);
                  }else if (this.tratamientoEnProceso) 
                  {
                    formData.append('estado_tratamiento', 1);
                  }
                  
                  // enviar piezas 
                  if (this.select_41 == true) {formData.append('select_41', 1);} /// el 1 indica que si se le va a agregar el diagnostico o el taratamiento
                  else {formData.append('select_41', 0);}

                  if (this.select_42 == true) {formData.append('select_42', 1);} /// el 1 indica que si se le va a agregar el diagnostico o el taratamiento
                  else {formData.append('select_42', 0);}

                  if (this.select_43 == true) {formData.append('select_43', 1);} /// el 1 indica que si se le va a agregar el diagnostico o el taratamiento
                  else {formData.append('select_43', 0);}

                  if (this.select_44 == true) {formData.append('select_44', 1);} /// el 1 indica que si se le va a agregar el diagnostico o el taratamiento
                  else {formData.append('select_44', 0);}

                  if (this.select_45 == true) {formData.append('select_45', 1);} /// el 1 indica que si se le va a agregar el diagnostico o el taratamiento
                  else {formData.append('select_45', 0);}

                  if (this.select_46 == true) {formData.append('select_46', 1);} /// el 1 indica que si se le va a agregar el diagnostico o el taratamiento
                  else {formData.append('select_46', 0);}

                  if (this.select_47 == true) {formData.append('select_47', 1);} /// el 1 indica que si se le va a agregar el diagnostico o el taratamiento
                  else {formData.append('select_47', 0);}

                  if (this.select_48 == true) {formData.append('select_48', 1);} /// el 1 indica que si se le va a agregar el diagnostico o el taratamiento
                  else {formData.append('select_48', 0);}

                  // denticion temporal:
                  if (this.select_81 == true) {formData.append('select_81', 1);} /// el 1 indica que si se le va a agregar el diagnostico o el taratamiento
                  else {formData.append('select_81', 0);}
                  if (this.select_82 == true) {formData.append('select_82', 1);} /// el 1 indica que si se le va a agregar el diagnostico o el taratamiento
                  else {formData.append('select_82', 0);}
                  if (this.select_83 == true) {formData.append('select_83', 1);} /// el 1 indica que si se le va a agregar el diagnostico o el taratamiento
                  else {formData.append('select_83', 0);}
                  if (this.select_84 == true) {formData.append('select_84', 1);} /// el 1 indica que si se le va a agregar el diagnostico o el taratamiento
                  else {formData.append('select_84', 0);}
                  if (this.select_85 == true) {formData.append('select_85', 1);} /// el 1 indica que si se le va a agregar el diagnostico o el taratamiento
                  else {formData.append('select_85', 0);}




                  axios.post("Config/sql/sql_add_diagnostico_o_tratamiento_a_varias_piezas.php?action=read",formData)
                                  .then(function(response) {
                      
                      console.log(response);
                          datos = response.data;
                          
                  if (datos.resul == 1 )
                    {
                      window.location="./?view=Odontograma&id="+this.id_paciente_seleccionado;
                    }
                  
                                          
                                  })
                                  .catch(function (error) {
                                      console.log(error);
                                  });
              }
          }




          if (recuadro == 3) 
          {
             var xxx = 0; // indica si hubo o no la selecion de un diag o uin trat
             /// si ninguna de las piezas due seleccionada entonces no será
            // posible cumplir con la misión
             if (this.select_21 == false && this.select_22 == false &&
            this.select_23 == false && this.select_24 == false &&
            this.select_25 == false && this.select_26 == false &&
            this.select_27 == false && this.select_28 == false &&
            this.select_61 == false && this.select_62 == false &&
            this.select_63 == false && this.select_64 == false &&
            this.select_65 == false) 
            {xxx++; this.messageAddTragDiagPieza ="1. selecciona las piezas a las que deseas agregar un diagnóstico o un tratamiento: ";}

                if (this.id_diagnostico == "" && this.id_tratamiento == "") 
                {
                  this.messageAddTragDiag = "2. ¿Qué quieres hacer?";
                  xxx++;
                }



                if (this.id_tratamiento != "") 
                {
                  if (this.tratamientoFinalizado == false && this.tratamientoEnProceso == false) 
                    {xxx++; this.messageEStadoTratamiento = "Define en que estado se encuentra el tratamiento:";}
                    else {this.messageEStadoTratamiento = false;}
                }


                if (xxx == 0) 
                {
                        this.btn_loading = true;
                    // enviar a php para guardar en la DB: 
                  // make ajax request and pass the data. I'm not certain how to do it with axios but something along the lines of this
                    var formData = new FormData();
                  // indicamos el recuadro que el user selecciono:
                  formData.append('recuadro', 3); // recuadro 2

                  formData.append('id_paciente_seleccionado', this.id_paciente_seleccionado);
                  formData.append('id_tratamiento', this.id_tratamiento);
                  formData.append('id_diagnostico', this.id_diagnostico);
                  formData.append('fecha_actual', this.fecha_actual);
                  if (this.tratamientoFinalizado) 
                  {
                     formData.append('estado_tratamiento', 2);
                  }else if (this.tratamientoEnProceso) 
                  {
                    formData.append('estado_tratamiento', 1);
                  }
                  
                  // enviar piezas 
                  if (this.select_21 == true) {formData.append('select_21', 1);} /// el 1 indica que si se le va a agregar el diagnostico o el taratamiento
                  else {formData.append('select_21', 0);}

                  if (this.select_22 == true) {formData.append('select_22', 1);} /// el 1 indica que si se le va a agregar el diagnostico o el taratamiento
                  else {formData.append('select_22', 0);}

                  if (this.select_23 == true) {formData.append('select_23', 1);} /// el 1 indica que si se le va a agregar el diagnostico o el taratamiento
                  else {formData.append('select_23', 0);}

                  if (this.select_24 == true) {formData.append('select_24', 1);} /// el 1 indica que si se le va a agregar el diagnostico o el taratamiento
                  else {formData.append('select_24', 0);}

                  if (this.select_25 == true) {formData.append('select_25', 1);} /// el 1 indica que si se le va a agregar el diagnostico o el taratamiento
                  else {formData.append('select_25', 0);}

                  if (this.select_26 == true) {formData.append('select_26', 1);} /// el 1 indica que si se le va a agregar el diagnostico o el taratamiento
                  else {formData.append('select_26', 0);}

                  if (this.select_27 == true) {formData.append('select_27', 1);} /// el 1 indica que si se le va a agregar el diagnostico o el taratamiento
                  else {formData.append('select_27', 0);}

                  if (this.select_28 == true) {formData.append('select_28', 1);} /// el 1 indica que si se le va a agregar el diagnostico o el taratamiento
                  else {formData.append('select_28', 0);}

                  // denticion temporal:
                  if (this.select_61 == true) {formData.append('select_61', 1);} /// el 1 indica que si se le va a agregar el diagnostico o el taratamiento
                  else {formData.append('select_61', 0);}
                  if (this.select_62 == true) {formData.append('select_62', 1);} /// el 1 indica que si se le va a agregar el diagnostico o el taratamiento
                  else {formData.append('select_62', 0);}
                  if (this.select_63 == true) {formData.append('select_63', 1);} /// el 1 indica que si se le va a agregar el diagnostico o el taratamiento
                  else {formData.append('select_63', 0);}
                  if (this.select_64 == true) {formData.append('select_64', 1);} /// el 1 indica que si se le va a agregar el diagnostico o el taratamiento
                  else {formData.append('select_64', 0);}
                  if (this.select_65 == true) {formData.append('select_65', 1);} /// el 1 indica que si se le va a agregar el diagnostico o el taratamiento
                  else {formData.append('select_65', 0);}




                  axios.post("Config/sql/sql_add_diagnostico_o_tratamiento_a_varias_piezas.php?action=read",formData)
                                  .then(function(response) {
                      
                      console.log(response);
                          datos = response.data;
                          
                  if (datos.resul == 1 )
                    {
                      window.location="./?view=Odontograma&id="+this.id_paciente_seleccionado;
                    }
                  
                                          
                                  })
                                  .catch(function (error) {
                                      console.log(error);
                                  });
                }
          }




          if (recuadro == 4) 
          {
            var xxxx = 0; // indica si hubo o no la selecion de un diag o uin trat
             /// si ninguna de las piezas due seleccionada entonces no será
            // posible cumplir con la misión
             if (this.select_31 == false && this.select_32 == false &&
            this.select_33 == false && this.select_34 == false &&
            this.select_35 == false && this.select_36 == false &&
            this.select_37 == false && this.select_38 == false &&
            this.select_71 == false && this.select_72 == false &&
            this.select_73 == false && this.select_74 == false &&
            this.select_75 == false) 
            {xxxx++; this.messageAddTragDiagPieza ="1. selecciona las piezas a las que deseas agregar un diagnóstico o un tratamiento: ";}

                if (this.id_diagnostico == "" && this.id_tratamiento == "") 
                {
                  this.messageAddTragDiag = "2. ¿Qué quieres hacer?";
                  xxxx++;
                }



                if (this.id_tratamiento != "") 
                {
                  if (this.tratamientoFinalizado == false && this.tratamientoEnProceso == false) 
                    {xxxx++; this.messageEStadoTratamiento = "Define en que estado se encuentra el tratamiento:";}
                    else {this.messageEStadoTratamiento = false;}
                }    





                 if (xxxx == 0) 
                {
                        this.btn_loading = true;
                    // enviar a php para guardar en la DB: 
                  // make ajax request and pass the data. I'm not certain how to do it with axios but something along the lines of this
                    var formData = new FormData();
                  // indicamos el recuadro que el user selecciono:
                  formData.append('recuadro', 4); // recuadro 2

                  formData.append('id_paciente_seleccionado', this.id_paciente_seleccionado);
                  formData.append('id_tratamiento', this.id_tratamiento);
                  formData.append('id_diagnostico', this.id_diagnostico);
                  formData.append('fecha_actual', this.fecha_actual);
                  if (this.tratamientoFinalizado) 
                  {
                     formData.append('estado_tratamiento', 2);
                  }else if (this.tratamientoEnProceso) 
                  {
                    formData.append('estado_tratamiento', 1);
                  }
                  
                  // enviar piezas 
                  if (this.select_31 == true) {formData.append('select_31', 1);} /// el 1 indica que si se le va a agregar el diagnostico o el taratamiento
                  else {formData.append('select_31', 0);}

                  if (this.select_32 == true) {formData.append('select_32', 1);} /// el 1 indica que si se le va a agregar el diagnostico o el taratamiento
                  else {formData.append('select_32', 0);}

                  if (this.select_33 == true) {formData.append('select_33', 1);} /// el 1 indica que si se le va a agregar el diagnostico o el taratamiento
                  else {formData.append('select_33', 0);}

                  if (this.select_34 == true) {formData.append('select_34', 1);} /// el 1 indica que si se le va a agregar el diagnostico o el taratamiento
                  else {formData.append('select_34', 0);}

                  if (this.select_35 == true) {formData.append('select_35', 1);} /// el 1 indica que si se le va a agregar el diagnostico o el taratamiento
                  else {formData.append('select_35', 0);}

                  if (this.select_36 == true) {formData.append('select_36', 1);} /// el 1 indica que si se le va a agregar el diagnostico o el taratamiento
                  else {formData.append('select_36', 0);}

                  if (this.select_37 == true) {formData.append('select_37', 1);} /// el 1 indica que si se le va a agregar el diagnostico o el taratamiento
                  else {formData.append('select_37', 0);}

                  if (this.select_38 == true) {formData.append('select_38', 1);} /// el 1 indica que si se le va a agregar el diagnostico o el taratamiento
                  else {formData.append('select_38', 0);}

                  // denticion temporal:
                  if (this.select_71 == true) {formData.append('select_71', 1);} /// el 1 indica que si se le va a agregar el diagnostico o el taratamiento
                  else {formData.append('select_71', 0);}
                  if (this.select_72 == true) {formData.append('select_72', 1);} /// el 1 indica que si se le va a agregar el diagnostico o el taratamiento
                  else {formData.append('select_72', 0);}
                  if (this.select_73 == true) {formData.append('select_73', 1);} /// el 1 indica que si se le va a agregar el diagnostico o el taratamiento
                  else {formData.append('select_73', 0);}
                  if (this.select_74 == true) {formData.append('select_74', 1);} /// el 1 indica que si se le va a agregar el diagnostico o el taratamiento
                  else {formData.append('select_74', 0);}
                  if (this.select_75 == true) {formData.append('select_75', 1);} /// el 1 indica que si se le va a agregar el diagnostico o el taratamiento
                  else {formData.append('select_75', 0);}




                  axios.post("Config/sql/sql_add_diagnostico_o_tratamiento_a_varias_piezas.php?action=read",formData)
                                  .then(function(response) {
                      
                      console.log(response);
                          datos = response.data;
                          
                  if (datos.resul == 1 )
                    {
                      window.location="./?view=Odontograma&id="+this.id_paciente_seleccionado;
                    }
                  
                                          
                                  })
                                  .catch(function (error) {
                                      console.log(error);
                                  });
                }        
          }
        
        
    }



   

  }

})