<?php
$ruta = '../';
require_once 'header.php';
include('myFunctions.php');
if (!empty($_POST['correo']) && !empty($_POST['clave']) && !empty($_POST['plan'])) {
    $correo = $_POST['correo'];
    $clave = $_POST['clave'];
    $plan = $_POST['plan'];
    $costoPlan = calcularTarifa($plan);
    echo '<p class="fw-regular fs-3">El plan seleccionado es: <strong class="text-bg-primary fw-semibold px-2">' . strtoupper($plan) . '</strong></p>';
    echo '<p class="fw-regular fs-3">El costo final de su plan es: <strong class="text-bg-primary fw-semibold px-2">$' . number_format($costoPlan, 2, ',', '.') . '</strong></p>';
} else {
    echo '<h2 class="fw-light fs-3 py-3 my-3 text-center text-bg-danger">Ingrese todos los datos por favor</p>';
}
require_once('footer.php');
?>

