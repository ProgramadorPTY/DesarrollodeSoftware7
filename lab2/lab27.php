<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 2.7</title>
</head>
<body>
    <?php
     $posicion = "arriba";

     switch ($posicion){
      case "arriba": //bloque
       echo "La variable contiene";
       echo "el valor arriba";
       break;
     case "abajo": //Bloque 2
        echo "La variable contiene";
        echo "el valor abajo";
        break;
    default: //bloque 3
        echo "La variable contiene otro valor";
        echo "distinto de arriba y abajo";
     }
    ?>
    
</body>
</html>