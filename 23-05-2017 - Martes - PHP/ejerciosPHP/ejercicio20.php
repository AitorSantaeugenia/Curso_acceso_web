<!doctype html5>
<html>
	<head>
	</head>
	<body>
		<form method="post" action="ejercicio20.php">
			introduce un texto:
			<textarea rows="4" cols="50" name="texto"><?php if(isset($_POST["texto"]))echo $_POST["texto"]; ?></textarea>
			<input type="submit" value="contar"/>
		</form>
		
		<?php
		
		
			function contar_palabras($texto1)
			{
				if (isset($texto1))
				{
					$vectorPalabras= preg_split("/[\s,;:.()-]+/", $texto1);
					
					$vectorPalabras=array_diff($vectorPalabras,array("","  "));
					$longitudCadena=count($vectorPalabras);
					
					return $longitudCadena;
				}
			}
			
				echo"este es el numero de palabras: ";
				echo "<br/>";
				if(isset($_POST["texto"]))
				{
					echo contar_palabras($_POST["texto"]);
				}
				
	
		?>
	
	</body>
</html>