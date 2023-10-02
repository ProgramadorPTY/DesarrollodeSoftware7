<?php
include ('class_lib.php');

@$diam = $_POST['diam'];
@$altu = $_POST['altu'];

$cil = new Cilindro($diam,$altu);

$volumen=$cil->cal_volumen();
$area=$cil->calc_area();

echo "<br/> El volumen de cilindro es de ". $volumen . "metros cubicos";
echo "<br/> El area del cilindro es de ". $area . "metros cuadrados";
?>