
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
                <h1>Registro Usuario</h1>
            </div>
        </div>
        <div class="row">
            <div class="offset-lg-2 mt-5">
            </div>
            <div class="col-lg-8 formulario">
                <form method="POST"  action="../php/guardar.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" id="correo" class="form-control"  aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nombre</label>
                        <input type="text" name="nombre" id="nombre"class="form-control" placeholder="Nombre Usuario">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="pass" id="pass" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Rut</label>
                        <input type="text" name="rut" id="rut" class="form-control" placeholder="Rut">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Selecciona una Imagen</label>
                        <input name="archivo" type="file" id="archivo" class="form-control" accept="image/jpeg,image/gif,image/png">
                    </div>
                    <button type="submit" class="btn btn-primary">Registrar</button>
                    <a class="btn btn-success ml-2" href="/" style="color:#fff;">volver a inicio</a>
                </form>
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

