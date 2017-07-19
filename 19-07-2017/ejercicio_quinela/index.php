<!DOCTYPE html>
<html>
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<title>Loterias y apuestas del estado</title>
<style>
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:14px;border-style:solid;border-color: #f6828d;border-width:5px;overflow:hidden;word-break:normal; padding:3px;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;border-style:solid;border-color: #f6828d;border-width:1px;overflow:hidden;word-break:normal;}
.tg .tg-yw4l{vertical-align:top}
.table th, td {
	text-align: center;
}
td.tontadeCiuta {border:2px solid #f6828d;}

.tg-yw42{border:1px solid #f6828d; border-top:0px;}
#contenidorTable{
	border:1px solid transparent;
	text-align:center;
	margin-left:26%;
}
</style>

<!-- PHP -->
<?php
  include("conexio_php.php");

	$sql = "SELECT * FROM fila";
	$resultado = mysqli_query($conn,$sql);

	if (!$resultado) {
		die('Consulta no válida: ' . mysqli_error());
	}
?>

<script>
$(document).ready(function(){

	for(i=1; i<115; i++){

	   var col1 = ($("#fila"+i+"Col1")).attr('value');
		 var colx = ($("#fila"+i+"ColX")).attr('value');
		 var col2 = ($("#fila"+i+"Col2")).attr('value');

		 if(col1 == 0){
			  ($("#fila"+i+"Col1")).attr('style',  'background-color:white');

		 }else if(col1 == 1){
 		 		($("#fila"+i+"Col1")).attr('style',  'background-color:green');
		 }

		 if(colx == 0){
				($("#fila"+i+"ColX")).attr('style',  'background-color:white');

		 }else if(colx == 1){
					($("#fila"+i+"ColX")).attr('style',  'background-color:green');
		 }

		 if(col2 == 0){
				($("#fila"+i+"Col2")).attr('style',  'background-color:white');

		 }else if(col2 == 1){
					($("#fila"+i+"Col2")).attr('style',  'background-color:green');
		 }

	 }

	 		 $(".tg-yw4l").click(function(){
	 			 var valorAtributo = $(this).attr('value');
				 var testingid = $(this).attr('testingid');
				 var testingcol = $(this).attr('testingCol');
				 var testingfila = $(this).attr('testingfila');
				 var grupo=$(this).attr('grupo');
	 			 //var idmenta =  $(this).attr('value');

	 			 if(valorAtributo == "0"){
	 				 $(this).attr('value', "1");
					 valorAtributo = $(this).attr('value');
	 				 $(this).attr('style',  'background-color:green');
	 			 }else if(valorAtributo == "1"){
	 				 $(this).attr('value', "0");
					 valorAtributo = $(this).attr('value');
	 				 $(this).attr('style',  'background-color:white');

	 			 }

	 			$.ajax({

	 				url: "guardar.php?fila="+testingfila+'&'+"c"+testingcol+'='+valorAtributo+'&'+"grupo="+grupo,

	 				success: function(result){


	 					$("#successID").html("<br/><p style='text-align:center; color:red;'>RECIBO:</p>"+result);
	 				},

	 				type: 'GET',

	 				error: function()
	 				{
	 					 $('#notificar').text('Hay un error');
	 				}

	 			});

	 		 });

});




</script>


</head>
<body>
		<div style="border:1px solid red; min-height:130px;" id="globalContainer">
				<div style="display:flex;">
					<div style="flex:1;"><img src="./img/img2.png" alt="Loterias y apuestas del estado" height="180" width="300"></div>
					<div style="flex:2;"> 123</div>
					<div style="flex:1;"> <img src="./img/img1.png" alt="Loterias" height="150" width="300"></div>
				</div>

				<div id="contenidorTable" style="border:1px solid black; margin-top:5%;">
					<div style="border:3px solid #f6828d; padding:0.14%; width:37.71%; margin-left:25.18%;"><p style="letter-spacing:20px; text-align:center; color:#f6828d; margin-left:4%;  margin-bottom:0px; margin-top:0px;">PRONOSTICOS</p></div>

					<table class="tg1" style=" ">
						<tr>
							<td>
									<table class="tg" style=" ">

										<?php
										$comptador = 0;
										foreach($resultado as $item){
													$comptador++;

										?>


											<?php if($comptador%15==0){
												$comptador = 1;
												 echo '</table></td><td><table class="tg" style=" ">';

											}?>

										<tr>
									    <?php if((int)$item['grupo']==1){  ?><th class="tg-yw42" style="text-align:left; color:steelblue;"><?php echo strtoupper($item['partido']);?><div style="text-align:right;float:right;"> ....... &nbsp;<?php echo $comptador;?>&nbsp;&nbsp;</div></th> <?php }?>

									    <td class="tg-yw4l" id="fila<?php echo $item['id']; ?>Col1" value="<?php echo $item['c1']; ?>" testingid="<?php echo $item['id']; ?>" testingCol="1" testingfila="<?php echo $item['fila']; ?>"
											grupo="<?php echo $item['grupo']; ?>">1</td>
									    <td class="tg-yw4l" id="fila<?php echo $item['id']; ?>ColX" value="<?php echo $item['cx']; ?>" testingid="<?php echo $item['id']; ?>" testingCol="x" testingfila="<?php echo $item['fila']; ?>"
											grupo="<?php echo $item['grupo'];?>">X</td>
											<td class="tg-yw4l" id="fila<?php echo $item['id']; ?>Col2" value="<?php echo $item['c2']; ?>" testingid="<?php echo $item['id']; ?>" testingCol="2" testingfila="<?php echo $item['fila']; ?>"
											grupo="<?php echo $item['grupo']; ?>">2</td>
										</tr>

										<?php }?>

								<?php


								?>

							</table>




					</td>
				</tr>
					 </table>
				</div>
		</div>


</body>
</html>
