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
    //Suma: +
    //resta:-
    //multiplicacion:*
    //division:/
    //modulo:%
    //incremento: ++
    //decremento: --
    
    $x = 9;
    echo  ("x = ".$x."<br>");
    $y = 3;
    echo  ("y = ".$x."<br>");
    $z = 5;
    echo  ("z = ".$x."<br>");

    $suma = $x + $y;
    echo ("suma = ".$suma."<br>");
    $resta = $x - $z;
    echo  ("resta = ".$resta."<br>");
    $multiplicacion = $suma * $resta;
    echo  ("multiplicacion = ".$multiplicacion."<br>");
    $final = $multiplicacion++;
    echo  ("final = ".$final."<br>");
    


   //Los operadores de comparación en programación con PHP son símbolos que se utilizan para comparar dos valores y devolver un resultado booleano (verdadero o falso). Algunos de los operadores de comparación más comunes son

    //Igualdad: ==
    //Desigualdad: !=
    //Mayor que: >
    //Menor que: <
    //Mayor o igual que: >=
    //Menor o igual que: <=
   
    
    $x = 4;
    $y = 5;
    echo ($x == $y);
    echo ($x <= $y);





   //los operadores lógicos se utilizan para combinar varias expresiones y evaluar si una o varias condiciones se cumplen.
    
   // AND o &&: $a && $b es True si $a y $b son verdaderas 
   // OR o ||: $a || $b es True si $a es verdadero o $b es verdadero.
   // XOR 
   // |: es True si $a es false

    $x = 4;
    $y = 5;

    if(($x==4) && ($y==5))
    {
    print("Estas en lo correcto");
    }
    echo "<br>";
    if(($x==4) OR ($y==3))
    {
    print("La segunda operacion tambien es correcta");
    }



//Operadores de union (concatenacion) de cadenas
    // Para la union de cadenas se emplea el punto (.)
   
    
    
    $t = "ejemplo";
    $w = 'union';
    $x = "de";
    $y = "cadenas";
    $z = ' ';
    $resultado1 = $t;
    $resultado2 = $t.$z.$x.$z.$w.$z.$x.$z.$y;
    echo '<b><h1>';
    echo $resultado1;
    echo'<hr>';
    echo $resultado2;
    echo'<b><h1>';


    ?>

</body>
</html>