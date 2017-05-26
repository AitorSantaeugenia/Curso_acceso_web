<!DOCTYPE html5>
<html>
    <head>

	</head>
	
		<style>
		
		</style>
	<body>
	<!-- 
		EJERCICIO 31.1
			ESTO ES DEMASIADO PRO CÓMO PARA BORRAR-LO (me ha llevado 5 min, pero me mola y no
			pienso borrar-lo, ni por teutatis... ¿?)
			
	-->
	<h1 style="text-align:Center"> Exercici#31.1 Copiar array</h1><br/>
		<?php		
		
			function headAndTail($position){
				$texto = array( "ASD","chico","no","come","come", "cama","cama",
				"come","chico","ASD" );
				
				$longitud_array = count($texto)-1;
				echo("<br/>");
				echo $longitud_array;
				echo("<br/>");
				
				echo("<br/>"." 3 Finales - ");
				$res1 = (array_slice($texto, -$position, $longitud_array, true));
				print_r (array_slice($texto, -$position, $longitud_array, true));
				echo("<br/>"." 3 Iniciales - ");
				$res2 = (array_slice($texto, 0, $position));
				print_r (array_slice($texto, 0, $position));
				
				echo "<br/>";
				echo "<br/>";
				foreach ($res1 as $elemento){
					if( in_array($elemento,$res2)){
						echo "False ";
					}else {
						echo "True ";
					}
				}
				
			}

			echo headAndTail(5);
			
		?>
		 
	</body>
	

</html>