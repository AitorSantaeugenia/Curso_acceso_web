<!DOCTYPE HTML5>
<html>

	<head>
	</head>
	<!-- EJERCICIO 11
	Lista ordenada números ROMANOS - Times new roman?
	-->
	<body>
	<h1 style="text-align:Center"> Exercici#11 Lista ordenada ROMANOS Torre de Papel</h1><br/>
		<?php
			function listaOrdenada($uno,$dos,$tres,$cuatro, $cinco){
				return '<ol type="i"> <li>'.$uno.'</li><li>'.$dos.'</li><li>'.$tres.'</li><li>'.$cuatro.'</li><li>'.$cinco.'</li></ol>';
			}
			echo listaOrdenada('Soy','una','torre','de', 'papel');
		?>
	</body>
</html>