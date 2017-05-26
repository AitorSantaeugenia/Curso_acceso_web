<html lang="es">
	<head>
		<title>Exercici#23</title>
	</head>
	<body>
	<h1 style="text-align:Center"> Exercici#23 Crear frase random chico/chica, bla</h1><br/>
		<form method="POST" action="ejercicio23.php"> 
			<input type="submit" value="CREA UNA FRASE!" name="B1">
		</form>
		<!-- 
			Exercici#23 
				Crear frase random chico/chica, bla
		-->
		<?php 
			
			function crearAleatorios(){
							
				$aleatorio1=rand(0,9);
				$aleatorio2=rand(0,9);
				$aleatorio3=rand(0,9);
				$aleatorio4=rand(0,9);
				$arraytotal= array($aleatorio1,$aleatorio2,$aleatorio3,$aleatorio4);
				
				return $arraytotal;
			}
			
			$arrayValores=array();
			$texto = array( "chico","bueno","no","come","pescado", "buena","carne",
			"malo","chica","pasea" );
			
			
			
			$arrayValores=crearAleatorios();
			
			$arrayValores=array_unique($arrayValores);
			
			while(count($arrayValores)<4){
			 
				$arrayValores=crearAleatorios();
				$arrayValores=array_unique($arrayValores);
			 
			}
			
			echo $texto[$arrayValores[0]]." ".$texto[$arrayValores[1]]." ".$texto[$arrayValores[2]]." ".$texto[$arrayValores[3]];
		?> 
		
	</body>
</html>