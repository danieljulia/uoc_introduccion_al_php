<?php

/**
Ejemplo simple de clase y objetos en php
*/


class Fruta {
  // Propiedades
  public $nombre;
  public $peso;

  public function __construct($nombre){
    $this->nombre = $nombre;
  }

  // Métodos
  function set_peso($peso) {
    $this->peso = $peso;
  }

  function get_peso() {
    return $this->peso;
  }

  function morder() {
    $this->peso=$this->peso/2;
  }

}


$manzana=new Fruta("manzana");
$naranja=new Fruta("naranja");

$manzana->set_peso(200);
$naranja->set_peso(250);
$manzana->morder();
print "peso de la manzana: ".$manzana->get_peso();
