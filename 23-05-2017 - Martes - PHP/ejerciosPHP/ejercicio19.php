<!DOCTYPE html5>
<html>
    <head>

	</head>
	
		<style>
		
		</style>
	<body>
	<!-- 
		EJERCICIO 19
		Suma de 4 números con formularios
	-->
	<h1 style="text-align:Center"> Exercici#19 Formulario</h1><br/>
		<form method="post" action="ejercicio19.php">
				Número#1: <input type="text" name="num1"/><br>
				Número#2: <input type="text" name="num2"/><br>
				Número#3: <input type="text" name="num3"/><br>
				Número#4: <input type="text" name="num4"/><br>
				<input type="submit" value="Calcular">
		</form>
		<?php
			function sumDe4N(){
				/*print_r ($_POST);*/
				$numA = $_POST['num1'];
				$numB = $_POST['num2'];
				$numC = $_POST['num3'];
				$numD = $_POST['num4'];
				
				$total = $numA+$numB+$numC+$numD;
				return $total;
			}
	
			echo sumDe4N();
			
		?>
		 
	</body>
	

</html>