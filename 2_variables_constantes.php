<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables y constantes</title>
</head>
<body>
    <h1>Variables y constantes</h1>
    <!--Script pphp -->
    <?php
        /*1. La forma de representar las variables en php es anteponiendo el simbolo $ a la palabra que utilizaremos como varible*/

        /*2. Debemos prestar atencion a las mayusculas y minusculas, ya que PHP reconoce la diferencia entre las dos. $valor es diferente de $VALOR */

        /*3. ¡Para que se utilizan las variables? Gracias a ellas podremos realizar operaciones aritmeticas y operaciones con cadenas, etc */

        /*4. Las variables las utilizaremos como y cuando queramos en una misma pagina ya que no existe limitacion en cuanto a su uso */

        /*5. Hay que prestar atencion a no provocar errores por utilizar como valores palabras reservadas por el lenguaje  EJEMPLO: $os se genera un eror porque es una variable predefinida*/

        /*6. Tambien se debe evitar el error de empezar una variable por un numero,  Ejemplo:$35var es un error  */

        /*7. En php no es nesecario especificar el tipo de variable pero si dedbemos saber cuando utilizar las comillas a la hora de definirlas, ya que su uso indicaria que se esta hablando de una cadena, Ejemplo: $cuenta = 7, $nombre = 'nestor' */

        /*8. Podemos mostrar las variables de varias maneras: Una de ellas puede ser utilizando las opcion echo(); otra puede ser mediante las opcion print();   */

        $a = 5;
        $b = "7";
        echo "<b></h1>";
        echo($a)
        echo "<br>";
        echo($b);
        echo "</b></h1>";

        //Constante
        // La forma de definir uan constante es mediante la funcion define
        //Sintaxis: define("nombre_variable, "valor_variable") 

        define("capital_colombia","bogota");
        define("habitantes", 7000000);


    
    ?>

</body>
</html>