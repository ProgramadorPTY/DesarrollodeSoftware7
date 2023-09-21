<?php
  $n = $_POST ['factorial'];
  $factorial = 1;
  $sumFact = 0;

  for ($n; $n >0; $n--){
       $factorial *= $n;
  }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>
<body>
    <h1>Calculo Factorial</h1>
    <p>Tu numero Factorial es: <?php echo $factorial;?></p>
    
</body>
</html>