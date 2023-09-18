<?php 
$a = 5;

$test = function () use ($a) {
    echo $a;
}; 

$test();
