<!DOCTYPE html5>
<html>
    <head>
	</head>
	<body>
	<h1 style="text-align:Center"> Exercici#2 CONCATENACIO DE CARACTERS </h1><br/>
          <?php
			
			function concatenaCaracters($man, $nom, $nom2, $cognom, $cognom2,$cognomper){
				$total7 = $man.$nom.$nom2.$cognom.$cognom2.$cognomper;
				return $total7;
				
			}
			echo concatenaCaracters(" hi", " aitor", " javier", " santaeugenia", " mari", " loputojefeloputoamo");
			
			
			?>
		  
		  
        
	</body>
</html>