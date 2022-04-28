<?php

$jsonData = '{ "name": "John", "age": 22, "gender": "male" }';
$data = json_decode($jsonData);
print_r($data);

print "<br>";

$phpData=new stdClass();
$phpData->name="John";
$phpData->age=22;
print_r(json_encode($phpData));
