<!DOCTYPE html5>
<html>
    <head>
	</head>
	<body>
	<h1 style="text-align:Center"> Exercici#1 - Testing a table with PHP</h1><br/>
          <?php
			//AMB WHILE
			echo "<table border=1 width=100%;>";
			for ($i=1; $i<=4; $i++){
				echo "<tr>";
					echo "<td> 1 </td>";
					echo "<td> 1 </td>";
				echo "</tr>";

			}
			echo "</table>";
			
			//AMB WHILE
			echo("<br/>");
			$i=0;
			echo "<table border=1 width=100%;>";
			while ($i<4){
				echo "<tr>";
					echo "<td> 1 </td>";
					echo "<td> 1 </td>";
				echo "</tr>";
				$i++;
			}
			echo "</table>";
			?>
		  
		  
        
	</body>
</html>