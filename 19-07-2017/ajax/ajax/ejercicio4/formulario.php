<!DOCTYPE html>
<html>
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#testing").click(function(){
        $("#testing").load("imagenes.php");
    });
});
</script>
</head>
<body>
<h3>Formulario chuuuungo</h3>

<form action="guardar.php" method="POST">
  Nombre: <input type="text" name="nombre"><br>
  Apellido: <input type="text" name="apellido"><br>
  DNI: <input type="text" name="dni"><br><br>
  <input type="submit" value="Enviar">
</form>

</body>
</html>
