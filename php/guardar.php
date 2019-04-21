<?php

 include ("conexion.php");

  $email=$mysqli->real_escape_string($_POST['email']);
  $nombre=$mysqli->real_escape_string($_POST['nombre']);
  $pass=password_hash($_POST['pass'], PASSWORD_DEFAULT);
  $rut=$mysqli->real_escape_string($_POST['rut']);

 $query= 'INSERT into usuario (Email, usuarioNombre, UsuarioPass, UsuarioRut) Values ("'.$email.'","'.$nombre.'","'.$pass.'","'.$rut.'")';

 $resultado=mysqli_query($mysqli, $query);
  $id_insert= $mysqli->insert_id;

  if($_FILES["archivo"]["error"]>0){
    echo "error al cargar archivo";
    exit();
  }else{
    $permitidos= array("image/jpeg","image/png", "image/gif");
    $limite_kb= 200;

    if (in_array($_FILES["archivo"]["type"], $permitidos) && $_FILES["archivo"]["size"] <= $limite_kb *1024){
      $ruta='../img/'.$id_insert.'/';
      $archivo=$ruta.$_FILES["archivo"]["name"];

      if(!file_exists($ruta)){
        mkdir($ruta);
      }
      if(!file_exists($archivo)){
        $resultado= @move_uploaded_file($_FILES["archivo"]["tmp_name"], $archivo);
        if($resultado){
          echo "archivo guardado";
        }else{
          echo "archivo no guardado";
        }
      }else{
        echo "archivo ya existe";
      }

    }else{
      printf("mecagoendios");
    }
  }


?>

<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css" type="text/css" >
    
    <title>testphp</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
           <div class="col-xl-12 mt-5 titulo">
                <?php
                    if(!$resultado){

                ?>
                <h2 style="color: red;">Registro No realizado</h2>
                <a href="/registro/mostrar/" class="btn btn-primary">Volver al menu</a>
                <?php
                    }else{
                ?>
                <h2 style="color: green;">Registro realizado correctamente</h2>
                <a href="/registro/mostrar/" class="btn btn-primary">Volver al menu</a>
                <?php
                    }
                    exit();
                ?>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>