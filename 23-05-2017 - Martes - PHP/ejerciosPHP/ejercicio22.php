<!DOCTYPE html5>
<html>
    <head>

	</head>
	
		<style>
		
		</style>
	<body>
	<!-- 
		EJERCICIO 22
		Copiar array - 
			1. los verbosy los sustantivos del mismo génerono pueden ir juntos
			2. una palabra misma palabra no se puede repetir 2 veces
			
			WIP! - NO ACABAT
			
	-->
	<h1 style="text-align:Center"> Exercici#22 Copiar array</h1><br/>
		<?php		
			$texto = array( "chico","bueno","no","come","pescado", "buena","carne","malo","chica","pasea"); 
			//Valors que no es poden repetir
			//0 y 8
			//1 5 7
			//3 9
			//5 6
			
			
				$aleatorio1=rand(0,9);
				$aleatorio2=rand(0,9);
				$aleatorio3=rand(0,9);
				$aleatorio4=rand(0,9);

						
				if ($testing = array_search($aleatorio1, $texto)){
					$aleatorio1=rand(0,9);
				}else{
		
			echo $texto[$aleatorio1] . " ".$texto[$aleatorio2] . " ".$texto[$aleatorio3] ." ". 
			$texto[$aleatorio4];
				}
			
		?>
		 
	</body>
	

</html>