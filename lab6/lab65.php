<?php

class ClaseBase {
 public function test(){
  echo "ClaseBase::test() llamada\n";
 }
 final public function masTests(){
  echo "ClaseBase::masTest() llamada\n";
 } 
 }
 
 class Clasehijo extends ClaseBase{
    public function masTests() {
    echo "ClaseHijo::masTest() llamada\n";
    }
 }
?>