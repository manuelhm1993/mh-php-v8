<?php 

for ($i = 0; $i < 20; $i++) {
    // Finalizar la ejecución del programa
    if(($i === 6) || ($i === 14)) {
        die();
    }

    echo ($i + 1) . "<br>";
}

echo "Esta línea no se ejecutará";
