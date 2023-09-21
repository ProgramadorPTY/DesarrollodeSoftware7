<?php
 if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $orden = $_POST['orden'];

    if($orden %2 !=0 ){
        echo "El valor de N debe ser un numero par. Por Favor, intentelo de nuevo.";
        exit;
    }

    echo "<h2>Matriz Identidad de orden $orden</h2>";
    echo "<table border='1'>";

    for ($i= 0; $i < $orden; $i++){
       echo "<tr>";
       for ($j = 0; $j < $orden; $j++){
        if ($i == $j){
            echo "<td>1</td>";
        } else {
            echo "<td>0</td>";
        }
       }
       echo "</td>";
    }
    echo "</table>";
 }
?>