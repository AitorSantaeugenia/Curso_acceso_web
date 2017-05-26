<!DOCTYPE html5>
<html>
    <head>

	</head>
	
		<style>
		
		</style>
	<body>
	<!--
	
	IF NUM ITS PRIME, <0 AND >50
	
	-->
	<h1 style="text-align:Center"> Exercici#12 Primo, mayor 0 y menor 50</h1><br/>
          <?php	
			function primoPositivoMenor($valor,$primo){
				for ($b = 1; $b < $valor; $b++) {
					if ($valor % $b == 0) {
						$primo++;
					}
				}		
				
				if ($primo <= 2 && $valor>0 && $valor<50) {
					/* SI ES PRIMO AND el resto */
					echo "Cierto: El número $valor és primo, mayor que 0 i menor de 50";
				} else {
					/* SI NO ES PRIMO */
					echo "Falso: El número $valor NO és primo, mayor que 0 i menor de 50"."<br/>";
					echo "Alguna condición no se cumple";
				}
			}
			
			echo primoPositivoMenor(7,0);
				
				
		  ?> 
	</body>
	

</html>