<?php 
    $ruta = '';
    require_once 'html/header.html';
    require_once 'php/funciones.php';
    $conexion = conectar();
    if ($conexion) {
        $consulta = 'SELECT nombre, relleno, tipo_chocolate, fecha_vencimiento, foto, id
                     FROM bomboneria';
        $sentencia = mysqli_prepare($conexion,$consulta);
        $q = mysqli_stmt_execute($sentencia);
        mysqli_stmt_bind_result($sentencia,$nom,$rell,$tipcho,$fecven,$foto,$id);
        mysqli_stmt_store_result($sentencia);
        $cantfilas = mysqli_stmt_num_rows($sentencia);

        if ($q) {
            if($cantfilas > 0){
                echo '<table>
                        <thead>
                            <th>Nombre</th>
                            <th>Relleno</th>
                            <th>Tipo Chocolate</th>
                            <th>Fecha Venc</th>
                            <th>Foto</th>
                            <th>Eliminar</th>
                        </thead>
                        <tbody>';

                while (mysqli_stmt_fetch($sentencia)) {
                    echo '<tr>';
                    echo '<td>' . $nom . '</td>';
                    echo '<td>' . $rell . '</td>';
                    echo '<td>' . $tipcho . '</td>';
                    echo '<td>' . $fecven . '</td>';
                    echo '<td><img src="img/' . $foto . '"></td>';
                    echo '<td><a href="php/eliminar.php?id=' . $id . '">Eliminar</a></td>';
                    echo '</tr>';
                }

                echo '</tbody></table>';
        
            } else {
                echo '<p>La consulta no arrojó resultados</p>';
            }

            
        } else {
            echo '<p>No se pudo hacer la consulta</p>';
        }
        desconectar($conexion);
    } else {
        echo '<p>Error al conectar</p>';
    }
    require_once 'html/footer.html';
?>