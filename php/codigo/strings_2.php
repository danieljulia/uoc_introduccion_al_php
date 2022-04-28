<?php 

$texto=" Un Texto con espacio al principio y al final ";

print strlen($texto);
print "<br>";

$texto=trim($texto); //elimina espacios
$texto=strtolower($texto); //convierte a minúsculas 

print $texto;
print "<br>";
print strlen($texto);
