<?php 
    $ruta = '../';
    require_once '../html/header.html';
    require_once 'funciones.php';
    $conexion = conectar();
    if (!empty($_GET['id'])){
        if($conexion){
            $id = $_GET['id'];
            $consulta = 'DELETE FROM bomboneria
                        WHERE id = ?';
            $sentencia = mysqli_prepare($conexion,$consulta);
            mysqli_stmt_bind_param($sentencia,'i',$id);
            $q = mysqli_stmt_execute($sentencia);
            if($q){
                echo '<h1>Eliminacion exitosa</h1>';
            }
            else{
                echo '<h1>Error al eliminar</h1>';
            }
            desconectar($conexion);
        }
        else{
        echo 'sajdkhsad';

        }
    }
    else{
        echo 'sajdkhsad';
    }
    header('refresh:3;url=../index.php');
    require_once '../html/footer.html';
?>