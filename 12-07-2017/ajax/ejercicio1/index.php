<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#buttonParaMostrar").click(function(){
        $("#testing").load("imagenes.php");
    });
});
</script>
</head>
<body>
<h2>AJAX</h2>
Ejercicio 1<br/><br/>
<button type="button" id="buttonParaMostrar">Click Me!</button>
<br/><br/>
	<div id="testing">

	</div>

</body>
</html>
