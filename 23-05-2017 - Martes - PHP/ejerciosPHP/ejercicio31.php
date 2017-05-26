<!DOCTYPE html5>
<html>
    <head>

	</head>
	
		<style>
		
		</style>
	<body>
	<!-- 
		EJERCICIO 31
			Texto sin sentido
			
	-->
	<h1 style="text-align:Center"> Exercici#31 Texto sin sentido</h1><br/>
		<?php		

			function textoSinSentido($longPalabraMax,$numPalabras){
				//Testing vectores
				$vector1Nojuntas = array('a', 'i', 'o');
				$vector2Juntas = array('e', 'u');
				$vector3ConsonantesNojuntas = array('t','q','w','y','p','g','j','k','z','x','v','b','n','m');
				$vector4ConsonantesSi = array('c', 'd', 'f', 'h', 'l', 'r', 's');
				//$vectorChars = (range('a', 'z'));
				$palabras="";
				$palabras2="";
				$palabras3="";
				$palabras4="";
				
				for ($i = 0; $i <$numPalabras; $i++) 
				{
					
					shuffle($vector1Nojuntas);
					shuffle($vector2Juntas);
					shuffle($vector3ConsonantesNojuntas);
					shuffle($vector4ConsonantesSi);
					
					$temp1=implode($vector1Nojuntas);
					$temp2=implode($vector2Juntas);
					$temp3=implode($vector3ConsonantesNojuntas);
					$temp4=implode($vector4ConsonantesSi);
					
					$vector=array($temp1,$temp2,$temp3,$temp4);
					
					//rand per tenir text amb diferents mides de paraules
					
					for($i=1;$i<$numPalabras;$i++)
					{
						$aleat1=rand(0,3);
						$aleat2=rand(1,3);
						$aleat3=rand(0,1);
						$aleat4=rand(2,3);
						
						//Si no hi ha vocal repeteix
					    if($aleat1==1 and $aleat2==1)
						{
							$aleat1=rand(2,3);
							$aleat2=rand(2,3);
							
						}
						
						$tempMezcla=substr($vector[$aleat1],0,rand(1,$longPalabraMax/rand(1,3)));
						$tempMezcla.=substr($vector[$aleat2],0,rand(1,$longPalabraMax/rand(1,3)));
						$tempMezcla.=substr($vector[$aleat3],0,rand(1,$longPalabraMax/rand(1,3)));
					    $tempMezcla.=substr($vector[$aleat4],0,rand(1,$longPalabraMax/rand(1,3)));
						
						
						$palabras .= " ".substr($tempMezcla, 0, rand(1,$longPalabraMax));
					}
					
				}
				return $palabras;
			}
			
			print_r( textoSinSentido(10, 15))."<br/>";

		
		?>
		 
	</body>
	
</html>