<?php
   $miArreglo = array();

 for ($i = 0; $i < 20; $i++){

    $miArreglo[] = $i;
 }

 $elementoMayor = max($miArreglo);
 $posicion = array_search($elementoMayor, $miArreglo);

 echo "Arreglo llenado: <br/><br/>" ;
 print_r($miArreglo);

 echo "<br/><br/> El elemento mayor esta en la posicion $posicion y tiene el valor $elementoMayor.";
 
?>