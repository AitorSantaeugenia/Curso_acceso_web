<!DOCTYPE html5>
<html>
    <head>

	</head>
	
		<style>
		
		</style>
	<body>
	<!-- 
		EJERCICIO 21
		Formulario STOCK sillas
	-->
	<h1 style="text-align:Center"> Exercici#21 Stock Sillas</h1><br/>
		<form method="post" action="ejercicio21.php">
				Introduce un texto: <input type="text" name="text1" id="text1"/><br>
				<input type="submit" value="Enviar">
		</form>
		<?php	
				if(isset($_POST["text1"])){
					$sillas = $_POST['text1'];
				}else{
					$sillas = -1;
				}
					
				
				switch ($sillas) {
					case -1:
						break;
					case 0:
						print "No hay sillas<br>";
						break;
					case 1:
						print "Tengo una silla<br>";
						break;
					case 2:
						print "Tengo una pareja de silllas<br>";
						break;
					
					default:
						print "Tengo varias sillas";
						break;
					
				}
			?> 
	</body>
	

</html>