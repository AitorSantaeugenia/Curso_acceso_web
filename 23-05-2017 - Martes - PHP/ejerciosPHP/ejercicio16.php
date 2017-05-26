<!DOCTYPE html5>
<html>
    <head>

	</head>
	
		<style>
		
		</style>
	<body>	
	<!-- 
		EJERCICIO 16
		MOSTRAR UN OPTION DE 2016 a 2025
		
		Al loro!: Jesus (the Mastah) me ha dicho que lo haga sin for ni while
	-->
	<h1 style="text-align:Center"> Exercici#16 Buscar palabra en string</h1><br/>
          <?php	
		  function buscarConFor($cadena_de_texto, $caracter_Buscar){
				echo "La cadena es: ".$cadena_de_texto;
				echo "<br/>";
				echo "La palabra a buscar es: ". $caracter_Buscar;
				echo "<br/>";
				echo "<br/>";
				
				/* Si, ponemos returns y hacemos un if en lugar de echo en la línia
				35, pues dejamos esto sin echo y así mola más y más bonito, más práctico y eso..
				*/
				if (strpos($cadena_de_texto, $caracter_Buscar) !== false) {
					echo 'Bingoooo, quiero decir, cierto.';
				}else{
					echo 'Nothing, false, falso.';
				}
		  }
		  
		  echo buscarConFor("Hola, como estas ?", "Hola");
		
			?> 
	</body>
	

</html>