<!DOCTYPE html5>
<html>
    <head>
	</head>
	<body>
	<h1 style="text-align:Center"> Exercici#6 Numeros positivo, negativo o cero</h1><br/>
          <?php
			function mostrar($a){
				if($a>0){
					echo "El número és positivo";
				}else if($a <0){
					echo "El número és negativo";
				}else if($a==0){
					echo "El número és cero";
				}
				
			}
			
			echo mostrar(-6);
			
			
			?>
		  
		  
        
	</body>
</html>