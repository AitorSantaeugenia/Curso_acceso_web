<!DOCTYPE html5>
<html>
    <head>
	</head>
	<body>
	<h1 style="text-align:Center"> Exercici#4 Funciones</h1><br/>
          <?php
			function mostrar($rest, $rest2){
				$rest = substr($rest, 0, 14 );
				$rest2 = substr($rest2, -4);
				$total= $rest." ".$rest2;
				return $total;
			}
			
			echo mostrar("Soy un chaval muy majo","Soy un tipo raro");
		  
			//Soy un chaval raro
			
			
			?>
		  
		  
        
	</body>
</html>