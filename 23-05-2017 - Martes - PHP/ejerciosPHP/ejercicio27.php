<!DOCTYPE html5>
<html>
    <head>

	</head>
	
		<style>
		
		</style>
	<body>
	<!-- 
		EJERCICIO 27
		Palabras repetidas en Array
		MOLARIA UN HUEVO SACAR EL NUMERO DE DUPLICADOS ONLY
	-->
	<h1 style="text-align:Center"> Exercici#27 Palabras repetidas en Array</h1><br/>
		<?php	
		function paraulesRepetidesenArray(){
			$array = array("aitor","menta","guasabi","zanahoria","centre","bit","aitor","bit","pokemon","pizarra","pizza","aitor","bit","menta");
			$num_rep = 0;
			
			/* TESTING 
			if (in_array($array[0], $array)){
				$num_rep = $num_rep++;
			}else if(in_array($array[1], $array)){
				$num_rep = $num_rep++;
			}else if(in_array($array[2], $array)){
				$num_rep = $num_rep++;
			}else if(in_array($array[3], $array)){
				$num_rep = $num_rep++;
			}else if(in_array($array[4], $array)){
				$num_rep = $num_rep++;
			}else if(in_array($array[5], $array)){
				$num_rep = $num_rep++;
			}else if(in_array($array[6], $array)){
				$num_rep = $num_rep++;
			}else if(in_array($array[7], $array)){
				$num_rep = $num_rep++;
			}else if(in_array($array[8], $array)){
				$num_rep = $num_rep++;
			}else if(in_array($array[9], $array)){
				$num_rep = $num_rep++;
			}else if(in_array($array[10], $array)){
				$num_rep = $num_rep++;
			}else if(in_array($array[11], $array)){
				$num_rep = $num_rep++;
			}else if(in_array($array[12], $array)){
				$num_rep = $num_rep++;
			}else if(in_array($array[13], $array)){
				$num_rep = $num_rep++;
			}
			*/
			
			$paraules = array_count_values($array);
			$testing = count($array);
			//$noRepeat = array_count_values($array)-count($array);
			
			echo "El número de paraules total del Array son: ".$testing."<br/>";
			echo 'Items sense duplicats: '.count($paraules).'<br>';
			echo "Items duplicades: ";
			echo $num_rep;
			echo "<br/>";
			echo "<br/>";

			print_r ($paraules);
		}
		
		paraulesRepetidesenArray();
		
			
		?>
		 
	</body>
	
