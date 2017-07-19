
<?php
  include("conexio.php");

	$sql = "SELECT * FROM coche";
	$resultado = mysqli_query($conn,$sql);

	if (!$resultado) {
		die('Consulta no válida: ' . mysqli_error());
	}


if((bool)$_GET['enviar'])
{
	echo 'Nuevo  <strong style="color:red;">propietario</strong>';
	echo '<BR>';
	echo 'Nombre: <input type="text" id="nombre" name="nombre" value="" />';
	echo '<BR/>';
	echo '<BR/>';
	echo 'Tu Edad: <input type="text" id="edad"   name="edad" value=""  />';
	echo '<BR/>';
	echo '<BR/>';
	echo 'Listado de coches:';
	echo '<BR/>';
	echo '<ul>';

	//Imprimim resultats
	$i=0;
	foreach($resultado as $item)
	{
		$i++;
		echo '<li> <input class="coches" type="checkbox" cocheid="'.$item['id'].'" id="c'.$i.'" name="'.$item['id'].'" value="0">'.$item['nombre'].'</li>';

	}

	echo '<input  id="totalcoches" type="hidden" value="'.$i.'">';
	echo '</ul>';


}?>
