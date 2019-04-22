<?php
    include ('../php/conexion.php');
    

    $queryCat='SELECT nombreCategoria from catergorias';

    $queryAnime='SELECT idanime, nombreAnime FROM anime';

    $resultado=mysqli_query($mysqli, $queryCat);

    $resultado2=mysqli_query($mysqli, $queryAnime);

    if(!$resultado){
        echo "mala la wea";
    }

    if(!$resultado2){
        echo "teni mala la query de anime aweonao ql";
    }
?>

<!doctype html>
<html lang="es">
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
                <h1>Bienvenidos</h1>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-3">
                <table class="table table-hover" style="text-align:center;">
                    <thead class="thead-dark">
                        <th>categorias</th>
                    </thead>
                    <tbody >
                            <?php
                                while($row=mysqli_fetch_assoc($resultado)){
                                    
                            ?>
                            <tr>
                            <td><?php echo $row['nombreCategoria']; ?></td>
                            </tr>
                            <?php
                                }
                            
                            ?> 
                    </tbody>
                </table>
            </div>
            <div class="col-lg-8 ml-2">
                <div class="animes row">
                    <?php
                        while($row=mysqli_fetch_assoc($resultado2)){
                    ?>
                    <div class="card ml-3 card-anime" style="width: 12rem; text-align:center;">
                        <img src="/img/imgAnimes/<?php echo $row['idanime'];?>/imgcard.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['nombreAnime'];?></h5>
                            <a href="paginagenerica/index.php?idanime=<?php echo $row['idanime'];?>" class="stretched-link btn btn-primary">Ir a ver Anime</a>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                </div>
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