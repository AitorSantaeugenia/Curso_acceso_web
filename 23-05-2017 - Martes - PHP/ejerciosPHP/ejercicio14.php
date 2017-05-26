<!DOCTYPE html5>
<html>
    <head>

	</head>
	
		<style>
		
		</style>
	<body>
	<h1 style="text-align:Center"> Exercici#14 valorAleatorio</h1><br/>
          <?php	
				$valorAleatorioX=rand(111,999);
				
				
				if($valorAleatorioX > 500){
					echo "Mayor que 500"."<br/>";
				}else if($valorAleatorioX < 500){
					echo "Menor que 500"."<br/>";
				}else if($valorAleatorioX == 500){
					echo "WoooooW, bingo, 500 justo."."<br/>";
				}
				echo "El número es $valorAleatorioX";


			  ?> 
	</body>
	

</html>