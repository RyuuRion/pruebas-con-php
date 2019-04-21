<?php
     include ("conexion.php");

     $mysqli = mysqli_connect("127.0.0.1","root","","test_php");

     if(!$mysqli){
        die("murio la db WEEEEEEYYY". mysqli_connect_error() . PHP_EOL);
        }

    $idUsuario= $mysqli->real_escape_string($_GET['idusuario']);
     $query= 'DELETE FROM usuario  WHERE idusuario="'.$idUsuario.'"';
    
     $resultado=mysqli_query($mysqli, $query);
     if(!$resultado){
        echo ("no Entro la wea");
    }
    

    eliminarDir('../img/'.$idUsuario);

    }
	function eliminarDir($carpeta)
	{
		foreach(glob($carpeta . "/*") as $archivos_carpeta)
		{
			if (is_dir($archivos_carpeta))
			{
				eliminarDir($archivos_carpeta);
			}
			else
			{
				unlink($archivos_carpeta);
			}
		}
		rmdir($carpeta);
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
                <h2 style="color: red;">EL USUARIO NO SE A ELIMINADO </h2>
                <a href="/registro/mostrar/" class="btn btn-primary">Volver al menu</a>
                <?php
                    }else{
                ?>
                <h2 style="color: green;">El usuario se elimino correctamente</h2>
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