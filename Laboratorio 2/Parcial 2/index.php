<?php

    //SIEMPRE REALIZAR CONTROL DE TODO "if(!empty(...)){}"

    $arreglo = "1a ;2;3;4;5;6;7";
    //REALIZAR CONTROL DE LO QUE TRAIGO
    $separado = implode($arreglo,';'); #Separo en el arreglo todo lo que tenga ";"
    #separado se convierte en un arreglo indexado
    $separado[0] = trim($separado[0]); #Elimino los espacios de mas en el string

    header('refresh:3;url:php/redirecciono.php'); #Header me permite redireccionar las paginas con el tiempo en segundos que yo desee

/*Los archivos de texto se pueden
    Abrir  
    Escribir
    Leer    
    Cerrar
    Eliminar
*/
$ubicacionArchivo = 'txt/archivo.txt';
$archivo = fopen($ubicacionArchivo,'modo');


/*Modos:
'r' Solo Lectura (DESDE EL INICIO DEL ARCHIVO)
'r+' Lectura y escritura (DESDE EL INICIO DEL ARCHIVO)
'w' Apertura para escritura (DESDE EL INICIO DEL ARCHIVO Y SOBREESCROBE)
'W+' Apertura para lectura y escritura (DESDE EL INICIO DEL ARCHIVO Y SOBREESCRIBE)
'a' Apertura para escritura (DESDE EL FINAL DEL ARCHIVO)
'a+' Apertura para lectura y escritura (DESDE EL FINAL DEL ARCHIVO)
*/

//Funciones para los archivos
#Guardar Datos
$linea = implode($_POST,';'); #Creo una linea de texto con los datos que yo quiera separados por ";"
$archivo = fopen($ubicacion.'usuarios.txt','a');
fputs($archivo,$linea . PHP_EOL); #Agregar cosas en el archivo, PHP_EOL agrega una marca final

#Leer Datos
$archivo = fopen($ubicacion.'usuarios.txt','r');
    while (!feof($archivo)) {   //Comprueba si es el final del archivo
        $dato = fgets($archivo);    //Leo las lineas del archivo hasta marca final
        if($dato!=''){  //Pregunto si no esta vacia el dato de la linea
            #Realizo tareas
        }
    }

#Existencia de carpetas
$carpeta = '../txt/'; //Guardo la direccion de la carpeta
if(!file_exists($carpeta)){ //Pregunto si existe la carpeta
    mkdir($carpeta); //Creo la carpeta
}


//Mando variables entre paginas por el arreglo $_GET
header('refresh:3;url:php/redirecciono.php?variable='.$valor1.'& mando='.$valor2);

//En un formulario tengo que poner <form enctype="multipart/form-data"> para poder recibir archivos
#Al mandar los archivos tengo que hacer control de la siguiente forma
if(!empty($_FILES['nombrequelepuse']['size'])){ //Controlo si existe un tamaño
    var_dump($_FILES); //muestro todos los datos del arreglo
}

//Aceptar tipos de archivos
#<input type="file" name="foto" accept="image/*" id="fot">
#<input type="file" name="video" accept="video/*" id="vid">


//Una vez visto los datos del archivo subido tengo que guardarlos en el servidor
$origen = $_FILES['foto']['tmp_name'];
$destino = '../img/';
move_uploaded_file($origen,$destino);

#Borrar el archivo
unlink($ubicacionArchivo);


//Fecha y hora
date_default_timezone_set('America/Argentina/Tucuman'); #Establezco Zona Horaria
$fec = date('d-m-y');
$hor = date('H:i');
//Formato de la fecha que obtengo de variables
$fecha = date_create($separado[1]);
$fecha = date_format($fecha,'d/m/y');
$segundostotal = $strtotime($fecha);


//MYSQL
/*
Tipos de consultas:
    SELECT (para traer datos de la tabla con o sin WHERE)
    INSERT (Inserto)
    UPDATE 
    DELETE



    FROM (nombre de la tabla)
    SELECT * (traigo todo)



    SELECT camposquequiera
    FROM tabla
    WHERE campo1=? AND, campo2= ?


    INSERT INTO tabla (valor1,valor2)
    VALUES (?,?);

    mysqli_stmt_bind_param($varlo1,$valor2) Bindeo los valores de las variables con los signos de pregunta de la consulta
*/


//Consultas Traer datos de la tabla
$consulta = 'SELECT edad,apellido,nombre
             FROM alumnos
             WHERE edad = ? AND apellido = ?';
$sentencia = mysqli_prepare($conexion,$consulta);   #Preparo la consulta
mysqli_stmt_bind_param($sentencia,'is',$edad,$apel);    #'is' de int y string y bindeo las variables
$q = mysqli_stmt_execute($sentencia);               #ejecuto la sentencia
mysqli_stmt_bind_result($sentencia,$edad,$apel);    #guardo los valores de la tabla
if($q){
    while(mysqli_stmt_fetch($sentencia)){
        #escribo codigo
    }
}

//Consulta Borrar datos de la tabla
$consulta = 'DELETE FROM tabla
             WHERE id=?';


//Consulta actualizar















?>