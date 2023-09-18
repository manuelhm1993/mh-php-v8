<?php 

$array = [1, 2, 3];

// Desempaquetar un array en variables
//[$a, $b, $c] = [...$array]; // Destructory
list($a, $b, $c) = $array;

echo $a;
echo "<br>";
echo $b;
echo "<br>";
echo $c;
echo "<br>";
