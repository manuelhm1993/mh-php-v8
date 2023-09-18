<?php 

$a = 5; // Ámbito global

function test() {
    // $a; // Ámbito local - La variable $a del ámbito global no existe en la función
    global $a; // Ámbito local - La variable $a es llamada del ámbito global y puede ser usada

    echo $a;
}

test();
