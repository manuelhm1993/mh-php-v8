<?php 

$a = 6;
$b = 5;
$message = "El valor de 'a' es menor que el valor de 'b'";

// Operador ternario
echo ($a < $b) 
? $message 
: (($a > $b) ? str_replace('menor', 'mayor' , $message) : str_replace('menor', 'igual' , $message));
