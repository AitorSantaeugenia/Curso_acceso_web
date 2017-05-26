<!DOCTYPE html5>
<html>
    <head>
	</head>
	<body>
	<h1 style="text-align:Center"> Exercici#7 Primo o no</h1><br/>
          <?php	
		 
			function numPrimo($valor,$primo){
				for ($b = 1; $b < $valor; $b++) {
					if ($valor % $b == 0) {
						$primo++;
					}
				}
				
				if ($primo >= 2) {
					echo "No es primo";
				} else {
					echo "Es primo";
				}
			}
			
			echo numPrimo(7,0);
			 
		
			?>
		  
		  
        
	</body>
	

</html>