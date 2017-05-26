<!DOCTYPE html5>
<html>
    <head>

	</head>
	
		<style>
		
		</style>
	<body>
	<!-- 
		EJERCICIO 28
			SUBARRAY, Comparar posicion de dos array si están, molan si no, FALSEEEEE
	-->
	<h1 style="text-align:Center"> Exercici#28 SUBARRAY COMPARACIÓ VALORS DINS DE OTRO ARRAY</h1><br/>
	
		<?php	
				function subconjunto($array_base, $array2, $pos){
							if($array_base[$pos] == $array2[$pos]){
								return "True!";
							}else{
								return "False!";
							}
						}
			echo "<br/>";
			$texto = array( "chico","bueno","no","come","pescado", "buena","carne",
			"malo","chica","pasea" );
			$texto2 = array( "chica","bueno","si","como","pez", "mala","carne",
			"mala","chico","camina" );			
			$position=6;
			//6, 1 true
			//resto false for testing
			
			
			echo "<br/>";
			print_r($texto);
			echo "<br/>";
			print_r($texto2);
			echo "<br/>";
			echo "Posició a comprobar "."[".$position."]";
			echo "<br/>";
			echo "<br/>";
			echo subconjunto($texto, $texto2, $position);
			
		?>
		 
	</body>
	

</html>