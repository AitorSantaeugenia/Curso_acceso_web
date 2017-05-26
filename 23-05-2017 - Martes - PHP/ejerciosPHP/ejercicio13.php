<!DOCTYPE html5>
<html>
    <head>

	</head>
	
		<style>
		
		</style>
	<body>
	<h1 style="text-align:Center"> Exercici#13 maxDeSeis</h1><br/>
          <?php	
			function maxDeSeis($arrayDeNumeros){
				
				/* PASEM VALORS I ELEGIM EL MÉS GRAN */
					/*print_r ($arrayDeNumeros);*/
					$maxValor = max($arrayDeNumeros);
					return $maxValor;
			}
			
			function minDeSeis($arrayDeNumeros){
				
				/* PASEM VALORS I ELEGIM EL MÉS PETIT */
					/*print_r ($arrayDeNumeros);*/
					$maxValor = min($arrayDeNumeros);
					return $maxValor;
			}
			
			
			
			echo "El valor més gran de la cadena es ";
			echo maxDeSeis(array(1,3,4,5,8,2));
			echo "<br/>";
			echo "<br/>";
			
			echo "El valor més petit de la cadena es ";
			echo minDeSeis(array(1,3,4,5,8,2));
		  ?> 
	</body>
	

</html>