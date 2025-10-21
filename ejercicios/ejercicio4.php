<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Guía PHP - Ejercicios</title>
</head>
<body>
    <h1>Guía de PHP - Selección de Ejercicios</h1>
    <a href="../index.php">INICIO</a>

    <h3>Ejercicio 4: Programa más útil que "Hola Mundo"</h3>

    <?php
    $num = rand(1, 100);
    echo "El número generado entre (1-100): $num y es ";
    if ($num == 50) {
        echo "o igual a 50.<br>";
    } else if ($num < 50) {
        echo "menor a 50.<br>";
    } else {
        echo "mayor a 50.<br>";
    }
    ?>

</body>
</html>