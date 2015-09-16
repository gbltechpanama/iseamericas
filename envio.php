<?php 

$mensaje="";

$mensaje.="Name: ".$_POST['nombre']."\n";

$mensaje.="E-mail: ".$_POST['email']."\n";

$mensaje.="Asunto: ".$_POST['asunto']."\n";

$mensaje.="Comentario: ".$_POST['mensaje']."\n";



$email_destiny="abraham.verde@epxilon.net";

$subject="Mensaje desde Pagina WEB";

$from = "";

if (mail($email_destiny,$subject,$mensaje,$from)){

 echo '
	<style>
		.mensajeUsuario
		{
			width:400px;
			color:#333;
			font-weight:bold;
			font-size:14px;
			font-family:Arial, Helvetica, sans-serif;
			text-align:center;
			margin-left:auto;
			margin-right:auto;
			
		}
	</style>
	
	<div class="mensajeUsuario">
		<br /><br />
		Su mensaje fue enviado satisfactoriamente. <br />Tan pronto nos sea posible atenderemos su solicitud.
		
		<br /><br />    <br /><br />
		Ya puede cerrar esta ventana...
	</div>';

} else {

 echo "Error";
 
}



?>