

$( document ).ready(function() {



//$('.coches').click
//no funciona porque hemos hecho un load dinámico entonces el DOM sabe que exsten por tanto la  forma correcta es:   $(document).on('click', '.coches', function(event)

  $(document).on('click', '.coches', function(event)
  {


           if($(this).prop('checked'))
           {

             $(this).val($(this).attr('cocheid'))

           }else {
              $(this).val(0);
           }
  });



});



$(document).ready(function()
{
	//opción 1 cargar contenidos sencillos
	$("#boton1").click(function()
	{
		$("#div1").load("contenido.php?enviar=1");
    });

});


//opción 2 enviar y recibir datos
$(document).ready(function()
{
    $("#boton2").click(function()
	{

    if(  $('#nombre').val().length >2 &&  $('#edad').val().length>0  &&  $('#edad').val()>0)
    {


      $.ajax({

        url: "guardar.php",

  			success: function(result)
  			{


  				$("#div2").html("RECIBO:"+result);
  			},

  			data:   {
            		"nombre": '"'+$("#nombre").val()+'"',
            		"edad":'"'+$("#edad").val()+'"',
            		"coches": {
            			"c1":$("#c1").val(),
            			"c2":$("#c2").val(),
            			"c3":$("#c3").val()
            			}
            		 }
  		  ,

  			type: 'POST',

  			error: function()
  			{
  				 $('#notificar').text('Hay un error');
  			}

  		});


  }else
  {
    alert ('Completa los datos');

  }
    });
});

/*
function  crearJSON()
{
  var json="";

  json='nombre=>'+  $("#nombre").val() + ','+
'edad=>' + '"' + $("#edad").val() + '",'+
'coches=>('+
'c1=>'+'"' + $("#c1").val()+'",'+
'c2=>' + '"'+$("#c2").val()+'",'+
'c3=>'+ '"'+ $("#c3").val()+'"'+
')';

return json;

}
*/
