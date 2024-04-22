<?php
    $ruta = '../';
    require_once '../html/header.html';
    include 'funciones.php';
?>
<form action="crear-preferencias.php" method="post">
    <section>
        <label for="lbltipo">Tipo Chocolate</label>
        <select name="tipo" id="lbltipo">
            <option value="Agridulce">Agridulce</option>
            <option value="Oscuro">Oscuro</option>
            <option value="Dulce">Dulce</option>
        </select>
    </section>
    <input type="submit" value="Aceptar">
</form>

<?php
    require_once '../html/footer.html';
?>