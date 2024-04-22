<?php
        include 'funciones.php';
        $ruta = '../';
        include 'header.php';
        if (!empty($_GET['nombre']) && !empty($_GET['cantidad'])){
            $nombre   = $_GET['nombre'];
            $cantidad = $_GET['cantidad'];
            echo '<h2>Bienvenid@ ' .$nombre. ', tenemos estas sugerencias para ti:</h2>';
            echo '<article class="d-flex flex-wrap justify-content-center gap-3">';
            prcSugerirPelicula($cantidad);
            echo '</article>';
        }
        else{
            echo '<h2 class="fw-light">Ingrese su nombre y la cantidad de sugerencias por favor</h2>';
        }
        include '../php/footer.php';
?>
