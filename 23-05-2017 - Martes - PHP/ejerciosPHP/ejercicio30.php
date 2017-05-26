<!DOCTYPE html5>
<html>
    <head>

	</head>
	
		<style>
		
		</style>
	<body>
	<!-- 
		EJERCICIO 30
			Función igualesEnElArray(arra1, pos1array2, pos2)
			Cierto si están el valor y posición de parámetros
			
	-->
	<h1 style="text-align:Center"> Exercici#30 Copiar array</h1><br/>
		<?php		
		
			function headAndTail($res, $position){
				 
				
				//Primeros valores
				$compara = substr($res, 0, $position);
				
				echo "Los primeros son: ".$compara;
				echo "<br/>";
				//Giramos la cadena
				$compara2=(strrev($res));
				
				/* */
				$compara3 = substr($compara2, 0,$position);
				
				echo "Los ultimos son: ".$compara3;
				echo "<br/>";
				echo "<br/>";
				
				if($compara == $compara3)
				{
					return True;
				}else
				{
					return False;
				}
				
			}

			if(headAndTail("asdfddsa",3))
				echo "cap i cua";
			else
					echo "NO!!";
			
			
		?>
		 
	</body>
	

</html>