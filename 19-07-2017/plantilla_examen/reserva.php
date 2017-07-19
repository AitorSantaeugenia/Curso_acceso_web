<?php include 'header.php';?>
<?php include 'conexion_php.php';?>
<script>

</script>
<?php
  $id= 0;
  //print_r($_POST);
  $id = $_POST['id_reserva'];
  //echo($id);
?>
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
<div id="information" class="spacer reserve-info" style="margin-top:15%;">
    <div class="container">
        <div class="row">
            <div class="col-md-12" id="formulario">
              <h3>Confirmar reserva</h3><br/>
                  <form  role="form" class="wowload fadeInRight" action="guardar_reserva.php" method="post">
                    <div class="form-group">
                      <div class="form-group">
                        Nombre <sup>(*)</sup><input type="text" name="nombre" class="form-control" id="nombreCliente1" maxlength="20" required>
                      </div>
                      <div class="form-group">
                        Apellido <sup>(*)</sup><input type="text" name="apellido" class="form-control" id="apellidoCliente1" maxlength="20" required>
                      </div>
                      <div class="form-group">
                        Email <sup>(*)</sup><input type="email" name="email" class="form-control" id="emailCliente" maxlength="30" required>
                      </div>
                      <div class="form-group">
                        Tel. <input type="text" name="telf" class="form-control" id="telCliente" maxlength="9">
                      </div>
                      <div class="form-group" style="display:none">
                        ID propiedad. <input type="text" name="id_propiedad" class="form-control" id="id_propiedad" maxlength="9" value="<?php echo $id; ?>">
                      </div>
                    <input type="submit" class="btn btn-default" value="Finalizar">
                  </form>
            </div><br/>
        </div>
    </div>
</div>
<!-- body -->

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
<!-- services -->


<?php include 'footer.php';?>
