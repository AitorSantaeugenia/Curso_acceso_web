<!DOCTYPE html5>
<html>
    <head>

	</head>
	
		<style>
		
		</style>
	<body>
	<h1 style="text-align:Center"> Exercici#9 PRE P</h1><br/>
          <?php	
			function imprimirParrafo($mida,$color_lletra,$color_fons )
			{
				$textoHTML= "<p style=\" color: ". $color_lletra. "; font-size:".$mida."; background-color:".$color_fons.";\" >";
				$textoHTML = $textoHTML ."Hiiii mari";
				$textoHTML = $textoHTML . "</p>";
				return $textoHTML;
				
				
			}
			
			
			 echo imprimirParrafo(50, "#fff", "#000");
		
			?> 
	</body>
	

</html>