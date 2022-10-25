<?php

if(isset($_GET['view']) && file_exists(__DIR__."/".$_GET['view'].'.php')  ){
include(__DIR__."/".$_GET['view'].'.php');
die();
}
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
?>

<html>
<header>
</header>
<body style="margin:auto;width:100%;height:100%;    background-color: #f8f8f8;">
<div style="margin:auto;    text-align: center;">
<h1>Usar los link Permitidos</h1>
<?php if(isset($_GET['view']) ){ ?>
<h1><b style="color:red;"><?= $_GET['view'] ?>:</b> Esa ruta no existe, no se ponga a inventar</h1>
<?php } ?>
<a href="https://dev-gecko.ganaloterias.com/authenticator/generarqr">"https://dev-gecko.ganaloterias.com/authenticator/generarqr"</a>
<br/>
<a href="https://dev-gecko.ganaloterias.com/authenticator/validar?secret=&code=">"https://dev-gecko.ganaloterias.com/authenticator/validar?secret=&code="</a>
<br/>
<img src="./finger.jpg" />
</div>
</body>
</html>
