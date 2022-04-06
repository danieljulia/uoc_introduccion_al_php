<?php

/**
Ejemplo simple de herencia en PHP
*/


/** La clase "madre" */
class Vegetal {
    public $nombre;

    public function __construct($nombre){
      $this->nombre = $nombre;
    }
  
    public $peso;

    function set_peso($peso) {
        $this->peso = $peso;
    }

    function get_peso() {
     return $this->peso;
    }
}

/** Fruta deriva de Vegetal */
class Fruta extends Vegetal{

  function morder() {
    $this->peso=$this->peso/2;
  }

}

/** Verdura deriva de Vegetal */
class Verdura extends Vegetal{
    protected $temperatura=20;

    function morder() {
      $this->peso=$this->peso/4;
    }

    function cocer() {
        $this->temperatura=100;
    }

    function get_temperatura(){
        return $this->temperatura;
    }

  
}
  

/**
 * Algunas pruebas
 */

$manzana=new Fruta("manzana");
$naranja=new Fruta("naranja");
$acelga=new Verdura("acelga");
$acelga->cocer();

print "temperatura de la acelga: ".$acelga->get_temperatura();
print "\n"; //salto de linea

$manzana->set_peso(200);
$naranja->set_peso(250);
$manzana->morder();

print "peso de la manzana: ".$manzana->get_peso();
print "\n"; //salto de linea
