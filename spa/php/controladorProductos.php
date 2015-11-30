<?php
require_once 'conexionBD.php';


class controladorProductos
{
	public $primerProducto;
	
	function listar_directorios($ruta, $galeriaSeleccionada)
	{ 

					$dir = opendir($ruta);
					$files = array();
					echo "<nav class='navbar navbar-default' role='navigation'>";
					echo "<div class='container-fluid hidden-md'>";
					echo "<div class='navbar-header' >";
      				echo "<button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#bs-example-navbar-collapse-1' aria-expanded='false'>";
       				echo "<span class='sr-only'>Toggle navigation</span>";
        			echo "<span class='icon-bar'></span>";
       				echo "<span class='icon-bar'></span>";
        			echo "<span class='con-ba'></span>";
      				echo "</button>";
      				echo "<a class='navbar-brand' href='#''>LINEA DE PRODUCTOS</a>";
    				echo "</div>";
					echo "<div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>";
					echo "<ul class='nav navbar-nav'>";

					while ($elemento = readdir($dir))
					{
					if( $elemento != "." && $elemento != "..")
					{
					$temp = "productos.php?path=".utf8_encode($elemento);
					
				
					/*PRIMERA ENTRADA A LA PAGINA PRODUCTOS */
					if($galeriaSeleccionada=="")
					{
						$galeriaSeleccionada = $elemento;
						$this->primerProducto = $elemento;
					}

		            
					
	               	echo "<li><a <a href='".$temp."'>".strtoupper(utf8_encode($elemento))."</a></li>";
	               	}
					}
					echo "</ul>";
					echo "</div>";
					echo "</div>";
					echo "</nav>";
			

		$dir = opendir($ruta);
		$files = array();

		while ($elemento = readdir($dir))
		{
			if( $elemento != "." && $elemento != "..")
			{
					$temp = "productos.php?path=".utf8_encode($elemento);
					
				
					/*PRIMERA ENTRADA A LA PAGINA PRODUCTOS */
					if($galeriaSeleccionada=="")
					{
						$galeriaSeleccionada = $elemento;
						$this->primerProducto = $elemento;
					}
				
				
					if($elemento == $galeriaSeleccionada) //PRODUCTO SELECCIONADO
					{
						echo "<div class='listadoProducto'>";
	               		echo "<div id='vineta'></div>";
						echo "<span class='productoSeleccionado'>".strtoupper(utf8_encode($elemento))."</span>";
						echo "</div>";			
					}
						
					else  //PRODUCTO NO SELECCIONADO
					{
						echo "<div class='listadoProducto'>";
						echo "<a href='".$temp."' class='productoNoSeleccionado'>".strtoupper(utf8_encode($elemento))."</a>";
						echo "</div>";
					}

			
			}
		
		}
		
					

	



		
	}//END OF FUNCTION
	
}//END OF CLASS


?>