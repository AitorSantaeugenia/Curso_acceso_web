<!DOCTYPE html5>
<html>
    <head>

	</head>
	
		<style>
		
		</style>
	<body>
	<!-- 
		EJERCICIO 25
		The first and the last position from an Array
	-->
	<h1 style="text-align:Center"> Exercici#25 First and last</h1><br/>
		<?php	
		function firstAndLast(){
			$array = array("Jau", "Mary", "Poppins", "Testing", "Tecno"); 			
	
			$first = reset($array);
			$last = end($array);
			
                       printf("El primer valor es $first i l'ultim valor es $last");
		}
		
			echo "<br/>";
			echo "<br/>";
			echo firstAndLast();
			
			
		?>
		 
	</body>
	

</html>