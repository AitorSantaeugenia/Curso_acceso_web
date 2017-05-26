<!DOCTYPE html5>
<html>
    <head>

	</head>
	
		<style>
		
		</style>
	<body>
	<!-- 
		EJERCICIO 15
		MOSTRAR UN OPTION DE 2016 a 2025
	-->
	<h1 style="text-align:Center"> Exercici#15 Años</h1><br/>
	<select name="Ano">
		<?php
			$numA = 2016;
			$numB = 2025;
			$testing = $numA+$numB;
			
			for($i=$numA; $i<=$numB;$i++){
				echo"<option>";
					echo $i;
				echo"</option>";
			}
			
			
		?>
	</select>
		 
	</body>
	

</html>