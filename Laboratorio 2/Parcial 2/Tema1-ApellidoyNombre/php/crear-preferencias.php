<?php 
    $ruta = '../';
    require_once '../html/header.html';
    require_once 'funciones.php';

    if (!empty($_POST['tipo'])) {
        $tipo = $_POST['tipo'];
        $tiempo = time() + 90*24*60*60;
        $nombre = 'Preferencia';
        setcookie($nombre,$tipo,$tiempo,'/');
        echo 'Exito al guardar la preferencia';
        header('refresh:3;url=mostrar-preferencia.php');
    }
    
    require_once '../html/footer.html';
?>