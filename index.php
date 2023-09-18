<?php 
$a = 5;
$b = 10;

// Parámetros por referencia
function test(&$value) {
    $value += 10;
}

test($a);
test($b);

echo $a;
echo "<br>";
echo $b;
echo "<br>";
