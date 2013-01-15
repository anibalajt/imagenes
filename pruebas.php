<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>GIRAR</title>

<style type="text/css">
#circulo {
background:black;
height: 100px;
position: relative;
width: 100px;
-webkit-animation:gira 3s alternate infinite;
}

@-webkit-keyframes gira 
{
0% {top: 0px; left: 600px;-webkit-transform: rotate(0deg);}
50% {top: 130px; left: 200px; -webkit-transform: rotate(180deg);}
100% {top: 400px; left:600px; -webkit-transform: rotate(360deg);}
}
</style>
</head>
<body>
<div id="circulo"></div>
</body>
</html>