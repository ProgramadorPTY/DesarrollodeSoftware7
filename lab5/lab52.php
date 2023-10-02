<?php
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['nomnbre_archivo_cliente'])){
    $nombreDirectorio = "archivos/";
    $nombreArchivo = $_FILES['nombre_archivo_cliente']['name'];
    $nombreCompleto = $nombreDirectorio . $nombreArchivo;
    
    $extension = pathinfo($nombreArchivo, PANTHINFO_EXTENSION);

    $extensionesValidas = array("jpg","jpeg","png","gif");

    if(in_array(strtolower($extension), $extensionesValidas)){
    
      if(is_file($nombreCompleto)){
        $idUnico = time();
        $nombreArchivo = $idUnico . "-" . $nombreArchivo;
        $nombreCompleto = $nombreDirectorio . $nombreArchivo;
        echo "Archivo repetido, se cambio el nombre a $nombreArchivo <br><br>";

      }

      if(move_uploaded_file($_FILES['nombre_archivo_cliente']['tmp_name'], $nombreCompleto)) {
        echo "El archivo se ha subido satisfactorimente al directorio $nombreDirectorio <br>";
      
      } else {
        echo "No se puede mover el archivo del directorio $nombreDirectorio <br>";
      }
    
    } else {
        echo "El archivo no es una imagen valida (jpg,jpeg,gif,png).";
        echo "<script>alert('El archivo no es una imagen valida (jpg,jpeg,gif,png).'); </script>";
     }
    } else {
      echo "No se ha subido archivo <br>";
    }

}
?>
