<?php

session_start();
  if(empty($_SESSION['nombre'])){

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/css/style.css" type="text/css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container">

            <div class="col-xl-12 mt-5 titulo">
                <h1> Usuario no logeado, Por favor para entrar aqui tienes que logearte</h1>
                <a href="/" class="mt-5 btn btn-primary">Login</a>
            </div>
        <?php
           
          }else{
        ?>
        <!doctype html>
      <html lang="en">
        <head>
          <!-- Required meta tags -->
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <link rel="stylesheet" href="/css/style.css" type="text/css">
          <!-- Bootstrap CSS -->
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

          <title>Hello, world!</title>
        </head>
        <body>
        <div class="container">
          <div class="row">
            <div class="col-xl-12 mt-5 titulo">
                  
                  <h1>Modulo Inicio usuario administrador </h1>
                  <?php  print '<h2>Bienvenido Administrador '.$_SESSION['nombre'].'</h2>'?> 
              </div>
          </div>
          <div class="row">
              <div class="offset-lg-3 mt-5">
              </div>
              <div class="col-lg-6 formulario">
                  <a href="/registro/" class="btn btn-primary" >Registrar nuevo usuario</a><br>
                  <a href="/registro/mostrar/" class="mt-1 btn btn-danger">Ver/Editar/Eliminar usuarios</a> <br>
                  <a href="/registroAnime/" class="btn btn-success mt-1" >Registrar nuevo anime</a><br>
                  <a href="/registroAnime/mostrarAnime/" class="mt-1 btn btn-warning">Ver/Editar/Eliminar animes</a><br>
                  <br><a href="/php/cerrar_sesion.php" class="mt-1 btn btn-danger">Cerrar Session</a>
              </div>
          </div>
        <?php
           
          }
        ?>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>