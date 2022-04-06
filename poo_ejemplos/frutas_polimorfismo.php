<?php

/**
Ejemplo simple de polimorfismo en PHP
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

     function get_nombre(){
        return $this->nombre;
     }

}

/** Fruta deriva de Vegetal */
class Fruta extends Vegetal{

  function morder() {
    $this->peso=$this->peso/2;
  }

   function get_nombre() {
    return "Fruta:".$this->nombre;
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

$vegetales=[
    new Fruta("manzana"),
    new Fruta("naranja"),
    new Verdura("acelga")
];

print_r($vegetales); //muestro el array

print "\r\n";


foreach($vegetales as $vegetal){

    print "Nombre: ".$vegetal->get_nombre();
    print "\r\n";
}

