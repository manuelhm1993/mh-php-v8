<?php 

for ($i = 0; $i < 20; $i++) {
    // Romper el bucle en caso de cumplirse la condición
    if($i === 10) {
        break;
    }

    echo ($i + 1) . "<br>";
}

echo "Saliste del bucle";
