<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laboratorio 2.5</title>
</head>
<body>
<?php
$figuras = array ('cuadrado','triangulo','circulo');
$figuras[1] = 'rectangulo';
mostrar_figuras($figuras,"asignacion de rectangulo");

array_push($figuras,'pentagono');
mostrar_figuras($figuras,"adicion de hexagono al inicio");

array_unshift($figuras, 'hexagono');
mostrar_figuras($figuras,"adicion del ultimo");

array_pop($figuras);
mostrar_figuras($figuras,"eliminacion del primero");

function mostrar_figuras($figuras, $mensaje){
echo "<br>Arreglo despues de $mensaje <br>";
foreach ($figuras as $figura){
    echo "$figura <br>";
}
}
?>
    
</body>
</html>