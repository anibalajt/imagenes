 <?php 
    $firefox = strpos($_SERVER['HTTP_USER_AGENT'],"Firefox");
    $chrome = strpos($_SERVER['HTTP_USER_AGENT'],"Chrome");
    $explore = strpos($_SERVER['HTTP_USER_AGENT'],"ie");
          if ($firefox == true){
              echo'<link rel="stylesheet" type="text/css" href="style_fire.css"  />';
          }
          if ($chrome == true){
              echo'<link rel="stylesheet" type="text/css" href="style.css" media="screen" />';
          }
          if ($chrome || $firefox == false){
              echo'<link rel="stylesheet" type="text/css" href="style.css" media="screen" />';
          }
          
?>

<?php 
session_start();
if(isset($_SESSION['name_a_user'])){
header ("Location: ../index.php"); 
exit;    
}else{
?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <script src="jquery.js"></script>
    <script language="JavaScript" type="text/javascript" src="login.js"></script>
<script>
//form-register    form-login
$(document).ready(function() {
    $("#register-link").click(function(){
        $('#form-login').css("display","none");
        $('#form_register').css("display","block");    
    })
    $("#login-link").click(function(){
        $('#form_register').css("display","none");
        $('#form-login').css("display","block");
    })
})
</script>
</head>
<body class="body">
    
    <div class="main">

        <header>
            <div class="title">
                <span>
                    conoz.ca
                </span>
            </div>
            <div style="float: right;margin: 17px auto;">
             <div class="register">
                 <a id="login-link">
                    
                 <?php   echo $string = htmlentities("Iniciar sesión", ENT_QUOTES | ENT_HTML401, 'UTF-8')  // ?>
                </a>
            </div>
            <div class="register">
                <a id="register-link">
                    Regístrate
                </a>                
            </div>
            </div>
       </header>

        <section class="trasp">
            <form  method="post" id="form-login">
                <input type="hidden" name="t" value="">
                
                <div class="title-text">
                    Iniciar sesión
                </div>
                <div id="login">
                    <div id="email-field" class="input">

                        <label id="email-label" for="login-email" style="display: none">
                            Correo electrónico
                        </label>
                        <input id="login-email" type="text" name="login_email" tabindex="1" placeholder="Correo electronico">
                    </div>
                    <div id="password-field" class="input">

                        <label id="password-label" for="login-password"style="display: none">
                            Contraseña
                        </label>
                        <input type="password" id="login-password" name="login_password" tabindex="2" placeholder="contraseña">
                   <input name="login-submit" value="Iniciar sesión" class="submit" type="submit" id="login-submit" tabindex="3">
                    </div>
                    <div id="login-footer" class="clearfix">
                        <input type="hidden" name="login_submit" value="1">
                        <div id="remember-me">
                            <input type="checkbox" checked="checked" id="remember_me" name="remember_me" tabindex="4" value="Recordarme">
                            <label for="remember_me">
                                Recordarme
                            </label>
                        </div>

                    </div>
                </div>
                <a href="/forgot" id="forgot-link" style="float: right;right: 52px;position: relative;">
                    ¿Has olvidado tu contraseña?
                </a>
                <div id="rest">

                </div>
            </form>
        </section>
        <section class="trasp">
            <form onsubmit="veri();return false" method="post" id="form_register">
                <input type="hidden" name="t" value="">
               
                <div class="title-text">
                     Regístrate
                </div>
                <div id="register">
                    <div id="name-field" class="input">

                        <label id="name-label" for="register-name" style="display: none">
                            Nombre
                        </label>
                        <input id="register_name" type="text" name="register-name" tabindex="1" placeholder="Nombre">
                    </div>
                    <div id="ltname-field" class="input">

                        <label id="ltname-label" for="register-ltmane" style="display: none">
                            Apellido
                        </label>
                        <input id="register_ltname" type="text" name="register-ltname" tabindex="1" placeholder="Apellido">
                    </div>
                    <div id="email-field" class="input">

                        <label id="email-label" for="login-email" style="display: none">
                            Correo electrónico
                        </label>
                        <input id="register_email" type="text" name="register-email" tabindex="1" placeholder="Correo electronico">
                    </div>
                    <div id="password-field" class="input">

                        <label id="password-label" for="login-password"style="display: none">
                            Contraseña
                        </label>
                        <input type="password" id="register_password" name="register-password" tabindex="2" placeholder="contraseña">
                   <input name="register-submit" value="Regístrate" class="register-submit" type="submit" id="register-submit" tabindex="3">
                    </div>

                </div>
              <div id="resultado"></div>  
            </form>
        </section>
        
    </div>

</body>
<?php
}
?>