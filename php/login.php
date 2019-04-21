<?php
    session_start();
    if( isset($_POST['email']) and isset($_POST['pass'])){

        include('conexion.php');
        $usuario= mysqli_real_escape_string($mysqli,$_POST['email']);
        $pass= mysqli_real_escape_string($mysqli,$_POST['pass']);

        $query= 'SELECT idusuario, Email, usuarioNombre, UsuarioPass FROM usuario WHERE Email="'.$usuario.'"';

        $comprobacion= $mysqli->query($query);

        if(!$comprobacion){
            echo "usuario ql malo";
        }else{
            $query2='SELECT UsuarioPass FROM usuario WHERE Email="'.$usuario.'"';
            $resultado=mysqli_query($mysqli,$query2);
            $recogida=mysqli_fetch_assoc($resultado);
            $compropass= password_verify($pass, $recogida['UsuarioPass']);
            if(!$compropass){
                $_SESSION['nombre']=$usuario;
                header('Location: ../inicio/');
            }else{
                print 'los datos son incorrectos <br>
                <a href="../">volver al login </a>';
            }
        }

    }else{
        header('Location: ../');
    }
  ?>