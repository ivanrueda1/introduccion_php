<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructuras de control</title>
</head>
<body>
<h1>Estructuras de control</h1>;

<?php
    // if:  la estructura de control "if" sirve para realizaruna acción determinada en función de una condición
    
    echo "<h1>Funcioń if</h1>";
    $edad = 25;
    if ($edad >= 18) {
    echo "Eres mayor de edad";
    } else {
    echo "Eres menor de edad";
}

    // if_else: La estructura de control "if-else" permite ejecutar diferentes bloques de código dependiendo de una condición.
    echo "<h1>Funcion if_else</h1>";

    $nota = 7;
if ($nota >= 9) {
    echo "Excelente";
} elseif ($nota >= 7) {
    echo "Aprobado";
} else {
    echo "Reprobado";
}



    //while: La funcion while permite ejecutar un bloque de código repetidamente mientras se cumpla una condición. 
    echo "<h1>Funcioń while</h1>";

    $i = 1;
    while ($i <= 5) {
        echo $i;
        $i++;
    }
    
    //do-while: La estructura de control "do-while" en PHP se utiliza para repetir un bloque de código al menos una vez y luego repetirlo mientras se cumpla una condición
    echo "<h1>Funcioń do-while</h1>";
    $i = 1;
    do {
        echo $i;
        $i++;
    } while ($i <= 5);
    
    // for: La función de la estructura de control "for" en PHP es permitir la ejecución de un bloque de código un número determinado de veces
    echo "<h1>Funcioń for</h1>";
    for ($i = 1; $i <= 5; $i++) {
        echo $i;
    }
    

    // requiere: se utiliza para incluir el contenido de un archivo en otro archivo PHP.
    echo "<h1>Funcioń requiere</h1>";
    require 'archivo.php';


    // include: Tiene la misma funcion que requiere,utiliza para incluir el contenido de un archivo en otro archivo PHP. 
    include 'archivo.php';



?>
</body>
</html>