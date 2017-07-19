<?php
include("conexion_php.php");

print_r($_GET);

$origen = $_GET['destino_id'];
$preferida = $_GET['preferido'];


// respuesta  ajax
$sql="UPDATE propiedades SET preferida=$preferida WHERE id=$origen";

if (!mysqli_query($conn, $sql)){
  echo "<p style='text-align:center'>Error: </p>" . mysqli_error($conn);
}

?>
