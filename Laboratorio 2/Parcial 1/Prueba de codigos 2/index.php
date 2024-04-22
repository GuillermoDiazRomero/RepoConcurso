<?php 
$ruta = '';
require_once("php/encabezado.php"); //Para poder hacer andar Bootstrap en cada archivo php


//Array indexado (índice númerico)
echo '<h1>Toda la teoría relacionada con los Arrays';
#Formas de crear un array
$frutas = array('Banana', 'Frutilla', 'Manzana', 'Naranja', 'Pera');
$verduras = ['Tomate', 'Cebolla', 'Zanahoria', 'Ajo'];
$edades = [13, 20, 15, 18, 14, 21, 11, 12, 10, 19];

echo '<br><br>';

#Mostrar contenido
echo '<h2 class ="fw-light">Muestro el contenido mediante la posición:';
echo '<h3 class ="fw-light">' . $frutas[1] . '</h3>';
echo '<h3 class ="fw-light">' . $frutas[0] . '</h3>';
echo '<h3 class ="fw-light">' . $frutas[3] . '</h3>';

#Modifico el contenido
echo '<h2 class ="fw-light">Agrego contenido de forma manual al Array</h2>';
$frutas[1] = 'Uva';
echo '<h3 class ="fw-light">' . $frutas[1] . '</h3>';

echo '<br><br>';

#Muestro todas las componentes de un array
echo '<h2>Muestro todas las componentes de un array</h2>';
print_r($frutas);
echo '<br><br>';

#Muestro todas las componentes de un array y el tipo de dato
echo '<h2>Muestro todo de un array</h2>';
var_dump($frutas);
echo '<br><br>';


//Una palabra puede ser tratada como un array
echo '<h2>Una palabra puede ser tratada como un Array usando strlen($palabra)</h2>';
$palabra = 'Supercalifragilisticoespirindalidoso';
$longitud = strlen($palabra); #strlen cuenta la cantidad de letras que tiene una string
$cantidad = 0;

for ($i = 0; $i < $longitud; $i++) {
    if (
        $palabra[$i] == 'a' || $palabra[$i] == 'e'
        || $palabra[$i] == 'i' || $palabra[$i] == 'o'
        || $palabra[$i] == 'u'
    ) {
        $cantidad++;
    }
}

echo '<p class ="fw-light">La palabra <strong>' . $palabra . '</strong> tiene ' . $cantidad . ' de vocales y ' . $longitud . ' de letras<p>';
echo '<br><br>';


//Array Asociativo (claves alfanuméricas)
echo '<h2>Array Asociativo</h2>';
$materias = [
    'Calculo 1' => '6',
    'Algebra 1' => '3',
    'Fisica 1' => '7'
]; #Puedo guardar distintos tipos de datos
print_r($materias);

echo '<br><br>';
echo '<h2 class="fw-light">Agrego una clave con dato de forma manual</h2>';
$materias['Química'] = '9';
print_r($materias);

echo '<br><br>';

//Cuento la cantidad de datos contenidos en un array
echo '<h2>Cuento la cantidad de componentes que tiene un Array con la funcion count($array)';
echo '<h2 class="fw-light"> El arreglo materias tiene ' . count($materias) . ' componentes</h2>';
echo '<h2 class="fw-light"> El arreglo frutas tiene ' . count($frutas) . ' componentes</h2>';

echo '<br><br>';

//Reemplazo datos en un arreglo
echo '<h2 class="fw-light">Sobreescribo datos poniendolos en la misma clave</h2>';
$datos = ['nombre' => 'Yosoy', 'nombre' => 'nosoy'];
print_r($datos); #Es decir siempre el ultimo dato sobreescribe al anterior en el mismo espacio

echo '<br><br>';
echo '<br><br>';

//Arreglos tipo Matriz
echo '<h2>Arreglos como si fueran matrices</h2>';
$pais = [
    'Argentina' => [
        'Idioma' => 'Español',
        'Moneda' => 'Peso Argentino',
        'Huso Horario' => 'UTC-3'
    ],
    'Chile' => [
        'Idioma' => 'Español',
        'Moneda' => 'Peso Chileno',
        'Huso Horario' => 'UTC-3'
    ],
    'Brazil' => [
        'Idioma' => 'Portugues',
        'Moneda' => 'Real',
        'Huso Horario' => 'UTC-2'
    ]
];
#Muestro datos de un arreglo
echo '<h2 class="fw-light">Muestro los datos del Array Matriz</h2>';
echo '<p> Moneda de Argentina: ' . $pais['Argentina']['Moneda'] . '</p>';
print_r($pais);
echo '<br><br>';

//Array Constante
echo '<h2>Array definido como constante usando const ARRAY = []</h2>';
const DOCENTES = ['Profe1', 'Profe2', 'Profe3', 'Profe4'];
print_r(DOCENTES);
echo '<br><br>';


//Foreach Sirve para recorrer todas las componentes de un array sin definir un índice
#Para array indexado
echo '<h2>Uso foreach para encontrar las edades mayores y menores</h2>';
$mayor = 0;
$menor = 100;
foreach ($edades as $edad) { #La variable que esta despues de "as" es una variable donde se guarda el dato del elemento por el cual esta pasando el foreach
    if ($edad > $mayor) {
        $mayor = $edad;
    }
    if ($edad < $menor) {
        $menor = $edad;
    }
}
echo '<h2 class="fw-light"> Edad más alta: ' . $mayor . '<br>Edad más baja: ' . $menor . '</h2>';
echo '<br><br>';

#Para array asociativo
#Muestro la clave y el dato del arreglo
echo '<h2>Uso foreach para mostrar todo del arreglo</h2>';
foreach ($materias as $nombre => $nota) {
    echo '<h2 class="fw-light">En la materia: <strong class="bg-success">' . $nombre . '</strong> el estudiante sacó la nota: <strong class="bg-warning">' . $nota . '</strong></h2>';
}
echo '<br><br>';
//Funciones de predefinidas para Arrays
#Indexados
echo '<h2>Ordenados ascendentes y luego descendentes</h2>';
echo '<h3 class="fw-light">Array indexados</h3>';
sort($edades); #Ordena de forma ascendente
print_r($edades);
echo '<br><br>';
rsort($edades); #Ordena de forma descendente
print_r($edades);
echo '<br><br>';
echo '<br><br>';

#Asociado (Por Claves)
echo '<h2>Ordenados ascendentes y luego descendentes</h2>';
echo '<h3 class="fw-light">Array asociativos</h3>';
ksort($materias); #Ordena de forma ascendente
print_r($materias);
echo '<br><br>';
krsort($materias); #Ordena de forma descendente
print_r($materias);
echo '<br><br>';
echo '<br><br>';


#Desordena todo el Array
echo '<h2>Desordeno el Array</h2>';
echo '<h3 class="fw-light">Por datos</h3>';
shuffle($edades); #No funciona para datos por claves
print_r($edades);
echo '<br><br>';
echo '<h3 class="fw-light">Por claves</h3>';


echo '<br><br>';

//Funciones para arrays
#Verificar si es un arreglo
echo '<h2>Probando funciones para Arrays</h2>';
echo '<h2 class="fw-light">La función is_array verifica si es un arreglo  (1 true, false  " " ): ' . is_array($edades) . ' Y el otro es: ' . is_array($menor) . '</h2>';

echo '<br>';
#Verificar si la clave existe
echo '<h2 class="fw-light">La función array_key_exist nos dice si existe una clave (1 true, false " "): ' . array_key_exists('Argentina', $pais) . '</h2>';

echo '<h2 class="fw-light">La función in_array nos dice si existe un valor (1 true, false " ") (uso arreglo edades): ' . in_array(20, $edades) . in_array(30, $edades) . '</h2>';

echo '<br><br>';

#Busco datos en un arreglo (Retorna la clave o false)
echo '<h2 class="fw-light">La función array_search ($valor,$arreglo) busca un dato en un arreglo (retorna clave o posición, false " "): ' . array_search(9, $materias) . '</h2>';

echo '<br><br>';

#Obtener al azar la clave de una componente, 2 formas posibles:
$random1 = array_rand($materias); #Obtengo solamente una clave del arreglo
$random2 = [];
$random2 = array_rand($materias, 3); #Obtengo mas de una clave del arreglo sin repetir

echo '<h2>Obteniendo claves aleatorios de un Array</h2>';
echo '<h2 class="fw-light">1 solo dato: ' . $random1 . '</h2>';
echo '<h2 class="fw-light">Mas de 1 sola clave: ';
print_r($random2);
echo '</h2>';
echo '<br><br>';

//Ejemplo de Arreglos con numeros aleatorios (TELEKINO)
echo '<h2>Ejemplo de agergar numeros aleatorios a un arreglo sin que se repitan</h2>';
$sorteo = [];
for ($i = 0; $i < 4; $i++) {
    do {
        $numero = mt_rand(0, 30);
    } while (in_array($numero, $sorteo)); #Impide duplicados
    $sorteo[$i] = $numero;
}

print_r($sorteo);
echo '<br>';
sort($sorteo);
print_r($sorteo);


?>
<br><br><br><br><br><br>
<h1>Aquí comienza la parte de tablas con Bootstrap</h1>

<table class="table table-bordered table-hover text-center">
    <!-- table = "Formato de tabla" table-bordered = "Bordes de la tabla" y table-hover = "Responda con el mouse en el tbody"      -->
    <thead>
        <tr>
            <th>Titulo 1</th>
            <th>Titulo 2</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Dato11</td>
            <td>Dato12</td>
            <td>Dato13</td>
        </tr>
        <tr>
            <td>Dato21</td>
            <td>Dato22</td>
            <td>Dato23</td>
        </tr>
    </tbody>
</table>
<br><br>
<table class="table table-bordered table-hover table-striped"> <!-- table striped = "La tabla intecala colores"-->
    <thead class="table-dark"> <!-- Pongo colores a las filas de la tabla-->
        <tr>
            <th>Titulo 1</th>
            <th>Titulo 2</th>
            <th>Titulo 3</th>
        </tr>
    </thead>
    <tbody class="table-warning"> <!-- Agrega el color a todo el tbody-->
        <tr class="table-danger">
            <td>Dato11</td>
            <td>Dato12</td>
            <td>Dato13</td>
        </tr>
        <tr>
            <td>Dato21</td>
            <td>Dato22</td>
            <td>Dato23</td>
        </tr>
        <tr class="table-info">
            <td>Dato31</td>
            <td>Dato32</td>
            <td>Dato33</td>
        </tr>
        <tr class="text-center"> <!-- Centro el texto de la fila -->
            <td>Dato41</td>
            <td>Dato42</td>
            <td>Dato43</td>
        </tr>
        <tr>
            <td>Dato51</td>
            <td>Dato52</td>
            <td>Dato53</td>
        </tr>
        <tr>
            <td>Dato61</td>
            <td>Dato62</td>
            <td>Datos63</td>
        </tr>
    </tbody>
</table>

<h1>Aqui empieza Funciones</h1>

<?php
include('php/funciones.php'); //incluyo la función en mi código index.php
$aleatorio = mt_rand(1, 20);
echo '<h2 class="fw-light">Numero: ' . $aleatorio . '<br>Luego de usar la función: ' . probandoCosas($aleatorio) . '</h2>';
?>

<h1>Aqui empiezan los formularios</h1>

<article>
    <form action="php/procesar.php" method="post">
        <!--   En action pongo la dirección de a donde envío los datos y con method elijo GET(Aprecen los datos en la url) o POST(No aparecen los datos en la url) -->
        <legend>Ingrese datos</legend>
        <label for="ape">Apellido:
            <input type="text" name="apel" id="ape"> <!-- El name se convierte en la clave del Array-->
            <br>
            <label for="fecha">Fecha de Nacimiento:
                <input type="date" name="fenac" id="fecha">
            </label>
            <br>
            <input type="submit" value="Cargar">
            <input type="reset" value="Limpiar">
        </label>

    </form>
</article>


<h2>Arreglo Checkbox</h2>
<article>
    <form action="php/procesar.php" method="post">
        <fieldset>
            <legend>Talle</legend>
            <label for="txs">XS</label>
            <input type="radio" value="XS" name="talle" id="txs" required>
            <label for="ts">S</label>
            <input type="radio" value="S" name="talle" id="ts" required>
            <label for="tm">M</label>
            <input type="radio" value="M" name="talle" id="tm" required>
        </fieldset>
        <fieldset>
            <legend>Tipo de prenda</legend>
            <label for="cami">Camisa</label>
            <input type="checkbox" value="Camisa" name="prenda[]" id="cami" class="form-check-inline">
            <label for="reme">Remera</label>
            <input type="checkbox" value="Remera" name="prenda[]" id="reme" class="form-check-inline">
            <label for="saco">Saco</label>
            <input type="checkbox" value="Saco" name="prenda[]" id="saco" class="form-check-inline">
            <label for="camp">Campera</label>
            <input type="checkbox" value="Campera" name="prenda[]" id="camp" class="form-check-inline">
        </fieldset>
        <input type="submit" value="Comprar">
    </form>
</article>


<?php require_once("php/pie.php");?>