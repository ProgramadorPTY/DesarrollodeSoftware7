<?php

class cliente{
  var $nombre;
  var $numero;
  var $peliculas_alquiladas;

  function __construct($nombre,$numero){
    $this->nombre=$nombre;
    $this->numero=$numero;
    $this->peliculas_alquiladas=array();
  }

  function _destruct(){
    echo "<br>destruido: " .$this->nombre;
  }

  function dame_numero(){
    return $this->numero;
  }

  }

  //instancias un par de objetos cliente
  $cliente1 = new cliente ("Pepe",1);
  $cliente2 = new cliente ("Roberto", 564);

  echo "<br> El identificador del cliente 1 es: " .$cliente1->dame_numero();
  echo "<br> EL identificador del cliente 2 es: " .$cliente2->dame_numero();

?>