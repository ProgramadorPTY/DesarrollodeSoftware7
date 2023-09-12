<?php
$precio1 = $_POST ['precio1'];
$precio2 = $_POST ['precio2'];
$precio3 = $_POST ['precio3'];
$media = ($precio1+$precio2+$precio3)/3;
echo "<br/> DATOS RECIBIDOS";
echo "<br/> precio producto establecimiento 1: ". $precio1. "dolares";
echo "<br/> precio producto establecimiento 1: ". $precio2. "dolares";
echo "<br/> precio producto establecimiento 1: ". $precio3. "dolares <br/>";
echo "<br/> precio producto establecimiento es de: ". $media. "dolares";

?>