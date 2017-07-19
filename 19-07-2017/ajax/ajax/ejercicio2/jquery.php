<?php
    include("conexion_php.php");

    $sql = "SELECT * FROM `_empleados` WHERE antiguedad>10";

    $resultado = mysqli_query($conn,$sql);

    if (!mysqli_query($conn, $sql)){
      echo "<p style='text-align:center'>Error: </p>" . mysqli_error($conn);
    }

    foreach($resultado as $item){
?>
<?php echo ($item['nombre'])."<br/>"?>
<?php echo ($item['apellidos'])."<br/>"?>
<?php echo ($item['antiguedad'])."<br/>"?>
<?php echo "<br/>"; ?>
  <?php
   }
  ?>
