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
		Exercici#33 
			Formulario nom, direcció, telefon, dni
			
	-->
	<h1 style="text-align:Center"> Exercici#33 Formulario nom, direcció, telefon, dni</h1><br/>
			<form method="post" action="ejercicio33.php">
						Nombre: <input type="text" name="nombre" id="nombre"/><br>
						Dirección: <input type="text" name="direccion" id="direccion"/><br>
						Telèfono: <input type="text" name="telefono" id="telefono"/><br>
						DNI: <input type="text" name="dni" id="dni"/><br>
											
							<?php
								$textA = $_POST['nombre'];
								$textB = $_POST['direccion'];
								$textC = $_POST['telefono'];
								$textD = $_POST['dni'];
								
								echo "<br/>";
								echo "<br/>";
								echo "Gracias por enviar los siguientes datos:";
								
								function listaDesordenada($textA,$textB,$textC,$textD){
									return '<ul><li>Nombre: '.$textA.'</li><li> Dirección: '.$textB.'</li><li>Telefono: '.$textC.'</li><li>DNI: '.$textD.'</li></ul>';
								}
								 
								echo listaDesordenada($textA, $textB, $textC, $textD);
							
							?>
						<br/><br/><input type="submit" name="Enviar" value="Enviar">
			</form>

	</body>
	

</html>