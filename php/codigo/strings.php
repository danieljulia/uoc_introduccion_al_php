<?php 

$texto="Esto es un \"texto\" ";

echo $texto;
echo "<br>";
print $texto;
echo "<br>";

$n = 7;

echo "Estás en la posición {$n}";  //interpolamos la variable dentro del texto
echo "<br>";

echo 'Estás en la posición {$n}'; //con comillas simples no funciona
echo "<br>";
