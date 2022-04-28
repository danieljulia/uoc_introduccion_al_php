<?php

$array1=[2,4,6,8,10,12,14];


foreach($array1 as $value){
    print "$value";
    print "<br>";
}

$array2=["texto",24,true];


$array2[]=27;

foreach($array2 as $key=>$value){
    print "key:$key";
    print " value:$value";
    print "<br>";
}
