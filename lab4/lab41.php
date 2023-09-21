<?php
 $precios = $_POST['precios'];
 $image = "";

 if ($precios >= 80){
    $image = "colores/good.png";
 } else if ($precios >= 50 && $precios < 80){
    $image = "colores/regular.png";
 }else{
    $image = "colores/bad.png";
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicacion con Imagen Dinamica</title>
</head>
<body>
    <h1>Precios</h1>
    <p>Indicador de Precios: <?php echo $precios;?></p>
    <img src="<?php echo $image; ?>" alt="Colores">
    
</body>
</html>