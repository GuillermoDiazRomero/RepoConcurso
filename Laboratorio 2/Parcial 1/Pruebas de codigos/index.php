<?php //PHP = Personal Home Page ^ Php Hypertext Preprocessor
require_once('php/encabezado.php'); //Llamo los archivos php
$miVariable = 2323213; //Así declaro las variables, posiciones de memoria
const ANIO = 2023; //Así declaro constantes
echo 'Muestro mensajes y variables'; //Muestro mensajes por pantalla
echo '<h2>Tambien así con etiquetas</h2>'; //Muestro mensajes con etiquetas
echo '<p>Asi concateno' . $miVariable . '</p>'; //Concateno variables y etiquetas
echo '<p class="bg-success p-3">Aqui utilizo bootstrap </p>'; //Utilizo bootstrap
$tipo = gettype($miVariable); //Encuentro el tipo de la variable (entero, real o string)
$aleatorio = mt_rand(100, 1000); //Número randoms enteros, tambien puede ser mt_rand($inicio,$final);
//$aleatorio = settype($aleatorio,);        //Una forma de cambiar el tipo de la variable
$aleatorio = (float) $aleatorio; //Otra forma de cambiar el tipo de la variable

$num1 = mt_rand(1, 10);
$num2 = mt_rand(1, 10);
$cociente = $num1 / $num2; //Me quedo con el cociente con decimales
$cocienteEntero = intdiv($num1, $num2); //Me quedo con el cociente entero
$potencia = $num1 ** $num2;
echo '<p>El numero 1 es ' . $num1 . '    y el numero 2 es ' . $num2 . '   Su potencia es: ' . $potencia . '</p>';
echo '<p>Su cociente entero es: ' . $cocienteEntero . '</p><br><p>Y su cociente: ' . $cociente . '</p>';

echo ($num1 == 2) ? '<p>Si es 2</p>' : (($num1 > 2) ? '<p>Es mayor que 2</p>' : '<p>Es menor que 2</p>'); //Simplificación del if dentro de un if

echo ($num1 == 2) ? '<p>Si es 2</p>' : '<p>No es 2</p>'; //Simplificación de un if

const redon = 77777.51234567;
$redondeo = round(redon, 4); //Redondeo en decimales
echo '<h2>' . $redondeo . '</h2>';
$redondeo = ceil(redon); //Redondeo hacia arriba
echo '<h2>' . $redondeo . '</h2>';
$redondeo = floor(redon); //Redondeo hacia abajo
echo '<h2>' . $redondeo . '</h2>';



$letra = 'A'; //Defino un string
$ascii = ord($letra); //Obtengo su valor en ASCII
echo '<h2>' . $ascii . '</h2>';
$char = chr($ascii); //Uso el ASCII para obtener su Valor
echo '<h3>' . $char . '</h3><br>';

$letraRandomMayus = mt_rand(65, 90); //Mayúsculas
$letraRandomMinus = mt_rand(97, 122); //Minúsculas

echo '<h2>' . $letraRandomMayus . '</h2>';
$letraRandomMayus = chr($letraRandomMayus);
echo '<h2>' . $letraRandomMayus . '</h2>';

echo '<h2>' . $letraRandomMinus . '</h2>';
$letraRandomMinus = chr($letraRandomMinus);
echo '<h2>' . $letraRandomMinus . '</h2>';

?>

<!-- BOOTSTRAP -->
<section>
    <h1 class="text-secondary text-center fw-light">Aquí empieza Bootstrap</h1>

    <nav class="navbar navbar-default">
        <ul class="nav navbar-nav">
            <li class="active btn"><a href="#" class="nav-link">Inicio</a></li>
            <li class="btn btn-outline-success col-md-3"><a href="#" class="nav-link">Inicio</a</li>
            <li class="btn btn-outline-danger col-md-5"><a href="#" class="nav-link">Inicio</a</li>
            <li class="btn btn-outline-secondary nav-item"><a href="#" class="nav-link">Inicio</a</li>
        </ul>
    </nav>

</section>

<section>
    <table class="table table-success">
        <?php
        $promedio =0;
        for ($i = 0; $i < 5; $i++) {
            echo '<tr>';
            for ($j = 0; $j < 2; $j++) {
                $nota = mt_rand(0, 10);
                echo ($j == 0)? ('<td>Nota ' . $i . '</td>'): ('<td>' . $nota . '</td>');
                $promedio = $promedio + $nota;
            }
            
            echo '</tr>';
        }
        echo '<tr>Su promedio es: '. ($promedio/5).'</tr>';




        ?>
    </table>
</section>







<?php
require_once('php/pie.php');
?>