<?php include 'header.php';?>
<script>
function everythingOk(){

}
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
<div id="information" class="spacer reserve-info" style="margin-top:15%;">
    <div class="container">
        <div class="row">
            <div class="col-md-12" id="formulario">
              <h3>Formulario de busqueda</h3>
                      <form role="form" class="wowload fadeInRight" action="resultados.php" method="post">
                        <div class="form-group">
                        <select id="selectDormitorio" name="dormitorio">
                          <option value="" disabled selected> Seleccione mínimo de dormitorios</option>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                        </select><br/><br/>
                       </div>

                        <div class="form-group">
                        <select id="selectPrecio" name="precio">
                          <option value="" disabled selected> Seleccione el precio </option>
                          <option>100</option>
                          <option>100-300</option>
                          <option>+300</option>
                        </select><br/><br/>
                       </div>
                       <input type="submit" class="btn btn-default" value="Siguiente" onclick="everythingOk()">
                  </form><br/>
            </div>
        </div>
    </div>
</div>

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
