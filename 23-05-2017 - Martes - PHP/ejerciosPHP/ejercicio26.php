<!DOCTYPE html5>
<html>
    <head>

	</head>
	
		<style>
		
		</style>
	<body>
	<!-- 
		EJERCICIO 26
			SUBARRAY, Comparar posicion de dos array si están molan, si no, FALSEEEEE
	-->
	<h1 style="text-align:Center"> Exercici#26 SUBARRAY COMPARACIÓ VALORS DINS DE OTRO ARRAY A PARTIR POSICIÓ</h1><br/>
	
		<?php	
			function esSubconjunto($array_base, $array2, $pos){
					$entrada = array_slice($array_base, $pos);
					
					foreach ($array2 as $elemento){
						if( !in_array($elemento,$entrada)) return false;
					}
					return true;
			}
						
			echo "<br/>";
			$texto = array( "chico","bueno","no","come","pescado", "buena","carne",
			"malo","chica","pasea" );
			$texto2 = array( "no","come");			
			$position=2;
			//0,1,2 true
			//3 false for testing
			
			echo "<br/>";
			echo "<strong>Array_base: </strong>";
			print_r($texto);
			echo "<br/>";
			echo "<strong>Array2: </strong>";
			print_r($texto2);
			
			echo "<br/>";
			echo "<br/>";
			echo "<strong>Posició a comprovar </strong>"."[".$position."]";
			echo "<br/>";
			echo "<br/>";
			echo "Resultat: ";
			if(esSubconjunto($texto, $texto2, $position))echo "<strong>True</strong>";
			else echo "<strong>False</strong>";
			
		?>
		 
	</body>
	

</html>