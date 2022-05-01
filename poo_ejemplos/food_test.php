<?php 

include "food_library.php";
use \foodlibrary\Food as MyFood;

//$f=new \foodlibrary\Food("pera");
$f=new MyFood("pera");


print $f->nombre;