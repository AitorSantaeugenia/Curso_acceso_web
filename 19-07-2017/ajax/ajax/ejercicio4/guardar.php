<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php
 include("conexion_php.php");

 $nombre = "";
 $apellido = "";
 $dni= "";

 $nombre = $_POST["nombre"];
 $apellido = $_POST["apellido"];
 $dni = $_POST["dni"];

 $sql = "INSERT INTO socios (nombre, apellido, dni)
 VALUES ('".$nombre."', '".$apellido."', '".$dni."')";

 if (!mysqli_query($conn, $sql)){
   echo "<p style='text-align:center'>Error: </p>" . mysqli_error($conn);
 }
mysqli_close($conn);

echo("Se han guardado los datos correctamente");
echo("<br/>");
echo("Volvemos al indice en 3 segundos");
?>

<script>
    var timer = setTimeout(function() {
        window.location='./index.php'
    }, 3000);
</script>
