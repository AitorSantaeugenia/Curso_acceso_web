<?php include 'header.php';?>

<?php include 'conexion_php.php';?>
<?php

//print_r($_POST);
$dormitorio=$_POST['dormitorio'];
$precio=$_POST['precio'];

//echo($dormitorio);
//echo($precio);

if($precio=="100"){
  $sql = 'SELECT * FROM propiedades WHERE dormitorios>='.$dormitorio.' AND precio_noche='.$precio;
}else if($precio=="100-300"){
  $sql = 'SELECT * FROM propiedades WHERE dormitorios>='.$dormitorio.' AND precio_noche BETWEEN 100 AND 300';
}else if($precio=="+300"){
  $sql = 'SELECT * FROM propiedades WHERE dormitorios>='.$dormitorio.' AND precio_noche>300';
}

$resultado = mysqli_query($conn,$sql);

if (!$resultado) {
  die('Consulta no válida: ' . mysqli_error());
}

 ?>
 <style>
       @media screen and (min-width: 100px) and (max-width: 500px) {
              .col-md-12 {
                  flex-direction:column;
                }
                .textingMongo{
                  float:left;
                }
       }

       @media screen and (min-width: 500px) and (max-width: 3000px) {
              .col-md-12 {
                  flex-direction:row;
                }

                .textingMongo{
                  float:right;
                }
       }
 </style>

 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
 <script type="text/javascript">
 $(document).ready( function() {

        $(".preferidoGrupo").each(function() {
           if($(this).attr('checkoruncheck') == "1"){
             $(this).prop('checked', true);
           }else if(($(this).attr('checkoruncheck') == "0")){
             $(this).prop('checked', false);
           }
        });

     $('#inputOferta').bind('change', function () {
        filtrar();
     });

     $('#inputGarantia').bind('change', function () {
        filtrar();
     });

     $('#selectBanosInput').bind('change', function () {
        filtrar();

     });
   });

   function filtrar(){
     var cadena = "";

     var oferta = $('#inputOferta').attr('value');
     var garantia = $('#inputGarantia').attr('value');
     var banos=$('#selectBanosInput').val();

     if($('#inputOferta').is(':checked')){
       oferta = 1;
     }else{
       oferta = 0;
     }

     if($('#inputGarantia').is(':checked')){
       garantia = 1;
     }else{
       garantia = 0;
     }
     //alert(banos);
     //alert(oferta);
     //alert(garantia);



     var testingtecnomortero = $('.contenedorGlobalSongs').attr('class');
     //alert(ano.length);

     if(banos != '') cadena ='.banos'+banos;
     if(oferta!='') cadena+='.oferta'+oferta;
     if(garantia!='') cadena+='.garantia'+garantia;
     //alert(cadena);

     //alert('.'+cadena);
     $('.col-md-12').hide();
     $('.col-md-12'+cadena).show();
   }

   $(document).ready(function(){
   		 $(".preferidoGrupo").change(function(){
         var preferido = 0;

         var destino_id = $(this).attr('idBBDD');
         var preferido = $(this).attr('checkoruncheck');
         //alert(preferido);

         if($(this).is(':checked')){
           preferido = 1;
           $(this).attr('checkoruncheck', 1);
         }else{
           preferido = 0;
           $(this).attr('checkoruncheck', 0);
         }

         //alert(preferido);

         $.ajax({
           url: "guardar.php?destino_id="+destino_id+'&'+'preferido='+preferido,

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
<!-- banner -->
<div class="banner" style="margin-bottom:10%;">
    <!-- <iframe width="1820" height="1024" src="https://www.youtube.com/embed/u3K3HRHvEOU?autoplay=1&loop=1&showinfo=0&controls=0" frameborder="0" allowfullscreen></iframe> -->

    <div class="welcome-message">

        <div class="wrap-info" style="margin-top:4%;">
            <div class="information">
              <div style="border:1px solid transparent;"><!-- opacity: 0.5; filter: alpha(opacity=50);"> -->
                <h1  class="animated fadeInDown" style="color:#bfa145; font-weight:600; margin-top:2%;";>Sun House Unlimited Renting</h1>
                <p class="animated fadeInUp" style="color:#bfa145; font-weight:600; margin-bottom:1%;"> Si piensas que es caro contratar un profesional, prueba con un aficionado</p>
              </div>
            </div>
            <a href="#information" class="arrow-nav scroll wowload fadeInDownBig"><i class="fa fa-angle-down"></i></a>
        </div>
    </div>
</div>
<!-- banner-->


<!-- body -->
<div id="information" class="spacer reserve-info" style="margin-top:15%; margin-bottom:-5%;">
    <div class="container">
        <div class="row">
            <div class="col-md-11" id="formulario">
              <h3>Resultados de busqueda</h3>
                      <div id="contenidoBusqueda" style="border:1px solid transparent">
                        <div id="divFijoFiltros" style="border:1px solid transparent;">
                          <div id="divfiltrosSelectBanos" style="border:1px solid transparent; width:50%;float:left;">
                            <select id="selectBanosInput" name="banos" class="input-medium">
                                <option value="" disabled selected> Seleccione mínimo de baños</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select><br/><br/>
                          </div>
                          <div  class="textingMongo" style="border:1px solid transparent; text-align:center;">
                            En oferta: <input type="checkbox" id="inputOferta" name="oferta">
                            Con garantía: <input type="checkbox" id="inputGarantia" name="garantia">
                          </div>
                        </div>
                      </div>

            </div>

        </div>
    </div>
</div>
<!-- CONTENIDO DIV FOREACH -->
<div class="container">
    <div class="row">

<?php
  foreach($resultado as $item){
?>
      <div class="col-md-12 banos<?php echo $item['banos']; ?> oferta<?php echo $item['oferta']; ?> garantia<?php echo $item['garantia']; ?>" style="width:100%; display:flex; border:1px solid grey; margin-bottom:2%;">
          <div style="border:1px solid transparent; float:left; height:50%; flex:1;">
              <br/><img src="<?php echo $item['foto']; ?>" alt="Foto" height="200" width="300" style="margin-bottom:3%;"/>
          </div>

          <div style="border:1px solid transparent; float:right; flex:1;">
              <br/><h3 style="margin-left:6%; color:crimson">Precio: <?php echo($item['precio_noche']." €");?></h3>
              <ol>
                  <?php echo"<li class='tg-031e' style='list-style-type: none;'> <h4  style='text-decoration:underline;'>".$item['titulo']."</h4></li><br/>";?>
                  <?php echo"<li class='tg-031e' style='list-style-type: none;'> Dormitorios: ".$item['dormitorios']."</li>";?>
                  <?php echo"<li class='tg-031e' style='list-style-type: none;'> Baños: ".$item['banos']."</li>";?>
                  <?php echo"<li class='tg-031e' style='list-style-type: none;'> En oferta: ".$item['oferta']."</li>";?>
                  <?php echo"<li class='tg-031e' style='list-style-type: none;'> Con garantía: ".$item['garantia']."</li>";?>
              </ol>
              <hr/>
              <div style="border:1px solid transparent; margin-top:5%;">
                  <div style="border:1px solid transparent; float:left;">
                    <form role="form" class="wowload fadeInRight" action="reserva.php" method="post">
                        <input type="text" name="id_reserva" class="form-control" id="id_reserva" style="display:none" value="<?php echo $item['id']; ?>">
                      <input type="submit" class="btn btn-default" value="Reservar">
                    </form>
                  </div>
                  <div style="border:1px solid transparent; float:right; margin-top:1%; ">
                                Preferida: <input type="checkbox" name="preferido" class="preferidoGrupo" checkorUncheck="<?php echo $item['preferida']; ?>" idBBDD="<?php echo $item['id']; ?>" id="preferido<?php echo $item['id']; ?>">
                  </div>

              </div>

          </div>
      </div>
      <br/>
<?php }?>
      </div>
</div><br/><br/>

<!-- services -->
<div class="spacer services wowload fadeInUp">
  <div class="container">
      <div class="row">
          <div class="col-sm-4">
              <!-- RoomCarousel -->
              <div id="RoomCarousel" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="item active"><img src="images/photos/1.jpg" class="img-responsive" alt="slide"></div>
                    <div class="item  height-full"><img src="images/photos/2.jpg"  class="img-responsive" alt="slide"></div>
                    <div class="item  height-full"><img src="images/photos/3.jpg"  class="img-responsive" alt="slide"></div>
                    <div class="item  height-full"><img src="images/photos/4.jpg"  class="img-responsive" alt="slide"></div>
                  </div>
                  <!-- Controls -->
                  <a class="left carousel-control" href="#RoomCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                  <a class="right carousel-control" href="#RoomCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
              </div>
              <!-- RoomCarousel-->
              <div class="caption">Casas rurales<a href="#" class="pull-right"><i class="fa fa-edit"></i></a></div>
          </div>


          <div class="col-sm-4">
              <!-- RoomCarousel -->
              <div id="TourCarousel" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="item active"><img src="images/photos/apartamentos/1.jpg" class="img-responsive" alt="slide"></div>
                    <div class="item  height-full"><img src="images/photos/apartamentos/2.jpg"  class="img-responsive" alt="slide"></div>
                    <div class="item  height-full"><img src="images/photos/apartamentos/3.jpg"  class="img-responsive" alt="slide"></div>
                    <div class="item  height-full"><img src="images/photos/apartamentos/4.jpg"  class="img-responsive" alt="slide"></div>
                  </div>
                  <!-- Controls -->
                  <a class="left carousel-control" href="#TourCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                  <a class="right carousel-control" href="#TourCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
              </div>
              <!-- RoomCarousel-->
              <div class="caption">Apartamentos<a href="#" class="pull-right"><i class="fa fa-edit"></i></a></div>
          </div>


          <div class="col-sm-4">
              <!-- RoomCarousel -->
              <div id="FoodCarousel" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="item active"><img src="images/photos/pisos/1.jpg" class="img-responsive" alt="slide"></div>
                    <div class="item  height-full"><img src="images/photos/pisos/2.jpg"  class="img-responsive" alt="slide"></div>
                    <div class="item  height-full"><img src="images/photos/pisos/3.jpg"  class="img-responsive" alt="slide"></div>
                  </div>
                  <!-- Controls -->
                  <a class="left carousel-control" href="#FoodCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                  <a class="right carousel-control" href="#FoodCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
              </div>
              <!-- RoomCarousel-->
              <div class="caption">Pisos<a href="#" class="pull-right"><i class="fa fa-edit"></i></a></div>
          </div>
      </div>
  </div>
</div>
<div id="successID">

</div>
<!-- services -->


<?php include 'footer.php';?>
