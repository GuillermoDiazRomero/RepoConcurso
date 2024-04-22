<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulación de Asientos de Cine</title>
    <!-- Agrega el enlace al archivo CSS de Bootstrap -->
    <link rel="stylesheet" href="../bootstrap-5.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <section class="container">
        <header>
            <h1 class="mt-2">Simulación de Asientos de Cine</h1>
        </header>
        
        <?php
        const filas= 12;
        const columnas = 14;
        $ocupados = 0;
        $vacios = 0;
        $asientos = array(array());
        for ($i=0 ; $i<filas ; $i++){
            for ($j=0 ; $j<columnas ; $j++){
                $asientos[$i][$j] = mt_rand(0, 1);
                if ($asientos[$i][$j]==0)
                    $vacios++;
                else{
                    $ocupados++;
                }
            }
        }

        // Mostrar el total de lugares vacíos
        echo '<p>Total de lugares vacíos: '.$vacios.'</p>';

        echo '<p class="p-1 bg-dark text-white w-50">PANTALLA</p>';

        // Mostrar la matriz en forma de tabla con colores
        echo '<table class="table table-bordered">';
        echo '<tbody>';

        // Recorro las filas de la matriz
        for ($i=0 ; $i<filas ; $i++){ 
            echo '<tr>';
            for ($j=0 ; $j<columnas ; $j++){
                if ($asientos[$i][$j]==0){
                    echo '<td class="table-primary"><img src="../img/azul.png" alt="Asiento vacío"></td>';
                }
                else{
                    echo '<td class="table-danger"><img src="../img/rojo.png" alt="Asiento ocupado"></td>';
                }
            }
            echo '</tr>';
        }
        echo '</tbody></table>';
        ?>
   
    </section>
</body>
</html>
