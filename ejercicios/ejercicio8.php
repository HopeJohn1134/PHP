<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Guía PHP - Ejercicios</title>
</head>
<body>
    <h1>Guía de PHP - Selección de Ejercicios</h1>
    <a href="../index.php">INICIO</a>

    <h3>Ejercicio 8 - Estructuras Repetitivas</h3>

    <?php
    echo "for:<br>";
    for ($i = 2; $i <= 20; $i += 2) {
        echo "$i<br>";
    }
    echo "<br>while:<br>";
    $j = 2;
    while ($j <= 20) {
        echo "$j<br>";
        $j += 2;
    }

    echo "<br>do-while:<br>";
    $k = 2;
    do {
        echo "$k<br>";
        $k += 2;
    } while ($k <= 20);
    ?>

</body>
</html>