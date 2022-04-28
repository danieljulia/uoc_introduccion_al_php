<?php 


function suma_enteros(int $a=10, int $b=10) {
    return $a + $b;

}

echo suma_enteros(4,4); //devuelve 8
echo "<br>";

echo suma_enteros(); //devuelve 20
echo "<br>";

echo suma_enteros(5); //devuelve 15
echo "<br>";

echo suma_enteros("hola",22); //muestra error
echo "<br>";
  