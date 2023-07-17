<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>

</head>
<body>
   <h1>Operadores</h1>
   <?php
   //Los operadores aritmeticos son símbolos que se utilizan para realizar operaciones matemáticas básicas,como la suma, la resta, la multiplicación, la división*/
    // resta
    $a = 16;
    $b = 6;
    $c = $a - $b;
    echo "La resta de $a y $b es: $c <br>";

    ?>
    

<?php
   //Los operadores de comparación en programación con PHP son símbolos que se utilizan para comparar dos valores y devolver un resultado booleano (verdadero o falso). Algunos de los operadores de comparación más comunes son:

    //Igualdad: ==
    //Desigualdad: !=
    //Mayor que: >
    //Menor que: <
    //Mayor o igual que: >=
    //Menor o igual que: <=

    $a = 15;
    $b = 5 + 5;

    if ($a == $b) {
    echo "Los valores son iguales";
    } else {
    echo "Los valores son diferentes";
}
?>

<?php
   //los operadores lógicos se utilizan para combinar varias expresiones y evaluar si una o varias condiciones se cumplen.
    $a = 1;
    $b = 5;

    if ($a < 0 && $b < 10) {
    echo "Ambas expresiones son verdaderas";
    } else {
    echo "Al menos una de las expresiones es falsa";
}
?>


<?php
//Operadores de union de cades

?>

</body>
</html>