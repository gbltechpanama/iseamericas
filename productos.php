<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en-gb" class="no-js">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!--[if lt IE 9]> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
<title>Industrial Services & Equipment, SAS</title>

<link href="css/productos.css" rel="stylesheet" media="screen">
<link href="css/general.css" rel="stylesheet" media="screen">
</head>
<body>

<div id="contenedorHojasInternas">
	<div id="centro">
		<div id="logo"></div>
        <div id="name">INDUSTRIAL SERVICES &amp; EQUIPMENT, S.A</div>
        
        <!-- CAPA DE CORTE -->
        <div style="clear:both"></div>
        
        <div id="btnInicio" onClick="javascript:window.location.href = 'index.html'"></div>
        
        <div id="contenedorInferior">
            <div id="titulo">
                LINEA DE PRODUCTOS
                <hr style="width:90%; float:left; clear:both"/><br><br>
                <div>
					<?php
                        require_once 'php/controladorProductos.php';
                        
						/*OBTENER LA RUTA DE LAS IMAGENES*/
                                                if(!isset($_GET["path"]))
                                                    $_GET["path"]="";
                                                
						$galeriaSeleccionada = $_GET["path"];
		
						
        				/*LISTAR DIRECTORIO*/
                        $cp = new controladorProductos();
        				$cp->listar_directorios('galeria//productos',$galeriaSeleccionada);
						
                    ?>
                </div>
             </div>
             
             
             <div id="contenidoGaleria">
             <?php
						
					// Include the UberGallery class
					include('galeria/resources/UberGallery.php');
				
					// Initialize the UberGallery object
					$gallery = new UberGallery();
				
					/*SI ES LA 1RA VEZ QUE ENTRA A LA PAGINA DE PRODUCTOS. EL PATH AUN NO ESTA DEFINIDO*/
					if($galeriaSeleccionada=="")
						$galeriaSeleccionada = $cp->primerProducto;
						
						
					// Initialize the gallery array
					$galleryArray = $gallery->readImageDirectory('galeria/productos/'.$galeriaSeleccionada);
				
				
					// Define theme path
					if (!defined('THEMEPATH')) {
						define('THEMEPATH', $gallery->getThemePath());
					}
				
				
					// Set path to theme index
					$themeIndex = $gallery->getThemePath(true) . '/index.php';
					
					// Initialize the theme
					if (file_exists($themeIndex)) {
						include($themeIndex);
					} else {
						die('ERROR: Failed to initialize theme');
					}
			 ?>
             </div>
        </div>
        
    </div>
    
    
    <div id="pie" style="margin-top:10px">
    	<div id="pieCentro">
            <div id="copyright">© 2015 Industrial Services & Equipment, SAS Todos los derechos reservados.</div>
            <div id="logoGlobal"></div>
        </div>
    </div>
</div>


</body>
</html>
