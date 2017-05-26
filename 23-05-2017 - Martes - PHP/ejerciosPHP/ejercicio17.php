<!DOCTYPE html5>
<html>
    <head>

	</head>
	
		<style>
		
		</style>
	<body>
	<h1 style="text-align:Center"> Exercici#17 FactorialDeN</h1><br/>
            <?php	
				function factorialDeN($num,$factorial){

					for ($x=$num; $x>=1; $x--){
						$factorial = $factorial * $x;

					}
						return $factorial;
					
				}
				
				echo factorialDeN(4,1);

			?> 
	</body>
	

</html>