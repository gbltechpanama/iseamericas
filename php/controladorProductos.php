<?php
require_once 'conexionBD.php';

class controladorProductos
{
	public $primerProducto;
	
	function listar_directorios($ruta, $galeriaSeleccionada)
	{ 
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