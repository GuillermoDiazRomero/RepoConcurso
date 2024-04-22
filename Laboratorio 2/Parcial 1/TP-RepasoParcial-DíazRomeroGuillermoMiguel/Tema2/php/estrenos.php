<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrenos</title>
    <!-- Agrega el enlace al archivo CSS de Bootstrap -->
    <link rel="stylesheet" href="../bootstrap-5.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <section class="container bg-info">
        <header>
            <h1 class="mt-2">Estrenos</h1>
        </header>
        <?php
            const peliculas = 5;
            $vistas = array();
            $maxVistas = 0;
            $peliculaMasVista = 0;
            for($i=0 ; $i<peliculas ; $i++){
                $vistas[$i] = mt_rand(0,99);
                if ($vistas[$i] > $maxVistas){
                    $maxVistas = $vistas[$i];
                    $peliculaMasVista = $i;
                }
            }
            echo '<p class="fw-regular fs-3 ">La pelicula <strong class="fw-bold">'.$peliculaMasVista.'</strong> se visualizó <strong class="fw-bold">'.$maxVistas.'</strong> veces</p>'
        ?>
    </section>
</body>
</html>
