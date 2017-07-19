<?php
include("conexio.php");

//print_r($_POST);
$objeto = (object)$_POST;

print_r($_POST);

echo ("<br/>");
echo ("<p style='text-align:center;'>");
print_r($objeto);
echo ("<p>");
$objeto -> edad;

//connectar a base de datos

//guardar en base de datos
//crear la tabla personas y la tabla coches (que tiene una determinada persona)

$sqlcoche="INSERT INTO persona (nombre, edad) VALUES ($objeto->nombre, $objeto->edad)";


if (!mysqli_query($conn, $sqlcoche)){
  echo "<p style='text-align:center'>Error: </p>" . mysqli_error($conn);
}

$last_id_persona =  mysqli_insert_id($conn);
$arrayCoches=$objeto->coches;
$sqlpersonascoches="";

//echo "total".count($arrayCoches);


//print_r($arrayCoches);
foreach($arrayCoches as $coche_id)
{

  if((int)$coche_id!=0)
  {
    $sqlpersonascoches="INSERT INTO personas_coches (id_persona, id_coche) VALUES ($last_id_persona, $coche_id)";
//echo   $sqlpersonascoches;
echo "<br>";
    if (!mysqli_query($conn3, $sqlpersonascoches)){
      echo "<p style='text-align:center'>Error: </p>" . mysqli_error($conn);
    }

  }

}


//echo $sqlcoche;


// respuesta  ajax
echo "<p style='text-align:center; color:green;'>GUARDADO CORRECTAMENTE</p>";
echo "<BR>";

?>
