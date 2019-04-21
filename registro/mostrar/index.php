<?php
    include ('../../php/conexion.php');

    
    $where="";

    if(!empty ($_POST)){
        $busqueda = $_POST['busqueda'];
        if(!empty($busqueda)){
            $where="WHERE usuarioNombre like '%".$busqueda."%'";
        }
    }

    $query="SELECT idusuario, Email, usuarioNombre, UsuarioPass, usuarioRut FROM usuario $where";

    $resultado=mysqli_query($mysqli,$query);

     
    if(!$resultado){
        echo ("no Entro la wea");
    }
?>

<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css"href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container">
        <div class="row">
           <div class="col-sm-12 mt-5 titulo">
                <h1>Editar/leer/borrar</h1>
                <br>
                <form action=" <?php $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="input-group">
                    <input autofocus type="text" name="busqueda" class="form-control" placeholder="ingrese criterio de busqueda" name="busqueda" id="buqueda" aria-label="Recipient's username with two button addons" aria-describedby="button-addon4">
                    <div class="input-group-append" id="button-addon4">
                        <input type="submit" class="btn btn-primary" value="busqueda">
                        <a class="btn btn-danger ml-2" href="/registro/" style="color:#fff;">Agregar Nuevo Registro</a>
                        <a class="btn btn-success ml-2" href="/inicio/" style="color:#fff;">volver a inicio</a>
                        <a class="btn btn-warning ml-2" href="/registro/mostrar" style="color:#fff;">Mostrar Todo</a>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 mt-5 table-responsive">
                <table class="table table-dark table-hover" id="mitabla" width="100%">
                    <thead>
                        <tr>
                        <th scope="col">id</th>
                        <th scope="col">correo</th>
                        <th scope="col">nombre</th>
                        <th scope="col">contraseña</th>
                        <th scope="col">rut</th>
                        <th scope="col" >Editar</th>
                        <th scope="col" >Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($row = mysqli_fetch_assoc($resultado)){
                        ?>
                            <tr>
                                <td><?php echo $row['idusuario']; ?></td>
                                <td><?php echo $row['Email']; ?></td>
                                <td><?php echo $row['usuarioNombre']; ?></td>
                                <td><?php echo $row['UsuarioPass']; ?></td>
                                <td><?php echo $row['usuarioRut']; ?></td>
                                <td style="text-align:center;"><a href="/registro/modificar/index.php?idusuario=<?php echo $row['idusuario'];?>" style="color:#fff;"> <i class="far fa-edit"></i></a></td>
                                <td style="text-align:center;"><a href="#" data-href="/php/delete.php?idusuario=<?php echo $row['idusuario'];?>" data-toggle="modal" data-target="#confirm-delete" style="color:#fff;"><i class="far fa-trash-alt"></i></a></td>
                            </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal" tabindex="-1" role="dialog" id="confirm-delete"> 
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Eliminar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Quiere Eliminar Al usuario seleccionado </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                    <a class="btn btn-danger btn-ok" >Eliminar</a>
                </div>
            </div>
        </div>
    </div>

    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript"lenguage="javascript" src="/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript"lenguage="javascript" src="/js/dataTables.bootstrap4.min.js"></script>
                            
    <script type="text/javascript">
         $('#confirm-delete').on('shown.bs.modal', function (e) {
             $(this).find('.btn-ok').attr('href',$(e.relatedTarget).data('href'));
             $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href')+'</strong>');
         });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#mitabla').DataTable();

        } );
    </script>


  </body>
</html>