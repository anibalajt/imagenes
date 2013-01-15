function objetoAjax(){
	var xmlhttp=false;
	try {
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
		try {
		   xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		} catch (E) {
			xmlhttp = false;
  		}
	}

	if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
		xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}
function veri(){
    frm = document.getElementById('form_register');
    name = frm.register_name.value;
    ltname = frm.register_ltname.value;
    email = frm.register_email.value;
    password = frm.register_password.value;
    if((name=="")|| (ltname=="") ||(email=="") || (password=="")){
//      $('#resultado').innerHTML('');
        document.getElementById("resultado").innerHTML="";
        $('#resultado').append('Debes llenas todos los campos');
    }
   
    if((name!="") & (ltname!="") & (email!="") & (password!="")){
        register(name,ltname,email,password);
    }
    
}
function register(name,ltname,email,password){
    	//donde se mostrar� lo resultados
	divResultado = document.getElementById('resultado');
	//valores de los inputs
        
     
        
        ajax=objetoAjax();

        ajax.open("POST", "register.php",true);
        ajax.onreadystatechange=function() {
                if (ajax.readyState==4) {
                        //mostrar los nuevos registros en esta capa
                        divResultado.innerHTML = ajax.responseText
                        //mostrar un mensaje de actualizacion correcta
                }
        }
        //muy importante este encabezado ya que hacemos uso de un formulario
        ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
        $('#register_name').val('');
        $('#register_ltname').val('');
        $('#register_email').val('');
        $('#register_password').val('');
        ajax.send("&register_name="+name+"&register_ltname="+ltname+"&register_email="+email+"&register_password="+password)
        
}



$(document).ready(function(){

	$("#form-login").submit(function()
	{
		//remove all the class add the messagebox classes and start fading
		$("#rest").removeClass().addClass('messagebox').text('Validando....').fadeIn(1000);
		//check the username exists or not from ajax
		$.post("ajax_login.php",{ email:$('#login-email').val(),pass:$('#login-password').val(),rand:Math.random() } ,function(data)
        {
            
	  if(data=='yes') //if correct login detail
		  {
        	  	$("#rest").fadeTo(200,0.1,function()  //start fading the messagebox
			{ 
			  //add message and change the class of the box and start fading
			  $(this).html('Iniciando.....').addClass('messageboxok').fadeTo(900,1,
              function()
			  { 
                              
			  	 //redirect to secure page
				 document.location='../index.php';
  	
		  });
			  
			});
		  }
		  else 
		  {
		  	$("#rest").fadeTo(200,0.1,function() //start fading the messagebox
			{ 
			  //add message and change the class of the box and start fading
			  $(this).html('Usuario o contraseña incorrecta...').addClass('messageboxerror').fadeTo(900,1);
			});		
          }
				
        });
 		return false; //not to post the  form physically
	});
      
});






