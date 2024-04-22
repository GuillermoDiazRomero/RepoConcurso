<?php
    function prcSugerirPelicula($cantidad) {
        include("info.php");
        if ($cantidad > count($peliculas)){
            echo '<p class="fw-semibold fs-3 py-3 my-3 text-bg-danger text-center">La cantidad ingresada es mayor al número de sugerencias disponibles.</p>';
        }
        else{
            for($i=0 ; $i<$cantidad ; $i++){
                $clavePelicula  = array_rand($peliculas);
                $imagenPelicula = $peliculas[$clavePelicula];
                echo '<figure><img src="../img/'.$imagenPelicula.'" alt="Imagen de '.$clavePelicula.'"><figcaption>'.$clavePelicula.'</figcaption></figure>';
                unset($peliculas[$clavePelicula]);
            }
        }
    }
?>
