<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Guía PHP - Ejercicios</title>
</head>
<body>
    <h1>Guía de PHP - Selección de Ejercicios</h1>
    <a href="../index.php">INICIO</a>

    <h3>Ejercicio 5 - Tipos de variables</h3>

    <?php
    $entero = 42;
    $decimal = 3.14;
    $texto = "Hola, soy una cadena";
    $booleano = true;

    echo "Entero: $entero<br>";
    echo "Decimal: $decimal<br>";
    echo "Texto: $texto<br>";
    echo "Booleano: " . ($booleano ? 'true' : 'false') . "<br>";

    ?>

</body>
</html>