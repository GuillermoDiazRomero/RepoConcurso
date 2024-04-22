<?php 
    $ruta = '';
    require_once 'php/header.php';
?>

    <h2>Formulario de Inscripción</h2>
    <form method="post" action="php/gestionar.php" class="col-4">
        <section class="form-group mt-2">
            <label for="lblCorreo" class="fw-bold">Correo Electrónico:</label>
            <input type="email" class="form-control border-primary" id="lblCorreo" name="correo" required>
        </section>
        <section class="form-group mt-2">
            <label for="lblClave" class="fw-bold">Clave:</label>
            <input type="password" class="form-control border-primary" id="lblClave" name="clave" required>
        </section>
        <section class="form-group mt-2">
            <label for="lblPlan" class="fw-bold">Plan:</label>
            <select class="form-control form-select border-primary" id="lblPlan" name="plan">
                <option value="basico">Básico</option>
                <option value="estandar">Estándar</option>
                <option value="premium">Premium</option>
            </select>
        </section>
        <input type="submit" class="btn btn-primary mt-2 border" value="Ver Costo">
    </form>

<?php
    require_once 'php/footer.php';
?>
