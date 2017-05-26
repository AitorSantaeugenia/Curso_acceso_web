<!DOCTYPE html5>
<html>
    <head>

	</head>
	
		<style>
			strong { 
				font-size:22px;
			}
		</style>
	<body>
	<!-- 
		EJERCICIO 29
			Formulario dia/mes/año y mostrar parámetros
			
	-->
	<h1 style="text-align:Center"> Exercici#29 Formulario dia/mes/año y mostrar parámetros</h1><br/>
	<form method="post" action="ejercicio29.php">
				Introduce el día: <input type="text" name="dia" id="dia"/><br>
				Introduce el mes: <input type="text" name="mes" id="mes"/><br>
				Elige el año: <select name="Ano" id="Ano">
					<?php
						$numA = 2000;
						$numB = 2050;
						$testing = $numA+$numB;
						
						for($i=$numA; $i<=$numB;$i++){
							echo"<option>";
								echo $i;
							echo"</option>";
						}
						?>
					</select>
					
					<?php
						$textA = $_POST['dia'];
						$textB = $_POST['mes'];
						$textC = $_POST['Ano'];
						echo "<br/>";
						echo "<br/>";
						echo "El próximo <strong>evento</strong> será el dia <strong>$textA</strong> de <strong>$textB</strong> del <strong>$textC</strong>";
					
					?>
				<br/><br/><input type="submit" name="Mostrar" value="MOSTRAR">
	</form>
		<?php		

			
		?>
		 
	</body>
	

</html>