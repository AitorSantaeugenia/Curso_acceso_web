<?php
include("conexio_php.php");

$col = 0;
$id = 0;
$c=0;
$grupo=0;

print_r($_GET);
$id = $_GET['fila'];

if(isset($_GET['grupo'])){
  $grupo=(int)$_GET['grupo'];

}

if(isset($_GET['c1'])){
    $c = (int)$_GET['c1'];
    $sql2="UPDATE fila SET c1=$c WHERE fila=$id AND grupo=$grupo";
}

if(isset($_GET['cx'])){
    $c = (int)$_GET['cx'];
    $sql2="UPDATE fila SET cx=$c WHERE fila=$id AND grupo=$grupo";
}

if(isset($_GET['c2'])){
    $c = (int)$_GET['c2'];
    $sql2="UPDATE fila SET c2=$c WHERE fila=$id AND grupo=$grupo";
}

if (!mysqli_query($conn, $sql2)){
  echo "<p style='text-align:center'>Error: </p>" . mysqli_error($conn);
}

// respuesta  ajax


?>
