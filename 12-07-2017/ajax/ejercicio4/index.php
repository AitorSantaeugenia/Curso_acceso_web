<!DOCTYPE html>
<html>
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#testing").click(function(){
        $("#testing2").load("formulario.php");
    });
});
</script>
</head>
<body>



<h2>AJAX</h2>
<p style="text-align:center;">Ejercicio 4</p>	<br/><br/>
<div id="testing" style="border:1px solid red; text-align:center; background-color:black; color:red;">
Click me
</div>
<br/><br/>

<div id="testing2" style="border:1px solid transparent; text-align:center;">

</div>

</body>
</html>
