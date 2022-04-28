<?php


print date("d/m/Y",time());
print "<br>";

$t=time();
print $t; //Devuelve el momento actual medido como el número de segundos desde la Época Unix (1 de Enero de 1970 00:00:00 GMT).


$dt = new DateTime("2027-05-03 09:00:00", new DateTimeZone("Europe/Amsterdam"));
print_r($dt);
