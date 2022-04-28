<?php 

$a = 1; /* global scope */ 

function test()
{   
    /* si especificamos que es global funcionará correctamente */
   // global $a;  
   
    echo $a; /* dará un error */
} 

test();


