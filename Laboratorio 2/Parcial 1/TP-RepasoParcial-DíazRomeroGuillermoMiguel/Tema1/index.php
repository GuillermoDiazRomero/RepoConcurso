<?php
    $ruta = '';
    include 'php/header.php';
?>

    <h1 class="mt-5">Formulario de Sugerencias de Películas</h1>
    <form action="php/procesar.php" method="get" class="w-25">
        <section>
            <label for="nombre">Tu Nombre:</label>
            <input type="text" id="nombre" name="nombre" class="form-control" required>
        </section>
        <br>
        <section>
            <label for="cantidad">Cantidad de Sugerencias:</label>
            <input type="number" id="cantidad" name="cantidad" class="form-control" required>
        </section>
        <br>
        <button type="submit" class="btn btn-primary">Obtener Sugerencias</button>
    </form>

<?php
    include 'php/footer.php';
?>

