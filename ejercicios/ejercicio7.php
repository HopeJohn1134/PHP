<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Guía PHP - Ejercicios</title>
</head>
<body>
    <h1>Guía de PHP - Selección de Ejercicios</h1>
    <a href="../index.php">INICIO</a>

    <h3>Ejercicio 7 - Estructura condicional (if)</h3>

    <?php
    $num = rand() % 3 + 1;

    echo "El numero generado es: ";
    switch ($num) {
        case 1:
            echo "uno";
            break;
        case 2:
            echo "dos";
            break;
        case 3:
            echo "tres";
            break;
    }
    echo "<br>";
    ?>

</body>
</html>