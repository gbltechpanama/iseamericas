<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en-gb" class="no-js">
<!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Industrial Services & Equipment, SAS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--<script src="js/p.js"></script>-->

	
	<link rel="stylesheet" type="text/css" href="css/general.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/productos.css">


	
	<link rel="shortcut icon" href="resources/themes/uber-naked/images/favicon.png" />

    <link rel="stylesheet" type="text/css" href="resources/themes/uber-naked/rebase-min.css" />
    <link rel="stylesheet" type="text/css" href="resources/themes/uber-naked/style.css" />
    <link rel="stylesheet" type="text/css" href="resources/colorbox/1/colorbox.css" />
    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.0.min.js"></script>
    <script type="text/javascript" src="resources/colorbox/jquery.colorbox.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $("a[rel='colorbox']").colorbox({maxWidth: "90%", maxHeight: "90%", opacity: ".5"});
    });
</script>
<script type="text/javascript">
function iniciar()
		{

			var div = document.getElementById("prueba");
           
            var height = window.innerHeight;

            if (height > 800) {
            div.style.height = (window.innerHeight - 200) + "px";
        	}
		}
		    
		
		</script>


</head>

<body onLoad="iniciar()">

<div class="container" style="position:absolute;left:0;
right:0;">
    <div class="row">
        <article class="col-xs-12 col-sm-12 col-md-12">
        <img src="img/nosotros_sup.jpg" alt="" width="100%" height="254" >
        </article>
    </div>
</div>

<!-- Fin de imagen de fondo-->

<!-- Header-logo-eslogan-->
<header>
    <section>
        <div class="container">
            <div class="row">   
                <div id="logo" class="col-xs-12 col-sm-13 col-md-6">
                <img src="img/logoisea.png" style="width:300px; height:100px;">
                </div>
                <div id="name" class=" col-md-6">
                INDUSTRIAL SERVICES & EQUIPMENT AMERICAS, INC.
                </div>
            </div>
        </div>
    </section>
</header>

<div class="container">
    <div class="row">
      <div id="nav" class="col-xs-12">
        <div id="home"></div>
    </div>  
    </div>
</div>


<main id="prueba">
	<div class="container">
		<div class="row">
			<section class="centro col-xs-12 col-sm-3 col-md-3" style="margin-bottom: 0px; float:left; border:0px solid red;">
				<div id="home" onclick="javascript:window.location.href = 'index.html'">

					<img src="img/btnInicio.jpg" alt="">

				</div>

				<div class="titulos" style="font-size:20px; font-family: Impact; margin-top:15px;">
				
				<span id="lp">OUR PRODUCTS </span>
				
				<hr style="float:left; clear:both; width:90%;"><br>
	        
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
			</section>
		
			<div id="izq" class="col-xs-12 col-sm-8 col-md-9 col-md-9" 
			style="border:0px solid blue; float:right; text-aling:center;">
             
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
</main>
    
    
<footer>
    <div id="pieCentro">
    <div class="container">
        <div class="row">
            <div id="copyright" class="hidden-xs col-xs-8 col-sm-8 col-md-8">
                © 2015 INDUSTRIAL SERVICES & EQUIPMENT AMERICAS, INC. - ALL RIGHTS RESERVED.
            </div>
            <div id="logoGlobal" class="col-xs-12 col-sm-4 col-md-4">
                <img src="img/logoGlobal.png" class="imglogoGlobal" width="132">
            </div>
        </div>
    </div>
    </div>
</footer>


<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>