<?php
 if($_SERVER['REQUEST_METHOD']== 'POST'){
    $numeros = $_POST['numeros'];

 $numerosPares = array_filter($numeros, function ($numero){
    return $numero % 2 == 0;
 });

  if (count ($numerosPares) == count($numeros)){
    echo "Los numeros ingresados pares son: " .implode(',',$numerosPares);
  } else {
     echo "Alguno de los numeros ingresados no es par. Por favor, intentalo de nuevo.";
  
  }
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 4.2</title>
</head>
<body>
    <h1>Formulario de Numeros Pares</h1>
    <form method="post">
    <?php
       $numeroElementos = 5;
       for ($i =0; $i <$numeroElementos; $i++){
        echo "<label for='numero{$i}'>Numero " .($i + 1) . "(par): </label>";
        echo "<input type='number' name='numeros[]' id='numeros{$i}' min='2' step='2' requiered><br>";

       }

    ?>
    <button type="submit">Enviar</button>
    </form>
</body>
</html>