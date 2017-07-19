<?php
    include("conexion_php.php");

    $sql = "SELECT * FROM `desayunos`";

    $resultado = mysqli_query($conn,$sql);

    if (!mysqli_query($conn, $sql)){
      echo "<p style='text-align:center'>Error: </p>" . mysqli_error($conn);
    }

    foreach($resultado as $item){
?>
<?php echo ($item['tipo'])."<br/>"?>
<?php echo "<br/>"; ?>
  <?php
   }
  ?>
