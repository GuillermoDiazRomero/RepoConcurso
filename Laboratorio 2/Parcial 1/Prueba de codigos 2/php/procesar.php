<?php
$ruta = '../';
include '../php/encabezado.php';


if (!empty($_POST['apel']) && !empty($_POST['fenac'])) {
    $nombre = $_POST['apel'];
    $nacimiento = $_POST['fenac'];
    echo '<h2 class="fw-light"> Su nombre es: ' . $nombre . '<br>Su fecha de nacimiento es: '
        . $nacimiento . '</h2>';
}

var_dump($_POST);
if (!empty($_POST['prenda']) && !empty($_POST['talle'])) {
    echo '<h2>Tipo de prenda:</h2>';
    foreach ($_POST['prenda'] as $prenda) {
        echo '<p>' . $prenda . '</p>';
    }
    echo '<p>Talle: ' . $_POST['talle'] . '</p>';

} else {
    echo '<p>Debe seleccionar al menos 1 prenda y su talle</p>';
}







?>