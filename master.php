<?php 
session_start();
if(isset($_SESSION['name_a_user'])){
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="css/stylep.css" media="screen" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script src="js/script.js"></script>
        <script>
            $(document).ready(function() {
            $('a.activ').click(function(){
                $('.ct-im').css("display", "none")
               panel();return false
            });            
            $('.iay.a').click(function(){
                alert('hola mundo')
            });            
            $('a.name').click(function(){
                $('.header').css("height", "94%")
                $('body').css("overflow", "hidden")
                $('.per ').css("height", "100%")
                $('.ctpa').css("top", "300px")
                $('.ctpa').css("opacity", "0")
                $('.ctpa').addclass("opat")
                $('.sub').css("display", "block")
                
            });         
            $('.sub').click(function(){
                $('.header').css("height", "auto")
                $('body').css("overflow", "auto")
                $('.per ').css("height", "100%")
                $('.ctpa').css("top", "0")
                $('.ctpa').removeclass("opat")
                $('.ctpa').css("opacity", "1")
                $('.sub').css("display", "none")
                
            });         
         
         
           
         });       
        </script>
    </head>
    <body>
        <div>
            <header class="header">
                <div style=" position: relative;display:table;width: 100%;z-index: 1;
                        background: #2A2B30;-moz-box-shadow: 0 0 10px #111;-webkit-box-shadow: 0 0 10px #111;
                        box-shadow: 0 0 10px #111;">
                <div class="title">
                    <a href="index.php"><span>
                        conoz.ca
                    </span></a>
                </div>
                <div style="float: right;padding: 14px 50px;">
                     
                    <li style="cursor: pointer;color: white;font-size: 14px;list-style: none;float: left;margin: auto 10px;">
                        <a class="activ" href="#upload" >
                            <div style="font-size: 26px;font-weight: bold;">
                                +
                            </div>
                        </a>
                    </li>
                    
                    <li  style="cursor: pointer;color: white;font-size: 14px;list-style: none;float: left;margin: auto 10px;">
                      <?php
                      if (isset($_SESSION["name_a_user"])) 
                        {
                          echo '<a style="color: white;text-decoration: none;
                          " href="logout.php" title="Cerrar sesión">Cerrar sesión</a>';
                        }
                      ?>
                    </li>
                </div>
                </div>
                
                <section class="per" style="-moz-box-shadow: 0 0 10px #111;
-webkit-box-shadow: 0 0 10px #111;box-shadow: 0 0 10px #111;z-index: 0;top: -1px;position: relative;display:table;width: 100%;background: #1C1D22;padding: 10px;">
                    <div style="cursor: pointer;float: left">
                        <a class="name" style="font-size: 16px;color: #CACACA;font-weight: bold;">
                            <?php echo $_SESSION["name_a_user"]?>
                        </a>
                    </div>
                    <div style="overflow: hidden;position: relative;left: 100px;display: table;">
                        <div style="cursor: pointer;float: left;margin: auto 10px;">
                            <a style="font-size: 14px;color: #CACACA;">
                                Todo
                            </a>
                        </div>
                        <div style="cursor: pointer;float: left;margin: auto 10px;">
                            <a style="font-size: 14px;color: #CACACA;">
                                Siguiendo
                            </a>
                        </div>
                        <div style="cursor: pointer;float: left;margin: auto 10px;">
                            <a style="font-size: 14px;color: #CACACA;">
                                Mis fotos
                            </a>
                        </div>
                    </div>
                    <div style="width: 100%;margin:20px auto;text-align: center;color: white;bottom: 0;position: absolute">
                        <div class="sub" style="background: url('images/icon.png')no-repeat;
                           cursor: pointer; display:none; margin: auto;text-align: center;width: 20px;height: 20px"></div>    
                    </div>
                </section>
            </header>
            <section class="ctpa" style="margin: 100px auto;position: relative;overflow: hidden;width: 1203px;">
                <?php
                    echo $pagemaincontent;
                ?> 
                
            </section><div class="panel-upload">
                    
                </div>
            <section>
                
            </section>
            <footer>
                
            </footer>
        </div>
    </body>
</html>     
<?php
}else{
header ("Location: login/"); 
exit;
}
 
?>