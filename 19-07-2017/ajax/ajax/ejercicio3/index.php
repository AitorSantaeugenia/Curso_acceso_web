<!DOCTYPE html>
<html>
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>


$(document).ready(function(){
    $("#buttonParaMostrar").change(function(){
      var test =  this.value;

      if(test == "comidas"){
          $("#testing").load("comida.php");
      }else if(test == "desayuno"){
          $("#testing").load("desayunos.php");
      }else if(test == "meriendas"){
          $("#testing").load("meriendas.php");
      }else if(test == "cenas"){
          $("#testing").load("cena.php");
      }

    });
});
</script>
</head>
<body>



<h2>AJAX</h2>
Ejercicio 3	<br/><br/>
<select id="buttonParaMostrar">
  <option value="" disabled selected="selected">Seleccione su comida</option>
  <option value="desayuno">Desayuno</option>
  <option value="comidas">Comidas</option>
  <option value="meriendas">Meriendas</option>
  <option value="cenas">Cenas</option>
</select>
<br/><br/>

<div id="testing">

</div>

</body>
</html>
