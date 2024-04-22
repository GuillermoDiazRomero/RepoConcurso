<?php 
    $ruta = '../';
    require_once '../html/header.html';
    require_once 'funciones.php';
    $conexion = conectar();
    
    if($conexion){
        if(!empty($_GET['id'])){
            $id = $_GET['id'];
            $consulta = 'SELECT nombre
                        FROM bomboneria
                        WHERE id = ?';
            $sentencia = mysqli_prepare($conexion,$consulta);
            mysqli_stmt_bind_param($sentencia,'i',$id);
            mysqli_stmt_bind_result($sentencia,$nom);
            $q = mysqli_stmt_execute($sentencia);
            if($q){
                mysqli_stmt_fetch($sentencia);
                echo '<h1>Queres eliminar '.$nom.'?</h1>';
            }
            ?>
            <button><a href="eliminar_ok.php<?php echo'? id='.$id ?> ">Aceptar</a></button>
            <button><a href="../index.php">Cancelar</a></button>

<?php
        }
        desconectar($conexion);
    }
    
    require_once '../html/footer.html';
?>