<?php
    include ('../../php/conexion.php');


    $idusuario= $_GET['idusuario'];

    $sql="SELECT * FROM usuario Where idusuario='".$idusuario."'";
    $resultado= mysqli_query($mysqli, $sql);
    if(!$resultado){
        echo ("no Entro la wea");
    }
    
    $row = mysqli_fetch_assoc($resultado);

    $id_insert= $mysqli->insert_id;

    
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <script type="text/javascript">
			$(document).ready(function() {
				$('.delete').click(function(){
					var parent = $(this).parent().attr('idusuario');
					var service = $(this).parent().attr('data');
					var dataString = 'idusuario='+service;
					
					$.ajax({
						type: "POST",
						url: "del_file.php",
						data: dataString,
						success: function() {			
							location.reload();
						}
					});
				});                 
			});    
		</script>
        <!-- titulo página -->
        <title>testphp</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
           <div class="col-xl-12 mt-5 titulo">
                <h1>Modificar Registro Usuario</h1>
            </div>
        </div>
        <div class="row">
            <div class="offset-lg-3 mt-5">
            </div>
            <div class="col-lg-6 formulario">
                <form method="POST"  action="/php/update.php" enctype="multipart/form-data">
                    <input type="hidden" id="idusuario" name="idusuario" value="<?php echo $row['idusuario']; ?>">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" autofocus name="email" id="correo" class="form-control" value="<?php echo $row['Email']; ?>" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nombre</label>
                        <input type="text" name="nombre" id="nombre"class="form-control" value="<?php echo $row['usuarioNombre']; ?>" placeholder="Nombre Usuario">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="pass" id="pass" class="form-control" value="<?php echo $row['UsuarioPass']; ?>" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Rut</label>
                        <input type="text" name="rut" id="rut" class="form-control" value="<?php echo $row['usuarioRut']; ?>" placeholder="Rut">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Selecciona una Imagen</label>
                        <input name="archivo" type="file" id="archivo" class="form-control" accept="image/jpeg,image/gif,image/png">
                        <?php 
							$path = "../../img/".$idusuario;
							if(file_exists($path)){
								$directorio = opendir($path);
								while ($archivo = readdir($directorio))
								{
									if (!is_dir($archivo)){
										echo "<div class='mt-2' data='".$path."/".$archivo."'><a href='".$path."/".$archivo."' title='Ver Archivo Adjunto'><span class=''></span></a>";
                                        echo "<img src='../../img/$idusuario/$archivo' width='150' /> ";
                                        echo "$archivo<br> <a href='#' class='delete' title='Ver Archivo Adjunto' ><i class='far fa-trash-alt mr-2'></i>Eliminar imagen</a></div>";
									}
								}
							}
							
						?>
                    </div>


                    <button type="submit" class="btn btn-primary">Actualizar</button>
                    <a class="btn btn-success ml-2" href="/registro/mostrar/" style="color:#fff;">volver a inicio</a>

                </form>
            </div>
        </div>
    </div>


  </body>
</html>