var app = new Vue({
  el: '#login',
  data: {
    message: 'Hello Vue!',
    form_login: false,
    form_register: false,

    // login//
    email: "",
    pass: "",
    email_null: false,
    pass_null: false
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
  			if (this.email == "") {this.email_null = true;}
  			if (this.pass == "" ) {this.pass_null = true;}

  			// -----------//
  			if (this.email_null == false && this.pass_null == false) 
  			{
  				// ----
  					
  				// ----
  			}
  		}
  	}
})