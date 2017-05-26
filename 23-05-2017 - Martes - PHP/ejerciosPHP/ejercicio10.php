<!DOCTYPE HTML>
<html>
	<head>
	</head>
	<!-- 
		EJERCICIO 10
	LISTA DESORDENADA -->
	<body>
	<h1 style="text-align:Center"> Exercici#10 Lista desordenada Torre de Papel</h1><br/>
		<?php
			function listaDesordenada($uno,$dos,$tres,$cuatro,$cinco){
				return '<ul> <li>'.$uno.'</li><li>'.$dos.'</li><li>'.$tres.'</li><li>'.$cuatro.'</li><li>'.$cinco.'</li></ul>';
			}
			
			echo listaDesordenada('Soy','una','torre','de', 'papel');
		?>
	</body>
</html>