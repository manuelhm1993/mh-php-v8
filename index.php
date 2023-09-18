<?php 

$a = 5; // Ámbito global

function test() {
    $a = 4; // Ámbito local

    echo $a;
}

test();
