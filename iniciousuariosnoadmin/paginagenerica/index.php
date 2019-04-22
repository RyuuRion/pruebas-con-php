<?php
    include ('../../php/conexion.php');


    $idanime= $_GET['idanime'];
    
    $sql="SELECT * FROM anime Where idanime='".$idanime."'";
    $resultado= mysqli_query($mysqli, $sql);
    if(!$resultado){
       echo ("no Entro la wea");
    }
        
    $row = mysqli_fetch_assoc($resultado);
    
?>
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../../css/fontello.css">
    <link rel="stylesheet" type="text/css" href="../../../css/style2.css">
    <title>Inicio</title>
  </head>
  <body>
    <!--Barra de navegacion-->
      <!-- Slider imagen-->
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                  <img src="https://cysticfibrosisnewstoday.com/wp-content/uploads/2016/11/shutterstock_133446737-1400x480.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-caption d-none d-md-block">
                    <h5>Bienvenidos</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
              </div>
          </div>
      </div>
      <!--Completar con info del lugar-->
      <input type="hidden" id="idusuario" name="idusuario" value="<?php echo $row['idanime']; ?>">
        <div class="container mt-5">
            <div class="loop">
                <div class="row">
                    <div class="col-lg-12 nani">
                            <div class="cargarimg mt-2">
                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner banner-img ">
                                              <div class="carousel-item active">
                                                <img src="/img/imgAnimes/<?php echo $row['idanime']; ?>/img-carrousel.jpg" class="d-block w-100" alt="...">
                                              </div>
                                              <div class="carousel-item">
                                                <img src="http://s1.1zoom.me/big0/801/Fields_Sky_Sunrises_and_443127.jpg" class="d-block   w-100" alt="...">
                                              </div>
                                              <div class="carousel-item">
                                                <img src="http://s1.1zoom.me/big0/801/Fields_Sky_Sunrises_and_443127.jpg" class="d-block   w-100" alt="...">
                                              </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                              <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                              <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                            </div>
                            <div class="heading mt-2">
                                <h3><?php echo $row['nombreAnime']; ?></h3>
                                    <hr>
                            </div>
                            <div class="cargarinfo">
                                <p><a href="#"><?php echo $row['categoria']; ?></a></p>
                                <p><?php echo $row['resumen']; ?></p>
                            </div>
                    </div>
                </div>
            </div>
        </div>

      <!-- Footer-->
      <footer class="mt-5">
		      <div class="container">
            <div class="row">
              <div class="col-lg-6">
                  <p class="copy"> Turismo &copy;</p>
              </div>
                <div class="sociales col-lg-6">
                    <a class="icon-facebook "></a>
                    <a class="icon-twitter"></a>
                    <a class="icon-instagram"></a>
                </div>
            </div>
		      </div>
		</footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>